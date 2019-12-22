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

public partial class ExamDetails : System.Web.UI.Page
{
    #region "Fields"
    ExamsBLL oExamsBLL = null;
    BLL.Exams oExams = null;
    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        #region "Fields"
        SchoolDll oSchoolDll = null;
        #endregion
        try
        {
            if (!IsPostBack)
            {
                if (Session["usertype"] != null)
                {
                    oSchoolDll = new SchoolDll();
                    if(Session["usertype"].ToString() !="admin")
                        Response.Redirect("School.aspx");
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
    protected void btnInsert_ServerClick(object sender, EventArgs e)
    {
        #region"Fields"
        string errorMessage = string.Empty;
        #endregion
        try
        {

            oExamsBLL = new ExamsBLL();
            oExams = new BLL.Exams();
            oExams.Class = ddlClass.SelectedItem.Text.ToString();
            oExams.English = txtEnglish.Value.ToString();
            oExams.Examtype = ddlExamtype.SelectedItem.Text.ToString();
            oExams.Hindi = txtHindi.Value.ToString();
            oExams.Maths = txtMaths.Value.ToString();
            oExams.Science = txtScience.Value.ToString();
            oExams.Social = txtSocial.Value.ToString();
            oExams.Section = ddlSection.SelectedItem.Text.ToString();
            oExams.Telugu = txtTelugu.Value.ToString();
            errorMessage = oExamsBLL.InsertTimeTable(oExams);
            if (errorMessage.Length > 0)
                ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>javascript:{alert('" + errorMessage + "')}</script>", false);
            else
                ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>javascript:{alert('Inserted Succesfully')}</script>", false);
        }

        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            errorMessage = "";
            oExams = null;
            oExamsBLL = null;
        }
    }

    #endregion

}
