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
using System.IO;
using System.Data.SqlClient;
using System.Drawing;
public partial class RegisterParent : System.Web.UI.Page
{
    #region "Fields"
    ParentBLL oParentBLL;
    BLL.Parent oParent;
    DataTable oDataTable = null;
    BLL.StudentBLL oStudentBLL=null;
    BLL.Student oStudent=null;
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
                    DefaultText();
                    ViewState["id"] = Request.QueryString["id"];
                    if (ViewState["id"] != null)
                    {
                        btnRegister.Text = "Update";
                        txtEmail.Disabled = true;
                        tblUsernameDetails.Visible = false;
                        fldUsernameDetails.Visible = false;
                        rowStudentClassSection.Visible = false;
                        rowStudentEmail.Visible = false;
                        rowStudentFirstLastNames.Visible = false;
                        colParentOfStudent.Visible = false;
                        colStudentClassSection.Visible = false;
                        colClassAndSection.Visible = false;
                        colFirstAndLastNames.Visible = false;
                        txtUserName.Visible = false;
                        txtPassword.Visible = false;
                        lgdParentRegistration.InnerText = "Parent Updation";
                        lgdParentRegistration.Style.Value="color: #ffffff";
                    
                        txtConfirmPassword.Visible = false;
                        ParentDetailsForUpdation();
                        LoadEmail();
                    }
                    else
                    {
                        btnCancel.Visible = true;
                    }
                }
                else
                {
                    Response.Redirect("Login.aspx");
                }
            }
        }
        catch(Exception ex)
        {         
            ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>javascript:{alert('" + ex.Message + "')}</script>", false);
        }
    }

    protected void btnRegister_Click(object sender, EventArgs e)
    {
        #region "Fields"
        string errorMessage = "";
        #endregion

        try
        {


            if (btnRegister.Text == "Register")
            {

                oParent = new BLL.Parent();
                oParentBLL = new ParentBLL();
                oParent.Id = 0;
                oParent.FirstName = txtFirstName.Text.Trim();
                oParent.LastName = txtLastName.Text.Trim();
                oParent.StudentFirstName = ddlStudent.SelectedItem.Text.ToString();
                oParent.StudentLastName = ddlStudentLastName.SelectedItem.Text.ToString();
                oParent.StudentEmail = ddlStudentEmail.SelectedItem.Text.ToString();
                oParent.Class = ddlClass.SelectedItem.Text.ToString();
                oParent.Section = ddlSection.SelectedItem.Text.ToString();
                oParent.ContactNo = txtContactNo.Value.Trim();
                oParent.Email = txtEmail.Value.Trim();
                oParent.Address = txtAddress.Text.ToString();
                oParent.Password = txtPassword.Value.Trim();
                oParent.UserType = "parent";

                errorMessage = oParentBLL.ParentInsert(oParent);

                if (errorMessage == "")
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Inserted Successfully');", true);
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);

                }

            }

            if (btnRegister.Text == "Update")
            {

                oParent = new BLL.Parent();
                oParentBLL = new ParentBLL();
                oParent.Id = Convert.ToInt32(ViewState["id"]);
                oParent.FirstName = txtFirstName.Text.Trim();
                oParent.LastName = txtLastName.Text.Trim();
                oParent.StudentFirstName = "update";
                oParent.StudentLastName = "update";
                oParent.Class = "update";
                oParent.Section = "update";
                oParent.StudentEmail = "update";
                oParent.ContactNo = txtContactNo.Value.Trim();
                oParent.Email = "update";
                oParent.Address = txtAddress.Text.ToString();
                errorMessage = oParentBLL.ParentInsert(oParent);

                if (errorMessage == "")
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Updated Successfully');", true);
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);

                }

            }

        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oParent = null;
            errorMessage = "";
            oParentBLL = null;
        }
    }
    protected void btnCancel_Click(object sender, EventArgs e)
    {
        try
        {
            if (btnRegister.Text == "Update")
            {
                ParentDetailsForUpdation();
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }

    }
    protected void ddlSection_SelectedIndexChanged(object sender, EventArgs e)
    {
        try
        {
            if (ddlClass.SelectedIndex != 0 && ddlSection.SelectedIndex != 0)
            {

                ClassSection();
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    protected void lnkEmailSelect_Click(object sender, EventArgs e)
    {
        try
        {
            txtUserName.Text = txtEmail.Value.Trim();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void ddlStudent_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (ddlStudent.SelectedItem.Text != "--Select Firstname--" && ddlStudentLastName.SelectedItem.Text != "--Select Lastname--")
        {
            LoadEmail();
        }

    }
    protected void ddlStudentLastName_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (ddlStudent.SelectedItem.Text != "--Select Firstname--" && ddlStudentLastName.SelectedItem.Text != "--Select Lastname--")
        {
            LoadEmail();
        }

    }
    protected void ddlClass_SelectedIndexChanged(object sender, EventArgs e)
    {
        try
        {
            if (ddlClass.SelectedIndex != 0 && ddlSection.SelectedIndex != 0)
            {

                ClassSection();
            }
           
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    #endregion

    #region "Methods"
    public void DefaultText()
    {
        ddlStudent.Items.Insert(0, "--Select Firstname--");
        ddlStudent.SelectedIndex = 0;
        ddlStudentLastName.Items.Insert(0, "--Select Lastname--");
        ddlStudentLastName.SelectedIndex = 0;
        if (ddlStudent.SelectedIndex != 0 && ddlStudentLastName.SelectedIndex != 0)
        {
            ddlStudentEmail.Items.Insert(0, "--Select Email--");
            ddlStudentEmail.SelectedIndex = 0;
        }
        else
        {
            ddlStudentEmail.Items.Clear();
            ddlStudentEmail.Items.Insert(0, "--Select Email--");
            ddlStudentEmail.SelectedIndex = 0;
        }
    }

    public DataTable LoadStudents()
    {

        try
        {
            oDataTable = new DataTable();
            oStudentBLL = new BLL.StudentBLL();
            oStudent = new BLL.Student();
            oStudent.Class1 = ddlClass.SelectedItem.Text;
            oStudent.Section = ddlSection.SelectedItem.Text;
            oDataTable = oStudentBLL.LoadStudents(oStudent);
            return oDataTable;
        }

        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oDataTable = null;
            oStudent = null;
            oStudentBLL = null;
        }
    }

    public void ParentDetailsForUpdation()
    {
        try
        {
            oParent = new BLL.Parent();
            oParentBLL = new ParentBLL();
            oDataTable = new DataTable();
            oParent.Id = Convert.ToInt32(ViewState["id"]);
            oDataTable = oParentBLL.ParentDetailsForUpdation(oParent);
            txtAddress.Text = oDataTable.Rows[0]["address"].ToString();
            txtContactNo.Value = oDataTable.Rows[0]["contactno"].ToString();
            txtEmail.Value = oDataTable.Rows[0]["email"].ToString();
            txtFirstName.Text = oDataTable.Rows[0]["firstname"].ToString();
            txtLastName.Text = oDataTable.Rows[0]["lastname"].ToString();
            ddlClass.SelectedItem.Text = oDataTable.Rows[0]["class"].ToString();
            ddlSection.SelectedItem.Text = oDataTable.Rows[0]["section"].ToString();       
            ddlStudent.DataTextField = oDataTable.Columns["studentfirstname"].ToString();
            ddlStudent.DataValueField = oDataTable.Columns["studentfirstname"].ToString();
            ddlStudentLastName.DataTextField = oDataTable.Columns["studentlastname"].ToString();
            ddlStudentLastName.DataValueField = oDataTable.Columns["studentlastname"].ToString();
            ddlStudent.DataSource = oDataTable;
            ddlStudentLastName.DataSource = oDataTable;
            ddlStudent.DataBind();
            ddlStudentLastName.DataBind();


        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oParent = null;
            oParentBLL = null;
            oDataTable = null;
        }
    }

    public void ClassSection()
    {
        try
        {

            oDataTable = new DataTable();
            oDataTable = LoadStudents();
            ddlStudent.DataTextField = oDataTable.Columns["firstname"].ToString();
            ddlStudent.DataValueField = oDataTable.Columns["firstname"].ToString();
            ddlStudentLastName.DataTextField = oDataTable.Columns["lastname"].ToString();
            ddlStudentLastName.DataValueField = oDataTable.Columns["lastname"].ToString();           
            ddlStudent.DataSource = oDataTable;
            ddlStudentLastName.DataSource = oDataTable;          
            ddlStudent.DataBind();           
            ddlStudentLastName.DataBind();
            DefaultText();
            
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oDataTable = null;
        }


    }

    public void LoadEmail()
    {
        try
        {
          
                oParent = new BLL.Parent();
                oParent.Class = ddlClass.SelectedItem.Text.ToString();
                oParent.Section = ddlSection.SelectedItem.Text.ToString();
                oParent.StudentFirstName = ddlStudent.SelectedItem.Text.ToString();
                oParent.StudentLastName = ddlStudentLastName.SelectedItem.Text.ToString();
                oParentBLL = new ParentBLL();
                oDataTable = new DataTable();
                oDataTable = oParentBLL.LoadEmail(oParent);
                ddlStudentEmail.DataSource = oDataTable;
                ddlStudentEmail.DataTextField = "email";
                ddlStudentEmail.DataValueField = "email";
                ddlStudentEmail.DataBind();
                ddlStudentEmail.Items.Insert(0, "--Select Email--");
                ddlStudentEmail.SelectedIndex = 0;
                //if (ddlStudentEmail.Items.Count == 0)
                //{
                //    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Please select a valid student first and lastnames')", true);
                //}
            }
       
        catch (Exception ex)
        {
            
            throw ex;
        }
    }
    #endregion


    
   
}
