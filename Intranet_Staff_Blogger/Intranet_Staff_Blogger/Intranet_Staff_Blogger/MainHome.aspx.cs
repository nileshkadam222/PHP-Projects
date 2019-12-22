using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Data.SqlClient;

public partial class MainHome : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    DataSet ds;
    SqlDataAdapter sda;
    protected void Page_Load(object sender, EventArgs e)
    {
        sda = new SqlDataAdapter("SELECT featurename as BirthDay, featureDescription as FurtherInfo FROM Specialfeature WHERE  (featuretypeId = 1)", con);
        ds = new DataSet();
        sda.Fill(ds);
        gvBirthDayWishes.DataSource = ds;
        gvBirthDayWishes.DataBind();

        sda = new SqlDataAdapter("SELECT featurename as FacultyOffers, featureDescription as Description FROM Specialfeature WHERE  (featuretypeId = 2)", con);
        ds = new DataSet();
        sda.Fill(ds);
        gvFacultyOffers.DataSource = ds;
        gvFacultyOffers.DataBind();

        sda = new SqlDataAdapter("SELECT featurename as HODTalk, featureDescription as Description FROM Specialfeature WHERE  (featuretypeId = 3)", con);
        ds = new DataSet();
        sda.Fill(ds);
        gvHODTalks.DataSource = ds;
        gvHODTalks.DataBind();



    }
}
