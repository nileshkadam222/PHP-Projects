using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace DAL         
{
   public class ParentDAL
    {
        #region "Fields"
       
        SqlConnection oSqlConnection=null;
        private string _ConnectionString = "";
        SqlCommand oSqlCommand=null;
       DataTable oDataTable=null;
       SqlDataAdapter oSqlDataAdapter = null;
 
        #endregion

        #region "Constructor"
        public ParentDAL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public ParentDAL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }
        #endregion

        #region "Methods"
       public string ParentInsert(int id, string firstName, string lastName, string Class, string section, string contactNo, string email, string address, string studentEmail, string studentFirstName, string studentLastName, string password, string userType)
        {
            #region "Fields"
            string errorMessage="";
            #endregion

            try
            {
                if (id == 0)
                {
                    oSqlConnection = new SqlConnection(_ConnectionString);
                    oSqlConnection.Open();
                    oSqlCommand = new SqlCommand("parentinsertion", oSqlConnection);
                    oSqlCommand.CommandType = CommandType.StoredProcedure;
                    oSqlCommand.Parameters.AddWithValue("@id", id);
                    oSqlCommand.Parameters.AddWithValue("@firstname", firstName);
                    oSqlCommand.Parameters.AddWithValue("@lastname", lastName);
                    oSqlCommand.Parameters.AddWithValue("@studentfirstname", studentFirstName);
                    oSqlCommand.Parameters.AddWithValue("@studentlastname", studentLastName);
                    oSqlCommand.Parameters.AddWithValue("@studentemail",studentEmail);
                    oSqlCommand.Parameters.AddWithValue("@class", Class);
                    oSqlCommand.Parameters.AddWithValue("@section", section);
                    oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                    oSqlCommand.Parameters.AddWithValue("@email", email);
                    oSqlCommand.Parameters.AddWithValue("@address", address);
                    oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 100).Direction = ParameterDirection.Output;

                    oSqlCommand.Parameters.AddWithValue("@password", password);
                    oSqlCommand.Parameters.AddWithValue("@usertype", userType);

                    oSqlCommand.ExecuteNonQuery();
                    errorMessage = oSqlCommand.Parameters["@message"].Value.ToString();
                    
                }
                if (id > 0)
                {
                    oSqlConnection = new SqlConnection(_ConnectionString);
                    oSqlConnection.Open();
                    oSqlCommand = new SqlCommand("parentupdation", oSqlConnection);
                    oSqlCommand.CommandType = CommandType.StoredProcedure;
                    oSqlCommand.Parameters.AddWithValue("@id", id);
                    oSqlCommand.Parameters.AddWithValue("@firstname", firstName);
                    oSqlCommand.Parameters.AddWithValue("@lastname", lastName);
                    oSqlCommand.Parameters.AddWithValue("@studentfirstname", studentFirstName);
                    oSqlCommand.Parameters.AddWithValue("@studentlastname", studentLastName);
                    oSqlCommand.Parameters.AddWithValue("@studentemail", studentEmail);
                    oSqlCommand.Parameters.AddWithValue("@class", Class);
                    oSqlCommand.Parameters.AddWithValue("@section", section);
                    oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                    oSqlCommand.Parameters.AddWithValue("@email", email);
                    oSqlCommand.Parameters.AddWithValue("@address", address);
                    oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 100).Direction = ParameterDirection.Output;

                  
                    oSqlCommand.ExecuteNonQuery();
                    errorMessage = oSqlCommand.Parameters["@message"].Value.ToString();
                    
                }
                return errorMessage;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlConnection = null;
                oSqlCommand = null;
                errorMessage = "";

            }
        }

       public DataTable ViewParentDetails()
       {
           try
           {
               oDataTable = new DataTable();
               oSqlConnection = new SqlConnection(_ConnectionString);
               oSqlConnection.Open();
               oSqlDataAdapter = new SqlDataAdapter("select * from parentregistration", oSqlConnection);
               oSqlDataAdapter.Fill(oDataTable);
               return oDataTable;
           }

           catch (Exception ex)
           {
               throw ex;
           }

           finally
           {
               oDataTable = null;
               oSqlDataAdapter = null;
               oSqlConnection = null;

           }
       }

       public DataTable LoadEmail(string firstName, string lastName, string Class, string section)
       {
           try
           {
               oSqlConnection = new SqlConnection(_ConnectionString);
               oSqlConnection.Open();
               oSqlDataAdapter = new SqlDataAdapter("select email from studentregistration where class='" + Class + "' and section ='" + section + "' and firstname='" + firstName + "' and lastname='" + lastName + "'", oSqlConnection);
               oDataTable = new DataTable();
               oSqlDataAdapter.Fill(oDataTable);
               return oDataTable;
           }
           catch (Exception ex) 
           {
               
               throw ex;
           }
       }

       public DataTable SearchParent(string firstName, string lastName, string studentFirstName, string studentLastName, string Class, string section)
       {
           try
           {
               oSqlConnection = new SqlConnection(_ConnectionString); ;
               oSqlConnection.Open();
               oSqlDataAdapter = new SqlDataAdapter("select id,firstname,lastname,class,section,studentfirstname,studentlastname,email,contactno from parentregistration where firstname like'"+firstName+"%' and lastname like'"+lastName+"%' and class like'%"+Class+"%' and section like'%"+section+"%' and studentfirstname like'"+studentFirstName+"%' and studentlastname like'"+studentLastName+"%'",oSqlConnection);
               oDataTable = new DataTable();
               oSqlDataAdapter.Fill(oDataTable);
               return oDataTable;

           }
           catch(Exception ex)
           {
               throw ex;
           }
           finally
           {
               oSqlConnection.Close();
               oSqlDataAdapter = null;
               oDataTable = null;
           }
       }

       public DataTable GetUserName(string email)
       {
           #region "Fields"
           string firstName = "";
           #endregion
           try
           {
               oSqlConnection = new SqlConnection(_ConnectionString);
               oSqlConnection.Open();
               oSqlDataAdapter = new SqlDataAdapter("select firstname,studentemail from parentregistration where email='" + email + "'", oSqlConnection);
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
    
       public DataTable ParentDetailsForUpdation(int id)
       {
           try
           {
               oSqlConnection = new SqlConnection(_ConnectionString);
               oSqlConnection.Open();
               oSqlDataAdapter = new SqlDataAdapter("select * from parentregistration where id='" + id + "'",oSqlConnection);
               oDataTable = new DataTable();
               oSqlDataAdapter.Fill(oDataTable);
               return oDataTable;
           }
           catch(Exception ex)
           {
               throw ex;
           }
           finally
           {
               oSqlConnection.Close();
               oSqlConnection = null;
               oSqlDataAdapter = null;
               oDataTable = null;
           }
       }
#endregion

    }
}
