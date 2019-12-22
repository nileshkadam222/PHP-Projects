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
using IntranetStaffblogger_bal;


public partial class Login : System.Web.UI.Page

{
    UserDetails_BAL obj = new UserDetails_BAL();
    DataSet dsDesignation;
    protected void Page_Load(object sender, EventArgs e)
    {
        LblMsg.Visible = false;

        if (!IsPostBack)
        {
            dsDesignation = new DataSet();
            dsDesignation = obj.getalldesignation();
            DDLDesignation.DataSource = dsDesignation;
            DDLDesignation.DataTextField = "UserType";
            DDLDesignation.DataValueField = "UserTypeId";
            DDLDesignation.DataBind();
            DDLDesignation.Items.Insert(0, "Select");

        }
    }
    protected void DDLDesignation_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
    protected void BtnSubmit_Click(object sender, EventArgs e)
    {
      string res=  obj.ValidateUser(TxtUsername.Text, TxtPassword.Text,Convert.ToInt32(DDLDesignation.SelectedValue));
      if (res == "yes")
      {
          if (Convert.ToInt32(DDLDesignation.SelectedValue) == 3)
          {
              Session["UserName"] = TxtUsername.Text;
              Response.Redirect("StaffHome.aspx");
          }
          else if (Convert.ToInt32(DDLDesignation.SelectedValue) == 2)
          {
              Session["UserName"] = TxtUsername.Text;
              Response.Redirect("HodHome.aspx");
          }
          else if (Convert.ToInt32(DDLDesignation.SelectedValue) == 1)
          {
              Session["UserName"] = TxtUsername.Text;
              Response.Redirect("AdminHome.aspx");
          }
      }
    }
    protected void BtnClear_Click(object sender, EventArgs e)
    {
        TxtUsername.Text = "";
        TxtPassword.Text = "";
        
    }
}
