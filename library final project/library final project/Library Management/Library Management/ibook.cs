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
    public partial class ibook : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public ibook()
        {
            InitializeComponent();
        }
         private void LoadData()
         {
            int a = Convert.ToInt32(comboBox1.SelectedIndex);
            string category = Convert.ToString(a + 1);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "SELECT `book_id`, `book_title`, `category_id`, `author`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`, `stu` FROM `book` WHERE `category_id`="+category+"";
                MySqlDataAdapter adap = new MySqlDataAdapter(cmd);
                DataSet ds = new DataSet();
                adap.Fill(ds);
                dataGridView1.DataSource = ds.Tables[0].DefaultView;
            }
            catch (Exception)
            {
                throw;
            }
            finally
            {
                if (connection.State == ConnectionState.Open)
                {
                    connection.Close();
                }
            }
         }
        //SELECT * FROM `book` WHERE `b_subcat` like '1' AND `b_nm` like 'A Dictionary of Architecture%';
        private void panel1_Paint(object sender, PaintEventArgs e)
        {
            
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
                if (connection.State == ConnectionState.Open)
                {
                    connection.Close();
                    LoadData();
                }
            
        

        }
        private void LoadData1()
        {
            int a = Convert.ToInt32(comboBox1.SelectedIndex);
            string category = Convert.ToString(a + 1);
            string name = textBox1.Text;
            name = name + "%";
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText ="SELECT `book_id`, `book_title`, `category_id`, `author`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`, `stu` FROM `book` WHERE `category_id`="+category+" AND `book_title` like '"+name+"'";
                MySqlDataAdapter adap = new MySqlDataAdapter(cmd);
                DataSet ds = new DataSet();
                adap.Fill(ds);
                dataGridView1.DataSource = ds.Tables[0].DefaultView;
            }
            catch (Exception)
            {
                throw;
            }
            finally
            {
                if (connection.State == ConnectionState.Open)
                {
                    connection.Close();
                }
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData1();
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

        private void button2_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox2.Text))
            {
                MessageBox.Show("Please fill up all feild");
                return;

            }
            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            string bookid = dataGridView1.Rows[row].Cells[c].Value.ToString();
            label3.Text = "BOOK ID :" + bookid;

            int user=0;
            if (string.IsNullOrEmpty(textBox2.Text))
            {
                MessageBox.Show("Please fill up Card id");
                return;

            }
            user = Convert.ToInt32(textBox2.Text);
            bool r = validate_cardno(user);
            if (r)
            {
                MessageBox.Show("Valid");

            }
            else
            {
                MessageBox.Show("Invalid Card NO");
            }

        }
        private int row_count(int uid)
        {
            int row = 0;
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "SELECT * FROM `issued` WHERE `userid`='"+uid+"'";

            cmd.Connection = connection;
            MySqlDataReader login = cmd.ExecuteReader();
            if (login.HasRows)
            {
                while (login.Read())
                {
                    row++;
                }
                connection.Close();
            }
            return row;
        }
        private void issue_book()
        {
            
            int uid=Convert.ToInt32(textBox2.Text);
            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            int bookid =Convert.ToInt32(dataGridView1.Rows[row].Cells[c].Value);
            string booktitle = dataGridView1.Rows[row].Cells[1].Value.ToString();
            string issuedate = DateTime.Today.ToString("yyyy-MM-dd");
            string validtill = DateTime.Today.AddDays(10).ToString("yyyy-MM-dd");
            

            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "INSERT INTO `issued`(`issueid`, `userid`, `bookid`, `issuedate`, `validtill`, `booktitle`) VALUES (@issueid,@userid,@bookid,@issuedate,@validtill,@booktitle)";
            cmd.Parameters.AddWithValue("@issueid", 0);
            cmd.Parameters.AddWithValue("@userid", uid);
            cmd.Parameters.AddWithValue("@bookid", bookid);
            cmd.Parameters.AddWithValue("@issuedate", issuedate);
            cmd.Parameters.AddWithValue("@validtill", validtill);
            cmd.Parameters.AddWithValue("@booktitle", booktitle);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("issued");
                this.Close();

            }


        }
        private int check_status()
        {

            int uid = Convert.ToInt32(textBox2.Text);
            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            int bookid = Convert.ToInt32(dataGridView1.Rows[row].Cells[c].Value);

            int status=0;
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "SELECT `stu` FROM `book` WHERE `book_id`=@bookid"; 
            cmd.Parameters.AddWithValue("@bookid", bookid);
            cmd.Connection = connection;
            MySqlDataReader reader = cmd.ExecuteReader();
            while(reader.Read())
            {
                status = Convert.ToInt32(reader["stu"]);
            }
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();

            }

            return status;

        }
        private void update_book()
        {

            int uid = Convert.ToInt32(textBox2.Text);
            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            int bookid = Convert.ToInt32(dataGridView1.Rows[row].Cells[c].Value);


            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            //UPDATE `book` SET  `status`=0 WHERE `b_id`=1
            cmd.CommandText = "UPDATE `book` SET `stu`=@status WHERE `book_id`=@bookid";
            cmd.Parameters.AddWithValue("@status", 0);
            cmd.Parameters.AddWithValue("@bookid", bookid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("update");

            }


        }
        

        private void button3_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox2.Text))
            {
                MessageBox.Show("Please fill up all feild");
                return;

            }
            int uid=Convert.ToInt32(textBox2.Text);
            int rows = row_count(uid);
            int status = check_status();
            if (rows <= 3)
            {
                if (status != 0)
                {
                    update_book();
                    issue_book();
                }
                else
                {
                    MessageBox.Show("book is off the shelf");
                }
               
            }
            else
            {
                MessageBox.Show("Library card is full");
            }
        }

    }
}
