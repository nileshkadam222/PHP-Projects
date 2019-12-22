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

public partial class login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.email = txtemail.Text;
        obj.password = txtpassword.Text;
        DataTable dt = new DataTable();
        dt=mcqmethod.checklogin(obj);
        if ( dt.Rows.Count > 0)
        {
            Session["user"] = txtemail.Text;
            Session["sid"] = Convert.ToInt16(dt.Rows[0]["sid"]);
           
            ////mcqmethod.logindetail(Convert.ToInt32(Session["sid"]));
            if (Convert.ToBoolean( dt.Rows[0]["admin_status"]) == true)
            {
                Response.Redirect("admin/Default.aspx");
            }
            else
            {
                
                Response.Redirect("students/Default.aspx");
            }
            //mcqmethod.insert_Login(Convert.ToInt32(Session["sid"]));
        }
        else
        {
            lblerror.Text = "Invalide UserName OR Password";
        }
    }
}
