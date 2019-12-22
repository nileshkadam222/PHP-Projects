using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using BLL;

public partial class Main : System.Web.UI.Page
{
    #region "Fields"

    BLL.School oSchool = null;
    SchoolBLL oSchoolBLL = null;
    BLL.Student oStudent = null;
    StudentBLL oStudentBLL = null;
    BLL.Teacher oTeacher = null;
    TeacherBLL oTeacherBLL = null;
    BLL.Parent oParent = null;
    ParentBLL oParentBLL = null;

    DataTable oDatatable = null;


    #endregion 

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (Session["usertype"].ToString() !="parent" && Session["usertype"].ToString() !=null )
            {
                string firstName;
                firstName = GetUserName();
                lblUserName.Text = "Welcome to " + "" + firstName;
                LoginDetails();
                
            }
            else if (Session["usertype"].ToString() == "parent" && Session["usertype"].ToString() != null)
            {
                oDatatable = new DataTable();
                oDatatable = GetParentUserName();
                lblUserName.Text = "Welcome to " + "" + oDatatable.Rows[0]["firstname"].ToString();
                Session.Add("studentemail", oDatatable.Rows[0]["studentemail"].ToString());
                LoginDetails();
            }
            else
            {

                FormsAuthentication.RedirectToLoginPage();
            }
        }
        catch (Exception ex)
        {
            //ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.parent.location.href='Login.aspx'</script>", false);
            //FormsAuthentication.RedirectToLoginPage();
            Response.Redirect("Login.aspx");
        }
        finally
        {
            oDatatable = null;
            oSchoolBLL = null;
            oSchool = null;
        }

    }
    #endregion 

    #region "Methods"

    public string  GetUserName()              //for getting firstname of user
    {
        #region "Fields"
        string firstName = string.Empty;
        #endregion

        try
        {
            lblUserName.Text = Session["usertype"].ToString();
          
            if (lblUserName.Text == "student")
            {
            
                oStudent = new BLL.Student();
                oStudentBLL = new StudentBLL();
                oStudent.Email = Session["username"].ToString();
                firstName = oStudentBLL.GetUserName(oStudent);
                return firstName;
            }


            if (lblUserName.Text == "teacher")
            {
                
                oTeacher = new BLL.Teacher();
                oTeacherBLL = new TeacherBLL();
                oTeacher.Email = Session["username"].ToString();
                firstName = oTeacherBLL.GetUserName(oTeacher);
                return firstName;
            }

            
            else
            {
                firstName = "admin";
            }
            return firstName;
        }

        catch (Exception ex)
        {
            firstName = Session["username"].ToString();
            return firstName;
        }
        finally
        {
            oParent = null;
            oParentBLL = null;
            oTeacher = null;
            oTeacherBLL = null;
            oStudent = null;
            oStudentBLL = null;
            firstName = "";
        }
    }
    public DataTable GetParentUserName()
    {
        try
        {
            oParent = new BLL.Parent();
            oParentBLL = new ParentBLL();
            oDatatable = new DataTable();
            oParent.Email = Session["username"].ToString();
            oDatatable = oParentBLL.GetUserName(oParent);
            return oDatatable;
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            oParent = null;
            oParentBLL = null;
            oDatatable=null;
        }
    }
    public void LoginDetails()
    {
        try
        {
            oDatatable = new DataTable();
            oSchool = new BLL.School();
            oSchoolBLL = new SchoolBLL();
            oSchool.Id = 0;
            oSchool.FirstName = Session["username"].ToString();
            oDatatable = oSchoolBLL.LoginLogout(oSchool);
            if (oDatatable.Rows.Count >= 1)
            {
                lblLoginTime.Text = "Your Last Login: " + " " + oDatatable.Rows[0]["lastlogin"].ToString();
            }
            else
            {
                lblLoginTime.Text = "Firsttime Login";
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            oDatatable = null;
            oSchool = null;
            oSchoolBLL = null;
        }
        
    }
    #endregion
}
