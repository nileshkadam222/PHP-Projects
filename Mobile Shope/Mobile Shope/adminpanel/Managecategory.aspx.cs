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

public partial class adminpanel_Managecategory : System.Web.UI.Page
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
            fillCategory();   
        }
    }
    public void fillCategory()
    {
        qry = "";
        qry = "select * from category_master";
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
    protected void btndelete_Click(object sender, EventArgs e)
    {
        decimal Category_id;
        qry = "";
        for (int i = 0; i < rptid.Items.Count; i++)
        {
            CheckBox chkBox = ((CheckBox)rptid.Items[i].FindControl("chkdelete"));
            Label hfcntid = ((Label)rptid.Items[i].FindControl("hfcategory_id"));
            Category_id = Convert.ToDecimal(hfcntid.Text);
            if (chkBox.Checked)
            {
               qry = qry + "  Delete from category_master Where category_id ='" + Category_id + "' ";
            }
        }
        if (!qry.Equals(""))
        {
            dbcon.executeUpdateQry(qry);
            Response.Redirect("Managecategory.aspx");
        }
        fillCategory();
    }
}
