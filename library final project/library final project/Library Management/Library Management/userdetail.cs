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
    public partial class userdetail : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public userdetail()
        {
            InitializeComponent();
        }

        private void LoadData1()
        {
  
            int cardno =Convert.ToInt32(textBox1.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            try
            {
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "SELECT `u_id`, `roll_no`, `std`, `dob`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`, `issue_date`, `valid_till`, `type`, `photo`, `u_address`, `fine` FROM `user` WHERE `u_id`="+cardno+"";
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
            if (string.IsNullOrEmpty(textBox1.Text))
            {
                MessageBox.Show("Please fill up all feild");
                return;

            }
            int user = Convert.ToInt32(textBox1.Text);
            bool r = validate_cardno(user);
            if (r)
            {
               // MessageBox.Show("Valid");
                MySqlConnection connection = new MySqlConnection(myconnectionstr);
                connection.Open();
                if (connection.State == ConnectionState.Open)
                {
                    connection.Close();
                    LoadData1();
                }

            }
            else
            {
                MessageBox.Show("Invalid Card NO");
            }
         
        }
    }
}
