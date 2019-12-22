using System;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

/// <summary>
/// Summary description for mcqmethod
/// </summary>
public class mcqmethod
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    
	public mcqmethod()
	{
		//
		// TODO: Add constructor logic here
		//
	}
    public static Boolean insertreg(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_insert_reg_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sname", SqlDbType.VarChar).Value = obj.sname;
        cmd.Parameters.Add("@email", SqlDbType.VarChar).Value = obj.email;
        cmd.Parameters.Add("@password", SqlDbType.VarChar).Value = obj.password;
        cmd.Parameters.Add("@address", SqlDbType.VarChar).Value = obj.address;
        cmd.Parameters.Add("@city", SqlDbType.VarChar).Value = obj.city;
        cmd.Parameters.Add("@state", SqlDbType.VarChar).Value = obj.state;
        cmd.Parameters.Add("@mobile", SqlDbType.VarChar).Value = obj.contact;
        cmd.Parameters.Add("@qualification", SqlDbType.VarChar).Value = obj.quali;
        cmd.Parameters.Add("@subject", SqlDbType.Int).Value = obj.subject;
        con.Open();
       int result= cmd.ExecuteNonQuery();
       if (result > 0)
       {
           con.Close();
           return true;
       }
       else
       {
           con.Close();
           return false;
       }



    }
    public static Boolean updatereg_master(int sid,Boolean status,Boolean astatus)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_update_reg_master_active";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;
        cmd.Parameters.Add("@status", SqlDbType.Bit).Value = status;
        cmd.Parameters.Add("@astatus", SqlDbType.Bit).Value = astatus;
        con.Open();
        int result = cmd.ExecuteNonQuery();
        if (result > 0)
        {
            con.Close();
            return true;
        }
        else
        {
            con.Close();
            return false;
        }



    }
    public static DataTable getregstration()
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select r.sid,r.sname,r.email,r.address,r.city,r.state,r.mobile,r.qualification,subname as subject,r.r_date,r.a_status,r.admin_status from reg_master r inner join subject_master s on s.subid=r.subject where r.delet=1 order by r_date desc", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static DataTable searchregstration(string str)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select sid,sname,email,address,city,state,mobile,qualification,subject,r_date,a_status from reg_master where delet=1 '"+ str + "'", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }

    public static Boolean checkregMaster(string email)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select count(email) as 'res' from reg_master where delet=1 and email='" + email + "'", con);
        DataTable dt = new DataTable();
        da.Fill(dt);

        if (Convert.ToInt16(dt.Rows[0]["res"]) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static DataTable getsubject()
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select subid,subname from subject_master where delet=1", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;
      
    }
    public static Boolean checksubject(string subname)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select count(subid) as 'res' from subject_master where delet=1 and subname='" + subname + "'", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        
        if (Convert.ToInt16(dt.Rows[0]["res"])>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public static DataTable displaysubject()
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select subid,subname,sub_status,s_date,up_date from subject_master where delet=1 order by s_date desc", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;
        
    }
    public static DataTable subjectselect(int id)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select subid,subname,sub_status from subject_master where delet=1 and subid='" + id + "'", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static Boolean insert_feedback(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.CommandText = "sp_insert_feedback_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sname",SqlDbType.VarChar).Value = obj.sname;
        cmd.Parameters.Add("@email", SqlDbType.VarChar).Value = obj.email;
        cmd.Parameters.Add("@comment", SqlDbType.VarChar).Value = obj.comment;
        cmd.Connection = con;
        con.Open();
       int res = cmd.ExecuteNonQuery();
       if (res > 0)
       {
           con.Close();
           return true;
       }
       else
       {
           con.Close();
           return false;
       }




    }
    public static DataTable gettempquestionbyid(int sid, int qid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;

        SqlDataAdapter da = new SqlDataAdapter("select ans from temp_question where qid='" + qid + "' and sid='" + sid + "' ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;
        
    }
    public static void insert_tempquestion(int subid,int sid,int qid,string ans)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        SqlDataAdapter da = new SqlDataAdapter("select qid from temp_question where qid='" + qid + "' and sid='" + sid + "' ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        if (dt.Rows.Count > 0)
        {
            cmd.CommandText = "sp_update_temp_question";
        }
        else
        {
            cmd.CommandText = "sp_insert_temp_question";
        }
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@subid", SqlDbType.Int).Value = subid;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;
        cmd.Parameters.Add("@qid", SqlDbType.Int).Value = qid;
        cmd.Parameters.Add("@ans", SqlDbType.VarChar).Value = ans;
        cmd.Connection = con;
        con.Open();
        cmd.ExecuteNonQuery();
           con.Close();
        
   }
    public static void delete_tempquestion( int sid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.CommandText = "sp_delete_temp_question";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;
        cmd.Connection = con;
        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();

    }

    public static DataTable checklogin(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        
       SqlDataAdapter da = new SqlDataAdapter("select sid,admin_status from reg_master where email='" + obj.email + "' and password='" + obj.password + "' and a_status=1 and  delet=1", con);
       DataTable dt = new DataTable();
       da.Fill(dt);
        return dt;
       
    }
    public static DataTable display_reg(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;

        SqlDataAdapter da = new SqlDataAdapter("select r.sid, r.sname,r.address,r.city,r.state,r.mobile,r.qualification,s.subname as subject,r.subject as subid from reg_master r inner join subject_master s on s.subid=r.subject where r.delet=1 and r.email='" + obj.email + "' ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static void update_reg_master(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_update_reg_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@address", SqlDbType.VarChar).Value = obj.address;
        cmd.Parameters.Add("@city", SqlDbType.VarChar).Value = obj.city;
        cmd.Parameters.Add("@state", SqlDbType.VarChar).Value = obj.state;
        cmd.Parameters.Add("@mobile", SqlDbType.VarChar).Value = obj.contact;
        cmd.Parameters.Add("@qualification", SqlDbType.VarChar).Value = obj.quali;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = obj.sid;

        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();
        cmd.Dispose();
    }
    public static void insert_Login(int sid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_insert_login_detail";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;
        
        con.Open();
        cmd.ExecuteNonQuery();
            con.Close();
        
    }
    public static void Update_logout(int sid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_update_login_detail";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;

        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();

    }
    public static DataTable display_login()
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;

        SqlDataAdapter da = new SqlDataAdapter("select login_detail.lid as 'lid', reg_master.sname as 'sname',reg_master.email as 'email',subject_master.subname,login_detail.in_date as 'in_date',login_detail.out_date as 'out_date' from login_detail inner join reg_master on login_detail.sid=reg_master.sid  left Outer join subject_master on reg_master.subject=subject_master.subid where login_detail.delet=1 order by login_detail.in_date desc", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static Boolean update_password( int sid, string opassword,string npassword)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        SqlDataAdapter da = new SqlDataAdapter("select sid from reg_Master where sid='" + sid + "' and password='" + opassword + "' ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        if (dt.Rows.Count > 0)
        {
            cmd.CommandText = "sp_update_password";

            cmd.CommandType = CommandType.StoredProcedure;
            cmd.Parameters.Add("@sid", SqlDbType.Int).Value = sid;
            cmd.Parameters.Add("@password", SqlDbType.VarChar).Value = npassword;

            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
            con.Close();
            return true;
        }
        else
        {
            return false;
        }

    }
    public static Boolean insert_question_master(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_insert_question_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@qname", SqlDbType.VarChar).Value = obj.question;
        cmd.Parameters.Add("@A", SqlDbType.VarChar).Value = obj.a;
        cmd.Parameters.Add("@B", SqlDbType.VarChar).Value = obj.b;
        cmd.Parameters.Add("@C", SqlDbType.VarChar).Value = obj.c;
        cmd.Parameters.Add("@D", SqlDbType.VarChar).Value = obj.d;
        cmd.Parameters.Add("@ans", SqlDbType.VarChar).Value = obj.ans;
        cmd.Parameters.Add("@subid", SqlDbType.Int).Value = obj.subject;
        cmd.Parameters.Add("@astatus", SqlDbType.Bit).Value = obj.astatus;
        con.Open();
        int res = cmd.ExecuteNonQuery();
        if (res > 0)
        {
            con.Close();
            return true;
        }
        else
        {
            con.Close();
            return false;
        }
    }
    public static Boolean Update_question_master(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_update_question_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@qname", SqlDbType.VarChar).Value = obj.question;
        cmd.Parameters.Add("@A", SqlDbType.VarChar).Value = obj.a;
        cmd.Parameters.Add("@B", SqlDbType.VarChar).Value = obj.b;
        cmd.Parameters.Add("@C", SqlDbType.VarChar).Value = obj.c;
        cmd.Parameters.Add("@D", SqlDbType.VarChar).Value = obj.d;
        cmd.Parameters.Add("@ans", SqlDbType.VarChar).Value = obj.ans;
        cmd.Parameters.Add("@subid", SqlDbType.Int).Value = obj.subject;
        cmd.Parameters.Add("@qid", SqlDbType.Int).Value = obj.id;
        cmd.Parameters.Add("@astatus", SqlDbType.Bit).Value = obj.astatus;
        con.Open();
        int res = cmd.ExecuteNonQuery();
        if (res > 0)
        {
            con.Close();
            return true;
        }
        else
        {
            con.Close();
            return false;
        }
    }
    public static DataTable display_question(int subid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select qid,qname,A,B,C,D,ans,q_status from question_master where subid='" + subid + "' and delet=1 order by q_date desc", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static DataTable get_question(int id)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select qid,subid,qname,A,B,C,D,ans,q_status from question_master where qid='" + id + "' ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;
    }
  
    public static DataTable getquestionbysubject(int id)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select qid,subid,qname,A,B,C,D,ans from question_master where subid='" + id + "' and delet=1 order by q_date desc", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;
    }
    public static DataTable examshow()
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select id,cid,no_of_question,total_mark,mark_per_qouestion,negetive_mark,time_duration,sid from exam_master where delet=1 ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static DataTable selectexam( int id)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select eid,subid,t_n_q,p_q_M,n_m,etime,a_status from exam_master where eid='" + id + "' and  delet=1 ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static DataTable getexambysub(int subid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select e.eid,e.subid,e.t_n_q,e.p_q_m,e.n_m,e.etime,s.subname from exam_master e inner join subject_master s on e.subid=s.subid where e.subid='" + subid + "' and  e.delet=1 ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }
    public static DataTable checkexam(int subid)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon conn = new mcqdbcon();
        con.ConnectionString = conn.dbconnection;
        SqlDataAdapter da = new SqlDataAdapter("select eid from exam_master where subid='" + subid + "' and  delet=1 ", con);
        DataTable dt = new DataTable();
        da.Fill(dt);
        return dt;

    }

    public static Boolean insertsubject(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_insert_subject_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@subname", SqlDbType.VarChar).Value = obj.subname;
        cmd.Parameters.Add("@sub_status", SqlDbType.Bit).Value = obj.astatus;
        con.Open();
        int res = cmd.ExecuteNonQuery();
        if (res > 0)
        {
            con.Close();
            return true;
        }
        else
        {
            con.Close();
            return false;
        }
    }
    public static Boolean updatesubject(mcqproperty obj)
    {
        SqlConnection con = new SqlConnection();
        mcqdbcon dbcon = new mcqdbcon();
        con.ConnectionString = dbcon.dbconnection;
        SqlCommand cmd = new SqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "sp_update_subject_master";
        cmd.CommandType = CommandType.StoredProcedure;
        cmd.Parameters.Add("@id", SqlDbType.Int).Value = obj.id;
        cmd.Parameters.Add("@subname", SqlDbType.VarChar).Value = obj.subname;
        cmd.Parameters.Add("@sub_status", SqlDbType.Bit).Value = obj.astatus;
        con.Open();
        int res = cmd.ExecuteNonQuery();
        if (res > 0)
        {
            con.Close();
            return true;
        }
        else
        {
            con.Close();
            return false;
        }
    }

    
