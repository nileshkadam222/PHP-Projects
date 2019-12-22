using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace DAL
{
public  class ExamsDAL
{

    #region "Fields"
    private string _connectionString="";
    SqlConnection oSqlConnection = null;
    SqlCommand oSqlCommand = null;
    SqlDataAdapter oSqlDataAdapter = null;
    DataTable oDataTable=null;
    SqlParameter oParameterReturnValue = null;
    #endregion

    #region "Constructor"
    public ExamsDAL()
    {
        _connectionString=ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
    }
    public ExamsDAL(string connectionString)
    {
        this._connectionString=connectionString;
    }

    #endregion      

    #region "Methods"
    public DataTable GetExamDetails()
    {
        try
        {                      
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1", oSqlConnection);
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
            oSqlCommand = null;
            oSqlDataAdapter = null;
            oDataTable = null;
        }
    }

    public DataTable ShowAllStudentMarks()
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
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
            oSqlConnection = null;          
            oSqlDataAdapter = null;
            oDataTable = null;
        }
    }

    public DataTable ShowExamDetailsOfId(int id)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1 where id='"+id+"'", oSqlConnection);
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
            oDataTable = null;
            oSqlDataAdapter = null;
            oSqlConnection.Close();
            oSqlConnection = null;
        }
    }

    public string InsertTimeTable(int id, string telugu, string hindi, string english, string maths, string science, string social, string Class, string section, string examtype)
    {
        #region "Fields"
        string errorMessage = string.Empty;
        #endregion

        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlCommand = new SqlCommand("inserttimetable", oSqlConnection);
            oSqlCommand.CommandType = CommandType.StoredProcedure;
            oSqlCommand.Parameters.AddWithValue("@id", id);
            oSqlCommand.Parameters.AddWithValue("@telugu", telugu);
            oSqlCommand.Parameters.AddWithValue("@hindi", hindi);
            oSqlCommand.Parameters.AddWithValue("@english", english);
            oSqlCommand.Parameters.AddWithValue("@maths", maths);
            oSqlCommand.Parameters.AddWithValue("@science", science);
            oSqlCommand.Parameters.AddWithValue("@social", social);
            oSqlCommand.Parameters.AddWithValue("@class", Class);
            oSqlCommand.Parameters.AddWithValue("@section", section);
            oSqlCommand.Parameters.AddWithValue("@examtype", examtype);
            oSqlCommand.Parameters.Add("@message", SqlDbType.VarChar, 200).Direction = ParameterDirection.Output;
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
            oSqlConnection = null;
            oSqlCommand = null;
            oSqlConnection.Close();
        }
    }


    public DataTable ShowMarksDetails(string studentName,string Class,string section,int rollno)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlCommand = new SqlCommand("cursor_DisplayTable1", oSqlConnection);
            oSqlCommand.CommandType = CommandType.StoredProcedure;
            oSqlCommand.Parameters.AddWithValue("@studentname", studentName);
            oSqlCommand.Parameters.AddWithValue("@class", Class);
            oSqlCommand.Parameters.AddWithValue("@section", section);
            oSqlCommand.Parameters.AddWithValue("@rollno", rollno);
            oSqlDataAdapter = new SqlDataAdapter(oSqlCommand);
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
            oDataTable = null;
            oSqlDataAdapter = null;
            oSqlCommand = null;
            oSqlConnection.Close();
            oSqlConnection = null;

        }
    }

   
    public DataTable StudentName(string Class, string Section)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select firstname,lastname,rollno from studentregistration where class='" + Class + "' and section='" + Section + "'", oSqlConnection);
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
            oSqlConnection = null;
            oSqlDataAdapter = null;
            oDataTable = null;
        }
    }

    public DataTable RollNo(string Class, string Section,string studentName)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select rollno from studentregistration where class='" + Class + "' and section='" + Section + "' and firstname+' '+lastname='"+studentName+"'", oSqlConnection);
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
            oSqlConnection = null;
            oSqlDataAdapter = null;
            oDataTable = null;
        }
    }

    public DataTable SearchStudent(string Class, string section, string studentName, string examType,string subjectName,int rollNo,out string message)
    {


            #region "Fields"
        message = "";
        #endregion
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oDataTable = new DataTable();
            oSqlConnection.Open();
            oSqlCommand=new SqlCommand("searchstudent", oSqlConnection);
            oSqlCommand.CommandType = CommandType.StoredProcedure;            
            oSqlCommand.Parameters.AddWithValue("@class", Class);
            oSqlCommand.Parameters.AddWithValue("@section", section);
            oSqlCommand.Parameters.AddWithValue("@studentname", studentName);
            oSqlCommand.Parameters.AddWithValue("@examtype", examType);
            oSqlCommand.Parameters.AddWithValue("@subjectname",subjectName);
            oSqlCommand.Parameters.AddWithValue("@rollno", rollNo);
            oSqlCommand.Parameters.Add("@returnmessage", SqlDbType.VarChar, 200).Direction = ParameterDirection.Output;           
            oSqlDataAdapter = new SqlDataAdapter(oSqlCommand);            
            oSqlDataAdapter.Fill(oDataTable);
            message = oSqlCommand.Parameters["@returnmessage"].Value.ToString();    
            return oDataTable;

        }
        catch (Exception ex)
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



    public void insertorupdatemarks(int rollno, string studentName, string subjectName, string subjectMarks, string Class,string section,string examType,string messsage,out string returnMessage)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlCommand = new SqlCommand("subjectmarksinsertorupdate",oSqlConnection);
            oSqlCommand.CommandType = CommandType.StoredProcedure;
            oSqlCommand.Parameters.AddWithValue("@studentname",studentName);
            oSqlCommand.Parameters.AddWithValue("@class",Class);
            oSqlCommand.Parameters.AddWithValue("@section",section);
            oSqlCommand.Parameters.AddWithValue("@examtype",examType);
            oSqlCommand.Parameters.AddWithValue("@subjectname",subjectName);
            oSqlCommand.Parameters.AddWithValue("@subjectmarks",subjectMarks);
            oSqlCommand.Parameters.AddWithValue("@rollno",rollno);
            oSqlCommand.Parameters.AddWithValue("@message", messsage);
            oSqlCommand.Parameters.Add("@returnmessage", SqlDbType.VarChar, 100).Direction = ParameterDirection.Output;
            oSqlCommand.ExecuteNonQuery();
            returnMessage = oSqlCommand.Parameters["@returnmessage"].Value.ToString();

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

    public DataTable SearchMarks(string studentName, string Class, string section,  int rollNo, out string returnMessage)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlCommand = new SqlCommand("searchmarks", oSqlConnection);
            oSqlCommand.CommandType = CommandType.StoredProcedure;
            oSqlCommand.Parameters.AddWithValue("@studentname", studentName);
            oSqlCommand.Parameters.AddWithValue("@class", Class);
            oSqlCommand.Parameters.AddWithValue("@section", section);            
            oSqlCommand.Parameters.AddWithValue("@rollno", rollNo);
            oSqlCommand.Parameters.Add("@returnmessage", SqlDbType.VarChar, 200).Direction = ParameterDirection.Output;
            oSqlDataAdapter = new SqlDataAdapter(oSqlCommand);
            oDataTable = new DataTable();
            oSqlDataAdapter.Fill(oDataTable);
            returnMessage = oSqlCommand.Parameters["@returnmessage"].Value.ToString();
            return oDataTable;
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oSqlConnection.Close();
            oSqlCommand = null;
            oSqlDataAdapter = null;
            oDataTable = null;
        }
    }

    public DataTable DisplayTimeTable()
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1", oSqlConnection);
            oDataTable = new DataTable();
            oSqlDataAdapter.Fill(oDataTable);
            return oDataTable;
        }
        catch (Exception ex)
        {

            throw;
        }
    }

    public DataTable StudentNameForMarks(string Class, string Section)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select firstname,lastname from studentregistration where class='" + Class + "' and section='" + Section + "'", oSqlConnection);
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
            oSqlConnection=null;
            oDataTable = null;
           
        }
    }
    public DataTable LoadClass()
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select class from seedclass", oSqlConnection);
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

    public DataTable LoadSection()
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select section from seedsection", oSqlConnection);
            oDataTable = new DataTable();
            oSqlDataAdapter.Fill(oDataTable);
            return oDataTable;
        }
        catch (Exception ex)
        {
            
            throw ex;
        }
    }

    public DataTable SearchTimeTable(string examType,string Class,string section)
    {
        try
        {
            oSqlConnection = new SqlConnection(_connectionString);
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1 where examtype like'" + examType + "%'  and class like '" + Class + "%'  and section like '" + section + "%'", oSqlConnection);
            oDataTable = new DataTable();
            oSqlDataAdapter.Fill(oDataTable);
            return oDataTable;
        }
        catch (Exception ex)
        {

            throw;
        }
        finally
        {

        }
    }

#endregion
}
}
