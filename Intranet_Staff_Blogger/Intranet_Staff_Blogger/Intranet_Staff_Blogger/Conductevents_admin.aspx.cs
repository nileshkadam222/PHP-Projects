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
public partial class Conductevents_admin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();

    SqlDataAdapter sda, sda1;
    DataSet ds, ds1;
    protected void Page_Load(object sender, EventArgs e)
    {
     

        if (!IsPostBack)
        {

            sda1 = new SqlDataAdapter("select * from EventTypes", con);
            ds1 = new DataSet();
            sda1.Fill(ds1);

            ddlEventTypes.DataSource = ds1;
            ddlEventTypes.DataTextField = "EventType";
            ddlEventTypes.DataValueField = "EventTypeId";
            ddlEventTypes.DataBind();
            ddlEventTypes.Items.Insert(0, "Select");
        }

    }
    protected void CalDate_SelectionChanged(object sender, EventArgs e)
    {
        TxtEventDate.Text = CalDate.SelectedDate.ToShortDateString();
    }
    protected void Btnclear_Click(object sender, EventArgs e)
    {
        TxtDescription.Text = "";
        TxtEventDate.Text = "";
        TxtEventName.Text = "";
        TxtEventOrganizer.Text = "";
       // TxtEventTypeId.Text = "";
        TxtPlace.Text = "";
        TxtTimings.Text = "";
    }
    int eventtypeid=0;
    protected void BtnSubmit_Click(object sender, EventArgs e)
    {
        eventtypeid = Convert.ToInt32(ddlEventTypes.SelectedValue);
        con.Open();

        cmd.Connection = con;
        cmd.CommandText = "insert into events values(" + eventtypeid + ",'" + TxtEventName.Text + "','" + TxtEventDate.Text + "','" + TxtTimings.Text + "','" + TxtPlace.Text + "','" + TxtDescription.Text + "','" + TxtEventOrganizer.Text + "')";
        cmd.CommandType = CommandType.Text;

        int i = cmd.ExecuteNonQuery();
        if (i > 0)
        {
            lblStatus.Visible = true;
        }
        else
        {
            lblStatus.Visible = false;
        }
        con.Close();
    }
}
