using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Xml.Linq;
using System.Data.SqlClient;
public partial class MainHome : System.Web.UI.MasterPage
{

    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;

    protected void Page_Load(object sender, EventArgs e)
    {
        sda = new SqlDataAdapter("SELECT featurename as ImageName, featureDescription as ImageDescription FROM Specialfeature WHERE  (featuretypeId = 4)", con);
        ds = new DataSet();
        sda.Fill(ds);
        gvGallery.DataSource = ds;
        gvGallery.DataBind();

        
    }
    protected void cEvents_SelectionChanged(object sender, EventArgs e)
    {
        sda = new SqlDataAdapter("SELECT     EventName, Timings, Place FROM         Events WHERE     EventDate ='"+cEvents.SelectedDate.ToShortDateString()+"'", con);
        ds = new DataSet();
        sda.Fill(ds);
        gvEvents.DataSource = ds;
        gvEvents.DataBind();
    }
}
