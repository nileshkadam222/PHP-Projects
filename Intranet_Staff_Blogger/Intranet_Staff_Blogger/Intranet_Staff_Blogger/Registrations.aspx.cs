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
using IntranetStaffblogger_bal;

public partial class Registrations : System.Web.UI.Page
{
    IntranetStaffblogger_bal.UserDetails_BAL obj1 = new UserDetails_BAL();
    DataSet dsDesignation, dsDepartment;
    protected void Page_Load(object sender, EventArgs e)
    {

        if (!IsPostBack)
        {
            dsDesignation = new DataSet();
            dsDesignation = obj1.getdesignation();
            DDDLDesignation.DataSource = dsDesignation;
            DDDLDesignation.DataTextField = "UserType";
            DDDLDesignation.DataValueField = "UserTypeId";
            DDDLDesignation.DataBind();
            DDDLDesignation.Items.Insert(0, "Select");


            dsDepartment = new DataSet();
            dsDepartment = obj1.getdepartment();
            DDDLDepartment.DataSource = dsDepartment;
            DDDLDepartment.DataTextField = "Deptname";
            DDDLDepartment.DataValueField = "DeptId";
            DDDLDepartment.DataBind();
            DDDLDepartment.Items.Insert(0, "Select");

        }
    }
    protected void BtnRegister_Click(object sender, EventArgs e)
    {

        string errmsg = obj1.registration(TxtUserName.Text, Txtpassword.Text, TxtFirstname.Text, TxtLastname.Text, Convert.ToDateTime(TxtDob.Text), TxtAddress.Text, TxtEmailid.Text, TxtContactNumber.Text, Convert.ToInt16(DDDLDepartment.SelectedItem.Value), Convert.ToInt16(DDDLDesignation.SelectedItem.Value) + 1, true);
        if (errmsg == "yes")
            Lblerrmsg.Text = "Successfully Registered";
        else
            //Response.Write("Not added, Username already existed in this branch");
            Lblerrmsg.Text = "Not Regisred";

    }
    protected void BtnClear_Click(object sender, EventArgs e)
    {
        TxtUserName.Text = "";
        Txtpassword.Text = "";
        TxtFirstname.Text = "";
        TxtLastname.Text = "";
        TxtEmailid.Text = "";
        TxtDob.Text = "";
        TxtContactNumber.Text = "";
        TxtAddress.Text = "";

    }
    protected void CalDob_SelectionChanged(object sender, EventArgs e)
    {
        TxtDob.Text = CalDob.SelectedDate.ToShortDateString();
    }
}
