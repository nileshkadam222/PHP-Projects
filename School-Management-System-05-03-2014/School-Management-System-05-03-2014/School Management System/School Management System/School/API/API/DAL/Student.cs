using System;
using System.Collections.Generic;
using System.Text;
using System.Configuration;
using System.Data.SqlClient;
using System.IO;
using System.Data;


namespace DAL                                      //DAL Layer Student for Registration
{
    public class StudentDAL
    {

        #region "Fields"
        SqlConnection oSqlConnection = null;
        SqlCommand oSqlCommand = null;
        SqlDataAdapter oSqlDataAdapter = null;
        DataTable oDataTable = null;
        private string _ConnectionString = "";
        #endregion

        #region "Constructor"
        public StudentDAL()
        {
            _ConnectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public StudentDAL(string connectionstring)
        {
            this._ConnectionString = connectionstring;
        }
        #endregion

        #region "Methods"
        public string StudentRegistration(int id, string admissionNo, string firstName, string lastName, string fatherName, string dateOfBirth, string joinDate, string bloodGroup, string contactNo, string address, string email, byte[] photo, string busFacility, string rollNo, string Class1, string section, string userName, string password,string userType)
        {
            #region "Fileds"
            string errorMessage = "";
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open(); 
                if (id == 0)               //register
                {
                    
                    oSqlCommand = new SqlCommand("studentinsertion", oSqlConnection);
                    oSqlCommand.CommandType = CommandType.StoredProcedure;
                    oSqlCommand.Parameters.AddWithValue("@id", id);
                    oSqlCommand.Parameters.AddWithValue("@admissionno", admissionNo);
                    oSqlCommand.Parameters.AddWithValue("@firstname", firstName);
                    oSqlCommand.Parameters.AddWithValue("@lastname", lastName);
                    oSqlCommand.Parameters.AddWithValue("@fathername", fatherName);
                    oSqlCommand.Parameters.AddWithValue("@dateofbirth", dateOfBirth);
                    oSqlCommand.Parameters.AddWithValue("@joindate", joinDate);
                    oSqlCommand.Parameters.AddWithValue("@bloodgroup", bloodGroup);
                    oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                    oSqlCommand.Parameters.AddWithValue("@address", address);
                    oSqlCommand.Parameters.AddWithValue("@email", email);
                    oSqlCommand.Parameters.AddWithValue("@photo", photo);
                    oSqlCommand.Parameters.AddWithValue("@busfacility", busFacility);
                    oSqlCommand.Parameters.AddWithValue("@rollno", rollNo);
                    oSqlCommand.Parameters.AddWithValue("@class", Class1);
                    oSqlCommand.Parameters.AddWithValue("@section", section);
                    oSqlCommand.Parameters.AddWithValue("@username", userName);
                    oSqlCommand.Parameters.AddWithValue("@password", password);
                    oSqlCommand.Parameters.AddWithValue("@usertype", "student");
                    oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 50).Direction = ParameterDirection.Output;
                    oSqlCommand.ExecuteNonQuery();
                    errorMessage = oSqlCommand.Parameters["@message"].Value.ToString();
         
                }
                if (id > 0)          //update
                {
                    oSqlCommand = new SqlCommand("studentupdation", oSqlConnection);
                    oSqlCommand.CommandType = CommandType.StoredProcedure;
                    oSqlCommand.Parameters.AddWithValue("@id", id);
                    oSqlCommand.Parameters.AddWithValue("@admissionno", admissionNo);
                    oSqlCommand.Parameters.AddWithValue("@firstname", firstName);
                    oSqlCommand.Parameters.AddWithValue("@lastname", lastName);
                    oSqlCommand.Parameters.AddWithValue("@fathername", fatherName);
                    oSqlCommand.Parameters.AddWithValue("@dateofbirth", dateOfBirth);
                    oSqlCommand.Parameters.AddWithValue("@joindate", joinDate);
                    oSqlCommand.Parameters.AddWithValue("@bloodgroup", bloodGroup);
                    oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                    oSqlCommand.Parameters.AddWithValue("@address", address);
                    oSqlCommand.Parameters.AddWithValue("@email", email);
                    oSqlCommand.Parameters.AddWithValue("@photo", photo);
                    oSqlCommand.Parameters.AddWithValue("@busfacility", busFacility);
                    oSqlCommand.Parameters.AddWithValue("@rollno", rollNo);
                    oSqlCommand.Parameters.AddWithValue("@class", Class1);
                    oSqlCommand.Parameters.AddWithValue("@section", section);
                    oSqlCommand.Parameters.AddWithValue("@usertype", "student");
                    oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 50).Direction = ParameterDirection.Output;
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
                oSqlConnection.Close();
                oSqlCommand = null;
                oSqlConnection = null;

            }

        }

