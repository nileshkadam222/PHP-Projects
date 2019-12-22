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
using IntranetStaffblogger_bal;
public partial class viewstaffattendance_admin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;
    IntranetStaffblogger_bal.UserDetails_BAL obj1 = new UserDetails_BAL();

    protected void Page_Load(object sender, EventArgs e)
    {

        ds = new DataSet();
        ds = obj1.getdepartment();
        if (!IsPostBack)
        {
            if (ds != null)
            {
                if (ds.Tables[0].Rows.Count > 0)
                {
                    ddlDepts.DataSource = ds;
                    ddlDepts.DataTextField = "Deptname";
                    ddlDepts.DataValueField = "DeptId";
                    ddlDepts.DataBind();
                    ddlDepts.Items.Insert(0, "Select");
                }
            }
        }
    }
    protected void ddlDepts_SelectedIndexChanged(object sender, EventArgs e)
    {
       
string str="SELECT     UserDetails.Firstname, UserDetails.Lastname, UserDetails.EmailId, UserDetails.MobileNo, Department.DeptName, Usertypes.Usertype FROM         Attendance INNER JOIN UserDetails ON Attendance.UserId = UserDetails.UserId INNER JOIN Usertypes ON UserDetails.UsertypeId = Usertypes.UsertypeId INNER JOIN Department ON UserDetails.DeptId = Department.DeptId WHERE     Department.DeptId = Convert.ToInt32(ddlDepts.SelectedValue)";
     sda = new SqlDataAdapter( "SELECT     UserDetails.Firstname, UserDetails.Lastname, UserDetails.EmailId, UserDetails.MobileNo, Department.DeptName, Usertypes.Usertype FROM         Attendance INNER JOIN UserDetails ON Attendance.UserId = UserDetails.UserId INNER JOIN Usertypes ON UserDetails.UsertypeId = Usertypes.UsertypeId INNER JOIN Department ON UserDetails.DeptId = Department.DeptId WHERE     Department.DeptId = "+Convert.ToInt32(ddlDepts.SelectedValue),con);
        ds = new DataSet();
        sda.Fill(ds);

        if (ds != null)
        {
            if (ds.Tables[0].Rows.Count > 0)
            {
                lblStatus.Visible = false;
                GVStaffAttendance.Visible = true;
                GVStaffAttendance.DataSource = ds;
                GVStaffAttendance.DataBind();

            }
            else
            {
                GVStaffAttendance.Visible = false;
                lblStatus.Visible = true;
            }
        }
        else
        {
            GVStaffAttendance.Visible = false;
            lblStatus.Visible = true;
        }
    }
}
