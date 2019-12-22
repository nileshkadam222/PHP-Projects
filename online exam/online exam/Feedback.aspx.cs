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
using System.Data.SqlClient;

public partial class Feedback : System.Web.UI.Page
{
    SqlConnection con;
    SqlCommand com;
    SqlParameter p1, p2, p3, p4;
    SqlDataAdapter da;
    DataSet ds;

    protected void Page_Load(object sender, EventArgs e)
    {
        string str = "Data Source=.\\SQLEXPRESS;AttachDbFilename=D:\\QuizCS\\App_Data\\QUIZ.MDF;Integrated Security=True;Connect Timeout=30;User Instance=True";
        con = new SqlConnection(str);
        com = new SqlCommand();
        com.Connection = con;
      
        con.Open();

        
    
        da = new SqlDataAdapter(com);
        ds = new DataSet();
        //da.Fill(ds, "abc");
        p1 = new SqlParameter("@p1", SqlDbType.Char);
        p2 = new SqlParameter("@p2", SqlDbType.Char);
        p3 = new SqlParameter("@p3", SqlDbType.Char);
        p4 = new SqlParameter("@p4", SqlDbType.Char);

        com.Parameters.Add(p1);
        com.Parameters.Add(p2);
        com.Parameters.Add(p3);
        com.Parameters.Add(p4);

    }
    //protected void btnsave_Click(object sender, EventArgs e)
    //{


       //com.CommandText = "insert into fdbk values (@p1,@p2,@p3,@p4)";
        //p1.Value = TextBox1.Text;
        //p2.Value = TextBox2.Text;
        //p3.Value = DropDownList1.SelectedItem.ToString();

       // p4.Value = TextBox3.Text;

        //com.ExecuteNonQuery();
        //con.Close();
      
    //}


    protected void Button1_Click(object sender, EventArgs e)
    {
        com.CommandText = "insert into fdbk values (@p1,@p2,@p3,@p4)";
        p1.Value = TextBox1.Text;
        p2.Value = TextBox2.Text;
        p3.Value = DropDownList1.SelectedItem.ToString();

        p4.Value = TextBox3.Text;

        com.ExecuteNonQuery();
        con.Close();
        TextBox1.Text = "";
        TextBox2.Text ="";
        TextBox3.Text = "";
    }
    protected void LinkButton1_Click(object sender, EventArgs e)
    {
        Response.Redirect("start1.aspx");
    }
}

    
    

