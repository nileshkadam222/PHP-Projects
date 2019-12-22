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
    public partial class bookdetail : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public bookdetail()
        {
            InitializeComponent();
        }
        private void LoadData()
        {
            string name = textBox1.Text;
            name = name + "%";
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "SELECT `book_id`, `book_title`, `category_id`, `author`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`, `stu` FROM `book` WHERE `book_title` like '" + name + "'";
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
        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData();
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData();
            }
        }
    }
}