        public string StudentUpdation(int id, string admissionNo, string firstName, string lastName, string fatherName, string dateOfBirth, string joinDate, string bloodGroup, string contactNo, string address, string email, byte[] photo, string busFacility, string rollNo, string Class1, string section, string userType)
        {
            #region "Fileds"
            string errorMessage = "";
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("studentupdation", oSqlConnection);
                oSqlCommand.CommandType = CommandType.StoredProcedure;
                oSqlCommand.Parameters.AddWithValue("@id", id);
                oSqlCommand.Parameters.AddWithValue("@admissionno", admissionNo);
                oSqlCommand.Parameters.AddWithValue("@firstname", firstName);
                oSqlCommand.Parameters.AddWithValue("@lastname", lastName);
                oSqlCommand.Parameters.AddWithValue("@fathername", fatherName);
                oSqlCommand.Parameters.AddWithValue("@dateofbirth", dateOfBirth);
                oSqlCommand.Parameters.AddWithValue("@joindate", joinDate);
                oSqlCommand.Parameters.AddWithValue("@bloodgroup", bloodGroup);
                oSqlCommand.Parameters.AddWithValue("@contactno", contactNo);
                oSqlCommand.Parameters.AddWithValue("@address", address);
                oSqlCommand.Parameters.AddWithValue("@email", email);
                oSqlCommand.Parameters.AddWithValue("@photo", photo);
                oSqlCommand.Parameters.AddWithValue("@busfacility", busFacility);
                oSqlCommand.Parameters.AddWithValue("@rollno", rollNo);
                oSqlCommand.Parameters.AddWithValue("@class", Class1);
                oSqlCommand.Parameters.AddWithValue("@section", section);
                oSqlCommand.Parameters.AddWithValue("@usertype", "student");
                oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 50).Direction = ParameterDirection.Output;
                oSqlCommand.ExecuteNonQuery();
                errorMessage = oSqlCommand.Parameters["@message"].Value.ToString();
                return errorMessage;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlConnection.Close();
                oSqlCommand = null;
                oSqlConnection = null;

            }

        }


        public string AdmissionNumber()
        {
            #region "Fields" 
            string admissionNo = "";
            #endregion

            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("select max(id) from studentregistration", oSqlConnection);
                admissionNo = oSqlCommand.ExecuteScalar().ToString();
                admissionNo += "NK" + "1000" + 1;
                return admissionNo;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlCommand.Dispose();
                oSqlConnection.Close();
            }
        }
        public int Rollno()
        {
            #region "Fields"
            int rollno = -1;
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("select max(rollno) from studentregistration", oSqlConnection);
                rollno = Convert.ToInt32(oSqlCommand.ExecuteScalar());
                return rollno;
            }
            catch (Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlConnection.Close();
                oSqlConnection = null;
                oSqlCommand = null;
            }
        }

        public DataTable ShowStudentDetails()
        {

            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlDataAdapter = new SqlDataAdapter("select * from studentregistration", oSqlConnection);
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
        

        public DataTable LoadStudents(string Class,string section)
        {
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlDataAdapter = new SqlDataAdapter("select id,firstname,lastname,email from studentregistration where class='" + Class + "' and section='" + section + "'", oSqlConnection);
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
                oSqlDataAdapter = null;
                oSqlConnection = null;
            }
        }

        public DataTable StudentSearch(string admissionNo, string firstName, string lastName, string Class, string section)
        {
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();

                oSqlDataAdapter = new SqlDataAdapter("select id,admissionno,firstname,lastname,class,section,email from studentregistration where admissionno like '" + admissionNo + "%' and firstname like '" + firstName + "%' and lastname like '" + lastName + "%'  and class like '" + Class + "%' and section like '" + section + "%'", oSqlConnection);

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
                oSqlCommand = new SqlCommand("select firstname from studentregistration where email='" + email + "'", oSqlConnection);
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

        public DataTable ShowUpdateStudentDetails(int id)
        {
            try
            {
             
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlDataAdapter = new SqlDataAdapter("select * from studentregistration where id=" + id + "", oSqlConnection);
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
            }
        }

        public byte[] GetImageFromDB(int id)
        {
            #region "Fields"
            byte[] byteOfImage = null;
            #endregion
            try
            {
                oSqlConnection = new SqlConnection(_ConnectionString);
                oSqlConnection.Open();
                oSqlCommand = new SqlCommand("select photo from studentregistration where id='" + id + "'", oSqlConnection);
                byteOfImage = (byte[])oSqlCommand.ExecuteScalar();
                return byteOfImage;
            }
            catch(Exception ex)
            {
                throw ex;
            }
            finally
            {
                oSqlCommand = null;
                oSqlConnection = null;
            }
        }

#endregion

    }
}
