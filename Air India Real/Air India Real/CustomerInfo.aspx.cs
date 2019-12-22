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

public partial class CustomerInfo : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        //cn.Open();
        if (!IsPostBack)
        {
            Label7 .Text =Session ["schid"].ToString ();
            lblSource.Text = Session["src"].ToString();
            lblDestination.Text = Session["dest"].ToString();
            lblBDate.Text = Session["bdate"].ToString();
            lblJDate.Text = Session["jdate"].ToString();
            lblNoOfSeats.Text = Session["seats"].ToString();
            lblTotalAmt.Text = Session["totamt"].ToString();
            txtName.Focus();
            cn.Open();
            cmd = new SqlCommand("Select Seat_No From Booking_Master Where Booking_Id = (Select Max(Booking_Id) From Booking_Master Where Sch_Id=" + int.Parse(Session["schid"].ToString()) + " And Journy_Date='" + Session["jdate"].ToString() + "')", cn);
            dr = cmd.ExecuteReader();
            string[] sno = null;
            int stno = 1;
            if (dr.HasRows == true)
            {
                dr.Read();
                if (dr[0].ToString() != "")
                    sno = dr[0].ToString().Split(',');
            }
            dr.Close();
            if (sno != null)
                stno = int.Parse(sno[sno.Length - 1]) + 1;
            string seatno = "";
            for (int i = 1; i <= int.Parse(lblNoOfSeats.Text); i++)
            {
                seatno = seatno + stno + ",";
                stno++;
            }
            seatno = seatno.Substring(0, seatno.Length - 1);
            lblSeatNo.Text = seatno;
            cn.Close();
        }

    }
    protected void btnPayment_Click(object sender, EventArgs e)
    {
        Session["name"] = txtName.Text;
        Session["addr"] = txtAddress.Text;
        Session["contno"] = txtContNo.Text;
        Session["seatno"] = lblSeatNo.Text;
        Response.Redirect("User Login.aspx");
    }
}
