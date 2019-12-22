using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.SqlClient;
using DAL;
using System.Configuration;
namespace BLL                                    //School BLL For Login
{
    public class SchoolBLL
    {
        #region "Fields"
        SqlConnection oSqlConnection;
        SqlCommand oSqlCommand;
        SqlDataAdapter oSqlDataAdapter;
        DataTable oDataTable;
        int returnValue = -1;
        SchoolDAL oSchoolDAL;
        private string _ConnectionString;

        #endregion

        #region "Constructor"
        public SchoolBLL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public SchoolBLL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }

        #endregion

        #region "Methods"
        public DataTable Login(School oSchool)
        {
          oSchoolDAL = new SchoolDAL(_ConnectionString);
            try
            {

                oDataTable = oSchoolDAL.Login(oSchool.UserName, oSchool.Password);
                return oDataTable;

            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSchool = null;
                oSchoolDAL = null;
            }
        }

        public DataTable LoginLogout(School oSchool)
        {
            try
            {
                oSchoolDAL=new SchoolDAL(_ConnectionString);
                oDataTable=new DataTable();
                oDataTable=oSchoolDAL.LoginLogout(oSchool.Id,oSchool.LogIn,oSchool.FirstName);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSchoolDAL = null;
                oSchool = null;
                oDataTable = null;
            }
        }

        public string SubjectName(School oSchool)
        {
            #region "Fields"
            string subject = string.Empty;
            #endregion
            try
            {
                oSchoolDAL = new SchoolDAL();
                subject = oSchoolDAL.SubjectName(oSchool.UserName);
                return subject;

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
