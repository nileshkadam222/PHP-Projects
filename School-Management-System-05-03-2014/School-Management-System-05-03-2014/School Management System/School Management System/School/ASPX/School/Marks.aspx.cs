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

public partial class Marks : System.Web.UI.Page
{
    #region "Fields"
    ExamsBLL oExamsBLL = null;
    BLL.Exams oExams = null;
    DataTable oDataTable = null;
    string Class, Section;
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
                    ddlStudentName.Items.Insert(0, "--Select--");
                    ddlStudentName.SelectedIndex = 0;
                    ddlRollNo.Items.Insert(0, "--Select--");
                    ddlRollNo.SelectedIndex = 0;
                    btnInsertUpdate.Visible = false;
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
    protected void ddlClass_SelectedIndexChanged(object sender, EventArgs e)
    {
        try
        {
            if (ddlClass.SelectedItem.Text != "--Select--")
            {
                string Class = ddlClass.SelectedItem.Text.ToString();
                string Section = ddlSection.SelectedItem.Text.ToString();
                oDataTable = new DataTable();
                oDataTable = StudentName();
                oDataTable.Columns.Add("firstnameAndlastname", typeof(string), "firstname+' '+lastname");
                ddlStudentName.DataSource = oDataTable;
                ddlStudentName.DataBind();
                ddlStudentName.Items.Insert(0, "--Select--");
                ddlStudentName.SelectedIndex = 0;
                ddlRollNo.Items.Insert(0, "--Select--");
                ddlRollNo.SelectedIndex = 0;
            }
            else
            {
                ddlStudentName.Items.Insert(0, "--Select--");
                btnInsertUpdate.Visible = false;
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
    protected void ddlSection_SelectedIndexChanged(object sender, EventArgs e)
    {
        try
        {
            if (ddlSection.SelectedItem.Text != "--Select--")
            {
                string Class = ddlClass.SelectedItem.Text.ToString();
                string Section = ddlSection.SelectedItem.Text.ToString();
                oDataTable = new DataTable();
                oDataTable = StudentName();
                oDataTable.Columns.Add("firstnameAndlastname", typeof(string), "firstname+' '+lastname");
                ddlStudentName.DataSource = oDataTable;
            
                ViewState["DataTable"] = oDataTable;
                int rollno1 = Convert.ToInt32(oDataTable.Rows[0]["rollno"]);
                ddlStudentName.DataTextField = "firstnameAndlastname";
                ddlStudentName.DataValueField = "firstnameAndlastname";
               
               
                ddlStudentName.DataBind();
             
                ddlStudentName.Items.Insert(0, "--Select--");
                ddlStudentName.SelectedIndex = 0;
                ddlRollNo.Items.Insert(0, "--Select--");
                ddlRollNo.SelectedIndex = 0;


            }
            else
            {
                ddlStudentName.Items.Insert(0, "--Select--");
                btnInsertUpdate.Visible = false;
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
    protected void gvStudentExamMarks_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        try
        {
            if (e.Row.RowType == DataControlRowType.Header)
            {
                Label oLabel1 = (Label)e.Row.FindControl("lblSubjectName");
                oLabel1.Text = Session["subjectName"].ToString();
            }
            if (e.Row.RowType == DataControlRowType.DataRow)
            {
                TextBox txtMarks = (TextBox)e.Row.FindControl("txtSubjectMarks");
                if (txtMarks.Text == "-")
                {
                    txtMarks.Text = "";
                }
                if (txtMarks.Text == "")
                {
                    btnInsertUpdate.Text = "Insert";
                }
                else
                {
                    btnInsertUpdate.Text = "Update";
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
            ddlStudentName.DataSource = null;
            ddlStudentName.Items.Clear();
            ddlStudentName.Items.Insert(0, "--Select--");
            gvStudentExamMarks.Visible = false;
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    protected void btnInsertUpdate_Click(object sender, EventArgs e)
    {
        #region "Fields"
        string returnMessage = "";
        oExams = new Exams();
        oExamsBLL = new ExamsBLL();
        Label lblRollno1 = new Label();
        Label lblStudentName1 = new Label();
        Label lblExamType1 = new Label();
        string Class = string.Empty;
        string section = string.Empty;
        TextBox txtStudentMarks = new TextBox();
        Label lblSubjectName = new Label();

        #endregion

        try
        {

            for (int i = 0; i < gvStudentExamMarks.Rows.Count; i++)
            {
                txtStudentMarks.Text = ((TextBox)gvStudentExamMarks.Rows[i].FindControl("txtSubjectMarks")).Text;
                lblStudentName1.Text = ((Label)gvStudentExamMarks.Rows[i].FindControl("lblStudentName")).Text;

                foreach (GridViewRow row in gvStudentExamMarks.Rows)
                {

                    lblRollno1.Text = ((Label)gvStudentExamMarks.Rows[i].FindControl("lblRollno")).Text;

                    lblExamType1.Text = ((Label)gvStudentExamMarks.Rows[i].FindControl("lblExamType")).Text;
                    Class = ddlClass.SelectedItem.Text.ToString();
                    txtStudentMarks.Text = ((TextBox)gvStudentExamMarks.Rows[i].FindControl("txtSubjectMarks")).Text;
                    section = ddlSection.SelectedItem.Text.ToString();
                    lblSubjectName.Text = Session["subjectName"].ToString();

                    if (btnInsertUpdate.Text == "Insert")
                    {
                        oExams.Rollno = Convert.ToInt32(lblRollno1.Text);
                        oExams.StudentName = lblStudentName1.Text;
                        oExams.SubjectName = lblSubjectName.Text;
                        oExams.SubjectMarks = txtStudentMarks.Text;
                        oExams.Class = Class;
                        oExams.Section = section;
                        oExams.Examtype = lblExamType1.Text;
                        oExams.Message = "update";
                        oExamsBLL.insertorupdatemarks(oExams, out returnMessage);
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('inserted')", true);

                    }
                    else
                    {
                        oExams.Rollno = Convert.ToInt32(lblRollno1.Text);
                        oExams.StudentName = lblStudentName1.Text;
                        oExams.SubjectName = lblSubjectName.Text;
                        oExams.SubjectMarks = txtStudentMarks.Text;
                        oExams.Class = Class;
                        oExams.Section = section;
                        oExams.Examtype = lblExamType1.Text;
                        oExams.Message = "update";
                        oExamsBLL.insertorupdatemarks(oExams, out returnMessage);
                        ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + returnMessage + "')", true);
                    }
                }

            }
        }
        catch (Exception ex)
        {
            ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert(''Server error'.Please try after some time ')", true);
        }
        finally
        {
            oExams = null;
            oExamsBLL = null;
        }
    }


    protected void gvStudentExamMarks_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvStudentExamMarks.PageIndex = e.NewPageIndex;
            DisplaySearchedRecords();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }

    protected void gvStudentExamMarks_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
 
    protected void btnSearchMarks_Click(object sender, EventArgs e)
    {
        try
        {
            DisplaySearchedRecords();
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
        
    }
    #endregion

    #region"Methods"
    public DataTable StudentName()
    {
        try
        {
            oExamsBLL = new ExamsBLL();
            oDataTable = new DataTable();
            oExams = new Exams();
            oExams.Class = ddlClass.SelectedItem.Text.ToString();
            oExams.Section = ddlSection.SelectedItem.Text.ToString();
            oDataTable = oExamsBLL.StudentName(oExams);
            return oDataTable;
        }
        catch (Exception ex)
        {
            throw ex;
        }
    }

    public void DisplaySearchedRecords()
    {
        try
        {
            oExams = new Exams();
            string message = "";
            gvStudentExamMarks.Visible = false;
            string Class = ddlClass.SelectedItem.Text.ToString();
            string Section = ddlSection.SelectedItem.Text.ToString();
            oDataTable = new DataTable();
            if (ddlRollNo.SelectedIndex != 0)
            {
                int rollno = Convert.ToInt32(ddlRollNo.SelectedItem.Value);
                oExams.Rollno = rollno;
            }
           
            oExamsBLL = new ExamsBLL();
            oExams.Class = Class;
            oExams.Section = Section;
            oExams.SubjectName = Session["subjectName"].ToString();
        
            oExams.Examtype = ddlExamtype.SelectedItem.Text.ToString();
            if (ddlStudentName.SelectedIndex == 0 || ddlStudentName.SelectedItem.Text == "--Select--")
            {
                oExams.StudentName = "";
                oExams.Rollno = 0;
            }

            else
            {
                oExams.StudentName = ddlStudentName.SelectedItem.Text.ToString();
                if(ddlRollNo.SelectedIndex == 0 || ddlRollNo.SelectedItem.Text == "--Select--")
                 oExams.Rollno = 0;
              
                else
                 oExams.Rollno = Convert.ToInt32(ddlRollNo.SelectedItem.Text);
            }
          
                oDataTable = oExamsBLL.SearchStudent(oExams, out message);
          

            if (oDataTable.Rows.Count > 0)
            {
                btnInsertUpdate.Visible = true;
                gvStudentExamMarks.Visible = true;
                gvStudentExamMarks.DataSource = oDataTable;
                gvStudentExamMarks.DataBind();
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "javascript:alert('" + message + "')", true);
                btnInsertUpdate.Visible = false;
            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
    }
    #endregion




    protected void ddlRollNo_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
    protected void ddlStudentName_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (ddlStudentName.SelectedIndex != 0)
        {
            string Class = ddlClass.SelectedItem.Text;
            string section = ddlSection.SelectedItem.Text;
            string studentName = ddlStudentName.SelectedItem.Text;

            oExams=new Exams();
            oExamsBLL=new ExamsBLL();
            oDataTable = new DataTable();
            oExams.Class = ddlClass.SelectedItem.Text.ToString();
            oExams.Section = ddlSection.SelectedItem.Text.ToString();
            oExams.StudentName = ddlStudentName.SelectedItem.Text.ToString();

            oDataTable = oExamsBLL.RollNo(oExams);
          
            ddlRollNo.DataSource = oDataTable;

            ddlRollNo.DataTextField = "rollno";
            ddlRollNo.DataValueField = "rollno";
        
            ddlRollNo.DataBind();
     
            ddlRollNo.Items.Insert(0, "--Select--");
            ddlRollNo.SelectedIndex = 0;
        }
    }
}

