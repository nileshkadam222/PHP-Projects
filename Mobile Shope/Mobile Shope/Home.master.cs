using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Xml.Linq;

public partial class MasterPage : System.Web.UI.MasterPage
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
            FillCategory();
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
        protected void btnok_Click(object sender, EventArgs e)
        {
            int product = Convert.ToInt32(ddl_brands.SelectedValue);
            Session["category_id"] = product;
            Response.Redirect("ProductDetail.aspx");
        }
        protected void Button1_Click(object sender, EventArgs e)
        {
            if (rdbrs1000.Checked == true)
            {
                qry = "";
                qry = qry + "select * from product_master Where product_price between 1000 AND 5000";
            }
            if (rdbrs5000.Checked == true)
            {
                qry = "";
                qry = qry + "select * from product_master Where product_price between 5000 AND 10000";
            }
            if (rdbrs10000.Checked == true)
            {
                qry = "";
                qry = qry + "select * from product_master Where product_price between 10000 AND 15000";
            }
            if (rdbrs15000.Checked == true)
            {
                qry = "";
                qry = qry + "select * from product_master Where product_price between 15000 AND 20000";
            }
            if (rdbrs20000.Checked == true)
            {
                qry = "";
                qry = qry + "select * from product_master Where product_price between 20000 AND 50000";
            }
            Session["MobilePriceQuery"] = qry;
            Response.Redirect("MobilePrice.aspx");
    }       
}

