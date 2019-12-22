using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Data.SqlClient;

public partial class Admin_NewFlight : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    string status;


    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        if (!IsPostBack)
        {
            cn.Open();
            cmd = new SqlCommand("Select Max(Flight_Id) As Maxid From Flight_Master", cn);
            dr = cmd.ExecuteReader();
            dr.Read();
            int bid = 1;
            if (dr["Maxid"].ToString() != "")
                bid = int.Parse(dr["Maxid"].ToString()) + 1;
            dr.Close();
            cn.Close();
            txtplaneid.Text = bid.ToString();
            txtplanename.Focus();
        }
    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtplanename.Text = "";
        txttotalseats.Text = "";
        txtplanename.Focus();
        radrunnig.Checked = true;
        lblDuplicate.Text = "";


    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        int bid = int.Parse(txtplaneid .Text);
        if (radrunnig.Checked == true)
        {
            status = "Y";
        }
        else if (radcancel.Checked == true)
        {
            status = "N";
        }

        cn.Open();
        cmd = new SqlCommand("Select * From Flight_Master Where Flight_Name='" + txtplanename .Text  + "'", cn);
        dr = cmd.ExecuteReader();
        if (dr.HasRows == true)
        {
            dr.Close();
            cn.Close();
            lblDuplicate.Text = "Plane Name Already Exist";
            lblDuplicate.ForeColor = System.Drawing.Color.Red;
            txtplanename.Text = "";
            txttotalseats.Text = "";
            txtplanename.Focus();
            
        }
        else
        {
            //lblDuplicate.Text = "";
            dr.Close();
            cmd = new SqlCommand("Insert Into Flight_Master Values(" + bid + ",'" + txtplanename .Text  + "'," +txttotalseats .Text + ",'" + status + "')", cn);
            cmd.ExecuteNonQuery();
            cn.Close();
            Response.Redirect("NewFlight.aspx");
        }
    }
}
