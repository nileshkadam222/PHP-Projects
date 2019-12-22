using System;
using System.Data;
using System.Configuration;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using DAL;
using BLL;
using System.Data.SqlClient;

public partial class _Default : System.Web.UI.Page
{
    #region "Fields"
    SqlConnection oSqlConnection;
    SqlCommand oSqlCommand;
    BLL.School  oSchool;
    BLL.SchoolBLL oSchoolBLL;
    DataTable oDataTable;
    int returnValue = -1;
 
    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
       
            if (!Page.IsPostBack)
            {
                txtName.Focus();
            }   

    }
    protected void btnLogin_Click(object sender, EventArgs e)
    {
 
        #region "Fields"
        string userType = "";
        string subject=string.Empty;
        int value = -1;
        #endregion

        oSchool = new BLL.School();
        oSchoolBLL = new BLL.SchoolBLL();
        try
        {

            oSchool.UserName = txtName.Text.Trim();
            oSchool.Password = txtPassword.Text.Trim();

            oDataTable = oSchoolBLL.Login(oSchool);


            if (oDataTable.Rows.Count > 0)
            {
                
            
                Session.Add("username", txtName.Text);
                userType = oDataTable.Rows[0]["usertype"].ToString();
                Session.Add("usertype", userType);
                if (userType == "teacher")
                {
                    oSchool.UserName = txtName.Text.ToString();
                    subject = oSchoolBLL.SubjectName(oSchool);
                    Session.Add("subjectName", subject);
                }
                FormsAuthentication.RedirectFromLoginPage(txtName.Text, true);
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('login un succesful');", true);
            }


        }

        catch 
        {
            ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('login un succesful please try after some time');", true);
        }

        finally
        {
            oSchool = null;
            oSchoolBLL = null;
            returnValue = -1;
        }


    }

#endregion

}
