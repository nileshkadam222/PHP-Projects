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
    public partial class adminlogin : Form
    {
        private string conn;
        private MySqlConnection connect;
        public adminlogin()
        {
            InitializeComponent();
        }

        private void adminlogin_Load(object sender, EventArgs e)
        {

        }

        private void btnRegister_Click(object sender, EventArgs e)
        {

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
        private bool validate_login(string user, string pass)
        {
            db_connection();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "Select * from user where u_unm=@user and u_pwd=@pass";
            cmd.Parameters.AddWithValue("@user", user);
            cmd.Parameters.AddWithValue("@pass", pass);
            cmd.Connection = connect;
            MySqlDataReader login = cmd.ExecuteReader();
            if (login.Read())
            {
                connect.Close();
                return true;
            }
            else
            {
                connect.Close();
                return false;
            }
        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            
            string user = txtuser.Text;
            string pass = txtpwd.Text;
            if (user == "" || pass == "")
            {
                MessageBox.Show("Empty Fields Detected ! Please fill up all the fields");
                return;
            }
            bool r = validate_login(user, pass);
            if (r)
            {
                this.Hide();
                master m1 = new master();
                m1.Closed += (s, args) => this.Close();
                m1.Show();
               
                
            }
            else
            {
                MessageBox.Show("Incorrect Login");
            }
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            this.Close();
            this.Dispose();
            Application.Exit();

        }
    }
}
