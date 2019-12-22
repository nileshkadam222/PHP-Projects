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
using System.Data.SqlClient;

public partial class Search : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr; 

    protected void Page_Load(object sender, EventArgs e)
    {

        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        if (!IsPostBack)
        {
            //CompareValidator2.ValueToCompare = DateTime.Now.ToShortDateString();
            cn.Open();
            cmd = new SqlCommand("SELECT DISTINCT City_Master.City_Name, Route_Master.Route_Source FROM Schedule_Master INNER JOIN Route_Master ON Schedule_Master.Sch_Id = Route_Master.Route_Id INNER JOIN City_Master ON Route_Master.Route_Source = City_Master.City_Id where Route_Master.Route_Status='Y' Order By City_Name ", cn);
            dr = cmd.ExecuteReader();
            ddlSource.Items.Add(new ListItem("--Select--", "0"));
            while (dr.Read())
                ddlSource.Items.Add(new ListItem(dr[0].ToString(), dr[1].ToString()));
            dr.Close();
            cn.Close();
            ddlDestination.Items.Add(new ListItem("--Select--", "0"));
            //txtDate.Text = DateTime.Now.AddDays(1).ToShortDateString();
        }
    }
    protected void ddlSource_SelectedIndexChanged(object sender, EventArgs e)
    {
        int scode = int.Parse(ddlSource.SelectedValue);
        cn.Open();
        cmd = new SqlCommand("SELECT Distinct City_Master.City_Name, Route_Master.Route_Destination FROM Schedule_Master INNER JOIN Route_Master ON Schedule_Master.Sch_Id = Route_Master.Route_Id INNER JOIN City_Master ON Route_Master.Route_Destination = City_Master.City_Id And Route_Master.Route_Source=" + scode + " where Route_Master.Route_Status='Y' Order By City_Name", cn);
        dr = cmd.ExecuteReader();
        ddlDestination.Items.Clear();
        ddlDestination.Items.Add(new ListItem("--Select--", "0"));
        while (dr.Read())
            ddlDestination.Items.Add(new ListItem(dr[0].ToString(), dr[1].ToString()));
        dr.Close();
        cn.Close();

    }
    protected void btnfind_Click(object sender, EventArgs e)
    {
        Session["src"] = ddlSource.SelectedItem.Text;
        Session["scode"] = ddlSource.SelectedValue;
        
        Session["dest"] = ddlDestination.SelectedItem.Text;
        Session["dcode"] = ddlDestination.SelectedValue;
        
        Session["jdate"] = txtDate.Text;
        Session["bdate"] = DateTime.Now.ToShortDateString();
        Session["seats"] = ddlSeats.SelectedValue;
        
        Response.Redirect("SearchDetail.aspx");
    }
}
