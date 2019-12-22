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

public partial class Feedback : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.sname = txtname.Text;
        obj.email = txtemail.Text;
        obj.comment = txtcomment.Text;
        if (mcqmethod.insert_feedback(obj) == true)
        {
            Response.Redirect("Default.aspx");
        }
        else
        {
            Response.Write(" Feedback Is Not Submit");
        }
    }
}
