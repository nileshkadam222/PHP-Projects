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

public partial class ViewEvents_staff : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    SqlCommand cmd1 = new SqlCommand();
    SqlDataAdapter sda;
    DataSet ds = new DataSet();
    int status;
    protected void Page_Load(object sender, EventArgs e)
    {
        
            if (!IsPostBack)
            {
                // cmd = new SqlCommand();
                cmd.Connection = con;
                cmd.CommandText = "select * from Eventtypes";
                cmd.CommandType = CommandType.Text;
                sda = new SqlDataAdapter(cmd);

                sda.Fill(ds);

                //binding  dropdownlist 
                DDLEventtype.DataSource = ds;
                DDLEventtype.DataTextField = "EventType";
                DDLEventtype.DataValueField = "EventtypeId";
                DDLEventtype.DataBind();
                DDLEventtype.Items.Insert(0,"Select");
           
            }
            
    }
    protected void Btnsuggestions_Click(object sender, EventArgs e)
    {

        con.Open();
        cmd1.CommandText = "sp_InsertSuggestion";
        cmd1.CommandType = CommandType.StoredProcedure;
        cmd1.Connection = con;
        cmd1.Parameters.Add("@eventid", SqlDbType.Int, 50).Value =Convert.ToInt32(txtEventId.Text);
        cmd1.Parameters.Add("@username", SqlDbType.VarChar, 50).Value = Session["UserName"].ToString();
        cmd1.Parameters.Add("@sugesstion", SqlDbType.VarChar, 300).Value = Session["UserName"].ToString();

        int status = cmd1.ExecuteNonQuery();

        if (status > 0)
        {
            lblErrorMessage.Text = "insert successfully";
        }
        else
        {
            lblErrorMessage.Text = "not inserted";
        }
        con.Close();
    }

    protected void DDLEventtype_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (DDLEventtype.SelectedIndex != 0)
        {
            cmd.Connection = con;
            con.Open();
            cmd.CommandText = "SELECT     Events.EventId,Events.EventName, Events.EventDate, Events.Timings, Events.Place, Events.Description, Events.EventOrganizer FROM         Events INNER JOIN Eventtypes ON Events.EventtypeId = Eventtypes.EventtypeId WHERE     Events.EventtypeId =" + Convert.ToInt32(DDLEventtype.SelectedValue);

            cmd.CommandType = CommandType.Text;
            sda = new SqlDataAdapter(cmd);

            ds = new DataSet();
            sda.Fill(ds);

            GVEventtype.DataSource = ds;
            GVEventtype.DataBind();
        }
    }
    protected void Btnclear_Click(object sender, EventArgs e)
    {
        txtEventId.Text = "";
        Txtsuggestions.Text = "";

    }
}
