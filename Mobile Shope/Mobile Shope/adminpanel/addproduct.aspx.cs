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

public partial class adminpanel_addproduct : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    string smart;
    string business;
    string fun;
    string lifestyle;
    string value;
    string tablets;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
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
            ddlcategory.DataSource = ds1.Tables[0].DefaultView;
            ddlcategory.DataTextField = "category_name";
            ddlcategory.DataValueField = "category_id";
            ddlcategory.DataBind();
        }
        ddlcategory.Items.Insert(0, "--Select--");
        ddlcategory.SelectedIndex = 0;
    }
    public string getRand()
    {
        string s = System.Guid.NewGuid().ToString().Replace("-", "").Substring(0, 5);
        return s;
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        if (chksmart_phone.Checked == true)
        {
            smart = "1";
        }
        else
        {
            smart = "0";
        }
        if (chkbusiness_phone.Checked == true)
        {
            business = "1";
        }
        else
        {
            business = "0";
        }
        if (chkfun_phone.Checked == true)
        {
           fun = "1";
        }
        else
        {
           fun  = "0";
        }
        if (chklifestyle_phone.Checked == true)
        {
            lifestyle = "1";
        }
        else
        {
           lifestyle  = "0";
        }
        if (chkvalue_phone.Checked == true)
        {
            value= "1";
        }
        else
        {
             value= "0";
        }
        if (chkteblets.Checked == true)
        {
            tablets = "1";
        }
        else
        {
            tablets = "0";
        }
         string imgExt = System.IO.Path.GetExtension(updimage.FileName);
         string imgno=getRand();
         string bannerimage = "";
         bannerimage = imgno + imgExt;
            if (bannerimage.ToLower().IndexOf(".jpg") > 0 || bannerimage.ToLower().IndexOf(".gif") > 0 || bannerimage.ToLower().IndexOf(".png") > 0)
            {
                updimage.PostedFile.SaveAs(Application["IMAGE_DIR"] + bannerimage);
            }
            qry = "insert into product_master(category_id,product_name,product_img,product_price,features,status,rank,smart_phone,business_phone,fun_phone,lifestyle_phone,value_phone,tablets)";
            qry = qry + "values('" + ddlcategory.SelectedValue + "','" + txtproductname.Text + "','" + bannerimage + "','" + txtproductprice.Text + "','" + txtfeatures.Text + "','" + ddlstatus.SelectedValue + "','" + txtrank.Text + "','" + smart + "','" + business + "','" + fun + "','" + lifestyle + "','" + value + "','" + tablets + "')";
            dbcon.executeUpdateQry(qry);
            Response.Write("<script>alert('Product is Submited')</script>");
             // Response.Redirect("Adminhome.aspx");
    }
    protected void btnclear_Click(object sender, EventArgs e)
    {
        txtproductname.Text = "";
        txtproductprice.Text = "";
        txtrank.Text = "";
    }
}
