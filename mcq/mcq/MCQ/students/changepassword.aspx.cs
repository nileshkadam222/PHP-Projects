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

public partial class students_changepassword : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        Boolean res;
        res = mcqmethod.update_password(Convert.ToInt16(Session["sid"]),txtcpassword.Text,txtnpassword.Text );
        if (res == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Password Update Successfully.');", true);
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Try Again Pleas...');", true);
        }
    }
}
