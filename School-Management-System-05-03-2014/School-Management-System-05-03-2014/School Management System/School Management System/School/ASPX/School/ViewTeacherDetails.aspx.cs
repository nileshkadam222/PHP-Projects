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

public partial class ViewTeacherDetails : System.Web.UI.Page
{

    #region "Fields"
    DataTable oDataTable = null;
    TeacherBLL oTeacherBLL = null;
    BLL.Teacher oTeacher = null;
    DataTable oDataTable1 = null;
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
                    gvTeacherDetails.DataSource = ShowStudentDetails();
                    gvTeacherDetails.DataBind();
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
    protected void txtCancel_Click(object sender, EventArgs e)
    {
        try
        {
            txtName.Text = "";
            txtQualification.Text = "";
            txtEmail.Value = "";
            ddlSubject.SelectedIndex = 0;
            ShowStudentDetails();
        }
        catch (Exception ex)
        {
            
            throw ex; 
        }
        
    }
    protected void gvTeacherDetails_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvTeacherDetails.PageIndex = e.NewPageIndex;
            ShowStudentDetails();
            btnSearch_Click(sender, e);
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void btnSearch_Click(object sender, EventArgs e)
    {
        try
        {
            if (txtName.Text == "" && ddlSubject.SelectedIndex == 0 && txtQualification.Text == "" && txtEmail.Value == "")
            {
                ShowStudentDetails();
            }
            else
            {
                oTeacher = new BLL.Teacher();
                oTeacherBLL = new TeacherBLL();
                oDataTable = new DataTable();
                oTeacher.Name = txtName.Text.Trim();
                if (ddlSubject.SelectedItem.Text == "--Select Subject--")
                {
                    oTeacher.Subject = "";

                }
                else
                {
                    oTeacher.Subject = ddlSubject.SelectedItem.Text.ToString();
                }
                oTeacher.Qualification = txtQualification.Text.Trim();
                oTeacher.Email = txtEmail.Value.Trim();
                oDataTable = oTeacherBLL.SearchTeacherDetails(oTeacher);
                if (oDataTable.Rows.Count >= 1)
                {
                    gvTeacherDetails.DataSource = oDataTable;
                    gvTeacherDetails.DataBind();
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('No Records Found');", true);
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
            oDataTable = null;
        }
    }

    protected void gvTeacherDetails_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        #region "Fields"
        LinkButton lnkRedirect1 = null;
        Label lblId = null;
        Label lblName = null;
        Label lblEmail = null;
        int rowIndex = -1;

        #endregion
        try
        {
            if (e.Row.RowType == DataControlRowType.DataRow)
            {

                lnkRedirect1 = (LinkButton)e.Row.FindControl("lnkName");
                lblName = (Label)e.Row.FindControl("lblName");
                lblEmail = (Label)e.Row.FindControl("lblEmail");
                if (Session["username"] != null)
                {
                    if (Session["username"].ToString().Trim() == "admin")
                    {
                        lnkRedirect1.Visible = true;
                    }
                    else
                    {
                        if (Session["username"].ToString().Trim() == lblEmail.Text.Trim())
                        {
                            lnkRedirect1.Visible = true;
                        }
                        else
                            lblName.Visible = true;
                    }
                }
                lblId = (Label)e.Row.FindControl("lblSno");
                int id1 = Convert.ToInt32(lblId.Text);
                rowIndex = e.Row.RowIndex;


                if (lnkRedirect1 != null)
                {
                    lnkRedirect1.Attributes.Add("onclick", "javascript:window.open('Teacher.aspx?id=" + id1 + "','UpdateTeacher','height=350,width=850, scrollbars=0, resizable=0, status=0, top=170, left=80');return false");


                }

            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            lnkRedirect1 = null;
            lnkRegisterTeacher = null;
            lblName = null;
            lblEmail = null;
        }
    }
    #endregion

    #region "Methods"

    public DataTable ShowStudentDetails()
    {
        try
        {
            oTeacherBLL = new TeacherBLL();
            oDataTable = oTeacherBLL.ShowTeacherDetails();
            if (oDataTable.Rows.Count >= 1)
            {
                gvTeacherDetails.DataSource = oDataTable;
                gvTeacherDetails.DataBind();

            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('No Records Found');", true);
            }
            return oDataTable;
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oTeacherBLL = null;
            oDataTable = null;
        }
    }
    #endregion
    
}
