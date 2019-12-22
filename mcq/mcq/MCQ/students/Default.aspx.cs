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

public partial class students_Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack == false)
        {

            DataTable dt = new DataTable();
            mcqproperty obj = new mcqproperty();
            obj.email = Convert.ToString(Session["user"]);
            dt = mcqmethod.display_reg(obj);
            lblnname.Text = Convert.ToString(dt.Rows[0]["sname"]);
            lblemail.Text = Convert.ToString(Session["user"]);
            txtaddress.Text = Convert.ToString(dt.Rows[0]["address"]);
            txtcity.Text = Convert.ToString(dt.Rows[0]["city"]);
            txtstate.Text = Convert.ToString(dt.Rows[0]["state"]);
            txtcontact.Text = Convert.ToString(dt.Rows[0]["mobile"]);
            ddlquali.SelectedValue = Convert.ToString(dt.Rows[0]["qualification"]);
            // lblsub.Text = Convert.ToString(dt.Rows[0]["subject"]);
            Session["subid"] = Convert.ToString(dt.Rows[0]["subid"]);
            Session["sid"] = Convert.ToInt16(dt.Rows[0]["sid"]);

            dt = mcqmethod.getsubject();
            ddlsub.DataSource = dt;
            ddlsub.DataTextField = "subname";
            ddlsub.DataValueField = "subid";
            ddlsub.DataBind();

        }

    }
    protected void btnsubmit_Click(object sender, ImageClickEventArgs e)
    {
        mcqproperty obj = new mcqproperty();
        obj.sid = Convert.ToInt16(Session["sid"]);
        obj.address = txtaddress.Text;
        obj.city = txtcity.Text;
        obj.contact = txtcontact.Text;
        obj.state = txtstate.Text;
        obj.quali = ddlquali.SelectedValue;
        mcqmethod.update_reg_master(obj);
        ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Profile Update Successfully.');", true);
    }
    protected void ImageButton1_Click(object sender, ImageClickEventArgs e)
    {
        mcqmethod.delete_tempquestion(Convert.ToUInt16(Session["sid"]));
        Response.Redirect("examconfig.aspx?id=" + ddlsub.SelectedValue.ToString() + "&name=" + ddlsub.SelectedItem.Text);
    }
}
