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

public partial class Teacher : System.Web.UI.Page
{

    #region "Fields"
    TeacherBLL oTeacherBLL = null;
    BLL.Teacher oTeacher = null;
    DataTable oDataTable = null;
    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (!Page.IsPostBack)
            {
                if (Session["usertype"] != null)
                {
                    ViewState["id"] = Request.QueryString["id"];
                    if (ViewState["id"] != null)
                    {

                        btnRegister.Text = "Update";
                        txtEmail.Disabled = true;
                        tblUsernameDetails.Visible = false;
                        fldUsernameDetails.Visible = false;
                        ShowTeacherDetailsForUpdation();
                        txtUserName.Visible = false;
                        txtPassword.Visible = false;
                        lgdTeacherRegistration.InnerText = "Teacher Updation";
                        lgdTeacherRegistration.Style.Value="color: #ffffff";
                        txtConfirmPassword.Visible = false;
                    }
                    else
                    {
                        btnReset.Visible = true;
                    }
                }
                else
                {
                    Response.Redirect("Login.aspx");
                }
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void btnReset_Click(object sender, EventArgs e)
    {
        try
        {
            if (btnRegister.Text == "Update")
            {
                ShowTeacherDetailsForUpdation();
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void btnRegister_Click(object sender, EventArgs e)
    {
        #region "Fields"

        string errorMessage = "";
        #endregion

        try
        {
            int id = Convert.ToInt32(ViewState["id"]);
            if (btnRegister.Text == "Register")
            {
                oTeacher = new BLL.Teacher();
                oTeacherBLL = new TeacherBLL();
                oTeacher.Id = id;
                oTeacher.Name = txtName.Text.Trim();
                oTeacher.FatherName = txtFatherName.Text.Trim();
                oTeacher.Qualification = txtQualification.Text.Trim();
                oTeacher.DateOfBirth = txtDateOfBirth.Value.Trim();
                oTeacher.DateOfJoining = txtJoinDate.Value.Trim();
                oTeacher.Subject = txtSubject.Text.Trim();
                oTeacher.Email = txtEmail.Value.Trim();
                oTeacher.ContactNo = txtContactNo.Value.Trim();
                oTeacher.Address = txtAddress.Text.Trim();
                oTeacher.Password = txtPassword.Value.Trim();
                errorMessage = oTeacherBLL.RegisterTeacher(oTeacher);

                if (errorMessage.Length > 0)
                {

                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Inserted Succesfully');", true);
                }
            }

            if (btnRegister.Text == "Update")
            {
                oTeacher = new BLL.Teacher();
                oTeacherBLL = new TeacherBLL();
                oTeacher.Id = id;
                oTeacher.Name = txtName.Text.Trim();
                oTeacher.FatherName = txtFatherName.Text.Trim();
                oTeacher.Qualification = txtQualification.Text.Trim();
                oTeacher.DateOfBirth = txtDateOfBirth.Value.Trim();
                oTeacher.DateOfJoining = txtJoinDate.Value.Trim();
                oTeacher.Subject = txtSubject.Text.Trim();
                oTeacher.Email = txtEmail.Value.Trim();
                oTeacher.ContactNo = txtContactNo.Value.Trim();
                oTeacher.Address = txtAddress.Text.Trim();

                errorMessage = oTeacherBLL.UpdateTeacher(oTeacher);

                if (errorMessage.Length > 0)
                {

                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Updated Succesfully');", true);
                }
            }


        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oTeacher = null;
            oTeacherBLL = null;
        }
    }
    protected void lnkEmailSelect_Click(object sender, EventArgs e)
    {
        try
        {
            if (txtEmail.Value != "")
            {
                txtUserName.Text = txtEmail.Value.ToString();
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Please enter an email and then select it');", true);
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    #endregion

    #region "Methods"
    public void ShowTeacherDetailsForUpdation()
    {
        try
        {
            oTeacher = new BLL.Teacher();
            oTeacherBLL = new TeacherBLL();
            oDataTable = new DataTable();
            oTeacher.Id = Convert.ToInt32(ViewState["id"]);
            oDataTable = oTeacherBLL.ShowTeacherDetailsForUpdation(oTeacher);
            txtAddress.Text = oDataTable.Rows[0]["address"].ToString();
            txtContactNo.Value = oDataTable.Rows[0]["contactno"].ToString();
            txtEmail.Value = oDataTable.Rows[0]["email"].ToString();
            txtName.Text = oDataTable.Rows[0]["name"].ToString();
            txtFatherName.Text = oDataTable.Rows[0]["fathername"].ToString();
            txtDateOfBirth.Value = oDataTable.Rows[0]["dateofbirth"].ToString();
            txtJoinDate.Value = oDataTable.Rows[0]["dateofjoining"].ToString();
            txtSubject.Text = oDataTable.Rows[0]["subject"].ToString();
            txtQualification.Text = oDataTable.Rows[0]["qualification"].ToString();
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            oTeacher = null;
            oTeacherBLL = null;
        }
        
    }
    #endregion

}
