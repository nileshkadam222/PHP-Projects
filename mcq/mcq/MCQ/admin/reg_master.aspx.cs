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

public partial class admin_reg_master : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {

            grd_bind();
        }
    }
    protected void grd_bind()
    {
        DataTable dt = new DataTable();
        dt = mcqmethod.getregstration();
        grdshow.DataSource = dt;
        grdshow.DataBind();
    }






    protected void grdshow_PageIndexChanging(object sender, GridViewPageEventArgs e)
    {
        grdshow.PageIndex = e.NewPageIndex;
        grd_bind();
    }

    public void deletedata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        mcqproperty obj = new mcqproperty();

        obj.id = Convert.ToInt32(imgbtn.CommandArgument);
        if (mcqmethod.deleteRegMaster(obj) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Delete Successfully.');", true);
            grd_bind();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Try Again...');", true);
            //Console.Write("Try Again");
        }
    }
    public void updatedata(object sender, EventArgs e)
    {
        ImageButton imgbtn = new ImageButton();
        imgbtn = (ImageButton)sender;

        mcqproperty obj = new mcqproperty();

        DataTable dt = new DataTable();

        obj.id = Convert.ToInt32(imgbtn.CommandArgument);
        Session["sidtemp"] = obj.id;
        dt = mcqmethod.SelectRegMaster(obj);
       lblname.Text = Convert.ToString(dt.Rows[0]["sname"]);
        lblemail.Text = Convert.ToString(dt.Rows[0]["email"]);
        
        lblqualification.Text = Convert.ToString(dt.Rows[0]["qualification"]);
        chkactive.Checked = Convert.ToBoolean(dt.Rows[0]["a_status"]);
        chkadmin.Checked = Convert.ToBoolean(dt.Rows[0]["admin_status"]);
    }

    //public string get_status_img_url(string status)
    //{

    //    string imgurl = "";
    //    if (status == "True")
    //    {
    //        imgurl = "~/images/sucssess.png";
    //    }
    //    else
    //    {
    //        imgurl = "~/images/Fail.gif";
    //    }
    //    return imgurl;
    //    //}
    //    //protected void txtname_TextChanged(object sender, EventArgs e)
        //{
        //    search();
        //}
        //public void search()
        //{
        //    string sqlquery;
        //    if (txtname.Text != "")
        //    {
        //        sqlquery = " and sname like %'" + txtname.Text + "'%";
        //        DataTable dt = new DataTable();
        //        dt = mcqmethod.searchregstration(sqlquery);
        //        grdshow.DataSource = dt;
        //        grdshow.DataBind();
        //    }

        //}

    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        if (mcqmethod.updatereg_master(Convert.ToInt16(Session["sidtemp"]), chkactive.Checked, chkadmin.Checked) == true)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Update Successfully.');", true);
            grd_bind();
        }
        else
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Try Again.');", true);
        }
    }
}
