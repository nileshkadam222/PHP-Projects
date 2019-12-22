<%@ WebHandler Language="C#" Class="ImageHandler" %>

using System;
using System.Configuration;
using System.Web;
using System.IO;
using System.Data;
using System.Data.SqlClient;


public class ImageHandler : IHttpHandler
{


    public void ProcessRequest(HttpContext context)
    {
        byte[] buffer;
        Stream oStream;
        try
        {
            Int32 empno;
            if (context.Request.QueryString["id"] != null)
                empno = Convert.ToInt32(context.Request.QueryString["id"]);
            else
                throw new ArgumentException("No parameter specified");

            context.Response.ContentType = "image/jpeg";
            oStream = ShowStudentImage(empno);
            buffer = new byte[4096];
            int byteSeq = oStream.Read(buffer, 0, 4096);


            while (byteSeq > 0)
            {
                context.Response.OutputStream.Write(buffer, 0, byteSeq);
                byteSeq = oStream.Read(buffer, 0, 4096);
            }
        }
        catch (Exception ex)
        {
            throw ex;
        }
        finally
        {
            oStream = null;
            buffer = null;
        }
    }
    public Stream ShowStudentImage(int id)
    {
        string connection = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        SqlConnection oSqlConnection = new SqlConnection(connection);
        string sql = "SELECT photo FROM studentregistration WHERE id = @ID";
        SqlCommand oSqlCommand = new SqlCommand(sql, oSqlConnection);
        oSqlCommand.CommandType = CommandType.Text;
        oSqlCommand.Parameters.AddWithValue("@ID", id);
        oSqlConnection.Open();
        object img = oSqlCommand.ExecuteScalar();
        try
        {
            return new MemoryStream((byte[])img);
        }
        catch
        {
            return null;
        }
        finally
        {
            oSqlConnection.Close();
        }
    }

    public bool IsReusable
    {
        get
        {
            return false;
        }
    }
}