using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Xml.Linq;

public partial class MasterPage : System.Web.UI.MasterPage
{
    protected void Page_Load(object sender, EventArgs e)
    {
        lbluser.Text = Convert.ToString(Session["user"]);
 
    }
    public void logoutdata()
    {
        mcqmethod.Update_logout(Convert.ToInt32(Session["sid"]));
        Session["user"] = "";
        Session["sid"] ="";
    }

    protected void imgout_Click(object sender, ImageClickEventArgs e)
    {
        logoutdata();
        Response.Redirect("../Default.aspx");
    }
}
