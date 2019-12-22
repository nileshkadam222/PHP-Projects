using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Xml.Linq;
using System.Data.SqlClient;

public partial class User_Masterpage : System.Web.UI.MasterPage
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        cn.Open();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {

        string username = Session["username1"].ToString();
            cmd = new SqlCommand(("Update User_Master set Status=0 where User_Name='" + username + "'"), cn);
            cmd.ExecuteNonQuery();
            cn.Close();
        
    }
}
