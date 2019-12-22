using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Library_Management
{
    public partial class rbook : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public rbook()
        {
            InitializeComponent();
        }

        private void rbook_Load(object sender, EventArgs e)
        {

        }
        private void update_book()
        {
            int bookid = Convert.ToInt32(textBox2.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            //UPDATE `book` SET  `status`=0 WHERE `b_id`=1
            cmd.CommandText = "UPDATE `book` SET  `stu`=@status WHERE `book_id`=@bookid";
            cmd.Parameters.AddWithValue("@status", 1);
            cmd.Parameters.AddWithValue("@bookid", bookid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
              //  MessageBox.Show("update");

            }


        }
        private string getissue_date()
        {
            string idate = "";
            int uid = Convert.ToInt32(textBox1.Text);
            int bid = Convert.ToInt32(textBox2.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "SELECT `issuedate` FROM `issued` WHERE  `userid`=@userid AND  `bookid`=@bookid";
            cmd.Parameters.AddWithValue("@returnid", 0);
            cmd.Parameters.AddWithValue("@userid", uid);
            cmd.Parameters.AddWithValue("@bookid", bid);
            cmd.Connection = connection;
            MySqlDataReader reader = cmd.ExecuteReader();
            while (reader.Read())
            {
                idate = Convert.ToString(reader["issuedate"]);
            }
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();

            }

            return idate;

        }
        private string getbook_title()
        {
            string booktitle="";
            
            int bid = Convert.ToInt32(textBox2.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "SELECT  `book_title` FROM `book` WHERE `book_id`=@bookid";
            cmd.Parameters.AddWithValue("@bookid", bid);
            cmd.Connection = connection;
            MySqlDataReader reader = cmd.ExecuteReader();
            while (reader.Read())
            {
                booktitle = Convert.ToString(reader["book_title"]);
            }
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();

            }

            return booktitle;

        }
        private int fine()
        {

            int uid = Convert.ToInt32(textBox1.Text);
           
            string rdate = DateTime.Today.ToString("dd");
            string idate = getissue_date();
            string day = idate.Substring(2, 2);
            int i = Convert.ToInt32(day);
            int r = Convert.ToInt32(rdate);
            int valid = (i + 10) % 31;
            int fine = 0;
            if (valid <= r)
            {
                fine = (r - valid) * 5;
            }
            else
            {
                fine = 0;
            }
            return fine;


        }
        private void myfine_add()
        {
           
            int uid = Convert.ToInt32(textBox1.Text);
            int bid = Convert.ToInt32(textBox2.Text);
            string idate = getissue_date();
            string month = idate.Substring(0, 1);
            string day = idate.Substring(2, 2);
            int day1 = Convert.ToInt32(day);
            string year = idate.Substring(5, 4);
            string issuedate = year + "-0" + month + "-" + day;
            string lastdate = year + "-0" + month + "-" + day1;
            string btitle = getbook_title();
            MessageBox.Show(btitle);
            int fin = fine();
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "INSERT INTO `myfine`(`user_id`, `book_id`, `book_title`, `issue_date`, `last_date`, `fine`) VALUES (@user_id,@book_id,@book_title,@issue_date,@last_date,@fine)";
            //cmd.Parameters.AddWithValue("@returnid", 0);
            cmd.Parameters.AddWithValue("@user_id", uid);
            cmd.Parameters.AddWithValue("@book_id", bid);
            cmd.Parameters.AddWithValue("@book_title", btitle);
            cmd.Parameters.AddWithValue("@issue_date", issuedate);
            cmd.Parameters.AddWithValue("@last_date", lastdate);
            cmd.Parameters.AddWithValue("@fine", fin);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
               // MessageBox.Show("add");


            }
            


        }
        
        private void return_book()
        {

            int uid = Convert.ToInt32(textBox1.Text);
            int bid = Convert.ToInt32(textBox2.Text);
                                
            string returndate = DateTime.Today.ToString("yyyy-MM-dd");
            string idate = getissue_date();
            string month=idate.Substring(0,1);
            string day = idate.Substring(2,2);
            string year = idate.Substring(5,4);
            string issuedate = year + "-0" + month + "-" + day;
            MessageBox.Show("issued ON "+issuedate);
           
            

            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "INSERT INTO `return`(`returnid`, `bookid`, `userid`, `returndate`,`issuedate`) VALUES (@returnid,@bookid,@userid,@returndate,@issuedate)";
            cmd.Parameters.AddWithValue("@returnid", 0);
            cmd.Parameters.AddWithValue("@userid", uid);
            cmd.Parameters.AddWithValue("@bookid", bid);
            cmd.Parameters.AddWithValue("@returndate", returndate);
            cmd.Parameters.AddWithValue("@issuedate", issuedate);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("return");
                

            }


        }
        private int get_fine()
        {
            
            int uid = Convert.ToInt32(textBox1.Text);
            int fine = 0;
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "SELECT  `fine` FROM `user` WHERE `u_id`=@u_id";   
            cmd.Parameters.AddWithValue("@u_id", uid);
            cmd.Connection = connection;
            MySqlDataReader reader = cmd.ExecuteReader();
            while (reader.Read())
            {
                fine = Convert.ToInt32(reader["fine"]);
            }
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();

            }

            return fine;

        }





        private void set_fine()
        {

            int uid = Convert.ToInt32(textBox1.Text);
            int totalfine = 0;
            string rdate = DateTime.Today.ToString("dd");
            string idate = getissue_date();
            string day = idate.Substring(2, 2);
            int i=Convert.ToInt32(day);
            int r=Convert.ToInt32(rdate);
            int valid = (i + 10) % 31;
            int fine = 0;
            if (valid<=r)
            {
                fine = (r - valid) * 5;
            }
            else
            {
                fine = 0;
            }
            totalfine = fine + get_fine();
            
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            
            cmd.CommandText = "UPDATE `user` SET `fine`=@fine WHERE `u_id`=@u_id";
            cmd.Parameters.AddWithValue("@fine", totalfine);
            cmd.Parameters.AddWithValue("@u_id", uid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                //MessageBox.Show(totalfine+"");
            }
       
               





        }
        
        private void update_issue()
        {

            int uid = Convert.ToInt32(textBox1.Text);
            int bid = Convert.ToInt32(textBox2.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "DELETE FROM `issued` WHERE `userid`=@userid AND `bookid`=@bookid";
            cmd.Parameters.AddWithValue("@userid", uid);
            cmd.Parameters.AddWithValue("@bookid", bid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
               // MessageBox.Show("fin");
                this.Close();

            }


        }
        private bool validate_cardno(int user)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "Select * from user where u_id=@userid";
            cmd.Parameters.AddWithValue("@userid", user);
            cmd.Connection = connection;
            MySqlDataReader login = cmd.ExecuteReader();
            if (login.Read())
            {
                connection.Close();
                return true;
            }
            else
            {
                connection.Close();
                return false;
            }
        }
        private void button1_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox1.Text) && string.IsNullOrEmpty(textBox2.Text))
            {
                MessageBox.Show("Please fill up all feild");
                return;

            }
            int user = Convert.ToInt32(textBox1.Text);
            bool r = validate_cardno(user);
            if (r)
            {
                //MessageBox.Show("Valid");
                update_book();
                return_book();
                int fin = fine();



                set_fine();
                if (fin > 0)
                {
                    myfine_add();
                }
                update_issue();

            }
            else
            {
                MessageBox.Show("Invalid Card NO");
            }


            
        }
    }
}
