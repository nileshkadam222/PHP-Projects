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

public partial class admin_Exam_config : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
            bindsubject();
            btnsubmit.Visible = true;
            btnupdate.Visible = false;
            getdata();
        }

    }
    public void bindsubject()
    {

        DataTable dt = new DataTable();
        dt = mcqmethod.getsubject();
        ddlsubject.DataSource = dt;
        ddlsubject.DataTextField = "subname";
        ddlsubject.DataValueField = "subid";
        ddlsubject.DataBind();
    }
    public void  getdata()
    {
        DataTable dt = new DataTable();

        dt = mcqmethod.display_exam_master1();
        grdshow.DataSource = dt;
        grdshow.DataBind();
    }
    public string get_status_img_url(string status)
    {

        string imgurl = "";
        if (status == "True")
        {
            imgurl = "~/images/sucssess.png";
        }
        else
        {
            imgurl = "~/images/Fail.gif";
        }
        return imgurl;
    }

    

    public void deletedata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        mcqproperty obj = new mcqproperty();

        obj.id = Convert.ToInt32(imgbtn.CommandArgument);
        if (mcqmethod.deleteExamMaster(obj) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Delete Successfully.');", true);
            getdata();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Try Again.');", true);
            //Console.Write("Try Again");
        }
    }
    public void selectdata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;



        Session["eid"] = Convert.ToInt32(imgbtn.CommandArgument);
        DataTable dt = new DataTable();

        dt = mcqmethod.selectexam(Convert.ToInt16(Session["eid"]));
        
        Session["subid"] = Convert.ToString(dt.Rows[0]["subid"]);
        txttotalquestion.Text = Convert.ToString(dt.Rows[0]["t_n_q"]);
        txtmpq.Text = Convert.ToString(dt.Rows[0]["p_q_m"]);
        txtnegmark.Text = Convert.ToString(dt.Rows[0]["n_m"]);
        txtexamtime.Text = Convert.ToString(dt.Rows[0]["etime"]);
        Session["eid"] = Convert.ToInt16(dt.Rows[0]["eid"]);
        chkactive.Checked = Convert.ToBoolean(dt.Rows[0]["a_status"]);
        btnsubmit.Visible = false;
        btnupdate.Visible = true;

    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        DataTable dt=new DataTable();
        dt = mcqmethod.checkexam(Convert.ToInt16(ddlsubject.SelectedValue));
        if ( dt.Rows.Count > 0)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Exam of Subject Available.');", true);
            //Response.Write("Subject Avalaibal");
        }
        else
        {

            mcqproperty obj = new mcqproperty();
            obj.subject = Convert.ToInt16(ddlsubject.SelectedValue);
            obj.tnq = Convert.ToInt16(txttotalquestion.Text);
            obj.pqm = Convert.ToInt16(txtmpq.Text);
            obj.astatus = Convert.ToBoolean(chkactive.Checked);
            if (txtnegmark.Text == "")
            {
                obj.nm = 0;
            }
            else
            {
                obj.nm = Convert.ToDouble(txtnegmark.Text);
            }
            obj.etime = Convert.ToDouble(txtexamtime.Text);
            obj.astatus = Convert.ToBoolean(chkactive.Checked);

            if (mcqmethod.insert_Exam_master(obj) == true)
            {
                ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Save Successfully.');", true);
                //ClientScript.RegisterStartupScript("Save Successfull..",);
                getdata();
                clear();


            }
            else
            {
                ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Saved Successfully.');", true);
                //ClientScript.RegisterStartupScript("Try Again ..");
            }
        }
    }
    public void clear()
    {
     ddlsubject.SelectedIndex=0;
        txttotalquestion.Text="";
        txtmpq.Text="";
        chkactive.Checked=false;
     
    }

    protected void btnupdate_Click(object sender, ImageClickEventArgs e)
    {

        mcqproperty obj = new mcqproperty();
        obj.id = Convert.ToInt16(Session["eid"]);
        obj.subject = Convert.ToInt16(ddlsubject.SelectedValue);
        obj.tnq = Convert.ToInt16(txttotalquestion.Text);
        obj.pqm = Convert.ToDouble(txtmpq.Text);
        obj.astatus = Convert.ToBoolean(chkactive.Checked);
        if (txtnegmark.Text == "")
        {
            obj.nm = 0;
        }
        else
        {
            obj.nm = Convert.ToDouble(txtnegmark.Text);
        }
        obj.etime = Convert.ToDouble(txtexamtime.Text);
        obj.astatus = Convert.ToBoolean(chkactive.Checked);

        if (mcqmethod.update_Exam_master(obj) == true)
        {
                    
            getdata();
            clear();
            btnsubmit.Visible = true;
            btnupdate.Visible = false;
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Update Successfully.');", true);
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Updated Successfully.');", true);
            //ClientScript.RegisterStartupScript("Try Again ..");
        }
    }
}
