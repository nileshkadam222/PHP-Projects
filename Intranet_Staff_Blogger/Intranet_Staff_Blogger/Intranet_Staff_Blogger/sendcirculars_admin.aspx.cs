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

public partial class sendcirculars_admin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    SqlDataAdapter sda;
    DataSet ds;
    int status;

    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            sda = new SqlDataAdapter("select * from CircularTypes", con);
            ds = new DataSet();
            sda.Fill(ds);

            DDLCircular.DataSource = ds;
            DDLCircular.DataTextField = "CircularType";
            DDLCircular.DataValueField = "CircularTypeId";
            DDLCircular.DataBind();
            DDLCircular.Items.Insert(0, "Select");


        }
    }
    protected void Btnsend_Click(object sender, EventArgs e)
    {
        con.Open();

        cmd.Connection = con;
        cmd.CommandText = "sp_sendcirculars";
        cmd.CommandType = CommandType.StoredProcedure;
     

        cmd.Parameters.Add("@circulartypeid", SqlDbType.Int).Value =Convert.ToInt32(DDLCircular.SelectedValue);
        cmd.Parameters.Add("@CircularDescription", SqlDbType.VarChar, 50).Value =TxtCircularDescription.Text;
        cmd.Parameters.Add("@Date", SqlDbType.DateTime, 50).Value =TxtDate.Text;
        cmd.Parameters.Add("@Timings", SqlDbType.VarChar, 50).Value =Txttimings.Text; 
        cmd.Parameters.Add("@Place", SqlDbType.VarChar, 50).Value =Txtplace.Text;
        cmd.Parameters.Add("@Duration", SqlDbType.VarChar, 50).Value =(Txtduration.Text);
        int status = cmd.ExecuteNonQuery();

        if (status > 0)
        {
            Lblerrmsg.Text = "insert successfully";
        }
        else
        {
            Lblerrmsg.Text = "not inserted";
        }
        con.Close();
       

    }
    
    protected void CalDate_SelectionChanged(object sender, EventArgs e)
    {
        TxtDate.Text = CalDate.SelectedDate.ToShortDateString();
    }
    protected void BtnClear_Click(object sender, EventArgs e)
    {
        TxtCircularDescription.Text = "";
        TxtDate.Text = "";
        Txtduration.Text = "";
        Txtplace.Text = "";
        Txttimings.Text = "";
       
    }
}
