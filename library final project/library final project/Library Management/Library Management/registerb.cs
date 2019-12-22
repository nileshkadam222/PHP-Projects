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
    public partial class registerb : Form
    {
        private string conn;
        private MySqlConnection connect;
        public registerb()
        {
            InitializeComponent();
        }
        private void db_connection()
        {
            try
            {
                conn = "Server=localhost;Database=shop;Uid=root;Pwd=;";
                connect = new MySqlConnection(conn);
                connect.Open();
            }
            catch (MySqlException)
            {
                throw;
            }
        }
        private void button1_Click(object sender, EventArgs e)
        {
            int a =Convert.ToInt32(comboBox1.SelectedIndex);
            string category =Convert.ToString(a+1);
            string bookname = textBox1.Text;
            string publisher = textBox2.Text;
            string edition = textBox3.Text;
            //string discription = textBox4.Text;
            string b_isbn = textBox5.Text;
            //int pages = Convert.ToInt32(textBox6.Text);
            //int price = Convert.ToInt32(textBox7.Text);
            //string bookimg = "upload_image/c2.jpg";
            string bookst = comboBox2.GetItemText(comboBox2.SelectedItem);
            string author = textBox8.Text;
            string date_added = DateTime.Today.ToString("yyyy-MM-dd");
            db_connection();
            MySqlCommand cmd = connect.CreateCommand();
            cmd.CommandText = "INSERT INTO `book`(`book_id`, `book_title`, `category_id`, `author`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`, `stu`) VALUES (@book_id,@book_title,@category_id,@author,@publisher_name,@isbn,@copyright_year,@date_added,@status,@stu)";
            cmd.Parameters.AddWithValue("@book_id", 0);
            cmd.Parameters.AddWithValue("@book_title", bookname);
            cmd.Parameters.AddWithValue("@category_id", category);
            cmd.Parameters.AddWithValue("@author", author);
            cmd.Parameters.AddWithValue("@publisher_name", publisher);
            cmd.Parameters.AddWithValue("@copyright_year", edition);
            cmd.Parameters.AddWithValue("@isbn", b_isbn);
            cmd.Parameters.AddWithValue("@date_added", date_added);
            //cmd.Parameters.AddWithValue("@b_price", price);
            //cmd.Parameters.AddWithValue("@b_img", bookimg);
            cmd.Parameters.AddWithValue("@status", bookst);
            cmd.Parameters.AddWithValue("@stu", 1);
            cmd.ExecuteNonQuery();
            if (connect.State == ConnectionState.Open)
            {
                connect.Close();
                MessageBox.Show("Book Added");
                this.Close();

            }


        }
    }
}
