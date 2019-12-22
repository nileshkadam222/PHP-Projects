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

public partial class registration : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {
           
            DataTable dt = new DataTable();
            dt = mcqmethod.getsubject();
            ddlsub.DataSource = dt;
            ddlsub.DataTextField = "subname";
            ddlsub.DataValueField = "subid";
            ddlsub.DataBind();
            
        }

    }

    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        if (mcqmethod.checkregMaster(txtemail.Text) == true)
        {
            Response.Write("Thie E-Mail Already Existed..");
        }
        else
        {


            mcqproperty obj = new mcqproperty();
            obj.sname = txtfname.Text + " " + txtmname.Text + " " + txtlname.Text;
            obj.email = txtemail.Text;
            obj.password = txtpassword.Text;
            obj.address = txtaddress.Text;
            obj.city = txtcity.Text;
            obj.state = txtstate.Text;
            obj.contact = txtcontact.Text;
            obj.quali = ddlquali.SelectedValue;
            obj.subject = Convert.ToInt16(ddlsub.SelectedValue);
            if (mcqmethod.insertreg(obj) == true)
            {
                DataTable dt = new DataTable();
                dt=mcqmethod.checklogin(obj);
                if (dt.Rows.Count > 0)
                {
                    Session["user"] = txtemail.Text;
                    Session["sid"] = Convert.ToInt16(dt.Rows[0]["sid"]);
                                        
                    Response.Redirect("students/Default.aspx");

                   }      
                }
                else
                {
                    Response.Write("Try Again");
                }

        }
    }
}
