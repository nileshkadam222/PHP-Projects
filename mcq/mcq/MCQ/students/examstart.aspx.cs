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

public partial class students_examstart : System.Web.UI.Page
{
    int tm;
    string id = "";
    string val = "";
   /* protected void UpdateTimer_Tick(object sender, EventArgs e)
    {
        Response.Write("<script>alert('Time Over')</script>");
        Response.Redirect("result.aspx");
    } */
    protected void Page_Load(object sender, EventArgs e)
    {
        if(IsPostBack == false)
        {if (Request.QueryString["id"] != null)
        {
            id = Request.QueryString["id"].ToString();
            val = Request.QueryString["name"].ToString();
           
        }
        getexam();
        GetQuestion();
        Session["starttime"] = DateTime.Now;
        }
    }
    public void getexam()
    {
        
        DataTable dt = new DataTable();
        dt = mcqmethod.getexambysub(Convert.ToInt16(id));
        lblsubject.Text = Convert.ToString(dt.Rows[0]["subname"]);
        lbltime.Text = Convert.ToString(dt.Rows[0]["etime"]);
        tm = Convert.ToInt16(dt.Rows[0]["etime"]);
        Session["noq"] = Convert.ToInt16(dt.Rows[0]["t_n_q"]);
        btnprev.Visible = false;
    }
    public void GetQuestion()
    {
        
        

        DataTable dt = new DataTable();
        dt = mcqmethod.getquestionbysubject(Convert.ToInt32(id));
        if (dt.Rows.Count > 0)
        {

            //Session["question"] = Convert.ToString(dt.Rows[0]["qname"]);
            //Session["A"] = Convert.ToString(dt.Rows[0]["A"]);
            //Session["B"] = Convert.ToString(dt.Rows[0]["B"]);
            //Session["C"] = Convert.ToString(dt.Rows[0]["C"]);
            //Session["D"] = Convert.ToString(dt.Rows[0]["D"]);
            //Session["ans"] = Convert.ToString(dt.Rows[0]["ans"]);
            //Session["inc"] = 1;
            //lblqno.Text = Convert.ToString(Session["rindex"]) + "Out Of " + noq;
            Session["dt"] = dt;
            Session["rindex"] = 0;

            lblquestion.Text = Convert.ToString(dt.Rows[0]["qname"]);
            rbtna.Text = Convert.ToString(dt.Rows[0]["A"]);
            rbtnb.Text = Convert.ToString(dt.Rows[0]["B"]);
            rbtnc.Text = Convert.ToString(dt.Rows[0]["C"]);
            rbtnd.Text = Convert.ToString(dt.Rows[0]["D"]);
            Session["qid"] = Convert.ToInt16(dt.Rows[0]["qid"]);
            Session["inc"] = 1;
            lblqno.Text =  "1          Out Of     " +Convert.ToString(Session["noq"]);
     
        }
        else
        {
            Response.Write("No Question In Subject");
        }
    }


