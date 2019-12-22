﻿using System;
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
public partial class StaffProfile_staff : System.Web.UI.Page
{
    UserDetails_BAL obj = new UserDetails_BAL();
    DataSet ds;
    DataSet dsDesignation, dsDepartment;
    protected void Page_Load(object sender, EventArgs e)
    {
        Lblerrmsg.Visible = false;

        if (!IsPostBack)
        {
            if (Session["UserName"] != null)
            {

                ds = obj.getuserprofile(Session["UserName"].ToString());


                //assigning values
                TxtUserName.Text = ds.Tables[0].Rows[0][1].ToString();
                Txtpassword.Text = ds.Tables[0].Rows[0][2].ToString();
                TxtFirstname.Text = ds.Tables[0].Rows[0][3].ToString();
                TxtLastname.Text = ds.Tables[0].Rows[0][4].ToString();
                TxtDob.Text = ds.Tables[0].Rows[0][5].ToString(); ;
                TxtAddress.Text = ds.Tables[0].Rows[0][6].ToString();
                TxtEmailid.Text = ds.Tables[0].Rows[0][7].ToString();
                TxtContactNumber.Text = ds.Tables[0].Rows[0][8].ToString();
                DDDLDesignation.Items.Add(ds.Tables[0].Rows[0][9].ToString());
                DDDLDepartment.Items.Add(ds.Tables[0].Rows[0][10].ToString());
                //end assigning values

            }
        }
    }
    protected void CalDob_SelectionChanged(object sender, EventArgs e)
    {

    }
    
    

    protected void BtnEdit_Click(object sender, EventArgs e)
    {
        try
        {
            TxtUserName.Enabled = false;
            Txtpassword.Enabled = true;
            TxtFirstname.Enabled = true;
            TxtLastname.Enabled = true;
            CalDob.Enabled = true;
            //TxtDob.Enabled = true;
            TxtAddress.Enabled = true;
            TxtEmailid.Enabled = true;
            TxtContactNumber.Enabled = true;                              
           
            //getting the designation details
            dsDesignation = new DataSet();
            dsDesignation = obj.getdesignation();
            DDDLDesignation.DataSource = dsDesignation;
            DDDLDesignation.DataTextField = "UserType";
            DDDLDesignation.DataValueField = "UserTypeId";
            DDDLDesignation.DataBind();
            DDDLDesignation.Items.Insert(0, "Select");
            DDDLDesignation.Enabled = true;

        
            //end of getting the designation details

            //getting the department details
            dsDepartment = new DataSet();
            dsDepartment = obj.getdepartment();
            DDDLDepartment.DataSource = dsDepartment;
            DDDLDepartment.DataTextField = "Deptname";
            DDDLDepartment.DataValueField = "DeptId";
            DDDLDepartment.DataBind();
            DDDLDepartment.Items.Insert(0, "Select");
            DDDLDepartment.Enabled = true;
            //end getting the department details


            Btnupdate.Enabled = true;
            BtnEdit.Enabled = false;
        }
        catch (Exception ex) { throw ex; }  
    }

    protected void Btnupdate_Click(object sender, EventArgs e)
    {

        string errmsg = obj.UpdateUserProfile(TxtUserName.Text, Txtpassword.Text, TxtFirstname.Text, TxtLastname.Text, Convert.ToDateTime(TxtDob.Text), TxtAddress.Text, TxtEmailid.Text, TxtContactNumber.Text, Convert.ToInt16(DDDLDesignation.SelectedItem.Value), Convert.ToInt16(DDDLDepartment.SelectedItem.Value), true);
        if (errmsg == "yes")
            Lblerrmsg.Text = "Updated Successfully ";
        else
            //Response.Write("Not added, Username already existed in this branch");
            Lblerrmsg.Text = "Not Updated";
    }
    protected void BtnCancel_Click(object sender, EventArgs e)
    {
        TxtUserName.Enabled = false;
        Txtpassword.Enabled = false;
        TxtFirstname.Enabled = false;
        TxtLastname.Enabled = false;
        CalDob.Enabled = false;
        //TxtDob.Enabled = false;
        TxtAddress.Enabled = false;
        TxtEmailid.Enabled = false;
        TxtContactNumber.Enabled = false;
        DDDLDesignation.Enabled = false;
        DDDLDepartment.Enabled = false;
        BtnEdit.Enabled = true;
        Btnupdate.Enabled = false;

    }
}
