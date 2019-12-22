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

public partial class Admin_AddUser : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
    }
    protected void btncreateuser_Click(object sender, EventArgs e)
    {
        cn.Open();
        cmd = new SqlCommand("Select * From User_Master Where User_Name='" + txtuname.Text + "'", cn);
        dr = cmd.ExecuteReader();
        if (dr.HasRows == true)
        {
            dr.Close();
            cn.Close();
            lblDuplicate.Text = "User Name Already Exist";
            lblDuplicate.ForeColor = System.Drawing.Color.Red;
            txtuname .Text = "";
            txtpassword .Text = "";
            txtemail .Text = "";
            txtbalance.Text = "";
            txtuname.Focus();
        }
        else
        {
            dr.Close();
            cmd = new SqlCommand("Insert Into User_Master(User_Name,User_Password,User_Email,User_Balance,Status) Values('" + txtuname .Text + "','" + txtpassword .Text + "','"+txtemail .Text +"',"+txtbalance .Text +",2)", cn);
            cmd.ExecuteNonQuery();
            cn.Close();
            txtuname.Text = "";
            txtpassword.Text = "";
            txtemail.Text = "";
            txtbalance.Text = "";
            txtuname.Focus();
        }
    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtbalance .Text = "";
        txtemail .Text = "";
        txtpassword .Text = "";
        txtuname .Text = "";
        txtuname.Text = "";
    }
}
