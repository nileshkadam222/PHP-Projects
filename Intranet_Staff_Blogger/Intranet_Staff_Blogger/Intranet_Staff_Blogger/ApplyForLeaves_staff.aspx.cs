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
using IntranetStaffblogger_bal;

public partial class ApplyForLeaves_staff : System.Web.UI.Page
{
   
    IntranetStaffblogger_bal.UserDetails_BAL obj1 = new UserDetails_BAL();

    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Btnsend_Click(object sender, EventArgs e)
    {
        string errmsg = obj1.ApplyLeaves(TxtReason.Text, TxtDescription.Text, Session["UserName"].ToString(), Convert.ToDateTime(CalFromDate.SelectedDate.ToShortDateString()), Convert.ToDateTime(CalToDate.SelectedDate.ToShortDateString()),Convert.ToInt32(TxtNoOfLeaves.Text));
        if (errmsg == "yes")
            Lblerrmsg.Text = "Successfully Applied";
        else
            //Response.Write("Not added, Username already existed in this branch");
            Lblerrmsg.Text = "Not Applied";     
           

    }

    protected void CalFromDate_SelectionChanged(object sender, EventArgs e)
    {
        TxtFromDate.Text = CalFromDate.SelectedDate.ToShortDateString();
    }
    protected void TxtToDate_TextChanged(object sender, EventArgs e)
    {
       
    }
    protected void TxtFromDate_TextChanged(object sender, EventArgs e)
    {

    }
    protected void CalToDate_SelectionChanged(object sender, EventArgs e)
    {
        
       TxtToDate.Text = CalToDate.SelectedDate.ToShortDateString();
    }
    protected void Btnclear_Click(object sender, EventArgs e)
    {
        TxtDescription.Text = "";
        TxtFromDate.Text = "";
        TxtNoOfLeaves.Text = "";
        TxtReason.Text = "";
        TxtToDate.Text = "";
    }
}
