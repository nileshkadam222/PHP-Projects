using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using DataDynamics.ActiveReports;
using DataDynamics.ActiveReports.Document;

namespace BLL
{
    /// <summary>
    /// Summary description for FinalMarksReport.
    /// </summary>
    public partial class FinalMarksReport : DataDynamics.ActiveReports.ActiveReport3
    {
        #region "Fields"
        decimal unitTest1Total;
        decimal unitTest2Total;
        decimal unitTest3Total;
        decimal unitTest4Total;
        decimal quaterlyTotal;
        decimal halfYearlyTotal;
        decimal annualTotal;
        string upperText = null;
        #endregion


        public FinalMarksReport()
        {
            //
            // Required for Windows Form Designer support
            //
            InitializeComponent();
        }

     
        private void detail_Format(object sender, EventArgs e)
        {
            try
            {
                upperText = txtSubjectTelugu.Text;

                txtSubjectTelugu.Text = Char.ToUpperInvariant(upperText[0]) + upperText.Substring(1);

                if (!string.IsNullOrEmpty(txtUt1Telugu.Text) && txtUt1Telugu.Text != "-" && txtUt1Telugu.Text != "absent")
                {
                    unitTest1Total += Convert.ToDecimal(txtUt1Telugu.Text);
                }
                else
                {
                    int ut1SubjectMarks = 0;
                    if (txtUt1Telugu.Text == "absent")
                    {
                        txtUt1Telugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtUt1Telugu.Text) || txtUt1Telugu.Text == "-")
                    {
                        txtUt1Telugu.Text = "-";
                    }
                    unitTest1Total += ut1SubjectMarks;
                }
                if (!string.IsNullOrEmpty(txtUt2Telugu.Text) && txtUt2Telugu.Text != "-" && txtUt2Telugu.Text != "absent")
                {
                    unitTest2Total += Convert.ToDecimal(txtUt2Telugu.Text);
                }
                else if (string.IsNullOrEmpty(txtUt2Telugu.Text) || txtUt2Telugu.Text == "absent" || txtUt2Telugu.Text == "-")
                {
                    int ut2SubjectMarks = 0;
                    if (txtUt2Telugu.Text == "absent")
                    {
                        txtUt2Telugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtUt2Telugu.Text) || txtUt2Telugu.Text == "-")
                    {
                        txtUt2Telugu.Text = "-";
                    }
                    unitTest2Total += ut2SubjectMarks;
                }
                if (!string.IsNullOrEmpty(txtUt3Telugu.Text) && txtUt3Telugu.Text != "-" && txtUt3Telugu.Text != "absent")
                {
                    unitTest3Total += Convert.ToDecimal(txtUt3Telugu.Text);
                }
                else if (string.IsNullOrEmpty(txtUt3Telugu.Text) || txtUt3Telugu.Text == "absent" || txtUt3Telugu.Text == "-")
                {
                    int ut3SubjectMarks = 0;
                    if (txtUt3Telugu.Text == "absent")
                    {
                        txtUt3Telugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtUt3Telugu.Text) || txtUt3Telugu.Text == "-")
                    {
                        txtUt3Telugu.Text = "-";
                    }
                    unitTest3Total += ut3SubjectMarks;
                }
                if (!string.IsNullOrEmpty(txtUt4Telugu.Text) && txtUt4Telugu.Text != "-" && txtUt4Telugu.Text != "absent")
                {
                    unitTest4Total += Convert.ToDecimal(txtUt4Telugu.Text);
                }
                else if (string.IsNullOrEmpty(txtUt4Telugu.Text) || txtUt4Telugu.Text == "absent" || txtUt4Telugu.Text == "-")
                {
                    int ut4SubjectMarks = 0;
                    if (txtUt4Telugu.Text == "absent")
                    {
                        txtUt4Telugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtUt4Telugu.Text) || txtUt4Telugu.Text == "-")
                    {
                        txtUt4Telugu.Text = "-";
                    }
                    unitTest4Total += ut4SubjectMarks;
                }

                if (!string.IsNullOrEmpty(txtQtrlyTelugu.Text) && txtQtrlyTelugu.Text != "-" && txtQtrlyTelugu.Text != "absent")
                {
                    quaterlyTotal += Convert.ToDecimal(txtQtrlyTelugu.Text);
                }
                else if (string.IsNullOrEmpty(txtQtrlyTelugu.Text) || txtQtrlyTelugu.Text == "absent" || txtQtrlyTelugu.Text == "-")
                {
                    int qtrlySubjectMarks = 0;
                    if (txtQtrlyTelugu.Text == "absent")
                    {
                        txtQtrlyTelugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtQtrlyTelugu.Text) || txtQtrlyTelugu.Text == "-")
                    {
                        txtQtrlyTelugu.Text = "-";
                    }
                    quaterlyTotal += qtrlySubjectMarks;
                }
                if (!string.IsNullOrEmpty(txtHflyTelugu.Text) && txtHflyTelugu.Text != "-" && txtHflyTelugu.Text != "absent")
                {
                    halfYearlyTotal += Convert.ToDecimal(txtHflyTelugu.Text);
                }
                else if (string.IsNullOrEmpty(txtHflyTelugu.Text) || txtHflyTelugu.Text == "absent" || txtHflyTelugu.Text == "-")
                {
                    int hflySubjectMarks = 0;
                    if (txtHflyTelugu.Text == "absent")
                    {
                        txtHflyTelugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtHflyTelugu.Text) || txtHflyTelugu.Text == "-")
                    {
                        txtHflyTelugu.Text = "-";
                    }
                    halfYearlyTotal += hflySubjectMarks;
                }
                if (!string.IsNullOrEmpty(txtAnlTelugu.Text) && txtAnlTelugu.Text != "-" && txtAnlTelugu.Text != "absent")
                {
                    annualTotal += Convert.ToDecimal(txtAnlTelugu.Text);
                }
                else if (string.IsNullOrEmpty(txtAnlTelugu.Text) || txtAnlTelugu.Text == "absent" || txtAnlTelugu.Text == "-")
                {
                    int annualSubjectMarks = 0;
                    if (txtAnlTelugu.Text == "absent")
                    {
                        txtAnlTelugu.Text = "A";
                    }
                    else if (string.IsNullOrEmpty(txtAnlTelugu.Text) || txtAnlTelugu.Text == "-")
                    {
                        txtAnlTelugu.Text = "-";
                    }
                    annualTotal += annualSubjectMarks;
                }
            }
            catch (Exception ex)
            {

                throw ex;
            }

        }
     

        private void reportFooter1_Format(object sender, EventArgs e)
        {
            txtUT1Total.Text = unitTest1Total.ToString();
            txtUT2Total.Text = unitTest2Total.ToString();
            txtUT3Total.Text = unitTest3Total.ToString();
            txtUT4Total.Text = unitTest4Total.ToString();
            txtQtlyTotal.Text = quaterlyTotal.ToString();
            txtHflyTotal.Text = halfYearlyTotal.ToString();
            txtAnlTotal.Text = annualTotal.ToString();
        }

        private void pageHeader_Format(object sender, EventArgs e)
        {

        }

       
       

      
    }
}
