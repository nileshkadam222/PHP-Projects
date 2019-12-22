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

public partial class adminpanel_Managebranch : System.Web.UI.Page
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
            fillbranch();
        }
    }
    public void fillbranch()
    {
        qry = "";
        qry = "select * from branch_master";
        DataSet ds = dbcon.getDataSet(qry);
        rptid.DataSource = ds;
        rptid.DataBind();
    }
    protected void btndelete_Click(object sender, EventArgs e)
    {
        decimal Branch_id;
        qry = "";
        for (int i = 0; i < rptid.Items.Count; i++)
        {
            CheckBox chkBox = ((CheckBox)rptid.Items[i].FindControl("chkdelete"));
            Label hfcntid = ((Label)rptid.Items[i].FindControl("hfbranch_id"));
            Branch_id = Convert.ToDecimal(hfcntid.Text);
            if (chkBox.Checked)
            {
                qry = qry + "  Delete from branch_master Where branch_id ='" + Branch_id + "' ";
            }
        }
        if (!qry.Equals(""))
        {
            dbcon.executeUpdateQry(qry);
            Response.Redirect("Managebranch.aspx");
        }
        fillbranch();
    }
}
