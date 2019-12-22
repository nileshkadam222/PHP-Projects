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
public partial class Student : System.Web.UI.Page
{
    #region "Fields"
    BLL.Student oStudent = null;
    StudentBLL oStudentBLL=null;
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
                    if (Request.QueryString["id"] != null)
                    {
                        ViewState["id"] = int.Parse(Request.QueryString["id"]);
                        ShowUpdateStudentDetails();
                        btnLogin.Text = "Update";
                        txtEmail.Disabled = true;
                        tblUsernameDetails.Visible = false;
                        txtUserName.Visible = false;
                        txtPassword.Visible = false;
                        txtConfirmPassword.Visible = false;
                        lgdStudentRegistration.InnerText= "Student Updation";                     
                        lgdStudentRegistration.Style.Value = "color: #ffffff";
                   
                        


                    }
                    else
                    {
                        btnReset.Visible = true;
                        Label lblCheck = new Label();
                        lblCheck.Text = Session["username"].ToString();
                        if (lblCheck.Text != "")
                        {
                            txtAdmissionNo.Text = AdmissionNumber();
                            txtRollNo.Text = Rollno().ToString();
                        }
                        else
                        {
                            ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Server-Error  Please try after some time');window.close('Student.aspx');", true);

                        }
                    }
                }
                else
                {
                    Response.Redirect("Login.aspx");
                }
            }
        }
        catch
        {
            ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Server-Error  Please try after some time');window.close('Student.aspx');", true);

        }
    }


    protected void btnReset_Click(object sender, EventArgs e)
    {
        try
        {
            if (btnLogin.Text == "Update")
            {
                ShowUpdateStudentDetails();
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }


    }

    protected void btnUpload_Click(object sender, EventArgs e)
    {
        try
        {
            if (fupImgUpload.HasFile == true)
            {
                InsertImage();
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('please select an image and then upload');", true);
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    protected void LinkButton1_Click(object sender, EventArgs e)
    {
        try
        {
            txtUserName.Value = txtEmail.Value.ToString();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void btnLogin_Click(object sender, EventArgs e)
    {
        #region "Fields"
        string errorMessage = "";
        #endregion

        try
        {
            oStudentBLL = new StudentBLL();
            oStudent = new BLL.Student();
       
             if (imgStudent.ImageUrl != "")
            {
                if (btnLogin.Text == "Register")
                {

                    oStudent.AdmissionNo = txtAdmissionNo.Text.Trim();
                    oStudent.FirstName = txtFirstName.Text.Trim();
                    oStudent.LastName = txtLastName.Text.Trim();
                    oStudent.FatherName = txtFatherName.Text.Trim();
                    oStudent.DateOfBirth = txtDateOfBirth.Value.Trim();
                    oStudent.JoinDate = txtJoinDate.Value.Trim();
                    oStudent.BloodGroup = txtBloodGroup.Text.Trim();
                    oStudent.ContactNo = txtContactNo.Value.Trim();
                    oStudent.Address = txtAddress.Text.Trim();
                    oStudent.Email = txtEmail.Value.Trim();
                    oStudent.Photo = (byte[])ViewState["imagebyte"];
                    oStudent.BusFacility = ddlBusFacility.SelectedItem.Text.ToString();
                    oStudent.RollNo = txtRollNo.Text.ToString();
                    oStudent.Class1 = ddlClass.Value;
                    oStudent.Section = ddlSection.SelectedItem.Text.ToString();
                    oStudent.RollNo = txtRollNo.Text;
                    oStudent.UserName = txtUserName.Value.Trim();
                    oStudent.Password = txtPassword.Value.Trim();
                    oStudent.Usertype = "student";

                    errorMessage = oStudentBLL.StudentRegistration(oStudent);
                    if (errorMessage.Length > 0)
                    {
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);

                    }
                    else
                    {
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Inserted Successfully');", true);

                    }

                }

                else if (btnLogin.Text == "Update")
                {
                    
                    oStudent.Id = Convert.ToInt32(ViewState["id"].ToString());
                    oStudent.AdmissionNo = txtAdmissionNo.Text.Trim();
                    oStudent.FirstName = txtFirstName.Text.Trim();
                    oStudent.LastName = txtLastName.Text.Trim();
                    oStudent.FatherName = txtFatherName.Text.Trim();
                    oStudent.DateOfBirth = txtDateOfBirth.Value.Trim();
                    oStudent.JoinDate = txtJoinDate.Value.Trim();
                    oStudent.BloodGroup = txtBloodGroup.Text.Trim();
                    oStudent.ContactNo = txtContactNo.Value.Trim();
                    oStudent.Address = txtAddress.Text.Trim();
                    oStudent.Email = txtEmail.Value.Trim();
                    oStudent.BusFacility = ddlBusFacility.SelectedItem.Text.ToString();
                    oStudent.RollNo = txtRollNo.Text.ToString();
                    oStudent.Class1 = ddlClass.Value;
                    oStudent.Section = ddlSection.SelectedItem.Text.ToString();
                    oStudent.RollNo = txtRollNo.Text;

                    if (imgStudent.ImageUrl != ViewState["imagepathhandler"].ToString())
                        oStudent.Photo = (byte[])ViewState["imagebyte"];
                    if (imgStudent.ImageUrl == ViewState["imagepathhandler"].ToString())
                    {
                        GetImageFromDB();
                        byte[] imageByte = (byte[])ViewState["imagebyteforimage"];
                        oStudent.Photo = (byte[])ViewState["imagebyteforimage"];
                    }
                    oStudent.Usertype = "student";
                    errorMessage = oStudentBLL.StudentUpdation(oStudent);
                    if (errorMessage.Length > 0)
                    {
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + errorMessage + "');", true);

                    }
                    else
                    {
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Updated Successfully');", true);
                        btnLogin.Text = "Register";
                        //ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.close('Student.aspx');</script>", false);
                    }


                }
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('Please Upload An Image');", true);
            }

        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oStudent = null;
            oStudentBLL = null;
            errorMessage = "";
        }
    }
    #endregion 

    #region "Methods"
    public byte[] InsertImage()
    {
        #region "Fields"
        HttpPostedFile oHttpPostedFile;
        string imgPath;
        byte[] imgByte;
        int index;
        string extension;
        string imagename;
        int length = 0;
        #endregion
        
        try
        {

            oHttpPostedFile = fupImgUpload.PostedFile;

            imgByte = new byte[oHttpPostedFile.ContentLength];
            oHttpPostedFile.InputStream.Read(imgByte, 0, oHttpPostedFile.ContentLength);
            index = fupImgUpload.PostedFile.FileName.LastIndexOf(".");
            extension = fupImgUpload.PostedFile.FileName.Substring(index + 1);
            if (!extension.Equals(""))
            {
                if ((extension.ToLower().Trim() == "jpg") || (extension.ToLower().Trim() == "jpeg") || (extension.ToLower().Trim() == "bmp") || (extension.ToLower().Trim() == "gif") || (extension.ToLower().Trim() == "png"))
                {
                    imagename = fupImgUpload.FileName.ToString();
                    imagename = System.IO.Path.GetFileName(fupImgUpload.PostedFile.FileName);
                    ViewState["imagepath"] = "images/" + imagename;
                    imgPath = ViewState["imagepath"].ToString();
                    fupImgUpload.PostedFile.SaveAs(MapPath(imgPath));
                    imgStudent.ImageUrl = imgPath;
                    ViewState["imagebyte"] = imgByte;
                    return imgByte;
                }

                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('please select either jpg or jpeg or bmp or gif or png formats of  IMAGES');", true);
                }
            }

        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oHttpPostedFile = null;
            
        }
        return imgByte;

    }

    public string AdmissionNumber()
    {
        #region "Fields"
        string admissionNumber = "";
        #endregion

        try
        {
            oStudentBLL = new StudentBLL();
            admissionNumber = oStudentBLL.AdmissionNumber().ToString();
            return admissionNumber;
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oStudentBLL = null;
            admissionNumber = "";
        }
    }

    public int Rollno()
    {
        #region "Fields"
        int rollNo = -1;
        #endregion

        try
        {
            oStudentBLL = new StudentBLL();
            rollNo = Convert.ToInt32(oStudentBLL.Rollno());
            return rollNo;
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oStudentBLL = null;
            rollNo = -1;
        }
    }

    public void ShowUpdateStudentDetails()
    {
        int id = Convert.ToInt32(ViewState["id"].ToString());
        try
        {
            ViewState["imagepathhandler"] = "~/ImageHandler.ashx?id=" + (int)ViewState["id"];
            oStudentBLL = new StudentBLL();
            oDataTable = new DataTable();
            oDataTable = oStudentBLL.ShowUpdateStudentDetails(id);
            txtAddress.Text = oDataTable.Rows[0]["address"].ToString();
            txtAdmissionNo.Text = oDataTable.Rows[0]["admissionno"].ToString();
            txtBloodGroup.Text = oDataTable.Rows[0]["bloodgroup"].ToString();
            txtUserName.Value = "not to be changed";
            txtDateOfBirth.Value = oDataTable.Rows[0]["dateofbirth"].ToString();
            txtJoinDate.Value = oDataTable.Rows[0]["joindate"].ToString();
            txtFatherName.Text = oDataTable.Rows[0]["fathername"].ToString();
            txtFirstName.Text = oDataTable.Rows[0]["firstname"].ToString();
            txtLastName.Text = oDataTable.Rows[0]["lastname"].ToString();
            txtEmail.Value = oDataTable.Rows[0]["email"].ToString();
            imgStudent.ImageUrl = "~/ImageHandler.ashx?id=" + (int)ViewState["id"];
            ddlBusFacility.SelectedItem.Text = oDataTable.Rows[0]["busfacility"].ToString();
            txtRollNo.Text = oDataTable.Rows[0]["rollno"].ToString();
            ddlClass.Value = oDataTable.Rows[0]["class"].ToString();
            ddlSection.SelectedItem.Text = oDataTable.Rows[0]["section"].ToString();
            txtContactNo.Value = oDataTable.Rows[0]["contactno"].ToString();


        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oStudentBLL = null;
            oDataTable = null;
        }
    }

    public void GetImageFromDB()
    {
        #region "Fields"
        byte[] byteOfImage = null;
        int id = -1;
        #endregion

        try
        {
            id = Convert.ToInt32(ViewState["id"]);
            oStudent = new BLL.Student();
            oStudentBLL = new StudentBLL();
            oDataTable = new DataTable();

            oStudent.AdmissionNo = txtAdmissionNo.Text.Trim();
            oStudent.FirstName = txtFirstName.Text.Trim();
            oStudent.LastName = txtLastName.Text.Trim();
            oStudent.FatherName = txtFatherName.Text.Trim();
            oStudent.DateOfBirth = txtDateOfBirth.Value.Trim();
            oStudent.JoinDate = txtJoinDate.Value.Trim();
            oStudent.BloodGroup = txtBloodGroup.Text.Trim();
            oStudent.ContactNo = txtContactNo.Value.Trim();
            oStudent.Address = txtAddress.Text.Trim();
            oStudent.Email = txtEmail.Value.Trim();
            oStudent.BusFacility = ddlBusFacility.SelectedItem.Text.ToString();
            oStudent.RollNo = txtRollNo.Text.ToString();
            oStudent.Class1 = ddlClass.Value;
            oStudent.Section = ddlSection.SelectedItem.Text.ToString();
            oStudent.RollNo = txtRollNo.Text;
            oStudent.Id = id;
            byteOfImage = (byte[])oStudentBLL.GetImageFromDB(oStudent);
            ViewState["imagebyteforimage"] = byteOfImage;


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

#endregion

}
