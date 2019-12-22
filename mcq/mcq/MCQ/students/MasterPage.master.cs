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

public partial class students_MasterPage : System.Web.UI.MasterPage
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
           Session["lid"]= 1+ mcqmethod.getmax();
            mcqmethod.insert_Login(Convert.ToInt32(Session["sid"]));
            lbluser.Text = Convert.ToString(Session["user"]);
        }
    }
    public void logoutdata()
    {
        mcqmethod.Update_logout(Convert.ToInt32(Session["lid"]));
        Session["user"] = "";
        Session["sid"] = "";
        
    }

    protected void imgout_Click(object sender, ImageClickEventArgs e)
    {
        logoutdata();
        Response.Redirect("../Default.aspx");
    }
}
