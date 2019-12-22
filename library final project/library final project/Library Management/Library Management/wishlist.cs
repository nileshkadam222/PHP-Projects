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
    public partial class wishlist : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public wishlist()
        {
            InitializeComponent();
        }
        private void LoadData1()
        {
            //int a = Convert.ToInt32(comboBox1.SelectedIndex);
            //string category = Convert.ToString(a + 1);
            string title =Convert.ToString(textBox1.Text);
            title = title + "%";
           // title = "aspa";
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "SELECT `user_id`, `book_title`, `category_id`, `author`, `publisher_name`, `isbn`, `copyright_year`, `status`, `avilable` FROM `wishlist` WHERE `book_title` like @booktitle";
                cmd.Parameters.AddWithValue("@booktitle", title);
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
        private void update_book()
        {

           
            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            string booktitle = Convert.ToString(dataGridView1.Rows[row].Cells[1].Value);
            int uid=Convert.ToInt32(dataGridView1.Rows[row].Cells[c].Value);

            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            //UPDATE `book` SET  `status`=0 WHERE `b_id`=1
            cmd.CommandText = "UPDATE `wishlist` SET `avilable`='Yes' WHERE `user_id`=@uid AND `book_title`=@booktitle ";
            cmd.Parameters.AddWithValue("@uid", uid);
            cmd.Parameters.AddWithValue("@booktitle", booktitle);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("update");

            }


        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (dataGridView1.SelectedRows.Count>0)
            {
                update_book();
            }
            else
            {
                MessageBox.Show("select row");
            }
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData1();
            }
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

    }
}
