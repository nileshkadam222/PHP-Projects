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

public partial class adminpanel_editcategory : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    DataSet ds;
    string qry;
    static int category_no = -1;
    string siteurl = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
        if (!Page.IsPostBack)
        {
          if (Request.QueryString["category_no"] != null)
            {
                category_no = Convert.ToInt32(Request.QueryString["category_no"]);
                fillcategory();
            }
        }
    }
    public void fillcategory()
    {
        qry = "";
        qry = " select * from category_master Where category_id ='" + category_no + "'";
        ds = dbcon.getDataSet(qry);
        if (ds.Tables[0].Rows.Count > 0)
        {
            txtcategoryname.Text= ds.Tables[0].Rows[0]["category_name"].ToString();
            ddlstatus.SelectedValue= ds.Tables[0].Rows[0]["status"].ToString();
             txtrank.Text= ds.Tables[0].Rows[0]["rank"].ToString();
        }
    }
    protected void btnupdate_Click(object sender, EventArgs e)
    {
        qry = " Update category_master set";   
        qry = qry + " category_name = '" + txtcategoryname.Text + "',";
        qry = qry + " status = '" + ddlstatus.SelectedValue + "',";
        qry = qry + " rank = '" + txtrank.Text + "'";
        qry = qry + " Where category_id = '" + category_no + "'";
        dbcon.executeUpdateQry(qry);
        Response.Redirect(siteurl+"Managecategory.aspx");
    }
}
