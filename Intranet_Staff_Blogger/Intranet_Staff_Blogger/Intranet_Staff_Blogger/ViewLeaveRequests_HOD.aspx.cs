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

public partial class ViewLeaveRequests_HOD : System.Web.UI.Page
{

    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd;
    SqlCommand cmd1;
    DataSet ds;
    SqlDataAdapter sda;
    protected void Page_Load(object sender, EventArgs e)
    {

        binddata();


    }
    public void binddata()
    {

        //sp_getUpdates
        cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_viewleaverequest";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@username", SqlDbType.VarChar, 50).Value = Session["UserName"].ToString();
        sda = new SqlDataAdapter(cmd);
        ds = new DataSet();
        sda.Fill(ds);
        cmd.Dispose();

        GVLeaveRequests.DataSource = ds;
        GVLeaveRequests.DataBind();
    }
    protected void GVLeaveRequests_RowCommand(object sender, GridViewCommandEventArgs e)
    {
        cmd1 = new SqlCommand();
        if (e.CommandName == "Accept")
        {
            cmd1.CommandText = "update leavedetails set acc_reg=1 where leaveid="+Convert.ToInt32(e.CommandArgument);
            
        }
        else if (e.CommandName == "Reject")
        {
            cmd1.CommandText = "update leavedetails set acc_reg=2 where leaveid=" + Convert.ToInt32(e.CommandArgument);
            
        }
        try
        {
            con.Open();
            //cmd1 = new SqlCommand();
            cmd1.CommandType = CommandType.Text;
            cmd1.Connection = con;
            cmd1.ExecuteNonQuery();
            con.Close();
            cmd1.Dispose();
            binddata();

        }
        catch (Exception ex)
        { 
        
        }
    }
}
