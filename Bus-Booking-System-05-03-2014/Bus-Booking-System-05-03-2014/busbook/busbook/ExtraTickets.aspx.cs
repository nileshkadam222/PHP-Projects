using System;
using System.Collections;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Web;
using System.Web.SessionState;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

namespace busbook
{
	/// <summary>
	/// Summary description for WebForm5.
	/// </summary>
	public class WebForm5 : System.Web.UI.Page
	{
		protected System.Web.UI.WebControls.Label Label1;
		protected System.Web.UI.WebControls.Label Label3;
		protected System.Web.UI.WebControls.Label Label4;
		protected System.Web.UI.WebControls.TextBox txtreqseats;
		protected System.Web.UI.WebControls.Button btnsubmit;
		protected System.Web.UI.WebControls.Label lblmsg;
		protected System.Web.UI.WebControls.DropDownList ddlrname;
		protected System.Web.UI.WebControls.DropDownList ddldate;
		protected System.Web.UI.WebControls.Label Label6;
		protected System.Web.UI.WebControls.TextBox txtbrname;
		protected System.Web.UI.WebControls.HyperLink HyperLink1;
		protected System.Web.UI.WebControls.RequiredFieldValidator ddldateReqFieldValidator;
		protected System.Web.UI.WebControls.RequiredFieldValidator ddlrnameReqFieldValidator;
		protected System.Web.UI.WebControls.RequiredFieldValidator txtreqseatsReqFieldValidator;
		protected System.Web.UI.WebControls.RegularExpressionValidator txtreqseatsRegExpValidator;
		protected System.Web.UI.WebControls.Image Image1;
		protected System.Web.UI.WebControls.Label Label2;
		protected System.Web.UI.WebControls.DropDownList ddlvehno;
		protected System.Web.UI.WebControls.Label Label5;
	
		private void Page_Load(object sender, System.EventArgs e)
		{
			ddldate.Items.Add("select date");
			ddlrname.Items.Add("Select the Route Name");
			/*Connection is given to the busbooking*/
			string conStr="server=.;database=BusBooking;uid=sa;pwd=sa";
			SqlConnection con=new SqlConnection(conStr);
			con.Open();	

			/*Route names for Extra tickets should be retieved from service
			 are extracted and send to the drop down list*/ 
			string cmdStr2="select routename from service;";
			SqlCommand cmd2=new SqlCommand(cmdStr2,con);
			SqlDataReader dr=cmd2.ExecuteReader();
			while(dr.Read())
			{
				ddlrname.Items.Add(dr[0].ToString());

			}
			dr.Close();

			/*vehicle no for extra ticket are extracted from vehdetails 
			 and send to the drop down list*/
			ddlvehno.Items.Add("Select the vehicle No");
			string cmdStr3="select vehno from vehdetails;";
			SqlCommand cmd3=new SqlCommand(cmdStr3,con);
			SqlDataReader dr3=cmd3.ExecuteReader();
			while(dr3.Read())
			{
				ddlvehno.Items.Add(dr3[0].ToString());

			}
			dr3.Close();
			/*Dates to  when the ticket to be reserved are extracted from
			  the branch details table and sent to the drop down list*/  
			string cmdStr4="select distinct dated from branchdets;";
			SqlCommand cmd4=new SqlCommand(cmdStr4,con);
			SqlDataReader dr4=cmd4.ExecuteReader();
			while(dr4.Read())
			{
				ddldate.Items.Add(dr4[0].ToString());

			}
			dr4.Close();
			
			/*The branch name from where the Extra tickets are reserved
			 is get through the session variable and sent to the branch
			 text box*/
			string strBrid1=Session["sBrid"].ToString ();	
			String comStr5="select bname from branch where brid='"+strBrid1+"'";
			SqlCommand com5=new SqlCommand(comStr5,con);
			SqlDataReader dr5=com5.ExecuteReader();
			while(dr5.Read())
			{
				txtbrname.Text=dr5[0].ToString();
				
			}
			dr5.Close();

			con.Close();
		}

		#region Web Form Designer generated code
		override protected void OnInit(EventArgs e)
		{
			//
			// CODEGEN: This call is required by the ASP.NET Web Form Designer.
			//
			InitializeComponent();
			base.OnInit(e);
		}
		
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		private void InitializeComponent()
		{    
			this.btnsubmit.Click += new System.EventHandler(this.btnsubmit_Click);
			this.Load += new System.EventHandler(this.Page_Load);

		}
		#endregion

		private void txtdate_TextChanged(object sender, System.EventArgs e)
		{
		
		}

		private void btnsubmit_Click(object sender, System.EventArgs e)
		{
			string strUserid=Session["sUid"].ToString();
			string strDat,strRname,strVehno,strBrname;
			int intReqseats=0;
			
			strDat=ddldate.SelectedItem.Text;
			strVehno=ddlvehno.SelectedItem.Text;
			strRname=ddlrname.SelectedItem.Text;
			strBrname=txtbrname.Text;
			intReqseats=Convert.ToInt16(txtreqseats.Text);
			string conStr="server=.;database=BusBooking;uid=sa;pwd=sa";
			SqlConnection con=new SqlConnection(conStr);
			con.Open();	
			/*The text box values are extracted from the extra ticket web form
			 and insert into the extra tickets table*/
			
			string cmdStr1="insert into extratkt values('"+strDat+"','"+strRname+"','"+strVehno+"',"+intReqseats+",'"+strBrname+"','waiting')";
			SqlCommand cmd1=new SqlCommand(cmdStr1,con);
			if(cmd1.ExecuteNonQuery()>0)
			{
				Response.Redirect("adminRequest.aspx");
			}
			else
			{
				lblmsg.Text="Record not inserted";
			}
			con.Close();
		}
	}
}
