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

public partial class adminpanel_Editproduct : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    DataSet ds;
    string qry;
    static int product_no = -1;
    string siteurl = "";
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
            if (Request.QueryString["product_no"] != null)
            {
                product_no = Convert.ToInt32(Request.QueryString["product_no"]);
                FillCategory();
                fillproduct();
            }
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
    public void fillproduct()
    {
        qry = "";
        qry = " select * from product_master Where product_id ='" + product_no + "'";
        ds = dbcon.getDataSet(qry);
        if (ds.Tables[0].Rows.Count > 0)
        {
            ddlcategory.SelectedValue = ds.Tables[0].Rows[0]["category_id"].ToString();
            txtproductname.Text = ds.Tables[0].Rows[0]["product_name"].ToString();
            txtproductprice.Text = ds.Tables[0].Rows[0]["product_price"].ToString();
            txtfeatures.Text = ds.Tables[0].Rows[0]["features"].ToString();
            ddlstatus.SelectedValue = ds.Tables[0].Rows[0]["status"].ToString();
            txtrank.Text = ds.Tables[0].Rows[0]["rank"].ToString();
            smart=ds.Tables[0].Rows[0]["smart_phone"].ToString();
            if (smart == "1")
            {
                chksmart_phone.Checked = true;
            }
           business= ds.Tables[0].Rows[0]["business_phone"].ToString();
            if (business == "1")
            {
                chkbusiness_phone.Checked = true;
            }
            fun= ds.Tables[0].Rows[0]["fun_phone"].ToString();
            if (fun == "1")
            {
                chkfun_phone.Checked = true;
            }
            lifestyle= ds.Tables[0].Rows[0]["lifestyle_phone"].ToString();
            if (lifestyle == "1")
            {
                chklifestyle_phone.Checked = true;
            }
            value= ds.Tables[0].Rows[0]["value_phone"].ToString();
            if (value== "1")
            {
                chkvalue_phone.Checked = true;
            }
            tablets= ds.Tables[0].Rows[0]["tablets"].ToString();
            if (tablets == "1")
            {
                chkteblets.Checked = true;
            }
        }
    }
    protected void btnupdate_Click(object sender, EventArgs e)
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
            fun = "0";
        }
        if (chklifestyle_phone.Checked == true)
        {
            lifestyle = "1";
        }
        else
        {
            lifestyle = "0";
        }
        if (chkvalue_phone.Checked == true)
        {
            value = "1";
        }
        else
        {
            value = "0";
        }
        if (chkteblets.Checked == true)
        {
            tablets = "1";
        }
        else
        {
            tablets = "0";
        }
        qry = "Update product_master  set";
        qry = qry + " category_id='" + ddlcategory.SelectedValue + "',";
        qry = qry + " product_name='" + txtproductname.Text + "',";
        qry = qry + " product_price='" + txtproductprice.Text + "',";
        qry = qry + " features='" + txtfeatures.Text + "',";
        qry = qry + " status='" + ddlstatus.SelectedValue + "',";
        qry = qry + " rank='" + txtrank.Text + "',";
        qry = qry + " smart_phone='" + smart + "',";
        qry = qry + " business_phone='" + business + "',";
        qry = qry + " fun_phone='" + fun + "',";
        qry = qry + " lifestyle_phone='" + lifestyle + "',";
        qry = qry + " value_phone='" + value + "',";
        qry = qry + " tablets ='" + tablets + "'";
        qry = qry + " Where product_id = '" + product_no + "'";
        dbcon.executeUpdateQry(qry);
        Response.Redirect(siteurl + "Manageproduct.aspx");
    }
}
