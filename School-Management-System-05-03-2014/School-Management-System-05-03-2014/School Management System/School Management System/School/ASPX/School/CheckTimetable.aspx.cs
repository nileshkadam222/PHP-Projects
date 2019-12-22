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

public partial class CheckTimetable : System.Web.UI.Page
{
    #region "Fields"
    ExamsBLL oExamsBLL = null;
    DataTable oDataTable = null;
    Exams oExams = null;
    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
           
            LoadClass();
            LoadSection();
            DefaultText();
            DisplayAllExamDates();
        }
    } 

    protected void btnSearch_Click(object sender, EventArgs e)
    {
        try
        {
            if (ddlSection.SelectedItem.Text == "--Select--" && ddlClass.SelectedItem.Text == "--Select--" && ddlExamtype.SelectedItem.Text == "--Select--")
            {
                DisplayAllExamDates();
            }
            else
            {
                DisplayTimeTable();
            }
            
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {

        }
    }

    protected void gvTimetable_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvTimetable.PageIndex = e.NewPageIndex;
            if (ddlSection.SelectedItem.Text == "--Select--" && ddlClass.SelectedItem.Text == "--Select--" && ddlExamtype.SelectedItem.Text == "--Select--")
            {
                DisplayAllExamDates();
            }
            else
            {
                DisplayTimeTable();
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }

    }

    protected void btnCancel_Click(object sender, EventArgs e)
    {
        DisplayAllExamDates();
    }

    
    #endregion

    #region "Methods"

    public void DefaultText()
    {
        ddlClass.Items.Insert(0, "--Select--");
        ddlClass.SelectedIndex = 0;
        ddlSection.Items.Insert(0, "--Select--");
        ddlSection.SelectedIndex = 0;
    }

    public void LoadClass()
    {
        try
        {
            oDataTable = new DataTable();
            oExamsBLL = new ExamsBLL();
            oDataTable = oExamsBLL.LoadClass();
            ddlClass.DataSource = oDataTable;
            ddlClass.DataTextField = "class";
            ddlClass.DataTextField = "class";
            ddlClass.DataBind();
      
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
       
    }

    public void LoadSection()
    {
        try
        {
            oDataTable = new DataTable();
            oExamsBLL = new ExamsBLL();
            oDataTable = oExamsBLL.LoadSection();
            ddlSection.DataSource = oDataTable;
            ddlSection.DataTextField = "section";
            ddlSection.DataTextField = "section";
            ddlSection.DataBind();
        }
        catch (Exception ex) 
        {
            
            throw ex;
        }
       
        
    }

    public void DisplayTimeTable()
    {
        try
        {
            oExams = new Exams();
            oDataTable = new DataTable();
            oExamsBLL = new ExamsBLL();
            if (ddlSection.SelectedItem.Text != "--Select--" && ddlClass.SelectedItem.Text != "--Select--" && ddlExamtype.SelectedItem.Text != "--Select--")
            {

                oExams.Class = ddlClass.SelectedItem.Text.Trim();
                oExams.Section = ddlSection.SelectedItem.Text.Trim();
                oExams.Examtype = ddlExamtype.SelectedItem.Text.Trim();
                oDataTable = new DataTable();               
                oDataTable = oExamsBLL.SearchTimeTable(oExams);
                if (oDataTable.Rows.Count >= 1)
                {
                    gvTimetable.Visible = true;
                    gvTimetable.DataSource = oDataTable;
                    gvTimetable.DataBind();
                }
                else
                {
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('No Records Found');", true);                    
                    gvTimetable.Visible = false;
                }
            }
            else if (ddlSection.SelectedItem.Text != "--Select--" || ddlClass.SelectedItem.Text != "--Select--" || ddlExamtype.SelectedItem.Text != "--Select--")
            {
                if (ddlClass.SelectedItem.Text == "--Select--")
                {
                    oExams.Class = "";
                }
                else
                {
                    oExams.Class = ddlClass.SelectedItem.Text.Trim();
                }
                if (ddlSection.SelectedItem.Text == "--Select--")
                {
                    oExams.Section = "";
                }
                else
                {
                    oExams.Section = ddlSection.SelectedItem.Text.Trim();
                }
                if (ddlExamtype.SelectedItem.Text == "--Select--")
                {
                    oExams.Examtype = "";
                }
                else
                {
                    oExams.Examtype = ddlExamtype.SelectedItem.Text.Trim();
                }
                oDataTable = new DataTable();
                oExamsBLL = new ExamsBLL();
                oDataTable = oExamsBLL.SearchTimeTable(oExams);
                if (oDataTable.Rows.Count >= 1)
                {
                    gvTimetable.Visible = true;
                    gvTimetable.DataSource = oDataTable;
                    gvTimetable.DataBind();
                }
                else
                {
                    gvTimetable.Visible = false;
                    ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('No Records Found');", true);
                    //ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('login un succesful please try after some time');", true);
                }
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }
    }

    public void DisplayAllExamDates()
    {
        try
        {
            oDataTable = new DataTable();
            oExamsBLL = new ExamsBLL();
            oDataTable = oExamsBLL.DisplayTimeTable();
            if (oDataTable.Rows.Count > 0)
            {
                gvTimetable.Visible = true;
                gvTimetable.DataSource = oDataTable;
                gvTimetable.DataBind();
            }
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
       
    }

    #endregion

    protected void gvTimetable_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}
