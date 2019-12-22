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

public partial class Viewstaffmembers_admin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;
    protected void Page_Load(object sender, EventArgs e)
    {

        if (!IsPostBack)
        {
            // cmd = new SqlCommand();
            cmd.Connection = con;
            cmd.CommandText = "select * from Department";
            cmd.CommandType = CommandType.Text;
            sda = new SqlDataAdapter(cmd);
            ds = new DataSet();
            sda.Fill(ds);

            //binding  dropdownlist 
            DDLDepartment.DataSource = ds;
            DDLDepartment.DataTextField = "DeptName";
            DDLDepartment.DataValueField = "DeptId";
            DDLDepartment.DataBind();
            DDLDepartment.Items.Insert(0, "Select");

        }
        
    }
  
    protected void DDLDepartment_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (DDLDepartment.SelectedIndex != 0)
        {
            sda = new SqlDataAdapter("SELECT MobileNo, EmailId, Address, DOB, Lastname, Firstname, Username FROM         UserDetails WHERE     DeptId = " + Convert.ToInt32(DDLDepartment.SelectedValue), con);
            DataSet ds = new DataSet();
            sda.Fill(ds);
            GVStaffMembers.DataSource = ds;
            GVStaffMembers.DataBind();
        }
    }
}
