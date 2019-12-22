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

public partial class feedback : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {     
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        qry = "insert into feedback_master(name,email,mobile_no,feedback,feedback_date) values ('" + txtname.Text + "','" + txtemail.Text + "','" + txtmobileno.Text + "','" + txtfeedback.Text + "','" + DateTime.Now.ToString() +"') ";
        dbcon.executeUpdateQry(qry);
        Response.Write("<script>alert('Feedback is Send')</script>");
    }
    protected void btnclear_Click(object sender, EventArgs e)
    {
        txtname.Text = "";
        txtemail.Text = "";
        txtmobileno.Text = "";
        txtfeedback.Text = "";
    }
}
