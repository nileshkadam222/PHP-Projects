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

public partial class User_Login : System.Web.UI.Page
{
    int rowcounter = 0, status = 0;

    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dared;
    string cmdstr;
    int max, flag = 0;

    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        cn.Open();
        txtusername.Focus();
        lblduplicate.Text = "";
        hyprthis.Visible = false ;
        lblpage.Visible = false ;
    }
    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtpassword.Text = "";
        txtusername.Text = "";
        txtusername.Focus();
    }
    protected void btnlogin_Click(object sender, EventArgs e)
    {
        string username="", password;
        int status;

        cmdstr = "select User_Name,User_Password,Status from User_Master";
        cmd = new SqlCommand(cmdstr, cn);
        dared = cmd.ExecuteReader();

        while (dared.Read())
        {
            username = dared.GetValue(0).ToString();
            password = dared.GetValue(1).ToString();
            status = Convert.ToInt32(dared.GetValue(2));


           
                if (username == txtusername.Text && password == txtpassword.Text)
                {
                    if (status  == 0)
                    {
                        flag = 0;
                        break;
                    }
                    else
                    {
                        flag = 2;
                    }
                }
                else
                {
                    flag = 1;
                }
           
        }
        dared.Close();

        if (flag == 0)
        {
            cmd = new SqlCommand("Update User_Master set Status=1 where User_Name='"+txtusername .Text +"' and User_Password='"+txtpassword .Text +"'", cn);
            cmd.ExecuteNonQuery();
            cn.Close();
            Session["username1"] = username;
            Response.Redirect("Main_Payment.aspx");
        }
        else if(flag ==1)
        {
            lblduplicate.Text = "Invalid Username/Password.";
            txtpassword.Text = "";
            txtusername.Text = "";
            txtusername .Focus ();
        }
        else if (flag == 2)
        {
            lblduplicate.Text = "Your Account is Created By Administrator.<br>But first fill some details on.";
            hyprthis.Visible = true;
            lblpage.Visible = true;
        }


    }
}
