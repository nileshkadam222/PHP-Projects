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

public partial class BranchDetail : System.Web.UI.Page
{
    DBConnection dbcon=new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["branchcity"] == null)
        {
            Response.Redirect("Home.aspx");
            
        }
        if (!Page.IsPostBack)
        {
            qry = Session["branchcity"].ToString();
            GetBranchDetail();
        }
    }
        public void GetBranchDetail()
    {
        DataSet ds = dbcon.getDataSet(qry);
        rptbranchcity.DataSource = ds;
        rptbranchcity.DataBind();
    }
}

