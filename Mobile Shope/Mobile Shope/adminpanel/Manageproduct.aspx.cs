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

public partial class adminpanel_Manageproduct : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    static int cat_no = -1;
    static int count = 1;
    static int Rec_Per_Page = 3;
    static int Rec_Count;
    static int Page_Count=1;
    static int Total_Page;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        }
        if (!Page.IsPostBack)
        {
            if (Session["category_id"] != null)
            {
                cat_no = Convert.ToInt32(Session["category_id"]);
                GetRecoredCount();
                fillmobile();
            }
            fillProduct();
        }
    }
    public void GetRecoredCount()
    {
        qry = "";
        qry = " Select * from product_master";
        Rec_Count = Convert.ToInt16(dbcon.getRecordNumber(qry));
        Total_Page = Convert.ToInt16(Rec_Count / Rec_Per_Page);
        Page_Count = 1;
        if (Rec_Count > (Total_Page * Rec_Per_Page))
        {
            Total_Page = Total_Page + 1;
        }
        lblpage.Text = " Page " + Page_Count + " Of " + Total_Page;
        if (Total_Page < 2)
        {
            if (Total_Page == 0)
            {
                lblpage.Text = " No Record Found!!";
            }
            btnnext.Visible = false;
            btnpre.Visible = false;
        }
    }
    public void fillmobile()
    {
        int strec = 1;
        qry = "";
        qry = "select * from product_master";
        btnnext.Enabled = true;
        btnpre.Enabled = true;
        strec = (Page_Count - 1) * Rec_Per_Page;
        if (Page_Count == 1)
        {
            btnpre.Enabled = false;
            count = 0;
        }
        else
        {
            count = (Page_Count - 1) * Rec_Per_Page;
        }
        if (Page_Count == Total_Page)
        {
            btnnext.Enabled = false;
        }
        if (Page_Count == 0)
        {
           btnpre.Enabled = false;
            btnnext.Enabled = false;
        }
        DataSet ds = dbcon.getDataSetLimit(qry, strec, Rec_Per_Page);
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
    public void fillProduct()
    {
        qry = "";
        qry = "select * from product_master";
        DataSet ds = dbcon.getDataSet(qry);
        rptid.DataSource = ds;
        rptid.DataBind();
    }
    protected void btndelete_Click(object sender, EventArgs e)
    {
        decimal Product_id;
        qry = "";
        for (int i = 0; i < rptid.Items.Count; i++)
        {
            CheckBox chkBox = ((CheckBox)rptid.Items[i].FindControl("chkdelete"));
            Label hfcntid = ((Label)rptid.Items[i].FindControl("hfproduct_id"));
            Product_id = Convert.ToDecimal(hfcntid.Text);
            if (chkBox.Checked)
            {
                qry = qry + "Delete from product_master Where product_id ='" + Product_id + "' ";
            }
        }
        if (!qry.Equals(""))
        {
            dbcon.executeUpdateQry(qry);
            Response.Redirect("Manageproduct.aspx");
        }
        fillProduct();
    }   
    protected void btnpre_Click(object sender, EventArgs e)
    {
        Page_Count = Page_Count - 1;
        if (Page_Count < 1)
        {
            Page_Count = Page_Count + 1;
        }
        lblpage.Text = "Page " + Page_Count + " Of " + Total_Page;
        fillmobile();
    }
    protected void btnnext_Click(object sender, EventArgs e)
    {
        Page_Count = Page_Count + 1;
        if (Page_Count > Total_Page)
        {
            Page_Count = Page_Count - 1;
        }
        lblpage.Text = "Page " + Page_Count + " Of " + Total_Page;
        fillmobile();
    }
}
