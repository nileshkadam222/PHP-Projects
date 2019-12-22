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

public partial class Parent : System.Web.UI.Page
{
    #region "Fields"
    ParentBLL oParentBLL;
    BLL.Parent oParent;
    DataTable oDataTable;
 
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
                    ViewParentDetails();
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

    protected void btnCancel_Click(object sender, EventArgs e)
    {
        try
        {
            ViewParentDetails();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    protected void gvParentDetails_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvParentDetails.PageIndex = e.NewPageIndex;
            ViewParentDetails();
            //btnSearch_Click(sender, e);
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
            if (txtFirstName.Text == "" && txtLastName.Text == "" && txtStudentFirstName.Text == "" && txtStudentLastName.Text == "" && ddlClass.SelectedItem == null && ddlSection.SelectedItem == null)
            {
                ViewParentDetails();
            }
            else
            {
                oParent = new BLL.Parent();

                oParent.FirstName = txtFirstName.Text.Trim();
                oParent.LastName = txtLastName.Text.Trim();
                if (ddlClass.SelectedItem.Text != "--Select--")
                {
                    oParent.Class = ddlClass.SelectedItem.Text.ToString();
                }
                else
                {
                    oParent.Class = "";
                    ddlClass.SelectedItem.Text = "--Select--";
                }
                if (ddlSection.SelectedItem.Text != "--Select--")
                {
                    oParent.Section = ddlSection.SelectedItem.Text.ToString();
                }
                else
                {
                    oParent.Section = "";
                    ddlSection.SelectedItem.Text = "--Select--";
                }
                oParent.StudentFirstName = txtStudentFirstName.Text.Trim();
                oParent.StudentLastName = txtStudentLastName.Text.Trim();
                oParentBLL = new ParentBLL();
                oDataTable = new DataTable();
                oDataTable = oParentBLL.SearchParent(oParent);
                if (oDataTable.Rows.Count >= 1)
                {
                    gvParentDetails.DataSource = oDataTable;
                    gvParentDetails.DataBind();
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
            oParent = null;
            oParentBLL = null;
        }
    }

    protected void gvParentDetails_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        #region "Fields"
        LinkButton lnkRedirect = null ;
        Label lblRedirect=null;
        Label lblEmail=null;
        Label lblId=null;
        int id;
        #endregion

        try
        {
            if (e.Row.RowType == DataControlRowType.DataRow)
            {
                lnkRedirect = (LinkButton)e.Row.FindControl("lnkFirstLastName");
                lblRedirect = (Label)e.Row.FindControl("lblFirstLastName");
                lblEmail = (Label)e.Row.FindControl("lblEmail");
                if (Session["username"].ToString().Trim() == "admin")
                {
                    lnkRedirect.Visible = true;
                }
                else
                {
                    if (Session["username"].ToString().Trim() == lblEmail.Text.ToString().Trim())
                    {
                        lnkRedirect.Visible = true;
                    }
                    else
                    {
                        lblRedirect.Visible = true;
                    }
                }
                if (lnkRedirect != null)
                {
                    lblId = (Label)e.Row.FindControl("lblSno");
                    id = Convert.ToInt32(lblId.Text);
                    lnkRedirect.Attributes.Add("onclick", "javascript:window.open('RegisterParent.aspx?id=" + id + "','RegisterParent','height=500,width=850, scrollbars=0, resizable=0, status=0, top=75, left=100');return false");
                }
            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            lnkRedirect = null;
            lblRedirect = null;
            lblEmail = null;
            lblId = null;
            id = -1;
        }
    }
    #endregion   

    #region  "Methods"
    public void ViewParentDetails()
    {
        try
        {
            oDataTable = new DataTable();
            oParentBLL = new ParentBLL();
            oDataTable = oParentBLL.ViewParentDetails();
            gvParentDetails.DataSource = oDataTable;
            gvParentDetails.DataBind();
        }
        catch (Exception ex)
        {
            throw ex;
        }

        finally
        {
            oDataTable = null;
            oParentBLL = null;
        }

    }
    #endregion
    
}