public static void logindetail( int sid )
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "insert into login_detail(sid,s_date) values('" + sid + "',getdate())";
    con.Open();
    cmd.ExecuteNonQuery();
    con.Close();
    cmd.Dispose();
}
public static int getmax()
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;

    SqlDataAdapter da = new SqlDataAdapter("select max(lid) from login_detail ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    int maxid = Convert.ToInt32(dt.Rows[0][0]);
    return maxid;

}
public static DataTable feedbackshow()
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select fid,sname,comment,email,f_date from feedback_master where delet=1 order by f_date desc", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;

}
public static DataTable display_exam_master1()
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;

    SqlDataAdapter da = new SqlDataAdapter("select e.eid,e.t_n_q,e.p_q_m,e.n_m,e.etime,s.subname,E.A_STATUS from exam_master e inner join subject_master s on s.subid=e.subid where e.delet=1 ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;

}
public static void update_feedback_master(int fid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "update feedback_master set a_status= 0";
    con.Open();
    cmd.ExecuteNonQuery();
    
}

public static Boolean insert_Exam_master(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_insert_exam_master";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@subid", SqlDbType.Int).Value = obj.subject;
    cmd.Parameters.Add("@t_n_q", SqlDbType.Int).Value = obj.tnq;
    cmd.Parameters.Add("@p_q_m", SqlDbType.Money).Value = obj.pqm;
    cmd.Parameters.Add("@n_m", SqlDbType.Money).Value = obj.nm;
    cmd.Parameters.Add("@etime", SqlDbType.Money).Value = obj.etime;
    cmd.Parameters.Add("@a_status", SqlDbType.Bit).Value = obj.astatus;
    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean update_Exam_master(mcqproperty obj)
{
    
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_update_exam_master";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@eid", SqlDbType.Int).Value = obj.id;
    cmd.Parameters.Add("@subid", SqlDbType.Int).Value = obj.subject;
    cmd.Parameters.Add("@t_n_q", SqlDbType.Int).Value = obj.tnq;
    cmd.Parameters.Add("@p_q_m", SqlDbType.Money).Value = obj.pqm;
    cmd.Parameters.Add("@n_m", SqlDbType.Money).Value = obj.nm;
    cmd.Parameters.Add("@etime", SqlDbType.Money).Value = obj.etime;
    cmd.Parameters.Add("@a_status", SqlDbType.Bit).Value = obj.astatus;
    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}

    public static DataTable astatus_regmaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select a_status from reg_master where sid='" + obj.id + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;

}
public static DataTable SelectRegMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select sid,sname,email,address,mobile,qualification,subject,a_status,admin_status from reg_master where delet=1 and sid= '" + obj.id + "'", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;
}
public static DataTable get_regeltfull(int sid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select q.qid,q.qname,q.A,q.B,q.C,q.D,q.ans,tq.ans as yans from question_master q inner join temp_question tq  on q.qid=tq.qid where sid='" + sid + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;
}
public static int get_currectans(int sid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select count(t.ans) from temp_question t left outer join question_master q on q.qid=t.qid  where  q.ans=t.ans and t.sid='" + sid + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    int total;
    total=Convert.ToInt16( dt.Rows[0][0]);
    return total;
}
public static int get_attquestion(int sid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select count(ans) from temp_question  where   sid='" + sid + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    int atq;
    atq = Convert.ToInt16(dt.Rows[0][0]);
    return atq;
}
public static double get_etimedeff(DateTime stime, DateTime endtime)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select datediff(ss,'" + stime + "','" + endtime + "')", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    double etime;
    etime = Convert.ToInt16(dt.Rows[0][0]);
    return etime;
 }
