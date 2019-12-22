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

public partial class ViewMarks : System.Web.UI.Page
{
    #region "Fields"
    ExamsBLL oExamsBLL = null;
    Exams oExams = null;
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
                    DropDownList();
                    DisplayMarks();
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
    protected void btnSearch_Click(object sender, EventArgs e)
    {
        DisplayMarks();
    }
    protected void ddlClass_SelectedIndexChanged(object sender, EventArgs e)
    {
        try
        {
            if (ddlSection.SelectedItem.Text != "--Select--" && ddlClass.SelectedItem.Text != "--Select--")
            {
                LoadStudent_ClassSection();
            }
            else
            {
                ddlStudentName.Items.Clear();
                DropDownList();
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
            if (ddlClass.SelectedItem.Text != "--Select--" && ddlSection.SelectedItem.Text != "--Select--")
            {
                LoadStudent_ClassSection();
            }
            else
            {
                ddlStudentName.Items.Clear();
                DropDownList();
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }
    }
       
    protected void gvStudentMarks_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvStudentMarks.PageIndex = e.NewPageIndex;
            DisplayMarks();

        }
        catch (Exception ex)
        {

            throw ex;
        }

    }
    protected void gvStudentMarks_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        try
        {
            if (e.Row.RowType == DataControlRowType.DataRow)
            {
                LinkButton lnkGenerateReport = (LinkButton)e.Row.FindControl("lnkGenerateReport");
                Label lblReport = (Label)e.Row.FindControl("lblReport");
                Label lblEmail = (Label)e.Row.FindControl("lblEmail");
                string name = lblEmail.Text.ToString();
                string sessionna = Session["usertype"].ToString();
                if (Session["username"].ToString().Trim() == "admin" || Session["usertype"].ToString() == "teacher")
                {
                    lnkGenerateReport.Visible = true;
                    lblReport.Visible = false;
                }
                else if (Session["username"].ToString() == lblEmail.Text.Trim() || Session["studentemail"].ToString() == lblEmail.Text.Trim())
                {

                    lblEmail.Text = Session["username"].ToString().Trim();
                    lnkGenerateReport.Visible = true;
                    lblReport.Visible = false;
                }
                else
                {
                    lblReport.Visible = true;
                    lnkGenerateReport.Visible = false;
                }
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }
       
        
    }
    protected void gvStudentMarks_RowCommand(object sender, GridViewCommandEventArgs e)
    {
        try
        {
            if (e.CommandName == "Sample")
            {
                int id = int.Parse(e.CommandArgument.ToString());
                LinkButton lnkButton = (LinkButton)gvStudentMarks.Rows[id].FindControl("lnkGenerateReport");
                Label lblStudentName = (Label)gvStudentMarks.Rows[id].FindControl("lblStudentName");
                Label lblSection = (Label)gvStudentMarks.Rows[id].FindControl("lblSection");
                Label lblClass = (Label)gvStudentMarks.Rows[id].FindControl("lblClass");
                Label lblRollno = (Label)gvStudentMarks.Rows[id].FindControl("lblRollno");

                if (lblStudentName.Text != "")
                    ViewState["studentname"] = lblStudentName.Text;
                else
                    ViewState["studentname"] = null;

                ViewState["section"] = lblSection.Text;

                ViewState["class"] = lblClass.Text;

                if (lblRollno.Text != "")
                    ViewState["rollno"] = lblRollno.Text;
                else
                    ViewState["rollno"] = null;
                Response.Redirect("ViewProgressReport.aspx?ID=" + Convert.ToInt32(e.CommandArgument) + " &studentname=" + ViewState["studentname"] + " &class=" + ViewState["class"] + " &section=" + ViewState["section"] + " &rollno=" + ViewState["rollno"] + "");
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
            ddlStudentName.DataSource = null;
            ddlStudentName.Items.Clear();
            ddlStudentName.Items.Insert(0, "--Select--");
            ddlStudentName.SelectedIndex = 0;
            DisplayMarks();
        }
        catch (Exception ex)
        {

            throw ex;
        }

    }


#endregion

    #region "Methods"
    public void DisplayMarks()
    {
           #region "Fields"
        string returnMessage = "";
        #endregion
        try
        {
            oExams = new Exams();
            oDataTable = new DataTable();
            if (!string.IsNullOrEmpty(txtRollNo.Text) || ddlStudentName.SelectedItem.Text != "--Select--" || ddlClass.SelectedItem.Text != "--Select--" || ddlSection.SelectedItem.Text != "--Select--")
            {
                if (ddlStudentName.SelectedItem.Text.ToString() != "--Select--")
                    oExams.StudentName = ddlStudentName.SelectedItem.Text.ToString();
                else
                    oExams.StudentName = "";
                oExams.Class = ddlClass.SelectedItem.Text.ToString();
                oExams.Section = ddlSection.SelectedItem.Text.ToString();

                if (txtRollNo.Text != "")
                    oExams.Rollno = Convert.ToInt32(txtRollNo.Text);
                else
                    oExams.Rollno = 0;

                oExamsBLL = new ExamsBLL();
                oDataTable = oExamsBLL.SearchMarks(oExams, out returnMessage);
                if (returnMessage.Length > 0)
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + returnMessage + "')", true);
                gvStudentMarks.DataSource = oDataTable;
                gvStudentMarks.DataBind();

            }
            else
            {
                oExamsBLL = new ExamsBLL();
                oDataTable = new DataTable();
                oDataTable=oExamsBLL.ShowAllStudentMarks();
                gvStudentMarks.DataSource = oDataTable;
                gvStudentMarks.DataBind();                
            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oExams = null;
            oExamsBLL = null;
            oDataTable = null;
        }

    }

    public void DropDownList()
    {
        ddlStudentName.Items.Insert(0, "--Select--");
        ddlStudentName.SelectedIndex = 0;

    }

    public void LoadStudent_ClassSection()
    {
        try
        {
            oExamsBLL = new ExamsBLL();
            oExams = new Exams();
            oExams.Class = ddlClass.SelectedItem.Text.ToString();
            oExams.Section = ddlSection.SelectedItem.Text.ToString();
            oDataTable = oExamsBLL.StudentNameForMarks(oExams);
            oDataTable.Columns.Add("studentname", typeof(string), "firstname+' '+lastname");
            ddlStudentName.DataSource = oDataTable;
            ddlStudentName.DataTextField = "studentname";
            ddlStudentName.DataValueField = "studentname";
            ddlStudentName.DataBind();
            DropDownList();
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            oExams = null;
            oExamsBLL = null;
            oDataTable = null;
        }

    }

    #endregion





  
}
