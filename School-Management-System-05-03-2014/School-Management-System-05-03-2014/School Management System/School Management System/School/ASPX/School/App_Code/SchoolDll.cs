using System;
using System.Data;
using System.Configuration;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

/// <summary>
/// Summary description for SchoolDll
/// </summary>
public class SchoolDll
{
	public SchoolDll()
	{
		//
		// TODO: Add constructor logic here
		//
	}
    public DataTable GenerateReports(int id)
    {
        SqlConnection oSqlConnection = null;
        SqlDataAdapter oSqlDataAdapter  =null;
        DataTable oDataTable = null;
        try
        {
            oSqlConnection = new SqlConnection("Data Source=hadev;User Id=sa;Password=Aquila1;Initial catalog=FresherSite");
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1 where id='" + id + "' ", oSqlConnection);
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
            if (oSqlConnection != null)
                oSqlConnection.Dispose();
            if (oSqlDataAdapter != null)
                oSqlDataAdapter.Dispose();
            if (oDataTable != null)
                oDataTable.Dispose();
        }
        
    }

    public DataTable GetReportsDetails()
    {
        SqlConnection oSqlConnection = null;
        SqlDataAdapter oSqlDataAdapter = null;
        DataTable oDataTable = null;
        try
        {
            oSqlConnection = new SqlConnection("Data Source=hadev;User Id=sa;Password=Aquila1;Initial catalog=FresherSite");
            oSqlConnection.Open();
            oSqlDataAdapter = new SqlDataAdapter("select * from exams1 ", oSqlConnection);
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
            if (oSqlConnection != null)
                oSqlConnection.Dispose();
            if (oSqlDataAdapter != null)
                oSqlDataAdapter.Dispose();
            if (oDataTable != null)
                oDataTable.Dispose();
        }

    }
}
