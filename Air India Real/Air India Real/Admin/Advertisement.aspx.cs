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

public partial class Admin_Advertisement : System.Web.UI.Page
{
    SqlConnection cn;
    SqlDataAdapter da;
    SqlCommandBuilder bldr;
    DataSet ds;
    DataTable dt;


    protected void Page_Load(object sender, EventArgs e)
    {
        string cnstr = ConfigurationManager.ConnectionStrings["ConnectionString"].ToString();
        cn = new SqlConnection(cnstr);
        da = new SqlDataAdapter("select * from Ad_Master", cn);
        bldr = new SqlCommandBuilder(da);
        ds = new DataSet();
        da.Fill(ds);
        dt = ds.Tables[0];

    }
    protected void btnAdd_Click(object sender, EventArgs e)
    {
        DataRow dr = dt.NewRow();
        dr[1] = "Advertisement_Image/" + fuImageUrl.FileName;
        dr[2] = txtNavigateUrl.Text;
        dr[3] = txtAltText.Text;
        dt.Rows.Add(dr);

        string imgpath = Server.MapPath("../Advertisement_Image/") + fuImageUrl.FileName;
        fuImageUrl.SaveAs(imgpath);

        txtAltText.Text = "";
        txtNavigateUrl.Text = "";
        
    }
    protected void Page_UnLoad(object sender, EventArgs e)
    {
        da.Update(ds);
    }
}
