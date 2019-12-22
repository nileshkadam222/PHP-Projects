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
public partial class View_Updates : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;
    protected void Page_Load(object sender, EventArgs e)
    {
        //sp_getUpdates

        cmd.Connection = con;
        cmd.CommandText = "sp_getUpdates";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@username", SqlDbType.VarChar, 50).Value = Session["UserName"].ToString();
        sda = new SqlDataAdapter(cmd);
        ds = new DataSet();
        sda.Fill(ds);

        GVviewupdates.DataSource = ds;
        GVviewupdates.DataBind();
    }
}
