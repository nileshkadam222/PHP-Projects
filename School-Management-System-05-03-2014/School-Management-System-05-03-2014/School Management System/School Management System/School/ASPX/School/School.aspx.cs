using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using BLL;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class School : System.Web.UI.Page
{
    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!Page.IsPostBack)
        {
            if (Session["usertype"] != null)
            {
                if (Session["usertype"].ToString() == "student" || Session["usertype"].ToString() == "parent" || Session["usertype"].ToString() == "teacher")
                {
                    hlnkCheckTimeTable.Visible = true;
                }
                else
                {
                    hlnkCheckTimeTable.Visible = false;
                }
            }
            else
            {
                Response.Redirect("Login.aspx");
            }
        }
       
    }
    #endregion
       
}
