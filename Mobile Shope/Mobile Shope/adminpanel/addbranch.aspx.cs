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

public partial class adminpanel_addbranch : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        qry = "insert into branch_master(branch_name,branch_contactno,branch_address,branch_city) values('"+ txtbranch_name.Text +"','"+ txtbranch_contactno.Text +"','"+ txtbranch_address.Text +"','"+ txtbranch_city.Text +"')";
        dbcon.executeUpdateQry(qry);
        Response.Write("<script>alert('Branch Is Submeted')</script>");
        txtbranch_name.Text = "";
        txtbranch_contactno.Text = "";
        txtbranch_address.Text = "";
        txtbranch_city.Text = "";
    }
    protected void btnclear_Click(object sender, EventArgs e)
    {
        txtbranch_name.Text = "";
        txtbranch_contactno.Text = "";
        txtbranch_address.Text = "";
        txtbranch_city.Text = "";
    }
}
