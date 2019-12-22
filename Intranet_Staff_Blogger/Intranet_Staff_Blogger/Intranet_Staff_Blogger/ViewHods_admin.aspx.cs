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
public partial class ViewHods_admin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    SqlDataAdapter sda;
    DataSet ds;
    protected void Page_Load(object sender, EventArgs e)
    {

        sda = new SqlDataAdapter("SELECT UserDetails.Firstname, UserDetails.Lastname, UserDetails.DOB, UserDetails.Address, UserDetails.EmailId, UserDetails.MobileNo, Department.DeptName FROM         UserDetails INNER JOIN Department ON UserDetails.DeptId = Department.DeptId WHERE     (UserDetails.UsertypeId = 2)", con);
        ds = new DataSet();
        sda.Fill(ds);
        GVHods.DataSource = ds;
        GVHods.DataBind();
    }
}
