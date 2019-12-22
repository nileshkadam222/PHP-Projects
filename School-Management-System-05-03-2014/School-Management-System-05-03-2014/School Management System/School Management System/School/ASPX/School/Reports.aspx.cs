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

public partial class Reports : System.Web.UI.Page
{

    #region "Fields"
    ExamsBLL oExamsBLL = null;
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
                    SchoolDll oSchoolDll = null;
                    oSchoolDll = new SchoolDll();
                    gvExamDetails.DataSource = oSchoolDll.GetReportsDetails();
                    gvExamDetails.DataBind();

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
    protected void gvExamDetails_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        try
        {
            gvExamDetails.PageIndex = e.NewPageIndex;
        }
        catch (Exception ex)
        {
            
            throw ex;
        }       
     
    }

    protected void gvExamDetails_RowCommand(object sender, GridViewCommandEventArgs e)
    {
        #region "Fields"
        int id = -1; string filePathAndName = string.Empty;
        SalesReports oSalesReports = null;
        #endregion

        try
        {
            if (e.CommandName == "Reports")
            {
                oExamsBLL = new ExamsBLL();
                //oExamsBLL.ReportStoring();
                id = Convert.ToInt32(e.CommandArgument);
                //filePathAndName = oExamsBLL.ReportStoring(id);
                Response.ContentType = "application/pdf";
                Response.WriteFile(filePathAndName);
            }

            if (e.CommandName == "ViewReports")
            {
                oExamsBLL = new ExamsBLL();
                id = Convert.ToInt32(e.CommandArgument);
                oSalesReports = new SalesReports();
                oDataTable = oExamsBLL.ShowExamDetailsOfId(id);
                oSalesReports.DataSource = oDataTable;
                oSalesReports.Run();
                webReports.Report = oSalesReports;
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }
        finally
        {
            oExamsBLL = null;
        }


    }
    #endregion

    
}


