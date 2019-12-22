using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class Calendar : System.Web.UI.Page
{
    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (Session["usertype"] != null)
            {
                ViewState["id"] = Request.QueryString["id"].ToString();
            }
            else
            {
                Response.Redirect("Login.aspx");
            }
        }
        catch (Exception ex)
        {

            throw ex;
        }

    }
    protected void Calendar1_SelectionChanged(object sender, EventArgs e)
    {
        try
        {
            int id = Convert.ToInt32(ViewState["id"]);

            if (id == 1)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtDateOfBirth.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 2)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtJoinDate.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 3)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtTelugu.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 4)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtHindi.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 5)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtEnglish.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 6)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtMaths.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 7)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtScience.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }
            if (id == 8)
            {
                string javascript = @"<script language=javascript>";
                javascript += "window.opener.document.all.txtSocial.value='" + Calendar1.SelectedDate.ToShortDateString() + "'; window.close();";
                javascript += "</script>";
                Response.Write(javascript);
            }

        }
        catch (Exception ex)
        {
            throw ex;
        }
    }
    #endregion 
}
