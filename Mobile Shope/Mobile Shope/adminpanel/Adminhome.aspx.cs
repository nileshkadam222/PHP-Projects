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

public partial class adminpanel_adminhome : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
        if (!Page.IsPostBack)
        {
            GetDetail();
        }     
    }
    public void GetDetail()
    {
        qry = "";
        qry = "select count(category_id) from category_master";
        lblcountcompany.Text =Convert.ToString(dbcon.getdata(qry));
        qry = "select count(product_id) from product_master";
        lblcountmobile.Text = Convert.ToString(dbcon.getdata(qry));
        qry = "select count(branch_id) from branch_master";
        lblbranch.Text = Convert.ToString(dbcon.getdata(qry));
    }
}
