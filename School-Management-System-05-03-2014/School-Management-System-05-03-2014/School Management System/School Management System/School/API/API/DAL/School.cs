using System;
using System.Collections.Generic;
using System.Text;
using System.Data.SqlClient;
using System.Data;

using System.Configuration;

namespace DAL                                                           //DAL
{
    public class SchoolDAL
    {
        #region "Fields"
        SqlConnection oSqlConnection = null;
        SqlCommand oSqlCommand = null;
        SqlDataAdapter oSqlDataAdapter = null;
        DataTable oDataTable = null;
        SqlDataReader oSqlDataReader = null;

        private string _ConnectionString = "";

        #endregion

        #region "Constructor"
        public SchoolDAL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public SchoolDAL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }

        #endregion

        #region "Methods"
        public DataTable Login(string userName, string password)
        {
            #region "Fields" 
            int returnValue = -1;
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlDataAdapter = new SqlDataAdapter("select * from login where firstname='" + userName + "' and password='" + password + "'", oSqlConnection);
                oDataTable = new DataTable();
                oSqlDataAdapter.Fill(oDataTable);
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlConnection = null;
                oSqlCommand = null;
            }

        }

        public DataTable LoginLogout(int id,string logIn, string firstName)
        {
            int idTable=-1;                              
            try
            {


                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("select id from login where firstname='" + firstName + "'", oSqlConnection);
                idTable= Convert.ToInt32(oSqlCommand.ExecuteScalar());
                if (id == 0)
                {                                 
                                                                                //for login
                    oSqlDataAdapter = new SqlDataAdapter("select lastlogin from login where id='" + idTable + "'", oSqlConnection);
                    oDataTable = new DataTable();
                    oSqlDataAdapter.Fill(oDataTable);
                }
                if (id == 1)
                {
                                                                                        //for logout
                    oSqlCommand = new SqlCommand("update login set logout='null' , lastlogin='" + logIn + "'  where id='" +idTable+ "'", oSqlConnection);
                    oSqlCommand.ExecuteNonQuery();
                }
                return oDataTable;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlConnection = null;
                oSqlCommand = null;
                oSqlDataAdapter = null;
                oDataTable = null;
                id = -1;
            }

        }


        public string SubjectName(string userName)
        {
            #region "Fields"
            string subject = string.Empty;
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("select subject from teacherregistration where email='" + userName + "'", oSqlConnection);
                subject = oSqlCommand.ExecuteScalar().ToString();
                return subject;
            }
            catch (Exception ex)
            {
                
                throw ex;
            }
        }

    }
        #endregion
}


