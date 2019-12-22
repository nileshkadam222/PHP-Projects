using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Library_Management
{
    public partial class master : Form
    {
       

        public master()
        {
            InitializeComponent();
        }

        private void master_Load(object sender, EventArgs e)
        {

        }

        private void newUserToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Registeru reuser = new Registeru();
            reuser.Show();
        }

        private void newBookToolStripMenuItem_Click(object sender, EventArgs e)
        {
            registerb rebook = new registerb();
            rebook.Show();
        }

        private void issueBookToolStripMenuItem_Click(object sender, EventArgs e)
        {
            ibook issue = new ibook();
            issue.Show();
        }

        private void returnBookToolStripMenuItem_Click(object sender, EventArgs e)
        {
            rbook rbook = new rbook();
            rbook.Show();
        }

        private void searchBOOKToolStripMenuItem_Click(object sender, EventArgs e)
        {
            bookdetail bdetail = new bookdetail();
            bdetail.Show();
        }

        private void userDetailToolStripMenuItem_Click(object sender, EventArgs e)
        {
            userdetail udetail = new userdetail();
            udetail.Show();
        }

        private void userProblemToolStripMenuItem_Click(object sender, EventArgs e)
        {
            problem p = new problem();
            p.Show();
        }

        private void wishListToolStripMenuItem_Click(object sender, EventArgs e)
        {
            wishlist w = new wishlist();
            w.Show();
        }

        private void payFineToolStripMenuItem_Click(object sender, EventArgs e)
        {
            payFine pf = new payFine();
            pf.Show();
        }
    }
}
