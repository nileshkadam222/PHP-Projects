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

public partial class adminpanel_Editbranch : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    DataSet ds;
    static int branch_no= -1;
    string siteurl = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Admin_user"] == null)
        {
            Response.Redirect("Login.aspx");
        } 
         if (!Page.IsPostBack)
        {                
            if (Request.QueryString["branch_no"] != null)
            {
                branch_no = Convert.ToInt32(Request.QueryString["branch_no"]);
                fillbranch();
            }
        }
    }
    public void fillbranch()
    {
        qry = "";
        qry = " select * from branch_master Where branch_id ='" + branch_no + "'";
        ds = dbcon.getDataSet(qry);
        if (ds.Tables[0].Rows.Count > 0)
        {
            txtbranch_name.Text = ds.Tables[0].Rows[0]["branch_name"].ToString();
            txtbranch_contactno.Text = ds.Tables[0].Rows[0]["branch_contactno"].ToString();
            txtbranch_address.Text = ds.Tables[0].Rows[0]["branch_address"].ToString();
            txtbranch_city.Text = ds.Tables[0].Rows[0]["branch_city"].ToString();
        }
    }
   protected void  btnsubmit_Click(object sender, EventArgs e)
    {
        qry = " Update branch_master set";   
        qry = qry + " branch_name = '" + txtbranch_name.Text + "',";
        qry = qry + " branch_contactno = '" + txtbranch_contactno.Text + "',";
        qry = qry + " branch_address = '" + txtbranch_address.Text + "',";
        qry = qry + " branch_city = '" + txtbranch_city.Text + "'";
        qry = qry + " Where branch_id = '" + branch_no+ "'";
        dbcon.executeUpdateQry(qry);
        Response.Redirect(siteurl+"Managebranch.aspx");
    }
}

