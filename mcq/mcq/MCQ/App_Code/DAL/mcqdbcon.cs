using System;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

/// <summary>
/// Summary description for mcqdbcon
/// </summary>
public class mcqdbcon
{
    static string DBconnection;
	public mcqdbcon()
	{
        DBconnection = ConfigurationManager.ConnectionStrings["constr"].ConnectionString;
        //
		// TODO: Add constructor logic here
		//
	}
    public string dbconnection
    {
        get
        {
            return DBconnection;
        }
    }
    
}
