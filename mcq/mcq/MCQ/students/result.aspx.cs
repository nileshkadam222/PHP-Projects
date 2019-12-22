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

public partial class students_result : System.Web.UI.Page
{
    public void grdshowdata()
    {
        DataTable dtq = new DataTable();
        dtq = mcqmethod.get_resultbyid(Convert.ToInt16(Session["sid"]));
        grdshow.DataSource = dtq;
        grdshow.DataBind();
    }

    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {

            grdshowdata();

        }

    }
}
