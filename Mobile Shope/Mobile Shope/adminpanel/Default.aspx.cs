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

public partial class adminpanel_Login : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry = "";
    protected void Page_Load(object sender, EventArgs e)
    {
    }
    protected void btnlogin_Click(object sender, EventArgs e)
    {
        qry = "select * from admin_login where user_name='" + txtusername.Text + "' AND password='" + txtpasswrod.Text + "'";
        DataSet ds = dbcon.getDataSet(qry);
        if (ds.Tables[0].Rows.Count > 0)
        {
            Session["Admin_user"] = ds.Tables[0].Rows[0]["user_name"].ToString();
            Response.Redirect("Adminhome.aspx");
        }
        else
        {
            Response.Write("<script>alert('User Name and Password is Invalid')</script>");
        }
    }
}
