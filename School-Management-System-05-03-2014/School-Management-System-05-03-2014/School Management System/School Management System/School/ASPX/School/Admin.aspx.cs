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

public partial class Admin : System.Web.UI.Page
{
    #region "Fields"
    SchoolBLL oSchoolBLL = null;
    BLL.School oSchool = null;
    #endregion 

    #region "Events"
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            if (Session["username"].ToString() != null && Session["usertype"].ToString()!= null)
            {
                if (!Page.IsPostBack)
                {
                    Response.Cache.SetExpires(DateTime.UtcNow.AddMinutes(-1));
                    Response.Cache.SetCacheability(HttpCacheability.NoCache);
                    Response.Cache.SetNoStore();
                    Session.Add("logintime", DateTime.Now.ToString("g"));
                }

            }
            else
            {
                ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.parent.location.href='Login.aspx'</script>", false);
            }
        }
        catch
        {
            Response.Redirect("Login.aspx");
            ScriptManager.RegisterStartupScript(this, this.GetType(), "message", "alert('Please Login');location.href='Login.aspx';", true);
          //ScriptManager.RegisterStartupScript(this, this.GetType(), "Alert", "location.href='Login.aspx';", true);
        }
    }

    protected void imgLogOut_Click(object sender, ImageClickEventArgs e)
    {
        try
        {
            LogInLogOut();
            FormsAuthentication.SignOut();
            Session.Abandon();           
           
            ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.parent.location.href='Login.aspx'</script>", false);
        }
        catch (Exception ex)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.parent.location.href='Login.aspx'</script>", false);

        }       

    }   
   
    #endregion

    #region "Methods"
    public void LogInLogOut()
    {

        try
        {
            oSchool = new BLL.School();
            oSchool.Id = 1;
            oSchool.LogIn = Session["logintime"].ToString();
            oSchool.FirstName = Session["username"].ToString();
            oSchoolBLL = new SchoolBLL();
            oSchoolBLL.LoginLogout(oSchool);
          


        }
        catch (Exception ex)
        {
            ClientScript.RegisterStartupScript(this.GetType(), "Key", "<script type='text/javascript'>window.parent.location.href='Login.aspx'</script>", false);
        }
        finally
        {
            oSchool = null;
            oSchoolBLL = null;

        }

    }
    #endregion

}