public static void insert_Result_master(mcqproperty obj)
    //int sid,int subid,double total,double nm,double etime, DateTime stime,DateTime endtime,double omark,DateTime otime
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;

    
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_intert_result_master";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@sid", SqlDbType.Int).Value = obj.sid;
    cmd.Parameters.Add("@subid", SqlDbType.Int).Value = obj.subject;
    cmd.Parameters.Add("@total", SqlDbType.Money).Value = obj.total;
    cmd.Parameters.Add("@n_m", SqlDbType.Money).Value = obj.nm;
    cmd.Parameters.Add("@etime", SqlDbType.Money).Value = obj.etime;
    cmd.Parameters.Add("@stime", SqlDbType.DateTime).Value = obj.stime;
    cmd.Parameters.Add("@endtime", SqlDbType.DateTime).Value = obj.endtime;
    cmd.Parameters.Add("@omark", SqlDbType.Money).Value = obj.omark;
    cmd.Parameters.Add("@otime", SqlDbType.VarChar).Value = obj.otime;
    con.Open();
    cmd.ExecuteNonQuery();
    con.Close();
    
}
public static DataTable get_result(int sid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select sid,total,n_m,etime,e_datestime,endtime,omrk from result_Master  where sid='" + sid + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;
}
public static DataTable get_resultbyid(int sid)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select sid, total,n_m,etime,stime,endtime,e_date,omark,otime from result_master where sid='" + sid + "' ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;
}
public static DataTable get_resultall()
{
    SqlConnection con = new SqlConnection();
    mcqdbcon conn = new mcqdbcon();
    con.ConnectionString = conn.dbconnection;
    SqlDataAdapter da = new SqlDataAdapter("select sid, total,n_m,etime,stime,endtime,e_date,omark,otime from result_master order by sid desc ", con);
    DataTable dt = new DataTable();
    da.Fill(dt);
    return dt;
}
    //=================================Deleted=========================
public static Boolean deletesubject(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_Subject_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@subid", SqlDbType.VarChar).Value = obj.id;
    
    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean deleteRegMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_Reg_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@sid", SqlDbType.VarChar).Value = obj.id;

    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean deleteFeedbackMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_feedback_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@fid", SqlDbType.VarChar).Value = obj.id;

    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean deleteExamMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_exam_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@eid", SqlDbType.VarChar).Value = obj.id;

    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean deleteResultMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_result_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@rid", SqlDbType.VarChar).Value = obj.id;

    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
public static Boolean deletequestionMaster(mcqproperty obj)
{
    SqlConnection con = new SqlConnection();
    mcqdbcon dbcon = new mcqdbcon();
    con.ConnectionString = dbcon.dbconnection;
    SqlCommand cmd = new SqlCommand();
    cmd.Connection = con;
    cmd.CommandText = "sp_question_Master_Delete";
    cmd.CommandType = CommandType.StoredProcedure;
    cmd.Parameters.Add("@qid", SqlDbType.VarChar).Value = obj.id;

    con.Open();
    int res = cmd.ExecuteNonQuery();
    if (res > 0)
    {
        con.Close();
        return true;
    }
    else
    {
        con.Close();
        return false;
    }
}
}
