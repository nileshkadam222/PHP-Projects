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

public partial class ViewAttendance_staff : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;
    protected void Page_Load(object sender, EventArgs e)
    {
        cmd.Connection = con;
        con.Open();
        cmd.Connection = con;
        cmd.CommandText = "SELECT     Attendance.TotalDays, Attendance.Leavesapplied, Attendance.daysattendance, Attendance.Availableleaves FROM         Attendance INNER JOIN UserDetails ON Attendance.UserId = UserDetails.UserId WHERE     (UserDetails.Username = '" + Session["UserName"].ToString() + "')";
        cmd.CommandType = CommandType.Text;
        sda = new SqlDataAdapter(cmd);
        ds = new DataSet();
        sda.Fill(ds);

        if (ds != null)
        {
            if (ds.Tables[0].Rows.Count > 0)
            {
                Txtworkingdays.Text = ds.Tables[0].Rows[0][0].ToString();
                Txtnoofleavesapplied.Text=ds.Tables[0].Rows[0][1].ToString();
                TxtNoofdaysattended.Text = ds.Tables[0].Rows[0][2].ToString();
                Txtnoofavailableleaves.Text = ds.Tables[0].Rows[0][3].ToString(); ;
            }
        }
    }
}