    protected void btnnext_Click(object sender, ImageClickEventArgs e)
    {
        insertTemp();
        
        btnprev.Visible = true;
        
        
        if (Convert.ToInt16(Session["noq"]) != Convert.ToInt16(Session["inc"]))
        {
            Session["inc"] = 1 + Convert.ToInt16(Session["inc"]);
            Session["rindex"] = Convert.ToInt16(Session["rindex"]) + 1;
            getquestion();

            lblqno.Text = Convert.ToString(Session["inc"]) + "          Out Of     " + Convert.ToString(Session["noq"]);
            getquestionbyqid();              
        }
        else
        {
            btnnext.Visible = false;
        }
        
        
    }
    protected void btnprev_Click(object sender, ImageClickEventArgs e)
    {
        insertTemp();
        
        
        Session["inc"] =  Convert.ToInt16(Session["inc"])-1;
        if (1!= Convert.ToInt16(Session["inc"]))
        {
            
            Session["rindex"] = Convert.ToInt16(Session["rindex"]) - 1;
            getquestion();
            
            lblqno.Text = Convert.ToString(Session["rindex"]) + "          Out Of     " + Convert.ToString(Session["noq"]);
            getquestionbyqid();    
        }
        else
        {
            btnprev.Visible = false;
        }
    }
    public void getquestion()
    {

        DataTable dt = new DataTable();
        dt = Session["dt"] as DataTable;
        if (dt.Rows.Count > 0)
        {

            lblquestion.Text = Convert.ToString(dt.Rows[Convert.ToInt16(Session["rindex"])]["qname"]);
            rbtna.Text = Convert.ToString(dt.Rows[Convert.ToInt16(Session["rindex"])]["A"]);
            rbtnb.Text = Convert.ToString(dt.Rows[Convert.ToInt16(Session["rindex"])]["B"]);
            rbtnc.Text = Convert.ToString(dt.Rows[Convert.ToInt16(Session["rindex"])]["C"]);
            rbtnd.Text = Convert.ToString(dt.Rows[Convert.ToInt16(Session["rindex"])]["D"]);
            Session["qid"] = Convert.ToInt16(dt.Rows[Convert.ToInt16(Session["rindex"])]["qid"]);
            getquestionbyqid();
        }
        else
        {
            Response.Write("Not Any Question Available Please Contact Of Admin");
        }

    }
    public void insertTemp()
    {
        if (rbtna.Checked == true)
        {
            Session["cans"] = "A";
            mcqmethod.insert_tempquestion(Convert.ToInt16(Session["subid"]), Convert.ToInt16(Session["sid"]), Convert.ToUInt16(Session["qid"]), Convert.ToString(Session["cans"]));
        }
        else if (rbtnb.Checked == true)
        {
            Session["cans"] = "B";
            mcqmethod.insert_tempquestion(Convert.ToInt16(Session["subid"]), Convert.ToInt16(Session["sid"]), Convert.ToUInt16(Session["qid"]), Convert.ToString(Session["cans"]));
        }
        else if (rbtnc.Checked == true)
        {
            Session["cans"] = "C";
            mcqmethod.insert_tempquestion(Convert.ToInt16(Session["subid"]), Convert.ToInt16(Session["sid"]), Convert.ToUInt16(Session["qid"]), Convert.ToString(Session["cans"]));
        }
        else if (rbtnd.Checked == true)
        {
            Session["cans"] = "D";
            mcqmethod.insert_tempquestion(Convert.ToInt16(Session["subid"]), Convert.ToInt16(Session["sid"]), Convert.ToUInt16(Session["qid"]), Convert.ToString(Session["cans"]));
        }
        
        

        
    }
    public void getquestionbyqid()
    {
        DataTable dttemp = new DataTable();
        dttemp = mcqmethod.gettempquestionbyid(Convert.ToInt16(Session["sid"]), Convert.ToUInt16(Session["qid"]));
        if (dttemp.Rows.Count > 0)
        {
            
            Session["cans"] = Convert.ToString(dttemp.Rows[0][0]);
        }
        else
        {
            Session["cans"] = "";
        }

        if (Convert.ToString(Session["cans"]) == "A")
        {
            rbtna.Checked = true;
        }
        if (Convert.ToString(Session["cans"]) == "B")
        {
            rbtnb.Checked = true;
        }
        if (Convert.ToString(Session["cans"]) == "C")
        {
            rbtnc.Checked = true;
        }
        if (Convert.ToString(Session["cans"]) == "D")
        {
            rbtnd.Checked = true;
        }
        if (Convert.ToString(Session["cans"]) == "")
        {
            rbtna.Checked = false;
            rbtnb.Checked = false;
            rbtnc.Checked = false;
            rbtnd.Checked = false;
        }
    }



    protected void btnfinish_Click(object sender, ImageClickEventArgs e)
    {
        Session["endtime"] = DateTime.Now;
        Response.Redirect("fullresult.aspx");
        Response.Redirect("fullresult.aspx?id=" + lblsubject.ToString() + "&name=" + lblsubject.Text);
    }
}
