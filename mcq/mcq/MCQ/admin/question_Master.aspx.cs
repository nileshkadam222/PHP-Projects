using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

public partial class question_Master : System.Web.UI.Page
{
    
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
            subjectbind();
            btnupdate.Visible = false;

        }
    }
    public void subjectbind()
    {
        DataTable dt = new DataTable();
        dt = mcqmethod.getsubject();
        ddlsubject.DataSource = dt;
        ddlsubject.DataTextField = "subname";
        ddlsubject.DataValueField = "subid";
        ddlsubject.DataBind();
        ddlsubject1.DataSource = dt;
        ddlsubject1.DataTextField = "subname";
        ddlsubject1.DataValueField = "subid";
        ddlsubject1.DataBind();
        grdshowdata();

    }
    public void deletedata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        mcqproperty obj = new mcqproperty();

        obj.id = Convert.ToInt32(imgbtn.CommandArgument);
        if (mcqmethod.deletequestionMaster(obj) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Delete Successfully.');", true);
            grdshowdata();
        }
        else
        {
            Console.Write("Try Again");
        }
    }
    public void grdshowdata()
    {
        DataTable dtq = new DataTable();
        dtq = mcqmethod.display_question(Convert.ToInt16(ddlsubject1.SelectedValue));
        grdshow.DataSource = dtq;
        grdshow.DataBind();
    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.subject =Convert.ToInt16( ddlsubject.SelectedValue);
        obj.question = txtquestion.Text;
        obj.a = txta.Text;
        obj.b = txtb.Text;
        obj.c = txtc.Text;
        obj.d = txtd.Text;
        obj.astatus = chkstatus.Checked;
        obj.ans = ddlans.SelectedValue;
        if(mcqmethod.insert_question_master(obj)==true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Save Successfully.');", true);
            //lblmsg.Text = "Save succsessfully.";
            grdshowdata();
            //clear();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Saved Successfully.');", true);
            //lblmsg.Text="Not Save.";
        }
    }



    
    protected void grdshow_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        grdshow.PageIndex = e.NewPageIndex;
        grdshowdata();
    }
    protected void ddlsubject1_SelectedIndexChanged(object sender, EventArgs e)
    {
        grdshowdata();
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
    public void selectdata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        

        Session["qid"] = Convert.ToInt32(imgbtn.CommandArgument);
        DataTable dt = new DataTable();

        dt = mcqmethod.get_question(Convert.ToInt16(Session["qid"]));
        //ddlsubject.SelectedValue =Convert.ToInt16( dt.Rows[0]["subid"]);
        txtquestion.Text =Convert.ToString( dt.Rows[0]["qname"]) ;
        txta.Text = Convert.ToString(dt.Rows[0]["A"]);
        txtb.Text = Convert.ToString(dt.Rows[0]["B"]);
        txtc.Text = Convert.ToString(dt.Rows[0]["C"]);
        txtd.Text =Convert.ToString( dt.Rows[0]["D"]);
        ddlans.SelectedValue = Convert.ToString(dt.Rows[0]["ans"]);
         //obj.subject = Convert.ToInt16(dt.Rows("subid")(0));
         //obj.question = dt.Rows(0)("qid");
         //obj.a = dt.Rows(0)("A");
         //obj.b = dt.Rows(0)("B");
         //obj.c = dt.Rows(0)("C");
         //obj.d = dt.Rows(0)("D");
         //obj.ans = dt.Rows(0)("ans"); 
        btnupdate.Visible = true;
        btnsubmit.Visible = false;

    }
    protected void btnupdate_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.subject = Convert.ToInt16(ddlsubject.SelectedValue);
        obj.question = txtquestion.Text;
        obj.a = txta.Text;
        obj.b = txtb.Text;
        obj.c = txtc.Text;
        obj.d = txtd.Text;
        obj.ans = ddlans.SelectedValue;
        obj.astatus = chkstatus.Checked;
        obj.id = Convert.ToInt16(Session["qid"]);
        if (mcqmethod.Update_question_master(obj) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Update Successfully.');", true);
            //lblmsg.Text = "Update succsessfully.";
            grdshowdata();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Updated Successfully.');", true);
            //lblmsg.Text = "Not Update.";
        }
        clear();
        btnupdate.Visible = false;
        btnsubmit.Visible = true;
    }
    public void clear()
    {

        txta.Text = "";
        txtb.Text = "";
        txtc.Text = "";
        txtd.Text = "";
        txtquestion.Text = "";
        ddlans.SelectedIndex = 0;
        ddlsubject.SelectedIndex = 0;
        chkstatus.Checked = false;
    }
}
