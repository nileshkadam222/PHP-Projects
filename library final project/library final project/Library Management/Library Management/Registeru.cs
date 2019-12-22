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
    public partial class Registeru : Form
    {
        private string conn;
        private MySqlConnection connect;
        public Registeru()
        {
            InitializeComponent();
        }

        private void Registeru_Load(object sender, EventArgs e)
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
        private void btnRegister_Click(object sender, EventArgs e)
        {
            if (txtConfirm.Text != usertxt.Text)
            {
                MessageBox.Show("password does not match");
                return;
            }
            if (comboBox5.SelectedIndex == -1)
            {
                MessageBox.Show("select type");
                return;
            }
            if (comboBox4.SelectedIndex == -1)
            {
                MessageBox.Show("select Department");
                return;
            }
            if (comboBox1.SelectedIndex == -1 && comboBox2.SelectedIndex == -1 && comboBox3.SelectedIndex == -1)
            {
                MessageBox.Show("select date of birth");
                return;
            }
            if (Male.Checked == false && Female.Checked == false)
            {
                MessageBox.Show("select gender");
                return;
            }
            if (string.IsNullOrEmpty(txtpwd.Text) && string.IsNullOrEmpty(usertxt.Text) && string.IsNullOrEmpty(txtConfirm.Text) && string.IsNullOrEmpty(textBox1.Text) && string.IsNullOrEmpty(textBox2.Text) && string.IsNullOrEmpty(textBox3.Text) && string.IsNullOrEmpty(textBox6.Text) && string.IsNullOrEmpty(textBox4.Text) && string.IsNullOrEmpty(textBox5.Text))
            {
                MessageBox.Show("Please fill up all feild");
                return;

            }
            string username = txtpwd.Text;
            //int uq1 = Convert.ToInt32(DateTime.Now.ToString("HH"));
            //int uq2 = Convert.ToInt32(DateTime.Now.ToString("mm"));
            //int uq3 = Convert.ToInt32(DateTime.Now.ToString("ss"));
            //string code=Convert.ToString(((5000 + uq1) - uq3) / uq3 + uq2 + 1);   
            string password =usertxt.Text;
            string confirm = txtConfirm.Text;
            string fullname = textBox1.Text;
            string gender;
            if (Male.Checked)
            {
                gender = Male.Text;
            }
            else
            {
                gender = Female.Text;
            }
            string rollno = textBox2.Text;
            string email = textBox3.Text;
            string day = comboBox1.GetItemText(comboBox1.SelectedItem);
            string type = comboBox5.GetItemText(comboBox5.SelectedItem);
            string month = comboBox2.GetItemText(comboBox2.SelectedItem);
            string year=comboBox3.GetItemText(comboBox3.SelectedItem);
            string dob=day+"/"+month+"/"+year;
            string dept = comboBox4.GetItemText(comboBox4.SelectedItem);
            string address = textBox4.Text;
            string city = textBox5.Text;
            string issuedate = DateTime.Today.ToString("dd/MM/yyyy");
            string validtill = DateTime.Today.AddYears(1).ToString("dd/MM/yyyy");
            //string type="student";
            string photo = "images/book.jpg";
            string mobileno = textBox6.Text;
            db_connection();
            MySqlCommand cmd = connect.CreateCommand();
            cmd.CommandText = "INSERT INTO `user`(`u_id`, `roll_no`, `std`, `dob`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`, `issue_date`, `valid_till`, `type`, `photo`, `u_address`, `fine`) VALUES (@u_id,@roll_no,@std,@dob,@u_fnm,@u_unm,@u_pwd,@u_gender,@u_email,@u_contact,@u_city, @issue_date,@valid_till, @type, @photo, @u_address,@fine)";
            cmd.Parameters.AddWithValue("@u_id", 0);
            cmd.Parameters.AddWithValue("@roll_no", rollno);
            cmd.Parameters.AddWithValue("@std", dept);
            cmd.Parameters.AddWithValue("@dob", dob);

            cmd.Parameters.AddWithValue("@u_fnm", fullname);
            cmd.Parameters.AddWithValue("@u_unm", username);
            cmd.Parameters.AddWithValue("@u_pwd", password);
            cmd.Parameters.AddWithValue("@u_gender", gender);
            cmd.Parameters.AddWithValue("@u_email", email);
            cmd.Parameters.AddWithValue("@u_contact", mobileno);
            cmd.Parameters.AddWithValue("@u_address", address);
            cmd.Parameters.AddWithValue("@u_city", city);
            cmd.Parameters.AddWithValue("@issue_date", issuedate);
            cmd.Parameters.AddWithValue("@valid_till", validtill);
            cmd.Parameters.AddWithValue("@type", type);
            cmd.Parameters.AddWithValue("@photo", photo);
            cmd.Parameters.AddWithValue("@fine", 0);
            cmd.ExecuteNonQuery();
            if (connect.State == ConnectionState.Open)
            {
                connect.Close();
                MessageBox.Show("registration success");
                this.Close();
               
            }
            
            
        }

        private void btnCancel_Click(object sender, EventArgs e)
        {
            this.Close();
        }
        
    }
}
