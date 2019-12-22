using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

public partial class admin_AdvertisementMaster : System.Web.UI.Page
{
    SqlConnection cn;
    SqlDataAdapter da;
    SqlCommandBuilder bldr;
    DataSet ds;
    DataTable dt;

    protected void Page_Init(object sender, EventArgs e)
    {
        string cnstr = ConfigurationManager.ConnectionStrings["ConnectionString"].ToString();
        cn = new SqlConnection(cnstr);
        da = new SqlDataAdapter("select * from ad_master",cn);
        bldr = new SqlCommandBuilder(da);
        ds = new DataSet();
        da.Fill(ds);
        dt = ds.Tables[0];

    }
   
    protected void btnAdd_Click(object sender, EventArgs e)
    {
        DataRow dr = dt.NewRow();
        dr[1] = "imgs/" + fuImageUrl.FileName;
        dr["navigate_url"] = txtNavigateUrl.Text;
        dr[3] = txtAltText.Text;
        dt.Rows.Add(dr);

        string imgpath = Server.MapPath("../imgs/") + fuImageUrl.FileName;
        fuImageUrl.SaveAs(imgpath);
    }
    protected void Page_UnLoad(object sender, EventArgs e)
    {
        da.Update(ds);
    }
}
