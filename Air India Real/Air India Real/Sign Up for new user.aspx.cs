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

public partial class Login : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    string status;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
      
    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtans.Text = "";
        txtconformpassword.Text = "";       
        txtpassword.Text = "";
        txtque.Text = "";
        txtuname.Text = "";
        txtuname.Focus();
    }
    protected void btncreateuser_Click(object sender, EventArgs e)
    {
        cn.Open();
        cmd = new SqlCommand("Select * From User_Master Where User_Name='" + txtuname .Text + "'", cn);
        dr = cmd.ExecuteReader();
        if (dr.HasRows == true)
        {
            dr.Close();
            
            cmd = new SqlCommand(("Update User_Master Set User_Quation='"+txtque .Text +"',User_Answer='"+txtans .Text +"',Status=0 where User_Name='"+txtuname .Text +"' and User_Password='"+txtpassword .Text +"'"),cn);
            cmd.ExecuteNonQuery();
            txtans.Text = "";
            txtconformpassword.Text = "";
            txtpassword.Text = "";
            txtque.Text = "";
            txtuname.Text = "";
            cn.Close();
            Response.Redirect("User Login.aspx");


           
        }
        else
        {
            dr.Close();
            lblDuplicate.Text = "User Name does not Exist.<br>Please contact administrator.";
            lblDuplicate.ForeColor = System.Drawing.Color.Red;
            txtans.Text = "";
            txtconformpassword.Text = "";
            txtpassword.Text = "";
            txtque.Text = "";
            txtuname.Text = "";
            txtuname.Focus();
            cn.Close();
        }


            
            
        
    }
}
