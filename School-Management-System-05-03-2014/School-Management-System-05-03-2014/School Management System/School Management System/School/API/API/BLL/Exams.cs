using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using DataDynamics.ActiveReports.Export.Pdf;
using System.Configuration;
using DAL;


namespace BLL
{
    public class ExamsBLL              //methods BLL
    {

        #region "Fields"
        private string _connectionString = "";
        DataTable oDataTable = null;
        ExamsDAL oExamsDAL = null;

        #endregion

        #region "Constructor"
       public ExamsBLL()
        {
            _connectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public ExamsBLL(string connectionString)
        {
            this._connectionString = connectionString;
        }
       #endregion

        #region "Methods"

       

        public DataTable GetExamDetails()
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();

                oDataTable = oExamsDAL.GetExamDetails();
                
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex; 
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
        }
        public DataTable ShowAllStudentMarks()
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable=oExamsDAL.ShowAllStudentMarks();
                return oDataTable;               
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
        }

        public DataTable ShowExamDetailsOfId(int id)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable = oExamsDAL.ShowExamDetailsOfId(id);
                return oDataTable;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
                       
        }
      
        public string InsertTimeTable(Exams oExams)
        {
            #region "Fields"
            string errorMessage = string.Empty;
            #endregion
            try
            {
                oExamsDAL = new ExamsDAL();
                errorMessage = oExamsDAL.InsertTimeTable(oExams.Id, oExams.Telugu, oExams.Hindi, oExams.English, oExams.Maths, oExams.Science, oExams.Social, oExams.Class, oExams.Section,oExams.Examtype);
                return errorMessage;

            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExams = null;
                oExamsDAL = null;

            }

        }

        public DataTable StudentName(Exams oExams)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable = oExamsDAL.StudentName(oExams.Class, oExams.Section);
                return oDataTable;

            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
        }



        public DataTable RollNo(Exams oExams)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable = oExamsDAL.RollNo(oExams.Class, oExams.Section,oExams.StudentName);
                return oDataTable;

            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
        }
        public DataTable SearchStudent(Exams oExams,out string message)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable=oExamsDAL.SearchStudent(oExams.Class,oExams.Section,oExams.StudentName,oExams.Examtype,oExams.SubjectName,oExams.Rollno,out message);
                return oDataTable;
            }
            catch (Exception ex)
            {
                 throw ex;
            }
            finally
            {
                oExams = null;
                oExamsDAL = null;
                oDataTable = null;
            }
        }

        public void insertorupdatemarks(Exams oExams,out string returnMessage)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oExamsDAL.insertorupdatemarks(oExams.Rollno, oExams.StudentName, oExams.SubjectName, oExams.SubjectMarks, oExams.Class, oExams.Section, oExams.Examtype,oExams.Message,out returnMessage);

            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oExams = null;
            }
        }

        public DataTable SearchMarks(Exams oExams,out string returnMessage)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable=oExamsDAL.SearchMarks(oExams.StudentName, oExams.Class, oExams.Section, oExams.Rollno, out returnMessage);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }
        }

        public DataTable StudentNameForMarks(Exams oExams)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable=oExamsDAL.StudentNameForMarks(oExams.Class, oExams.Section);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {

            }
        }

        public string ReportStoring(int id, string studentName, string Class, string section, int rollNo)
        {
            #region "Fields"
            PdfExport oPdfExport = new PdfExport();
            ExamsReport oExamsReport = new ExamsReport();
            #endregion
            try
            {               
                oDataTable = new DataTable();
                oDataTable = ShowMarksDetails(studentName, Class, section, rollNo);
                string Class1 = oDataTable.Rows[0]["class"].ToString();
                oExamsReport.DataSource = oDataTable;
                oExamsReport.Run();
                string filePathAndName = ConfigurationManager.AppSettings["Reportstore"].ToString() + "class " + Class1 + ".Pdf";
                oPdfExport.Export(oExamsReport.Document, filePathAndName);
                return filePathAndName;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oPdfExport = null;
                oExamsReport = null;
            }
           
        }
        public DataTable MarksReportOfStudent(string studentName, string Class, string section, int rollNo)
        {
            #region "Fields"
            PdfExport oPdfExport = new PdfExport();
            FinalMarksReport oFinalMarksReport = new FinalMarksReport();
            #endregion
                   try
                   {
                       oDataTable = new DataTable();
                       oDataTable = ShowMarksDetails(studentName, Class, section, rollNo);

                       return oDataTable;
                   }
                   catch (Exception ex)
                   {
                       throw ex;
                   }
            finally
            {
                oPdfExport = null;
                oFinalMarksReport = null;
            }

        }


        public DataTable ShowMarksDetails(string studentName,string Class,string section,int rollno)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = new DataTable();
                oDataTable = oExamsDAL.ShowMarksDetails(studentName,Class,section,rollno);
                return oDataTable;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oExamsDAL = null;
                oDataTable = null;
            }

        }

        public DataTable LoadClass()
        {
            try
            {
                oDataTable = new DataTable();
                oExamsDAL = new ExamsDAL();
                oDataTable = oExamsDAL.LoadClass();
                return oDataTable;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oDataTable = null;
                oExamsDAL = null;

            }
        }

        public DataTable LoadSection()
        {
            try
            {
                oDataTable = new DataTable();
                oExamsDAL = new ExamsDAL();
                oDataTable = oExamsDAL.LoadSection();
                return oDataTable;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oDataTable = null;
                oExamsDAL = null;

            }
        }
        public DataTable SearchTimeTable(Exams oExams)
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable=oExamsDAL.SearchTimeTable(oExams.Examtype, oExams.Class, oExams.Section);
                return oDataTable;
            }
            catch (Exception)
            {
                
                throw;
            }
        }

        public DataTable DisplayTimeTable()
        {
            try
            {
                oExamsDAL = new ExamsDAL();
                oDataTable = oExamsDAL.DisplayTimeTable();
                return oDataTable;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {

            }
        }

     
        #endregion


    }
}
