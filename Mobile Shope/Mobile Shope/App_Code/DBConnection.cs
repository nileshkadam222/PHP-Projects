using System;
using System.Data;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
// Add This Namespace For SQL Server Connection
using System.Data.SqlClient;
using System.Text;
using System.Text.RegularExpressions;
/// <summary>
/// Summary description for DBConnection
/// </summary>
public class DBConnection
{
    string sqlconn;
    SqlConnection con;
    SqlCommand cmd;
    DataSet ds, ds1;
    SqlDataReader dr;
    SqlDataAdapter adp;

    public DBConnection()
    {
    }
    public void openConnection()
    {
        try
        {
            sqlconn = System.Configuration.ConfigurationManager.AppSettings["connstring"];
            con = new SqlConnection(sqlconn);
            con.Open();
        }
        catch
        {
        }
    }
    public void closeConnection()
    {
        con.Close();
    }
    public object getdata(string str)
    {
        openConnection();
        object a;
        SqlCommand cmd = new SqlCommand(str, con);
        a = cmd.ExecuteScalar();
        return a;
    }

    public DataSet getDataSetLimit(string qry, int start, int end)
    {
        ds = new DataSet();
        openConnection();
        adp = new SqlDataAdapter(qry, con);
        adp.Fill(ds, start, end, "rec");
        closeConnection();
        return ds;
    }
    public decimal getRecordNumber(string qry)
    {
        decimal count;
        ds1 = new DataSet();
        openConnection();
        adp = new SqlDataAdapter(qry, con);
        adp.Fill(ds1, "rec");
        closeConnection();
        count = Convert.ToDecimal(ds1.Tables["rec"].Rows.Count);
        ds1.Clear();
        return count;
    }
    public DataSet getDataSet(string qry)
    {
        ds = new DataSet();
        openConnection();
        adp = new SqlDataAdapter(qry, con);
        adp.Fill(ds, "rec");
        closeConnection();
        return ds;
    }
    public int executeUpdateQry(string qry)
    {
        int rst;
        rst = 0;
        openConnection();
        cmd = new SqlCommand(qry, con);
        rst = cmd.ExecuteNonQuery();
        closeConnection();
        return rst;
    }
    public void fillMonthList(DropDownList ddlList)
    {
        ddlList.Items.Add(new ListItem("Month", "Month"));
        ddlList.SelectedIndex = 0;

        DateTime month = Convert.ToDateTime("1/1/2000");
        for (int intLoop = 0; intLoop < 12; intLoop++)
        {
            DateTime NextMont = month.AddMonths(intLoop);
            //ddlList.Items.Add(new ListItem(NextMont.ToString("MMMM"), NextMont.Month.ToString()));
            ddlList.Items.Add(new ListItem(NextMont.ToString("MMMM"), NextMont.ToString("MMMM")));
        }
    }

    public void fillDayList(DropDownList ddlList)
    {
        ddlList.Items.Add(new ListItem("Day", "Day"));
        ddlList.SelectedIndex = 0;

        int totalDays = DateTime.DaysInMonth(DateTime.Now.Year, DateTime.Now.Month);
        for (int intLoop = 1; intLoop <= 31; intLoop++)
        {
            ddlList.Items.Add(new ListItem(intLoop.ToString(), intLoop.ToString()));
        }
    }

    public void fillYearList(DropDownList ddlList)
    {
        ddlList.Items.Add(new ListItem("Year", "Year"));
        ddlList.SelectedIndex = 0;

        int intYearName = 2000;
        for (int intLoop = intYearName; intLoop <= Convert.ToInt32(DateTime.Now.Year); intLoop++)
        {
            ddlList.Items.Add(new ListItem(intLoop.ToString(), intLoop.ToString()));
        }
    } 
}