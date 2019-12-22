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

public partial class Updates_hod : System.Web.UI.Page
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

        GVUpdates.DataSource = ds;
        GVUpdates.DataBind();

    }
    protected void Btnupdate_Click(object sender, EventArgs e)
    {
        // insert into updatedetails

        con.Open();

        cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_InsertHODUpdates";
        cmd.CommandType = CommandType.StoredProcedure;


        cmd.Parameters.Add("@updatename", SqlDbType.VarChar, 50).Value = Txtupdatename.Text;
        cmd.Parameters.Add("@UpdateDescription", SqlDbType.VarChar, 50).Value =TxtUpdateDescription.Text;
        cmd.Parameters.Add("@date", SqlDbType.DateTime, 50).Value = Convert.ToDateTime(Txtdate.Text);
        cmd.Parameters.Add("@username", SqlDbType.VarChar, 50).Value = Session["UserName"].ToString();
        
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

        //insert into updatedetails
    }
    protected void Calendar1_SelectionChanged(object sender, EventArgs e)
    {
        Txtdate.Text = Calendar1.SelectedDate.ToShortDateString();
    }
}
