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

public partial class admin_sub_master : System.Web.UI.Page
{
    int subid;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
            showdata();

            btnsubmit.Visible = true;
            btnupdate.Visible = false;
        }
    }
    public void showdata()
    {
        DataTable dt = new DataTable();
        dt = mcqmethod.displaysubject();
        grdshowsubject.DataSource = dt;
        grdshowsubject.DataBind();
    }
    public void deletedata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        mcqproperty obj = new mcqproperty();

        obj.id = Convert.ToInt32(imgbtn.CommandArgument);
        if (mcqmethod.deletesubject(obj) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Delete Successfully.');", true);
            showdata();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Try Again Please');", true);
            //Console.Write("Try Again");
        }
    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        if (mcqmethod.checksubject(Convert.ToString(txtsubject.Text)) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('subject avalable');", true);
            //lblmsg.Text="subject avalable";
        }
        else
        {
            mcqproperty obj = new mcqproperty();
            obj.subname = txtsubject.Text;
            obj.astatus = chkstatus.Checked;
            if (mcqmethod.insertsubject(obj) == true)
            {
                ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Save Successfully.');", true);
                //lblmsg.Text = "Save Successfully.";
                showdata();
            }
            else
            {
                ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Saved Successfully.');", true);
                //lblmsg.Text = "Not Save.";
            }
        }
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

        mcqproperty obj = new mcqproperty();

        int id = Convert.ToInt32(imgbtn.CommandArgument);
        DataTable dt = new DataTable();
        dt = mcqmethod.subjectselect(id);
        txtsubject.Text=Convert.ToString(dt.Rows[0]["Subname"]);
        chkstatus.Checked = Convert.ToBoolean(dt.Rows[0]["sub_status"]);
        Session["subid"] = Convert.ToInt16(dt.Rows[0]["Subid"]);
        btnsubmit.Visible = false;
        btnupdate.Visible = true;
    }

    protected void btnupdate_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.id = Convert.ToInt16(Session["subid"]);
        obj.subname = txtsubject.Text;
        obj.astatus = chkstatus.Checked;
        if (mcqmethod.updatesubject(obj)== true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Update Successfully.');", true);
            //lblmsg.Text = "Update Successfully.";
            showdata();
            clear();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Not Updated Successfully.');", true);
            //lblmsg.Text = "Not Save.";
        }

    }
    public void clear()
    {

        txtsubject.Text = "";
        chkstatus.Checked = false;
        btnsubmit.Visible = true;
        btnupdate.Visible = false;
    }
}
