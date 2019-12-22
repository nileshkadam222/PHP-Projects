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

public partial class MobileCategory : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    DataSet ds;
    string qry;
    string mobile_cat;
    string siteurl = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
            if (Request.QueryString["mobile_cat"] != null)
            {
                mobile_cat = Request.QueryString["mobile_cat"];
                fillmobilecategory();
            }
        }
    }
         public void fillmobilecategory()
    {
        qry = "";
        qry = " select a.product_name,a.product_img,a.product_price,a.features,";
        qry = qry + "b.category_name as category_name from product_master a,category_master b where a.category_id=b.category_id AND " + mobile_cat + "=1";
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
