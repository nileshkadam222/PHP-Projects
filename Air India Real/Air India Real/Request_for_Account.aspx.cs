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

public partial class Request_for_Account : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    string status;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        if (!IsPostBack)
        {
            cn.Open();
            cmd = new SqlCommand("Select Max(Req_Id) As Maxid From Request_Master", cn);
            dr = cmd.ExecuteReader();
            dr.Read();
            int bid = 1;
            if (dr["Maxid"].ToString() != "")
                bid = int.Parse(dr["Maxid"].ToString()) + 1;
            dr.Close();
            cn.Close();
            txtrequestid .Text = bid.ToString();
            txtfirstname.Focus();
        } 


    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtaddress.Text = "";
        txtcity.Text = "";
        txtcountry.Text = "";
        txtemail.Text = "";
        txtfirstname.Text = "";
        txtlastname.Text = "";
        txtphone.Text = "";
        txtstate.Text = "";
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        int bid = int.Parse(txtrequestid .Text);

        cn.Open();
        cmd = new SqlCommand("Insert Into Request_Master Values("+bid +",'"+txtfirstname .Text +"','"+txtlastname .Text +"','"+txtaddress .Text +"','"+txtcity .Text +"','"+txtstate .Text +"','"+txtcountry .Text +"','"+txtphone .Text +"','"+txtemail .Text +"','Y')", cn);
        cmd.ExecuteNonQuery();
        cn.Close();

        txtaddress.Text = "";
        txtcity.Text = "";
        txtcountry.Text = "";
        txtemail.Text = "";
        txtfirstname.Text = "";
        txtlastname.Text = "";
        txtphone.Text = "";
        txtstate.Text = "";
        Panel1.Visible = false;
        Panel2.Visible = true;
        

    }
}
