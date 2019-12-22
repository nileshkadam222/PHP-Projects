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

public partial class students_fullresult : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {

            grdshowdata();
            databind();
        }
    }

    public void grdshowdata()
    {
        DataTable dtq = new DataTable();
        dtq = mcqmethod.get_regeltfull(Convert.ToInt16(Session["sid"]));
        grdshow.DataSource = dtq;
        grdshow.DataBind();
    }
       public void databind()
    {
        DataTable dt = new DataTable();
        double q, m, t,om;
        dt = mcqmethod.getexambysub(Convert.ToInt16(Session["subid"]));
        lblsub.Text = Convert.ToString(dt.Rows[0]["subname"]);
        lbletime.Text = Convert.ToString(dt.Rows[0]["etime"]);
        lblneg.Text = Convert.ToString(dt.Rows[0]["n_m"]);
        lblnoq.Text = Convert.ToString(dt.Rows[0]["t_n_q"]);
        lblpqm.Text = Convert.ToString(dt.Rows[0]["p_q_m"]);
        int ca=mcqmethod.get_currectans(Convert.ToInt16(Session["sid"]));
         int aq=mcqmethod.get_attquestion(Convert.ToInt16(Session["sid"]));
        
        
        m = Convert.ToDouble(lblpqm.Text);
        q = Convert.ToDouble(lblnoq.Text);
        t = m * q;
           om=m*ca;
        lbltmark.Text = Convert.ToString(t);
           lblca.Text=Convert.ToString( ca);
           lblomark.Text=Convert.ToString( om);


           //double etime= mcqmethod.get_etimedeff(Convert.ToDateTime(Session["starttime"]), Convert.ToDateTime(Session["endtime"]));
           TimeSpan timediff = Convert.ToDateTime(Session["endtime"]) - Convert.ToDateTime(Session["starttime"]);
           lblotime.Text = Convert.ToString(timediff);
           //double tmdiff = Convert.ToDouble(timediff);
           mcqproperty obj = new mcqproperty();
           obj.sid=Convert.ToInt16(Session["sid"]);
           obj.subject=Convert.ToInt16(Session["subid"]);
           obj.total = Convert.ToDouble(lblnoq.Text);
           obj.nm=Convert.ToDouble(lblneg.Text);
           obj.etime= Convert.ToDouble(lbletime.Text);
           obj.stime=Convert.ToDateTime(Session["starttime"]);
           obj.endtime=Convert.ToDateTime(Session["endtime"]);
           obj.omark=om;
           obj.otime= Convert.ToString(timediff);
           mcqmethod.insert_Result_master(obj);
           

    }
}
