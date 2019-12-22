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

public partial class category : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
            Fillcity();
        }
        this.countMe();
        DataSet tmpDs = new DataSet();
        tmpDs.ReadXml(Server.MapPath("~/counter.xml"));
        lblCounter.Text = tmpDs.Tables[0].Rows[0]["hits"].ToString();
    }
    private void countMe()
    {
        DataSet tmpDs = new DataSet();
        tmpDs.ReadXml(Server.MapPath("~/counter.xml"));
        int hits = Int32.Parse(tmpDs.Tables[0].Rows[0]["hits"].ToString());
        hits += 1;
        tmpDs.Tables[0].Rows[0]["hits"] = hits.ToString();
        tmpDs.WriteXml(Server.MapPath("~/counter.xml"));
    }
        public void Fillcity()
    {
        string qry = "select * from branch_master";
        DataSet ds1 = dbcon.getDataSet(qry);
        if (ds1.Tables[0].Rows.Count > 0)
        {
            ddlcity.DataSource = ds1.Tables[0].DefaultView;
            ddlcity.DataTextField = "branch_city";
            ddlcity.DataValueField = "branch_id";
            ddlcity.DataBind();
        }
        ddlcity.Items.Insert(0, "--Select--");
        ddlcity.SelectedIndex = 0;
    }
        protected void btnok_Click(object sender, EventArgs e)
        {
            qry = "";
            qry = "select * from branch_master  Where branch_city='"+ ddlcity.SelectedItem +"'";
            Session["branchcity"]=qry;
            Response.Redirect("BranchDetail.aspx");
        }
}
