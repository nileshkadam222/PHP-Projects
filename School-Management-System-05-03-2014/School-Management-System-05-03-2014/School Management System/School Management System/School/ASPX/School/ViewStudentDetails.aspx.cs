using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using BLL;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class ViewStudentDetails : System.Web.UI.Page
{
    #region "Fields"
    DataTable oDataTable = null;
    BLL.Student oStudent = null;
    StudentBLL oStudentBLL = null;
    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (!Page.IsPostBack)
            {
                if (Session["usertype"] != null)
                    ShowStudentDetails();
                else
                    Response.Redirect("Login.aspx");
            }
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
            #region "Fields"
            string admissionNo = "";
            string firstName = "";
            string lastName = "";
            string Class = "";
            string Section = "";

            #endregion
            if (txtAdmissionNo.Text != "" && txtFirstName.Text != "" && txtLastName.Text != "" && ddlClass.SelectedItem.Text == "--Select Class--" && ddlSection.SelectedItem.Text == "--Select Section--")
            {
                ShowStudentDetails();
            }
            else
            {
                oDataTable = new DataTable();
                oStudent = new BLL.Student();
                oStudent.AdmissionNo = txtAdmissionNo.Text.Trim();
                oStudent.FirstName = txtFirstName.Text.Trim();
                oStudent.LastName = txtLastName.Text.Trim();
                if (ddlClass.SelectedItem.Text == "--Select Class--")
                {
                    ddlClass.SelectedItem.Text = "";
                    oStudent.Class1 = ddlClass.SelectedItem.Text.ToString();
                    ddlClass.SelectedItem.Text = "--Select Class--";
                }
                else
                {
                    oStudent.Class1 = ddlClass.SelectedItem.Text.ToString();
                }
                if (ddlSection.SelectedItem.Text == "--Select Section--")
                {
                    ddlSection.SelectedItem.Text = "";
                    oStudent.Section = ddlSection.SelectedItem.Text.ToString();
                    ddlSection.SelectedItem.Text = "--Select Section--";
                }
                else
                {
                    oStudent.Section = ddlSection.SelectedItem.Text.ToString();
                }
                oStudentBLL = new StudentBLL();
                oDataTable = oStudentBLL.StudentSearch(oStudent);
                if (oDataTable.Rows.Count >= 1)
                {
                    gvStudentDetails.DataSource = oDataTable;
                    gvStudentDetails.DataBind();
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
            oDataTable = null;
            oStudent = null;
        }
    }
    protected void gvStudentDetails_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvStudentDetails.PageIndex = e.NewPageIndex;
            ShowStudentDetails();
            btnSearch_Click(sender, e);
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
            ShowStudentDetails();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    protected void gvStudentDetails_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        #region "Fields"
        LinkButton lnkUpdate;
    
        Label lblUpdate1=null;
        Label lblEmail=null;
        Label lblId1;
        int rowIndex = -1;
        int id1 = -1;
        #endregion
        try
        {
            if (e.Row.RowType == DataControlRowType.DataRow)
            {
               
                lnkUpdate = (LinkButton)e.Row.FindControl("lnkFirstLastName");
                lblUpdate1 = (Label)e.Row.FindControl("lblFirstLastName");
                lblEmail=(Label)e.Row.FindControl("lblEmail");
               if (Session["username"].ToString().Trim() == "admin")
               {
                   lnkUpdate.Visible = true;
               }
               else
               {
                   if (Session["username"].ToString().Trim() == lblEmail.Text.Trim())
                   {
                       lnkUpdate.Visible = true;
                   }
                   else
                   {
                       lblUpdate1.Visible = true;
                   }
               }
                lblId1 = (Label)e.Row.FindControl("lblSno");
                rowIndex = e.Row.RowIndex;
                if (lnkUpdate != null)
                {
                    id1 = Convert.ToInt32(lblId1.Text);
                    lnkUpdate.Attributes.Add("onclick", "javascript:window.open('Student.aspx?id=" + id1 + "','UpdateStudent','height=530,width=725, scrollbars=0, resizable=0, status=0, top=75, left=200');return false");

                }
            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            lnkUpdate = null;
            lblId1 = null;
            lblUpdate1 = null;
            lblEmail = null;
        }
    }
    #endregion

    #region "Methods"
    public void ShowStudentDetails()
    {
        try
        {
            oStudentBLL = new StudentBLL();
            oDataTable = oStudentBLL.ShowStudentDetails();
            if (oDataTable.Rows.Count > 0)
            {
                gvStudentDetails.DataSource = oDataTable;
                gvStudentDetails.DataBind();

            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('no records found')", true);
            }
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
