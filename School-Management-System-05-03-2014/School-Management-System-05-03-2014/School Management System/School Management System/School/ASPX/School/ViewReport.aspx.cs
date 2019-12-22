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
using DataDynamics.ActiveReports.Export.Pdf;

public partial class ViewReport : System.Web.UI.Page
{
    #region "Fields"
    ExamsBLL oExamsBLL = null;
    DataTable oDataTable = null;
    int totalAnnual = 0;
    int totalHalfYearly = 0;
    int totalQuaterly = 0;
    int totalUnitTest4 = 0;
    int totalUnitTest3 = 0;
    int totalUnitTest2 = 0;
    int totalUnitTest1 = 0;

    int UnitTest1 = 0;
    int UnitTest2 = 0;
    int UnitTest3 = 0;
    int UnitTest4 = 0;
    int Quaterly = 0;
    int HalfYearly = 0;
    int Annual = 0;
 
    string studentName = string.Empty;
    string Class = string.Empty;
    string section = string.Empty;
    int id = -1;
    int rollNo = -1;
    PdfExport oPdfExport = new PdfExport();
    FinalMarksReport oFinalMarksReport = new FinalMarksReport();



    #endregion

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (Session["username"].ToString() != null)
            {
                ReportGeneration();
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, this.GetType(), "message", "location.href='Login.aspx';", true);
            }
        }
        catch (Exception ex)
        {
            ScriptManager.RegisterStartupScript(this, this.GetType(), "message", "location.href='Login.aspx';", true);
            
        }
      
        
    }

    #endregion
    #region "Methods"

    public void ReportGeneration()
    {
       

        oDataTable = new DataTable();
        studentName = Request.QueryString["studentname"];
        Class = Request.QueryString["class"];
        section = Request.QueryString["section"];
        rollNo = Convert.ToInt32(Request.QueryString["rollno"].ToString());

        oExamsBLL = new ExamsBLL();
        oDataTable = oExamsBLL.MarksReportOfStudent(studentName, Class, section, rollNo);
        oFinalMarksReport.DataSource = oDataTable;
        oFinalMarksReport.Run();
        WebViewer1.Report = oFinalMarksReport;
        string filePathName = ConfigurationManager.AppSettings["Reportstore"].ToString() + studentName + " " + Class + " " + section + " " + rollNo + ".Pdf";
        oPdfExport.Export(oFinalMarksReport.Document, filePathName);
    }

    #endregion
    protected void btnClose_Click(object sender, EventArgs e)
    {
        id = Convert.ToInt32(Request.QueryString["ID"].ToString());
        studentName = Request.QueryString["studentname"];
        Class = Request.QueryString["class"];
        section = Request.QueryString["section"];
        rollNo = Convert.ToInt32(Request.QueryString["rollno"].ToString());

        Response.Redirect("ViewProgressReport.aspx?ID="+id+ "&studentname=" + studentName + " &class=" + Class + " &section="  + section + " &rollno=" + rollNo + "");
    }
}
