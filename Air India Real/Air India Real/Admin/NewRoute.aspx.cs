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

public partial class Admin_NewRoute : System.Web.UI.Page
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
            cmd = new SqlCommand("Select Max(Route_Id) As Maxid From Route_Master", cn);
            dr = cmd.ExecuteReader();
            dr.Read();
            int rid = 1;
            if (dr["Maxid"].ToString() != "")
                rid = int.Parse(dr["Maxid"].ToString()) + 1;
            dr.Close();
            cmd = new SqlCommand("Select * From City_Master Order By City_Name", cn);
            dr = cmd.ExecuteReader();
            ddlSource .Items.Clear();
            ddlSource .Items.Add(new ListItem("--Select--", "0"));
            ddlDest .Items.Clear();
            ddlDest .Items.Add(new ListItem("--Select--", "0"));
            while (dr.Read())
            {
                ddlSource .Items.Add(new ListItem(dr[1].ToString(), dr[0].ToString()));
                ddlDest .Items.Add(new ListItem(dr[1].ToString(), dr[0].ToString()));
            }
            dr.Close();
            cn.Close();
            txtRNo .Text = rid.ToString();
        }

    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        ddlSource .SelectedValue = "0";
        ddlDest .SelectedValue = "0";
        lblDuplicate.Text = "";
        
        txtKm.Text = "";
        ddlSource .Focus();
    }
    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        int rid = int.Parse(txtRNo.Text);
        int src = int.Parse(ddlSource.SelectedValue);
        int dest = int.Parse(ddlDest.SelectedValue);

        if (radrunnig.Checked == true)
        {
            status = "Y";
        }
        else if (radcancel.Checked == true)
        {
            status = "N";
        }
        //if (src == 0)
        //{
        //    lblDuplicate.Text = "Select Source Station.";
        //    lblDuplicate.ForeColor = System.Drawing.Color.Red;
        //}
        //else if (dest == 0)
        //{
        //    lblDuplicate.Text = "Select Destination Station.";
        //    lblDuplicate.ForeColor = System.Drawing.Color.Red;
        //}
        //else if (src == dest)
        //{
        //    lblDuplicate.Text = "Select Different Sourece <br>and Destination.";
        //    lblDuplicate.ForeColor = System.Drawing.Color.Red;
        //}
        //else
        {

            cn.Open();


            cmd = new SqlCommand("Select * From Route_Master Where Route_Source=" + src + " And Route_Destination=" + dest, cn);
            dr = cmd.ExecuteReader();
            if (dr.HasRows == true)
            {
                dr.Read();
                lblDuplicate.Text = "Route Already Exist [Route Id : " + dr[0].ToString() + " ]";
                lblDuplicate.ForeColor = System.Drawing.Color.Red;
                ddlSource .Focus();
                dr.Close();
                cn.Close();
            }
            else
            {
                dr.Close();
                //cmd = new SqlCommand("Insert Into Route_Master Values(" + rid + "," + src + "," + dest + ")", cn);
                cmd = new SqlCommand("Insert Into Route_Master Values("+rid +","+src +","+dest +",'"+status +"',"+int.Parse (txtKm .Text )+")", cn);
                cmd.ExecuteNonQuery();
                cn.Close();
                Response.Redirect("NewRoute.aspx");
            }

        }

    }
}
