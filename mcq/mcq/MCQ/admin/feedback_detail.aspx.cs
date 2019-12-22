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

public partial class admin_feedback_detail : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
            datashow();
        }


    }

    public void datashow()
    {
        DataTable dt = new DataTable();

        dt = mcqmethod.feedbackshow();
        grdshow.DataSource = dt;
        grdshow.DataBind();
    }

    public void deletedata(object sender, EventArgs e)
    {
       ImageButton imgbtn = new ImageButton();
       imgbtn = (ImageButton)sender;
       
        mcqproperty obj=new mcqproperty();

       obj.id =Convert.ToInt32( imgbtn.CommandArgument);
       if (mcqmethod.deleteFeedbackMaster(obj) == true)
       {
           ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('delete Successfully.');", true);
           datashow();
       }
       else
       {
           ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Deleted Successfully.');", true);
           //Console.Write("Try Again");
       }

       
    }
}
