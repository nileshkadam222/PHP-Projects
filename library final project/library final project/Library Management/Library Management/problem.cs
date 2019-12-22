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
    public partial class problem : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public problem()
        {
            InitializeComponent();
        }
        private void LoadData1()
        {
            //int a = Convert.ToInt32(comboBox1.SelectedIndex);
            //string category = Convert.ToString(a + 1);
            //string title = Convert.ToString(textBox1.Text);
            //title = title + "%";
            // title = "aspa";
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "SELECT  `con_id` ID,`con_nm` MEMBERNAME , `user_id` MEM_ID, `con_email` EMAIL, `con_query` QUERY, `avilable` REPLY FROM `problem`";
                //cmd.Parameters.AddWithValue("@booktitle", title);
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

        private void problem_Load(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData1();
            }
        }
        private void update_problem()
        {


            int row = dataGridView1.CurrentCell.RowIndex;
            int c = 0;
            int cid = Convert.ToInt32(dataGridView1.Rows[row].Cells[c].Value);
            int uid = Convert.ToInt32(dataGridView1.Rows[row].Cells[2].Value);
            string reply = textBox1.Text;

            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();
            //UPDATE `book` SET  `status`=0 WHERE `b_id`=1
            cmd.CommandText = "UPDATE `problem` SET  `avilable`=@reply WHERE `con_id`=@con_id AND `user_id`=@uid ";
            cmd.Parameters.AddWithValue("@uid", uid);
            cmd.Parameters.AddWithValue("@con_id", cid);
            cmd.Parameters.AddWithValue("@reply", reply);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("update");

            }


        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox1.Text))
            {
                MessageBox.Show("Please fill up feild");
                return;

            }
            if (dataGridView1.SelectedRows.Count > 0)
            {
                update_problem();
            }
            else
            {
                MessageBox.Show("select row");
            }
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                LoadData1();
            }
        
        }
    }
}
