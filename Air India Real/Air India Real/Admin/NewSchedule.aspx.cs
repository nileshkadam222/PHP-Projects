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

public partial class Admin_Schedule : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    SqlDataReader dr;

    protected void Page_Load(object sender, EventArgs e)
    {
        optType.Attributes["onclick"] = "javascript:var val = window.event.srcElement.value;if(val == 'D')weekly.style.display='none'; else weekly.style.display='block';";
        cn = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
        if (!IsPostBack)
        {
            cn.Open();
            cmd = new SqlCommand("Select Max(Sch_Id) From Schedule_Master", cn);
            dr = cmd.ExecuteReader();
            int maxid = 1;
            dr.Read();
            if (dr[0].ToString() != "")
                maxid = int.Parse(dr[0].ToString()) + 1;
            dr.Close();
            cn.Close();
            txtSId.Text = maxid.ToString();
            ddlRoute.Focus();
        }

    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        int status1 = 0;


        if (ddlDHH.SelectedItem.ToString() == "HH" || ddlDMM.SelectedItem.ToString() == "MM" || ddlAHH.SelectedItem.ToString() == "HH" || ddlAMM.SelectedItem.ToString() == "MM")
        {
            status1 = 1;
        }

         if (status1 == 1)
        {
            lblDuplicate.Text = "Please Enter Apporiate Value of Time";
            lblDuplicate.ForeColor = System.Drawing.Color.Red;
        }
         else if (status1 == 0)
         {
             int sid = int.Parse(txtSId.Text);
             int rno = int.Parse(ddlRoute.SelectedValue);
             int fno = int.Parse(ddlFlight.SelectedValue);
             string dtime = ddlDHH.SelectedValue + ":" + ddlDMM.SelectedValue + " " + ddlDAMPM.SelectedValue;
             string atime = ddlAHH.SelectedValue + ":" + ddlAMM.SelectedValue + " " + ddlAAMPM.SelectedValue;
             string stype = optType.SelectedValue;
             string sdetail = "";
             if (stype.CompareTo("W") == 0)
             {
                 for (int i = 0; i < chkSDetail.Items.Count; i++)
                 {
                     if (chkSDetail.Items[i].Selected == true)
                         sdetail = sdetail + chkSDetail.Items[i].Value + ",";
                 }
                 sdetail = sdetail.Substring(0, sdetail.Length - 1);
             }
             cn.Open();
             cmd = new SqlCommand("Select * From Schedule_Master Where Route_Id=" + rno + " And Flight_Id=" + fno + " And Depart_Time='" + dtime + "'", cn);
             dr = cmd.ExecuteReader();
             if (dr.HasRows == true)
             {
                 dr.Read();
                 lblDuplicate.Text = "Schedule Already Exist [Schedule Id : " + dr[0].ToString() + " ] ";
                 //lblDuplicate.ForeColor = Color.Red;
                 ddlRoute.Focus();
             }
             else
             {
                 dr.Close();
                 cmd = new SqlCommand("Insert Into Schedule_Master Values(" + sid + "," + rno + "," + fno + ",'" + dtime + "','" + atime + "','" + stype + "','" + sdetail + "',"+int.Parse (txtERate .Text) +")", cn);
                 cmd.ExecuteNonQuery();
                 cn.Close();
                 Response.Redirect("NewSchedule.aspx");
             }
         }
    }
    protected void btnback_Click(object sender, EventArgs e)
    {
        txtERate.Text = "";
    }
}
