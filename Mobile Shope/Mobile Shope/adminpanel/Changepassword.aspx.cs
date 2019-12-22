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
public partial class adminpanel_Changepassword : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
    }
    protected void btnsave_Click(object sender, EventArgs e)
    {
        qry = "select * from admin_login where user_name='" + txtusername.Text + "' AND password='" + txtoldpassword.Text+ "'";
        DataSet ds = dbcon.getDataSet(qry);
        if (ds.Tables[0].Rows.Count > 0) 
        {
            qry = "";
            qry = "update admin_login set user_name='"+txtusername.Text+"', password='"+txtnewpassword.Text+"'";
            dbcon.executeUpdateQry(qry);
            Response.Redirect("Adminhome.aspx");
        }
        else
        {
            Response.Write("<script>alert('User Name and Password is Wrong')</script>");
        }
   }
    protected void btnreset_Click(object sender, EventArgs e)
    {
        txtusername.Text = "";
        txtoldpassword.Text = "";
        txtnewpassword.Text = "";
        txtconfirmpassword.Text = "";
    }
}
