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

public partial class UserLogin_PrintTicket : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;
    protected void Page_Load(object sender, EventArgs e)
    {
        

        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        if (!IsPostBack)
        {
            if (Session["TId"] == null)
                Response.Redirect("Search.aspx");
            string tid = Session["TId"].ToString();
            lblSrc.Text = Session["src"].ToString();
            lblDest.Text = Session["dest"].ToString();
            lblFare.Text = Session["fare"].ToString();
            cn.Open();
            cmd = new SqlCommand("Select * From Booking_Master Where Booking_Id='" + tid + "'", cn);
            dr = cmd.ExecuteReader();
            dr.Read();
            lblTId.Text = Session["TId"].ToString();
            lblBDate.Text = dr["Booking_Date"].ToString();
            lblJDate.Text = dr["Journy_Date"].ToString();
            lblName.Text = dr["Cust_Name"].ToString();
            lblTotAmt.Text = dr["Total_Amount"].ToString();
            lblContNo.Text = dr["Cust_Contactno"].ToString();
            lblTotSeats.Text = dr["No_Of_Seats"].ToString();
            lblSeatNo.Text = dr["Seat_No"].ToString();

            dr.Close();
            cn.Close();

        }
    }
    protected void Page_Unload(object sender, EventArgs e)
    {
        cn.Open();
        //string username = Session["username1"].ToString();
        cmd = new SqlCommand(("Update User_Master set Status=0 where User_Name='raj@raj'"), cn);
        cmd.ExecuteNonQuery();
        cn.Close();
    }

}
