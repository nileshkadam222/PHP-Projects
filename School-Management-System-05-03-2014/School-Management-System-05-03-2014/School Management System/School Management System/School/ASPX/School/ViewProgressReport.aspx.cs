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

public partial class ViewProgressReport : System.Web.UI.Page
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
    int ik=0;
    int ik1 = 0;
    int ik2 = 0;
    int ik3 = 0;
    int ik4 = 0;
    int ik5 = 0;
    int ik6 = 0;
    int am = 0;
    bool flagAnnual;
    bool flag1;
    bool flagHfly;
    bool flagQtrly;
    bool flagUt4;
    bool flagUt3;
    bool flagUt2;
    bool flagUt1;
    int countAnnual = 0;
    int countHfly = 0;
    int countQtrly= 0;
    int countUt4 = 0;
    int countUt3 = 0;
    int countUt2 = 0;
    int countUt1 = 0;
    #endregion

    #region "Events"


    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
            if (Session["usertype"] != null)
            {
                ViewStudentMarks();
           
            }
            else
            {
                //Response.Redirect("Login.aspx");
                 ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "location.href='Login.aspx';", true);
            }

        }
    }

    protected void btnGenerateReport_Click(object sender, EventArgs e)
    {
         try
        {

            #region "Fields"
            string studentName = string.Empty;
            string Class = string.Empty;
            string section = string.Empty;
            int id = -1;
            int rollNo = -1;
            PdfExport oPdfExport = new PdfExport();
            FinalMarksReport oFinalMarksReport = new FinalMarksReport();
            #endregion

            oDataTable = new DataTable();

            id = Convert.ToInt32(Request.QueryString["ID"].ToString());
            studentName = Request.QueryString["studentname"];
            Class = Request.QueryString["class"];
            section = Request.QueryString["section"];
            rollNo = Convert.ToInt32(Request.QueryString["rollno"].ToString());

            Response.Redirect("ViewReport.aspx?ID="+id+ "&studentname=" + studentName + " &class=" + Class + " &section=" + section + " &rollno=" + rollNo + "");


        }
        catch(Exception ex)
  
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
                Label lblSubjectName = (Label)e.Row.FindControl("lblSubjectName");
                Label lblUnitTest1 = (Label)e.Row.FindControl("lblUnitTest1");
                Label lblUnitTest2 = (Label)e.Row.FindControl("lblUnitTest2");
                Label lblUnitTest3 = (Label)e.Row.FindControl("lblUnitTest3");
                Label lblUnitTest4 = (Label)e.Row.FindControl("lblUnitTest4");
                Label lblQuaterly = (Label)e.Row.FindControl("lblQuaterly");
                Label lblHalfYearly = (Label)e.Row.FindControl("lblHalfYearly");
                Label lblAnnual = (Label)e.Row.FindControl("lblAnnual");

                string upperText = lblSubjectName.Text;
                string sample = lblUnitTest3.Text;
                lblSubjectName.Text = Char.ToUpperInvariant(upperText[0]) + upperText.Substring(1);


            //........................replacing absent with 'A' for all examtypes

                if (lblUnitTest1.Text == "absent")
                {
                    lblUnitTest1.Text = "A";
                }

                

                if (lblUnitTest2.Text == "absent")
                {
                    lblUnitTest2.Text = "A";
                }

                               
                if (lblUnitTest3.Text == "absent")
                {
                    lblUnitTest3.Text = "A";
                }
                                                
                if (lblUnitTest4.Text == "absent")
                {
                    lblUnitTest4.Text = "A";
                }
                           
                if (lblQuaterly.Text == "absent")
                {
                    lblQuaterly.Text = "A";
                }

                if (lblHalfYearly.Text == "absent")
                {
                    lblHalfYearly.Text = "A";
                }
             
                if (lblAnnual.Text == "absent")
                {
                    lblAnnual.Text = "A";
                }
                

                //................................................................................................//  calculating totals for all examtypes


                if (!string.IsNullOrEmpty(lblAnnual.Text))
                {
                    if (lblAnnual.Text == "-" || lblAnnual.Text == "A")
                    {
                        if (lblAnnual.Text == "A")
                        {
                            totalAnnual += Annual;
                            flag1 = true;
                        }
                        else if (lblAnnual.Text == "-")
                        {
                            totalAnnual += Annual;
                            flag1 = true;
                            countAnnual = countAnnual + 1;
                            if (countAnnual == 6)
                            {
                                flagAnnual = true;

                            }
                        }
                    }

                    else if (lblAnnual.Text != "-" && lblAnnual.Text != "A")
                    {
                        totalAnnual += Convert.ToInt32(lblAnnual.Text);
                        flag1 = true;
                    }

                }



                if (!string.IsNullOrEmpty(lblHalfYearly.Text))
                {
                    if (lblHalfYearly.Text == "-" || lblHalfYearly.Text == "A")
                    {

                        if (lblHalfYearly.Text == "A")
                        {
                            totalHalfYearly += HalfYearly;
                            flag1 = true;
                        }
                        else if (lblHalfYearly.Text == "-")
                        {
                            totalHalfYearly += HalfYearly;
                            flag1 = true;
                            countHfly = countHfly + 1;
                            if (countHfly == 6)
                            {
                                flagHfly = true;

                            }
                        }
                    }
                    else if (lblHalfYearly.Text != "-" && lblHalfYearly.Text != "A")
                    {
                        totalHalfYearly += Convert.ToInt32(lblHalfYearly.Text);
                        flag1 = true;
                    }
                }
               
             


                if (!string.IsNullOrEmpty(lblQuaterly.Text))
                {
                    if (lblQuaterly.Text == "-" || lblQuaterly.Text == "A")
                    {
                        if (lblQuaterly.Text == "A")
                        {
                            totalQuaterly += Quaterly;
                            flag1 = true;
                        }
                        else if (lblQuaterly.Text == "-")
                        {
                            totalQuaterly += Quaterly;
                            flag1 = true;
                            countQtrly = countQtrly + 1;
                            if (countQtrly == 6)
                            {
                                flagQtrly = true;

                            }
                        }
                    }
                    else if (lblQuaterly.Text != "-" && lblQuaterly.Text != "A")
                    {
                        totalQuaterly += Convert.ToInt32(lblQuaterly.Text);
                        flag1 = true;
                    }
              
                }
              




                if (!string.IsNullOrEmpty(lblUnitTest1.Text))                                          //.......................
                {
                    if (lblUnitTest1.Text == "-" || lblUnitTest1.Text == "A")
                    {     
                     if (lblUnitTest1.Text == "A")
                        {
                            totalUnitTest1 += UnitTest1;
                            flag1 = true;
                        }
                        else if (lblUnitTest1.Text == "-")
                        {
                            totalUnitTest1 += UnitTest1;
                            flag1 = true;
                            countUt1 = countUt1 + 1;
                            if (countUt1 == 6)
                            {
                                flagUt1 = true;

                            }
                        }
                    }
      
                else if (lblUnitTest1.Text != "-" && lblUnitTest1.Text != "A")
                {
                    totalUnitTest1 += Convert.ToInt32(lblUnitTest1.Text);
                    flag1 = true;
                }
               
            }




                //..................................................




                if (!string.IsNullOrEmpty(lblUnitTest2.Text))
                {
                    if (lblUnitTest2.Text == "-" || lblUnitTest2.Text == "A")
                    {     
                     if (lblUnitTest2.Text == "A")
                        {
                            totalUnitTest2 += UnitTest2;
                            flag1 = true;
                        }
                        else if (lblUnitTest2.Text == "-")
                        {
                            totalUnitTest2 += UnitTest2;
                            flag1 = true;
                            countUt2 = countUt2 + 1;
                            if (countUt2 == 6)
                            {
                                flagUt2 = true;

                            }
                        }
                    }
               
                    else if (lblUnitTest2.Text != "-" && lblUnitTest2.Text != "A")
                    {
                        totalUnitTest2 += Convert.ToInt32(lblUnitTest2.Text);
                        flag1 = true;
                    }
               
                }
                //................................................................


                if (!string.IsNullOrEmpty(lblUnitTest3.Text))
                {
                    if (lblUnitTest3.Text == "-" || lblUnitTest3.Text == "A")
                    {
                        if (lblUnitTest3.Text == "A")
                        {
                            totalUnitTest3 += UnitTest3;
                            flag1 = true;
                        }
                        else if (lblUnitTest3.Text == "-")
                        {
                            totalUnitTest3 += UnitTest3;
                            flag1 = true;
                            countUt3 = countUt3 + 1;
                            if (countUt3 == 6)
                            {
                                flagUt3 = true;

                            }
                        }

                    }

                    else if (lblUnitTest3.Text != "-" && lblUnitTest3.Text != "A")
                    {
                        totalUnitTest3 += Convert.ToInt32(lblUnitTest3.Text);
                        flag1 = true;
                    }

                }


                if (!string.IsNullOrEmpty(lblUnitTest4.Text))
                {
                    if (lblUnitTest4.Text == "-" || lblUnitTest4.Text == "A")
                    {


                        if (lblUnitTest4.Text == "A")
                        {
                            totalUnitTest4 += UnitTest4;
                            flag1 = true;
                        }
                        else if (lblUnitTest4.Text == "-")
                        {
                            totalUnitTest4 += UnitTest4;
                            flag1 = true;
                            countUt4 = countUt4 + 1;
                            if (countUt4 == 6)
                            {
                                flagUt4 = true;

                            }
                        }
                    }

                    else if (lblUnitTest4.Text != "-" && lblUnitTest4.Text != "A")
                    {
                        totalUnitTest4 += Convert.ToInt32(lblUnitTest4.Text);
                        flag1 = true;
                    }

                }


            }
    
            //.....................................................................................................................  footer(Assigning totals to labels in footer and clearing the labels if there are null values)

            if (e.Row.RowType == DataControlRowType.Footer)
            {
                
                foreach (GridViewRow row1 in gvStudentMarks.Rows)
                {
                    Label lblAnnual1 = (Label)row1.FindControl("lblAnnual");

                    if (!string.IsNullOrEmpty(lblAnnual1.Text))
                    {
                        Label lblTotalAnnual = (Label)e.Row.FindControl("lblTotalAnnual");
                        if (flag1 == true)
                        {
                            lblTotalAnnual.Text = totalAnnual.ToString();
                        }
                        if (flagAnnual == true)
                        {
                            lblAnnual1.Text = "";
                            lblTotalAnnual.Text = "";

                        }

                    }


                }
             



                //......................................................................................................................................


                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblHalfYearly1 = (Label)row.FindControl("lblHalfYearly");
                    if (!string.IsNullOrEmpty(lblHalfYearly1.Text))
                    {
                        Label lblTotalHalfYearly = (Label)e.Row.FindControl("lblTotalHalfYearly");
                        if (flag1 == true)
                        {
                            lblTotalHalfYearly.Text = totalHalfYearly.ToString();
                        }
                        if (flagHfly == true)
                        {
                            lblHalfYearly1.Text = "";
                            lblTotalHalfYearly.Text = "";
                        }

                    }

                }
               

                //......................................................................................................................................


                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblQuaterly1 = (Label)row.FindControl("lblQuaterly");
                    if (!string.IsNullOrEmpty(lblQuaterly1.Text))
                    {
                        Label lblTotalQuaterly = (Label)e.Row.FindControl("lblTotalQuaterly");
                        if (flag1 == true)
                        {
                            lblTotalQuaterly.Text = totalQuaterly.ToString();
                        }
                        if (flagQtrly == true)
                        {
                            lblQuaterly1.Text = "";
                            lblTotalQuaterly.Text = "";
                        }

                    }

                }


                //......................................................................................................................................

                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblUnitTest41 = (Label)row.FindControl("lblUnitTest4");
                    if (!string.IsNullOrEmpty(lblUnitTest41.Text))
                    {
                        Label lblTotalUnitTest4 = (Label)e.Row.FindControl("lblTotalUnitTest4");
                        if (flag1 == true)
                        {
                            lblTotalUnitTest4.Text = totalUnitTest4.ToString();
                        }
                        if (flagUt4 == true)
                        {
                            lblUnitTest41.Text = "";
                            lblTotalUnitTest4.Text = "";
                        }

                    }

                }

                //......................................................................................................................................

                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblUnitTest31 = (Label)row.FindControl("lblUnitTest3");
                    if (!string.IsNullOrEmpty(lblUnitTest31.Text))
                    {
                        Label lblTotalUnitTest3 = (Label)e.Row.FindControl("lblTotalUnitTest3");
                        if (flag1 == true)
                        {
                            lblTotalUnitTest3.Text = totalUnitTest3.ToString();
                        }
                        if (flagUt3== true)
                        {
                            lblUnitTest31.Text = "";
                            lblTotalUnitTest3.Text = "";
                        }

                    }


                }


                //......................................................................................................................................

                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblUnitTest21 = (Label)row.FindControl("lblUnitTest2");

                    if (!string.IsNullOrEmpty(lblUnitTest21.Text))
                    {
                        Label lblTotalUnitTest2 = (Label)e.Row.FindControl("lblTotalUnitTest2");
                        if (flag1 == true)
                        {
                            lblTotalUnitTest2.Text = totalUnitTest2.ToString();
                        }
                        if (flagUt2 == true)
                        {
                            lblUnitTest21.Text = "";
                            lblTotalUnitTest2.Text = "";
                        }

                    }
                }


                //......................................................................................................................................


                foreach (GridViewRow row in gvStudentMarks.Rows)
                {
                    Label lblUnitTest11 = (Label)row.FindControl("lblUnitTest1");
                    if (!string.IsNullOrEmpty(lblUnitTest11.Text))
                    {
                        Label lblTotalUnitTest1 = (Label)e.Row.FindControl("lblTotalUnitTest1");
                        if (flag1 == true)
                        {
                            lblTotalUnitTest1.Text = totalUnitTest1.ToString();
                        }
                        if (flagUt1 == true)
                        {
                            lblUnitTest11.Text = "";
                            lblTotalUnitTest1.Text = "";
                        }
                    }


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
        #region "Fields"
        string filePathAndName = "";
        int id = -1;
        string studentName = string.Empty;
        string Class = string.Empty;
        string section = string.Empty;
        int rollNo = -1;
        #endregion
        
        try
        {
            if (e.CommandName == "ReportGeneration")
            {
                oExamsBLL = new ExamsBLL();
                id = Convert.ToInt32(Request.QueryString["ID"]);
                studentName = Request.QueryString["studentname"];
                Class = Request.QueryString["class"];
                section = Request.QueryString["section"];
                rollNo = Convert.ToInt32(Request.QueryString["rollno"]);
                oExamsBLL.MarksReportOfStudent(studentName, Class, section, rollNo);

            }

        }
        catch (Exception ex)
        {

            throw ex;
        }
        

    }

    #endregion

    #region "Methods"
    public void ViewStudentMarks()
    {
        #region "Fields"
        string studentName = string.Empty;
        string Class = string.Empty;
        string section = string.Empty;
        int rollNo = -1;
        int id = -1;
        #endregion
        try
        {
            oExamsBLL = new ExamsBLL();
            oDataTable = new DataTable();
            id = Convert.ToInt32(Request.QueryString["ID"].ToString());
            studentName = Request.QueryString["studentname"];
            Class = Request.QueryString["class"];
            section = Request.QueryString["section"];
            rollNo = Convert.ToInt32(Request.QueryString["rollno"].ToString());
            lblStudentName.Text = "StudentName: "+studentName.ToString();
            lblSection.Text ="Section: "+ section.ToString();
            lblStudentRollNo.Text ="Rollno :  " +rollNo.ToString();
            lblClass.Text = "Class &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:"+" "+  Class.ToString();
            oDataTable = oExamsBLL.ShowMarksDetails( studentName, Class, section, rollNo);
            if (oDataTable.Rows.Count > 0)
            {
                lblGeneral.Visible = true;
                gvStudentMarks.DataSource = oDataTable;
                gvStudentMarks.DataBind();

            }
            else
            {
                lblGeneral.Visible = false;
            }

        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oExamsBLL = null;
            oDataTable = null;
        }
    }
    #endregion



 
}
