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
    public partial class payFine : Form
    {
        string myconnectionstr = "Server=localhost;Database=shop;Uid=root;Pwd=;";
        public payFine()
        {
            InitializeComponent();
        }
        private void pay_fine()
        {

            int uid = Convert.ToInt32(textBox1.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();

            cmd.CommandText = "UPDATE `user` SET `fine`=@fine WHERE `u_id`=@u_id";
            cmd.Parameters.AddWithValue("@fine", 0);
            cmd.Parameters.AddWithValue("@u_id", uid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                MessageBox.Show("PAID");
            }

        }
        private void detete_myfine()
        {

            int uid = Convert.ToInt32(textBox1.Text);
            MySqlConnection connection = new MySqlConnection(myconnectionstr);
            connection.Open();
            MySqlCommand cmd = connection.CreateCommand();

            cmd.CommandText = "DELETE FROM `myfine` WHERE `user_id`=@u_id";
            //cmd.Parameters.AddWithValue("@fine", 0);
            cmd.Parameters.AddWithValue("@u_id", uid);
            cmd.ExecuteNonQuery();
            if (connection.State == ConnectionState.Open)
            {
                connection.Close();
                //MessageBox.Show("PAID");
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
                //MessageBox.Show("Valid");
                pay_fine();
                detete_myfine();

            }
            else
            {
                MessageBox.Show("Invalid Card NO");
            }
           
        }
    }
}
