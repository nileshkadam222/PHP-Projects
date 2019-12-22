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

public partial class UserLogin_Main_Payment : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;
    string cmdstr;
    string username, userbalance, user_ac_balance,final_balance;

    
    protected void Page_Load(object sender, EventArgs e)
    {
        //Session["totamt"]="1500";
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        cn.Open();
        if (!IsPostBack)
        {
            txtusername.Text = Session["username1"].ToString();
            txt_payment_to_bill .Text = Session["totamt"].ToString();
            txtcustomername .Text =Session["name"].ToString();
        }
        

        cmdstr = "select User_Name,User_Balance from User_Master where User_Name='"+txtusername .Text +"'";
        cmd = new SqlCommand(cmdstr, cn);
        dr  = cmd.ExecuteReader();

        while (dr.Read())
        {
            username  = dr.GetValue(0).ToString();
            userbalance  = dr.GetValue(1).ToString();
        }
        dr.Close();
        cn.Close();

        txtusername.Text = username;
        txt_balance_in_account.Text = userbalance;
    }
    protected void btnpayment_Click1(object sender, EventArgs e)
    {
        int total = int.Parse(txt_payment_to_bill .Text);
        cn.Open();

        cmdstr = "select User_Balance from User_Master where User_Name='"+txtusername .Text +"'";
        cmd = new SqlCommand(cmdstr, cn);
        dr = cmd.ExecuteReader();

        while (dr.Read())
        {
            user_ac_balance = dr.GetValue(0).ToString();    
        }
        dr.Close();

        if (total > int.Parse (user_ac_balance))
        {
            cn.Close();
            lblduplicate.Text = "Insufficient Amount";
            ///////////////////////////////////update Balance_status
            lblduplicate.ForeColor = System.Drawing.Color.Red;
            return;
        }
        else
        {
            final_balance =Convert .ToString ( int.Parse (user_ac_balance) - total);
        }

        cmd = new SqlCommand("Select Max(Booking_Id) As Maxid From Booking_Master", cn);
        dr = cmd.ExecuteReader();
        dr.Read();
        int bid = 1000;
        if (dr["Maxid"].ToString() != "")
            bid = int.Parse(dr["Maxid"].ToString()) + 1;
        dr.Close();
        
        
        dr.Close();
        string ticketid =  bid.ToString();
        string bdate = Session["bdate"].ToString();
        string jdate = Session["jdate"].ToString();
        string name = Session["name"].ToString();
        string addr = Session["addr"].ToString();
        string contno = Session["contno"].ToString();
        int rdid = int.Parse(Session["schid"].ToString());
        int totseats = int.Parse(Session["seats"].ToString());
        string seatno = Session["seatno"].ToString();
        string username1 = Session["username1"].ToString();

        cmd = new SqlCommand("Insert Into Booking_Master Values('" + ticketid + "','" + bdate + "','" + jdate + "','" + name + "','" + addr + "','" + contno + "'," + rdid + "," + totseats + ",'" + seatno + "'," + total + ",'Y','"+txtusername .Text +"')", cn);
        cmd.ExecuteNonQuery();
        
        cmd = new SqlCommand("Update User_Master Set User_Balance='" + final_balance + "'", cn);
        cmd.ExecuteNonQuery();

        cn.Close();

        int fare = int.Parse(Session["fare"].ToString());
        string src = Session["src"].ToString();
        string dest = Session["dest"].ToString();
        Session.Clear();
        Session["TId"] = ticketid;
        Session["src"] = src;
        Session["dest"] = dest;
        Session["fare"] = fare.ToString();
        Response.Redirect("Conform.aspx");
    }
}
