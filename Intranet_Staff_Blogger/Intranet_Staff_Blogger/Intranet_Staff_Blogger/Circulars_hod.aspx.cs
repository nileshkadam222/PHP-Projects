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

public partial class Circulars_hod : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();

    SqlDataAdapter sda, sda1;
    DataSet ds, ds1;
    protected void Page_Load(object sender, EventArgs e)
    {
        Lblerrmsg.Visible = false;
      
       
        if (!IsPostBack)
        {
      
            sda1 = new SqlDataAdapter("select * from CircularTypes", con);
            ds1 = new DataSet();
            sda1.Fill(ds1);

            DDLCirculartype.DataSource = ds1;
            DDLCirculartype.DataTextField = "CircularType";
            DDLCirculartype.DataValueField = "CircularTypeId";
            DDLCirculartype.DataBind();
            DDLCirculartype.Items.Insert(0, "Select");
        }
       
       

    }
    protected void DDLCirculartype_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (DDLCirculartype.SelectedIndex != 0)
        {
            cmd.Connection = con;
            con.Open();
            cmd.CommandText = "SELECT CircularDescription, [Date], Timings, Place, Duration FROM Circulars where CircularTypeId = " + Convert.ToInt32(DDLCirculartype.SelectedValue);
            cmd.CommandType = CommandType.Text;
            sda = new SqlDataAdapter(cmd);
            ds = new DataSet();
            sda.Fill(ds);
            GVCirculartype.DataSource = ds;
            GVCirculartype.DataBind();
            Butcir.Visible = true;
            
        }
       
    }




    protected void Btncircular_Click(object sender, EventArgs e)
    {

        con.Open();

        cmd.Connection = con;
        cmd.CommandText = "sp_sendcirculars";
        cmd.CommandType = CommandType.StoredProcedure;


        cmd.Parameters.Add("@circulartypeid", SqlDbType.Int).Value = Convert.ToInt32(DDLCirculartype.SelectedValue);
        cmd.Parameters.Add("@CircularDescription", SqlDbType.VarChar, 50).Value = TxtCircularDescription.Text;
        cmd.Parameters.Add("@Date", SqlDbType.DateTime, 50).Value = TxtDate.Text;
        cmd.Parameters.Add("@Timings", SqlDbType.VarChar, 50).Value = Txttimings.Text;
        cmd.Parameters.Add("@Place", SqlDbType.VarChar, 50).Value = Txtplace.Text;
        cmd.Parameters.Add("@Duration", SqlDbType.VarChar, 50).Value = (Txtduration.Text);
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
    protected void Butcir_Click(object sender, EventArgs e)
    {
        pancir.Visible = true;
    }
    protected void Btnclear_Click(object sender, EventArgs e)
    {
        TxtCircularDescription.Text = "";
        TxtDate.Text = "";
        Txtduration.Text = "";
        Txtplace.Text = "";
        Txttimings.Text = "";
    }

    protected void CalDate_SelectionChanged(object sender, EventArgs e)
    {
        TxtDate.Text = CalDate.SelectedDate.ToShortDateString();
    }
}
