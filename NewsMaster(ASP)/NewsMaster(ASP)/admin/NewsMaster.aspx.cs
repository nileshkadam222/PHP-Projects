using System;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class admin_NewsMaster : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        lblNewsDateTime.Text = DateTime.Now.ToString();
    }
    protected void btnAddNews_Click(object sender, EventArgs e)
    {
        SqlConnection cn;
        SqlCommand cmd;
        string cnstr;
        string cmdstr;
        string newsimgpath;
        string newsfile;

        cnstr = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        cn = new SqlConnection(cnstr);
        cn.Open();

        if (fuNewsImage.HasFile)
        {
            newsimgpath = Server.MapPath("../imgs/") + fuNewsImage.FileName;
            fuNewsImage.SaveAs(newsimgpath);
            newsfile = fuNewsImage.FileName;
        }
        else
        {
            newsfile = "newsmaster.jpg";
        }
        cmdstr = "insert into news_master (news_title,news_description,news_postedby,news_details,news_img,news_datetime,cat_id) values ('" + txtNewsTitle.Text.Replace("'", "''") + "','" + txtDescription.Text.Replace("'", "''") + "','" + txtPostedBy.Text.Replace("'", "''") + "','" + txtDetails.Text.Replace("'", "''") + "','" + newsfile + "','" + lblNewsDateTime.Text + "'," + int.Parse(drpdwnlstCategoryMaster.SelectedValue) + ")";
        cmd = new SqlCommand(cmdstr, cn);
        cmd.ExecuteNonQuery();

        cn.Close();

        txtNewsTitle.Text = "";
        txtDescription.Text = "";
        txtDetails.Text = "";
        txtPostedBy.Text = "";

        lblMessage.Text = "Record Inserted Successfully...";

        txtNewsTitle.Focus();
    }
}
