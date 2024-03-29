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
using System.Data.SqlClient;
public partial class Viewcirculars : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.AppSettings["conn"].ToString());
    SqlCommand cmd = new SqlCommand();
    SqlDataAdapter sda1,sda;
    DataSet ds1, ds;
    protected void Page_Load(object sender, EventArgs e)
    {

        if (!IsPostBack)
        {
            sda1 = new SqlDataAdapter("select * from CircularTypes", con);
            ds1 = new DataSet();
            sda1.Fill(ds1);

            DDLCirculartype.DataSource = ds1;
            DDLCirculartype.DataTextField = "CircularType";
            DDLCirculartype.DataValueField = "CircularTypeId";
            DDLCirculartype.DataBind();
            DDLCirculartype.Items.Insert(0, "Select");


        }
    }
    protected void DDLCirculartype_SelectedIndexChanged(object sender, EventArgs e)
    {
        if (DDLCirculartype.SelectedIndex != 0)
        {
            cmd.Connection = con;
            con.Open();
            cmd.CommandText = "SELECT CircularDescription, [Date], Timings, Place, Duration FROM Circulars where CircularTypeId = " + Convert.ToInt32(DDLCirculartype.SelectedValue);

            cmd.CommandType = CommandType.Text;
            sda = new SqlDataAdapter(cmd);

            ds = new DataSet();
            sda.Fill(ds);

            GVCirculartype.DataSource = ds;
            GVCirculartype.DataBind();
        }
    }
}
