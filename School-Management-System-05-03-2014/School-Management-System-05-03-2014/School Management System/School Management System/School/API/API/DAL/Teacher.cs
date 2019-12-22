using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace DAL

{
  public  class TeacherDAL
    {

        #region "Fields"
        private string _ConnectionString = "";
        SqlConnection oSqlConnection = null;
        SqlCommand oSqlCommand = null;
        SqlDataAdapter oSqlDataAdapter = null;
        DataTable oDataTable = null;
        
        #endregion

        #region "Constructor"
        public TeacherDAL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public TeacherDAL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }

        #endregion

        #region "Methods"
        public string RegisterTeacher(int id,string name, string fatherName, string qualification, string subject, string dateOfBirth, string dateOfJoining, string email, string contactNo, string address, string password)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion
            try
            {

                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("teachersregistration", oSqlConnection);
                oSqlCommand.CommandType = CommandType.StoredProcedure;
                oSqlCommand.Parameters.AddWithValue("@id", id);
                oSqlCommand.Parameters.AddWithValue("@name", name);
                oSqlCommand.Parameters.AddWithValue("@fathername", fatherName);
                oSqlCommand.Parameters.AddWithValue("@qualification", qualification);
                oSqlCommand.Parameters.AddWithValue("@subject", subject);
                oSqlCommand.Parameters.AddWithValue("@dateofbirth", dateOfBirth);
                oSqlCommand.Parameters.AddWithValue("@dateofjoining", dateOfJoining);
                oSqlCommand.Parameters.AddWithValue("@email", email);
                oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                oSqlCommand.Parameters.AddWithValue("@address", address);
                oSqlCommand.Parameters.Add("@errormessage", SqlDbType.VarChar, 100).Direction = ParameterDirection.Output;
                oSqlCommand.Parameters.AddWithValue("@password", password);
                oSqlCommand.ExecuteNonQuery();
                errorMessage = oSqlCommand.Parameters["@errormessage"].Value.ToString();
                return errorMessage;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlCommand = null;
                oSqlConnection = null;
            }
        }

      public string UpdateTeacher(int id,string name, string fatherName, string qualification, string subject, string dateOfBirth, string dateOfJoining, string email, string contactNo, string address)
      {
          #region "Fields"
          string errorMessage = "";
          #endregion
          try
          {

              oSqlConnection = new SqlConnection(_ConnectionString);
              oSqlConnection.Open();
              oSqlCommand = new SqlCommand("teacherupdation", oSqlConnection);
              oSqlCommand.CommandType = CommandType.StoredProcedure;
              oSqlCommand.Parameters.AddWithValue("@id", id);
              oSqlCommand.Parameters.AddWithValue("@name", name);
              oSqlCommand.Parameters.AddWithValue("@fathername", fatherName);
              oSqlCommand.Parameters.AddWithValue("@qualification", qualification);
              oSqlCommand.Parameters.AddWithValue("@subject", subject);
              oSqlCommand.Parameters.AddWithValue("@dateofbirth", dateOfBirth);
              oSqlCommand.Parameters.AddWithValue("@dateofjoining", dateOfJoining);
              oSqlCommand.Parameters.AddWithValue("@email", email);
              oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
              oSqlCommand.Parameters.AddWithValue("@address", address);
              oSqlCommand.Parameters.Add("@errormessage", SqlDbType.VarChar, 100).Direction = ParameterDirection.Output;
              oSqlCommand.ExecuteNonQuery();
              errorMessage = oSqlCommand.Parameters["@errormessage"].Value.ToString();
              return errorMessage;
          }
          catch (Exception ex)
          {
              throw ex;
          }
          finally
          {
              oSqlCommand = null;
              oSqlConnection = null;
          }
      }

      public DataTable ShowTeacherDetails()
      {

          try
          {
              oSqlConnection = new SqlConnection(_ConnectionString);
              oSqlConnection.Open();
              oSqlDataAdapter = new SqlDataAdapter("select * from teacherregistration", oSqlConnection);
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
              oSqlConnection.Close();
              oSqlDataAdapter.Dispose();
              oDataTable = null;
          }
      }

      public DataTable ShowTeacherDetailsForUpdation(int id)
      {

          try
          {
              oSqlConnection = new SqlConnection(_ConnectionString);
              oSqlConnection.Open();
              oSqlDataAdapter = new SqlDataAdapter("select * from teacherregistration where id='"+id+"'", oSqlConnection);
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
              oSqlConnection.Close();
              oSqlDataAdapter.Dispose();
              oDataTable = null;
          }
      }


      public DataTable SearchTeacherDetails(string name,string subject,string qualification,string email)
      {
          try
          {
              oSqlConnection = new SqlConnection(_ConnectionString);
              oSqlConnection.Open();
              oSqlDataAdapter = new SqlDataAdapter("select id,name,subject,qualification,dateofjoining,email,contactno from teacherregistration where name like'" + name + "%' and subject like '" + subject + "%' and qualification like '" + qualification + "%' and email like '" + email + "%'", oSqlConnection);
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
              oSqlConnection = null;
              oSqlDataAdapter = null;
              oDataTable = null;
          }
      }

      public string GetUserName(string email)
      {
          #region "Fields"
          string firstName = "";
          #endregion
          try
          {
              oSqlConnection = new SqlConnection(_ConnectionString);
              oSqlConnection.Open();
              oSqlCommand = new SqlCommand("select name from teacherregistration where email='" + email + "'", oSqlConnection);
              firstName = oSqlCommand.ExecuteScalar().ToString();
              return firstName;
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
#endregion
    }
}
