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

public partial class Registration : System.Web.UI.Page
{
    DBConnection dbcon = new DBConnection();
    string qry;
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        string gender;
        if (rdbmale.Checked == true)
        {
            gender = "male";
        }
        else
        {
            gender = "female";
        }
        qry = "insert into registration(first_name,last_name,address,mobile_no,e_mail,gender,state,city) values ('" + txtfname.Text + "','" + txtlname.Text + "','" + txtaddress.Text + "','"+txtmobileno.Text+"','" + txtemail.Text + "','" + gender + "','"+ txtstate.Text+"','"+txtcity.Text+"') ";
        dbcon.executeUpdateQry(qry);
        Response.Write("<script>alert('Registration is Success')</script>");
        txtfname.Text = "";
        txtlname.Text = "";
        txtaddress.Text = "";
        txtmobileno.Text = "";
        txtemail.Text = "";
        txtstate.Text = "";
        txtcity.Text = "";
    }
    protected void btnclear_Click(object sender, EventArgs e)
    {
        txtfname.Text = "";
        txtlname.Text = "";
        txtaddress.Text = "";
        txtmobileno.Text = "";
        txtemail.Text = "";
        txtstate.Text = "";
        txtcity.Text = "";

    }
}
