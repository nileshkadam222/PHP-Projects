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
    public class TeacherBLL
    {
        #region "Fields"
        TeacherDAL oTeacherDAL = null;
        private string _ConnectionString = "";
        DataTable oDataTable;


        #endregion

        #region "Constructor"
        public TeacherBLL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public TeacherBLL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }

        #endregion

        #region "Methods"
        public string RegisterTeacher(BLL.Teacher oTeacher)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion

            try
            {
                oTeacherDAL = new DAL.TeacherDAL(_ConnectionString);
                errorMessage = oTeacherDAL.RegisterTeacher(oTeacher.Id,oTeacher.Name, oTeacher.FatherName, oTeacher.Qualification, oTeacher.Subject, oTeacher.DateOfBirth, oTeacher.DateOfJoining, oTeacher.Email, oTeacher.ContactNo, oTeacher.Address, oTeacher.Password);
                return errorMessage;

            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oTeacher = null;
                oTeacherDAL = null;
            }

        }

        public string UpdateTeacher(BLL.Teacher oTeacher)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion

            try
            {
                oTeacherDAL = new DAL.TeacherDAL(_ConnectionString);
                errorMessage = oTeacherDAL.UpdateTeacher(oTeacher.Id, oTeacher.Name, oTeacher.FatherName, oTeacher.Qualification, oTeacher.Subject, oTeacher.DateOfBirth, oTeacher.DateOfJoining, oTeacher.Email, oTeacher.ContactNo, oTeacher.Address);
                return errorMessage;

            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oTeacher = null;
                oTeacherDAL = null;
            }

        }



        public DataTable ShowTeacherDetails()
        {
            try
            {
                oDataTable = new DataTable();
                oTeacherDAL = new TeacherDAL();
                oDataTable = oTeacherDAL.ShowTeacherDetails();
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oDataTable = null;
                oTeacherDAL = null;
            }
        }

        public DataTable ShowTeacherDetailsForUpdation(Teacher oTeacher)
        {
            try
            {
                oDataTable = new DataTable();
                oTeacherDAL = new TeacherDAL();
                oDataTable = oTeacherDAL.ShowTeacherDetailsForUpdation(oTeacher.Id);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oDataTable = null;
                oTeacherDAL = null;
            }
        }

        public DataTable SearchTeacherDetails(Teacher oTeacher)
        {
            try
            {
                oTeacherDAL = new TeacherDAL(_ConnectionString);
                oDataTable = new DataTable();
                oDataTable=oTeacherDAL.SearchTeacherDetails(oTeacher.Name,oTeacher.Subject,oTeacher.Qualification,oTeacher.Email);
                return oDataTable;

            }
            catch(Exception ex)
            {
                throw ex;
            }
            finally
            {
                oTeacher = null;
                oTeacherDAL = null;
                oDataTable = null;
            }
        }

        public string GetUserName(Teacher oTeacher)
        {
            #region "Fields"
            string firstName = "";
            #endregion
            try
            {
                oTeacherDAL = new TeacherDAL(_ConnectionString);
                firstName = oTeacherDAL.GetUserName(oTeacher.Email);
                return firstName;

            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oTeacher = null;
                oTeacherDAL = null;
            }
        }
        #endregion



    }
}