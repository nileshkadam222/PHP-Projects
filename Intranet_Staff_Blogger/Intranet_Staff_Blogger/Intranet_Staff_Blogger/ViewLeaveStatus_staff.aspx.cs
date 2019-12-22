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

public partial class ViewLeaveStatus_staff : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;

    protected void Page_Load(object sender, EventArgs e)
    {
        cmd.Connection = con;
        cmd.CommandText = "SELECT     LeaveDetails.reason, LeaveDetails.Description, LeaveDetails.No_of_Leaves, LeaveDetails.Fromdate, LeaveDetails.ToDate, LeaveDetails.Acc_reg FROM         LeaveDetails INNER JOIN UserDetails ON LeaveDetails.Appliedby = UserDetails.UserId WHERE     (UserDetails.Username ='" + Session["UserName"].ToString() + "')";
        cmd.CommandType = CommandType.Text;
        sda = new SqlDataAdapter(cmd);
        ds = new DataSet();
        sda.Fill(ds);

        GVLeaveStatus.DataSource = ds;
        GVLeaveStatus.DataBind();

    }
}
