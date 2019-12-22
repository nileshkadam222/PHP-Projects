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

public partial class Admin_NewCity : System.Web.UI.Page
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
            cmd = new SqlCommand("Select Max(City_Id) As Maxid From City_Master", cn);
            dr = cmd.ExecuteReader();
            dr.Read();
            int bid = 1;
            if (dr["Maxid"].ToString() != "")
                bid = int.Parse(dr["Maxid"].ToString()) + 1;
            dr.Close();
            cn.Close();
            txtCityid.Text = bid.ToString();
            txtCName.Focus();
        } 

    }
    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        int bid = int.Parse(txtCityid .Text);
        
        cn.Open();
        cmd = new SqlCommand("Select * From City_Master Where City_Name='" + txtCName .Text + "'", cn);
        dr = cmd.ExecuteReader();
        if (dr.HasRows == true)
        {
            dr.Close();
            cn.Close();
            lblDuplicate.Text = "City Name Already Exist";
            lblDuplicate.ForeColor = System.Drawing.Color.Red;
            txtCName.Text = "";
            txtAddress.Text = "";
            txtConPer.Text = "";
            txtPhoneNo.Text = "";
            txtCName.Focus();
        }
        else
        {
            dr.Close();
            cmd = new SqlCommand("Insert Into City_Master Values("+bid +",'"+txtCName .Text +"','"+txtAddress .Text +"','"+txtConPer .Text +"','"+txtPhoneNo .Text +"')", cn);
            cmd.ExecuteNonQuery();
            cn.Close();
            Response.Redirect("NewCity.aspx");
        }

    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtCName .Text = "";
        txtAddress .Text = "";
        txtConPer.Text = "";
        txtPhoneNo .Text = "";
        txtCName .Focus();
        lblDuplicate.Text = "";
    }
}
