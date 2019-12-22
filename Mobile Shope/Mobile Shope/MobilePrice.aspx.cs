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

public partial class MobilePrice : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["MobilePriceQuery"] == null)
        {
            Response.Redirect("Home.aspx");
        }
        if (!Page.IsPostBack)
        {
            FillCategory();
            qry = Session["MobilePriceQuery"].ToString();
            FillMobilePriceList();
        }
    }
    public void FillCategory()
    {
        string qry = "select * from category_master";
        DataSet ds1 = dbcon.getDataSet(qry);
        if (ds1.Tables[0].Rows.Count > 0)
        {
            ddl_brands.DataSource = ds1.Tables[0].DefaultView;
            ddl_brands.DataTextField = "category_name";
            ddl_brands.DataValueField = "category_id";
            ddl_brands.DataBind();
        }
        ddl_brands.Items.Insert(0, "--Select--");
        ddl_brands.SelectedIndex = 0;
    }
    public void FillMobilePriceList()
    {
        DataSet ds = dbcon.getDataSet(qry);
        rptid.DataSource = ds;
        rptid.DataBind();
    }
    protected string GetUserImage(string imagename)
    {
        if (System.IO.File.Exists(Application["IMAGE_DIR"].ToString() + System.IO.Path.GetFileName(imagename)))
        {
            return Application["IMAGE_URL"].ToString() + System.IO.Path.GetFileName(imagename);
        }
        else
        {
            return Application["IMAGE_URL"].ToString() + "No-thumbnail.jpg";
        }
    }
}
