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

public partial class admin_Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        DataTable dt = new DataTable();

        dt = mcqmethod.display_login();
        grdshow.DataSource = dt;
        grdshow.DataBind();
    }
    protected void grdshow_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        grdshow.PageIndex = e.NewPageIndex;
    }
}
