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

public partial class students_examconfig : System.Web.UI.Page
{
    string id = "";
    string val = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (Request.QueryString["id"] != null)
            {
                id = Request.QueryString["id"].ToString();
                val = Request.QueryString["name"].ToString();
                ddlsub.Text = val;
            }
            databind();
        }
    }
    public void databind()
    {

        DataTable dt = new DataTable();
        double q, m, t;
        dt = mcqmethod.getexambysub(Convert.ToInt32(id));
        //ddlsub.Text = Convert.ToString(dt.Rows[0]["subname"]);
        lbletime.Text = Convert.ToString(dt.Rows[0]["etime"]);
        lblneg.Text = Convert.ToString(dt.Rows[0]["n_m"]);
        lblnoq.Text = Convert.ToString(dt.Rows[0]["t_n_q"]);
        lblpqm.Text = Convert.ToString(dt.Rows[0]["p_q_m"]);
        m = Convert.ToDouble(lblpqm.Text);
        q = Convert.ToDouble(lblnoq.Text);
        t = m * q;
        lbltmark.Text = Convert.ToString(t);
    }
    protected void ImageButton1_Click(object sender, ImageClickEventArgs e)
    {
        id = Request.QueryString["id"].ToString();
        val = Request.QueryString["name"].ToString();
        Response.Redirect("examstart.aspx?id=" + id + "&name=" + val);
    }
}
