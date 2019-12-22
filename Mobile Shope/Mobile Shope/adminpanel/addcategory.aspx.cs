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
using System.Data.SqlClient;

public partial class adminpanel_addcategory : System.Web.UI.Page
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
        qry = "insert into category_master(category_name,status,rank) values('" + txtcategoryname.Text + "','" + ddlstatus.SelectedValue + "','" + txtrank.Text + "')";
        dbcon.executeUpdateQry(qry);
        Response.Write("<script>alert('Category is Submited')</script>");
        txtcategoryname.Text = "";
        ddlstatus.Text = "";
        txtrank.Text = "";
    }
    protected void btnclear_Click(object sender, EventArgs e)
    {
        txtcategoryname.Text = "";
        ddlstatus.Text = "";
        txtrank.Text = "";
    }
}
