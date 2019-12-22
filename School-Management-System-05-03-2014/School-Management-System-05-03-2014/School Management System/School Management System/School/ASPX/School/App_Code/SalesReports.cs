using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using DataDynamics.ActiveReports;
using DataDynamics.ActiveReports.Document;

/// <summary>
/// Summary description for SalesReports.
/// </summary>
public class SalesReports : DataDynamics.ActiveReports.ActiveReport3
{
    private Detail detail;
    private TextBox textBox8;
    private TextBox textBox9;
    private TextBox textBox10;
    private TextBox textBox11;
    private TextBox textBox12;
    private TextBox textBox13;
    private Label label1;
    private Label label2;
    private Label label3;
    private Label label4;
    private Label label5;
    private Label label6;
    private PageHeader pageHeader;
    private TextBox textBox1;
    private Label label7;
    private PageFooter pageFooter;

	public SalesReports()
	{
		//
		// Required for Windows Form Designer support
		//
		InitializeComponent();
	}

	/// <summary>
	/// Clean up any resources being used.
	/// </summary>
	protected override void Dispose( bool disposing )
	{
		if( disposing )
		{
		}
		base.Dispose( disposing );
	}

	#region ActiveReport Designer generated code
	/// <summary>
	/// Required method for Designer support - do not modify
	/// the contents of this method with the code editor.
	/// </summary>
	private void InitializeComponent()
	{
        string resourceFileName = "SalesReports.resx";
        System.Resources.ResourceManager resources = Resources.SalesReports.ResourceManager;
        this.detail = new DataDynamics.ActiveReports.Detail();
        this.textBox8 = new DataDynamics.ActiveReports.TextBox();
        this.textBox9 = new DataDynamics.ActiveReports.TextBox();
        this.textBox10 = new DataDynamics.ActiveReports.TextBox();
        this.textBox11 = new DataDynamics.ActiveReports.TextBox();
        this.textBox12 = new DataDynamics.ActiveReports.TextBox();
        this.textBox13 = new DataDynamics.ActiveReports.TextBox();
        this.label1 = new DataDynamics.ActiveReports.Label();
        this.label2 = new DataDynamics.ActiveReports.Label();
        this.label3 = new DataDynamics.ActiveReports.Label();
        this.label4 = new DataDynamics.ActiveReports.Label();
        this.label5 = new DataDynamics.ActiveReports.Label();
        this.label6 = new DataDynamics.ActiveReports.Label();
        this.pageHeader = new DataDynamics.ActiveReports.PageHeader();
        this.textBox1 = new DataDynamics.ActiveReports.TextBox();
        this.label7 = new DataDynamics.ActiveReports.Label();
        this.pageFooter = new DataDynamics.ActiveReports.PageFooter();
        ((System.ComponentModel.ISupportInitialize)(this.textBox8)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox9)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox10)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox11)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox12)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox13)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label4)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label5)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label6)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label7)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this)).BeginInit();
        // 
        // detail
        // 
        this.detail.ColumnSpacing = 0F;
        this.detail.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.textBox8,
            this.textBox9,
            this.textBox10,
            this.textBox11,
            this.textBox12,
            this.textBox13,
            this.label1,
            this.label2,
            this.label3,
            this.label4,
            this.label5,
            this.label6});
        this.detail.Height = 1.197917F;
        this.detail.Name = "detail";
        // 
        // textBox8
        // 
        this.textBox8.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox8.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox8.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox8.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox8.Border.RightColor = System.Drawing.Color.Black;
        this.textBox8.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox8.Border.TopColor = System.Drawing.Color.Black;
        this.textBox8.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox8.DataField = "english";
        this.textBox8.Height = 0.1979167F;
        this.textBox8.Left = 1.5625F;
        this.textBox8.Name = "textBox8";
        this.textBox8.Style = "";
        this.textBox8.Text = null;
        this.textBox8.Top = 0.9375F;
        this.textBox8.Width = 1F;
        // 
        // textBox9
        // 
        this.textBox9.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox9.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox9.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox9.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox9.Border.RightColor = System.Drawing.Color.Black;
        this.textBox9.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox9.Border.TopColor = System.Drawing.Color.Black;
        this.textBox9.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox9.DataField = "hindi";
        this.textBox9.Height = 0.1979167F;
        this.textBox9.Left = 1.5625F;
        this.textBox9.Name = "textBox9";
        this.textBox9.Style = "";
        this.textBox9.Text = null;
        this.textBox9.Top = 0.4375F;
        this.textBox9.Width = 1F;
        // 
        // textBox10
        // 
        this.textBox10.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox10.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox10.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox10.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox10.Border.RightColor = System.Drawing.Color.Black;
        this.textBox10.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox10.Border.TopColor = System.Drawing.Color.Black;
        this.textBox10.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox10.DataField = "telugu";
        this.textBox10.Height = 0.1979167F;
        this.textBox10.Left = 1.5625F;
        this.textBox10.Name = "textBox10";
        this.textBox10.Style = "";
        this.textBox10.Text = null;
        this.textBox10.Top = 0F;
        this.textBox10.Width = 1F;
        // 
        // textBox11
        // 
        this.textBox11.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox11.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox11.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox11.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox11.Border.RightColor = System.Drawing.Color.Black;
        this.textBox11.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox11.Border.TopColor = System.Drawing.Color.Black;
        this.textBox11.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox11.DataField = "maths";
        this.textBox11.Height = 0.1979167F;
        this.textBox11.Left = 4.125F;
        this.textBox11.Name = "textBox11";
        this.textBox11.Style = "";
        this.textBox11.Text = null;
        this.textBox11.Top = 0F;
        this.textBox11.Width = 1F;
        // 
        // textBox12
        // 
        this.textBox12.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox12.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox12.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox12.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox12.Border.RightColor = System.Drawing.Color.Black;
        this.textBox12.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox12.Border.TopColor = System.Drawing.Color.Black;
        this.textBox12.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox12.DataField = "science";
        this.textBox12.Height = 0.1979167F;
        this.textBox12.Left = 4.125F;
        this.textBox12.Name = "textBox12";
        this.textBox12.Style = "";
        this.textBox12.Text = null;
        this.textBox12.Top = 0.5F;
        this.textBox12.Width = 1F;
        // 
        // textBox13
        // 
        this.textBox13.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox13.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox13.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox13.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox13.Border.RightColor = System.Drawing.Color.Black;
        this.textBox13.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox13.Border.TopColor = System.Drawing.Color.Black;
        this.textBox13.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox13.DataField = "social";
        this.textBox13.Height = 0.1979167F;
        this.textBox13.Left = 4.125F;
        this.textBox13.Name = "textBox13";
        this.textBox13.Style = "";
        this.textBox13.Text = null;
        this.textBox13.Top = 0.9375F;
        this.textBox13.Width = 1F;
        // 
        // label1
        // 
        this.label1.Border.BottomColor = System.Drawing.Color.Black;
        this.label1.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label1.Border.LeftColor = System.Drawing.Color.Black;
        this.label1.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label1.Border.RightColor = System.Drawing.Color.Black;
        this.label1.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label1.Border.TopColor = System.Drawing.Color.Black;
        this.label1.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label1.Height = 0.1979167F;
        this.label1.HyperLink = "";
        this.label1.Left = 0.5625F;
        this.label1.Name = "label1";
        this.label1.Style = "";
        this.label1.Text = "Telugu";
        this.label1.Top = 0F;
        this.label1.Width = 1F;
        // 
        // label2
        // 
        this.label2.Border.BottomColor = System.Drawing.Color.Black;
        this.label2.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label2.Border.LeftColor = System.Drawing.Color.Black;
        this.label2.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label2.Border.RightColor = System.Drawing.Color.Black;
        this.label2.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label2.Border.TopColor = System.Drawing.Color.Black;
        this.label2.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label2.Height = 0.1979167F;
        this.label2.HyperLink = "";
        this.label2.Left = 0.5625F;
        this.label2.Name = "label2";
        this.label2.Style = "";
        this.label2.Text = "Hindi";
        this.label2.Top = 0.4375F;
        this.label2.Width = 1F;
        // 
        // label3
        // 
        this.label3.Border.BottomColor = System.Drawing.Color.Black;
        this.label3.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label3.Border.LeftColor = System.Drawing.Color.Black;
        this.label3.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label3.Border.RightColor = System.Drawing.Color.Black;
        this.label3.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label3.Border.TopColor = System.Drawing.Color.Black;
        this.label3.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label3.Height = 0.1979167F;
        this.label3.HyperLink = "";
        this.label3.Left = 0.5625F;
        this.label3.Name = "label3";
        this.label3.Style = "";
        this.label3.Text = "English";
        this.label3.Top = 0.9375F;
        this.label3.Width = 1F;
        // 
        // label4
        // 
        this.label4.Border.BottomColor = System.Drawing.Color.Black;
        this.label4.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label4.Border.LeftColor = System.Drawing.Color.Black;
        this.label4.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label4.Border.RightColor = System.Drawing.Color.Black;
        this.label4.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label4.Border.TopColor = System.Drawing.Color.Black;
        this.label4.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label4.Height = 0.1979167F;
        this.label4.HyperLink = "";
        this.label4.Left = 3.125F;
        this.label4.Name = "label4";
        this.label4.Style = "";
        this.label4.Text = "Maths";
        this.label4.Top = 0F;
        this.label4.Width = 1F;
        // 
        // label5
        // 
        this.label5.Border.BottomColor = System.Drawing.Color.Black;
        this.label5.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label5.Border.LeftColor = System.Drawing.Color.Black;
        this.label5.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label5.Border.RightColor = System.Drawing.Color.Black;
        this.label5.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label5.Border.TopColor = System.Drawing.Color.Black;
        this.label5.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label5.Height = 0.1979167F;
        this.label5.HyperLink = "";
        this.label5.Left = 3.125F;
        this.label5.Name = "label5";
        this.label5.Style = "";
        this.label5.Text = "Science";
        this.label5.Top = 0.5F;
        this.label5.Width = 1F;
        // 
        // label6
        // 
        this.label6.Border.BottomColor = System.Drawing.Color.Black;
        this.label6.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label6.Border.LeftColor = System.Drawing.Color.Black;
        this.label6.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label6.Border.RightColor = System.Drawing.Color.Black;
        this.label6.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label6.Border.TopColor = System.Drawing.Color.Black;
        this.label6.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label6.Height = 0.1979167F;
        this.label6.HyperLink = "";
        this.label6.Left = 3.125F;
        this.label6.Name = "label6";
        this.label6.Style = "";
        this.label6.Text = "Social";
        this.label6.Top = 0.9375F;
        this.label6.Width = 1F;
        // 
        // pageHeader
        // 
        this.pageHeader.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.textBox1,
            this.label7});
        this.pageHeader.Height = 0.71875F;
        this.pageHeader.Name = "pageHeader";
        // 
        // textBox1
        // 
        this.textBox1.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox1.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox1.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox1.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox1.Border.RightColor = System.Drawing.Color.Black;
        this.textBox1.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox1.Border.TopColor = System.Drawing.Color.Black;
        this.textBox1.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox1.DataField = "class";
        this.textBox1.Height = 0.1979167F;
        this.textBox1.Left = 3F;
        this.textBox1.Name = "textBox1";
        this.textBox1.Style = "";
        this.textBox1.Text = null;
        this.textBox1.Top = 0F;
        this.textBox1.Width = 1F;
        // 
        // label7
        // 
        this.label7.Border.BottomColor = System.Drawing.Color.Black;
        this.label7.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label7.Border.LeftColor = System.Drawing.Color.Black;
        this.label7.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label7.Border.RightColor = System.Drawing.Color.Black;
        this.label7.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label7.Border.TopColor = System.Drawing.Color.Black;
        this.label7.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.label7.Height = 0.1875F;
        this.label7.HyperLink = "";
        this.label7.Left = 1.6875F;
        this.label7.Name = "label7";
        this.label7.Style = "";
        this.label7.Text = "Time table for class";
        this.label7.Top = 0F;
        this.label7.Width = 1.3125F;
        // 
        // pageFooter
        // 
        this.pageFooter.Height = 0.25F;
        this.pageFooter.Name = "pageFooter";
        // 
        // SalesReports
        // 
        this.PageSettings.PaperHeight = 11F;
        this.PageSettings.PaperWidth = 8.5F;
        this.Sections.Add(this.pageHeader);
        this.Sections.Add(this.detail);
        this.Sections.Add(this.pageFooter);
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-family: Arial; font-style: normal; text-decoration: none; font-weight: norma" +
                    "l; font-size: 10pt; color: Black; ", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-size: 16pt; font-weight: bold; ", "Heading1", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-family: Times New Roman; font-size: 14pt; font-weight: bold; font-style: ita" +
                    "lic; ", "Heading2", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-size: 13pt; font-weight: bold; ", "Heading3", "Normal"));
        ((System.ComponentModel.ISupportInitialize)(this.textBox8)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox9)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox10)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox11)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox12)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox13)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label4)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label5)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label6)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label7)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this)).EndInit();

	}
	#endregion
}
