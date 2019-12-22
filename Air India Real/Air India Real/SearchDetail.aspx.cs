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

public partial class SearchDetail : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        
        if (!IsPostBack)
        {
            if (Session["src"] == null)
                Response.Redirect("Search.aspx");
            lblSource.Text = Session["src"].ToString();
            lblDestination.Text = Session["dest"].ToString();
            lblDate.Text = Session["bdate"].ToString();
        }

    }

    protected void GridView1_RowCommand(object sender, GridViewCommandEventArgs e)
    {
        string[] a = e.CommandArgument.ToString().Split('-');
       
        int schid = int.Parse(a[0]);
        int totseats = int.Parse(a[1]);
        int fare = int.Parse(a[2]);
       
        string jdate = Session["jdate"].ToString();
        int seats = int.Parse(Session["seats"].ToString());
        
        Session["schid"] = schid.ToString();
        Session["fare"] = fare.ToString();
        Session["totamt"] = fare * seats;
        
        cn.Open();
        cmd = new SqlCommand("Select Sum(No_Of_Seats) From Booking_Master Where Sch_Id=" + schid  + " And Journy_Date='" + jdate + "' ", cn);
        dr = cmd.ExecuteReader();
        dr.Read();
        int bseats = 0;
        if (dr[0].ToString() != "")
            bseats = int.Parse(dr[0].ToString());
        dr.Close();
        cn.Close();
        if (totseats > (bseats + seats))
        {
            Response.Redirect("CustomerInfo.aspx");
        }
        else
        {
            string myscript = "alert('Seat Not Available');";
            Page.ClientScript.RegisterStartupScript(Page.GetType(), "key", myscript, true);
        }

    }

    protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}
