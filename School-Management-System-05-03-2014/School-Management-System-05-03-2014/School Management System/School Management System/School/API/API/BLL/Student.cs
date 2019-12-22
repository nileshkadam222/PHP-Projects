using System;
using System.Collections.Generic;
using System.Text;
using System.Configuration;
using DAL;
using System.Data.SqlClient;
using System.IO;
using System.Data;


namespace BLL
{
    public class StudentBLL                   //BLL Layer Student for Registration
    {
        #region "Fields"
        string _ConnectionString = "";
        SchoolDAL oSchoolDAL = null;
        StudentDAL oStudentDAL = null;
        DataTable oDataTable = null;
         

        #endregion

        #region "Constructor"
        public StudentBLL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public StudentBLL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }

        #endregion

        #region "Methods"
        public string StudentRegistration(Student oStudent)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion

            oStudentDAL = new StudentDAL(_ConnectionString);
            try
            {
                errorMessage = oStudentDAL.StudentRegistration(oStudent.Id, oStudent.AdmissionNo, oStudent.FirstName, oStudent.LastName, oStudent.FatherName, oStudent.DateOfBirth, oStudent.JoinDate, oStudent.BloodGroup, oStudent.ContactNo, oStudent.Address, oStudent.Email, oStudent.Photo, oStudent.BusFacility, oStudent.RollNo, oStudent.Class1, oStudent.Section, oStudent.UserName, oStudent.Password,oStudent.Usertype);
                return errorMessage;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudentDAL = null;
                oStudent = null;
                errorMessage = "";
            }

        }



            public string StudentUpdation(Student oStudent)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion

            oStudentDAL = new StudentDAL(_ConnectionString);
            try
            {
                errorMessage = oStudentDAL.StudentUpdation(oStudent.Id, oStudent.AdmissionNo, oStudent.FirstName, oStudent.LastName, oStudent.FatherName, oStudent.DateOfBirth, oStudent.JoinDate, oStudent.BloodGroup, oStudent.ContactNo, oStudent.Address, oStudent.Email, oStudent.Photo, oStudent.BusFacility, oStudent.RollNo, oStudent.Class1, oStudent.Section, oStudent.Usertype);
                return errorMessage;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudentDAL = null;
                oStudent = null;
                errorMessage = "";
            }

        }

        public string AdmissionNumber()
        {
            #region "Fields"
            string admissionNo = "";
            #endregion 

            oStudentDAL = new StudentDAL(_ConnectionString);
            try
            {
                admissionNo = oStudentDAL.AdmissionNumber();
                return admissionNo;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudentDAL = null;
            }
        }

        public int Rollno()
        {
            #region "Fields"
            int rollno = -1;
            #endregion
            try
            {
                oStudentDAL = new StudentDAL(_ConnectionString);
                rollno = oStudentDAL.Rollno();
                return rollno;
            }
            catch (Exception ex)
            {

                throw ex;
            }
            finally
            {
                oStudentDAL = null;
            }
        }

        public DataTable ShowStudentDetails()
        {
            try
            {
                oDataTable = new DataTable();
                oStudentDAL = new StudentDAL();
                oDataTable = oStudentDAL.ShowStudentDetails();
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oDataTable = null;
                oStudentDAL = null;
            }
        }

       
        public DataTable LoadStudents(Student oStudent)
        {
            oDataTable = new DataTable();
            try
            {
                oStudentDAL = new StudentDAL(_ConnectionString);
                oDataTable = oStudentDAL.LoadStudents(oStudent.Class1, oStudent.Section);
                return oDataTable;
            }
            catch(Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSchoolDAL = null;
                oDataTable = null;
            }
        }

        public DataTable StudentSearch(Student oStudent)
        {
            try
            {
                oStudentDAL = new StudentDAL();
                oDataTable = new DataTable();
                oDataTable=oStudentDAL.StudentSearch(oStudent.admissionNo, oStudent.FirstName, oStudent.LastName, oStudent.Class1, oStudent.Section);
                return oDataTable;


            }
            catch(Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudentDAL = null;
                oStudent = null;
                oDataTable = null;
            
            }
        }

        public string GetUserName(Student oStudent)
        {
            #region "Fields"
            string firstName= "";
            #endregion
            try
            {
                oStudentDAL = new StudentDAL(_ConnectionString);
                firstName = oStudentDAL.GetUserName(oStudent.Email);
                return firstName;
                
            }
            catch(Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudent = null;
                oStudentDAL = null;
            }
        }

        public DataTable ShowUpdateStudentDetails(int id)
        {
            try
            {
                oStudentDAL = new StudentDAL(_ConnectionString);
                oDataTable = new DataTable();
                oDataTable = oStudentDAL.ShowUpdateStudentDetails(id);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oStudentDAL = null;
                oDataTable = null;
            }
        }

        public byte[] GetImageFromDB(Student oStudent)
        {
            #region "Fields"
            byte[] byteOfImage = null;
            #endregion

            try
            {
                oStudentDAL = new StudentDAL();
                byteOfImage = (byte[])oStudentDAL.GetImageFromDB(oStudent.Id);
                return byteOfImage;
            }
            catch(Exception ex)
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
