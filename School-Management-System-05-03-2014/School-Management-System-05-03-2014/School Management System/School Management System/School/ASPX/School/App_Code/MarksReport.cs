using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using DataDynamics.ActiveReports;
using DataDynamics.ActiveReports.Document;

/// <summary>
/// Summary description for MarksReport.
/// </summary>
public class MarksReport : DataDynamics.ActiveReports.ActiveReport3
{
	private DataDynamics.ActiveReports.PageHeader pageHeader;
    private DataDynamics.ActiveReports.Detail detail;
    private TextBox textBox2;
    private TextBox textBox3;
    private TextBox textBox4;
    private TextBox textBox5;
    private TextBox textBox6;
    private TextBox textBox7;
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
    private TextBox textBox1;
    private TextBox textBox14;
    private TextBox textBox15;
    private TextBox textBox16;
    private Label label5;
    private TextBox textBox17;
	private DataDynamics.ActiveReports.PageFooter pageFooter;

	public MarksReport()
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
        string resourceFileName = "MarksReport.resx";
        System.Resources.ResourceManager resources = Resources.MarksReport.ResourceManager;
        this.pageHeader = new DataDynamics.ActiveReports.PageHeader();
        this.label1 = new DataDynamics.ActiveReports.Label();
        this.label2 = new DataDynamics.ActiveReports.Label();
        this.label3 = new DataDynamics.ActiveReports.Label();
        this.label4 = new DataDynamics.ActiveReports.Label();
        this.detail = new DataDynamics.ActiveReports.Detail();
        this.textBox2 = new DataDynamics.ActiveReports.TextBox();
        this.textBox3 = new DataDynamics.ActiveReports.TextBox();
        this.textBox4 = new DataDynamics.ActiveReports.TextBox();
        this.textBox5 = new DataDynamics.ActiveReports.TextBox();
        this.textBox6 = new DataDynamics.ActiveReports.TextBox();
        this.textBox7 = new DataDynamics.ActiveReports.TextBox();
        this.textBox8 = new DataDynamics.ActiveReports.TextBox();
        this.textBox9 = new DataDynamics.ActiveReports.TextBox();
        this.textBox10 = new DataDynamics.ActiveReports.TextBox();
        this.textBox11 = new DataDynamics.ActiveReports.TextBox();
        this.textBox12 = new DataDynamics.ActiveReports.TextBox();
        this.textBox13 = new DataDynamics.ActiveReports.TextBox();
        this.pageFooter = new DataDynamics.ActiveReports.PageFooter();
        this.textBox1 = new DataDynamics.ActiveReports.TextBox();
        this.textBox14 = new DataDynamics.ActiveReports.TextBox();
        this.textBox15 = new DataDynamics.ActiveReports.TextBox();
        this.textBox16 = new DataDynamics.ActiveReports.TextBox();
        this.label5 = new DataDynamics.ActiveReports.Label();
        this.textBox17 = new DataDynamics.ActiveReports.TextBox();
        ((System.ComponentModel.ISupportInitialize)(this.label1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label4)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox2)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox3)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox4)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox5)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox6)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox7)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox8)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox9)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox10)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox11)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox12)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox13)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox14)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox15)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox16)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label5)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox17)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this)).BeginInit();
        // 
        // pageHeader
        // 
        this.pageHeader.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.label1,
            this.label2,
            this.label3,
            this.label4,
            this.textBox1,
            this.textBox14,
            this.textBox15,
            this.textBox16,
            this.label5,
            this.textBox17});
        this.pageHeader.Height = 0.75F;
        this.pageHeader.Name = "pageHeader";
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
        this.label1.HyperLink = null;
        this.label1.Left = 0.875F;
        this.label1.Name = "label1";
        this.label1.Style = "";
        this.label1.Text = "Marks Report Of";
        this.label1.Top = 0.0625F;
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
        this.label2.HyperLink = null;
        this.label2.Left = 0.25F;
        this.label2.Name = "label2";
        this.label2.Style = "";
        this.label2.Text = "Class";
        this.label2.Top = 0.375F;
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
        this.label3.HyperLink = null;
        this.label3.Left = 2.375F;
        this.label3.Name = "label3";
        this.label3.Style = "";
        this.label3.Text = "Section";
        this.label3.Top = 0.375F;
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
        this.label4.HyperLink = null;
        this.label4.Left = 4.3125F;
        this.label4.Name = "label4";
        this.label4.Style = "";
        this.label4.Text = "Exam Type";
        this.label4.Top = 0.375F;
        this.label4.Width = 1F;
        // 
        // detail
        // 
        this.detail.ColumnSpacing = 0F;
        this.detail.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.textBox2,
            this.textBox3,
            this.textBox4,
            this.textBox5,
            this.textBox6,
            this.textBox7,
            this.textBox8,
            this.textBox9,
            this.textBox10,
            this.textBox11,
            this.textBox12,
            this.textBox13});
        this.detail.Height = 2.145833F;
        this.detail.Name = "detail";
        // 
        // textBox2
        // 
        this.textBox2.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox2.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox2.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox2.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox2.Border.RightColor = System.Drawing.Color.Black;
        this.textBox2.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox2.Border.TopColor = System.Drawing.Color.Black;
        this.textBox2.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox2.DataField = "telugu";
        this.textBox2.Height = 0.1979167F;
        this.textBox2.Left = 1.6875F;
        this.textBox2.Name = "textBox2";
        this.textBox2.Style = "";
        this.textBox2.Text = "textBox2";
        this.textBox2.Top = 0F;
        this.textBox2.Width = 1F;
        // 
        // textBox3
        // 
        this.textBox3.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox3.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox3.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox3.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox3.Border.RightColor = System.Drawing.Color.Black;
        this.textBox3.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox3.Border.TopColor = System.Drawing.Color.Black;
        this.textBox3.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox3.DataField = "hindi";
        this.textBox3.Height = 0.1979167F;
        this.textBox3.Left = 1.6875F;
        this.textBox3.Name = "textBox3";
        this.textBox3.Style = "";
        this.textBox3.Text = "textBox2";
        this.textBox3.Top = 0.8125F;
        this.textBox3.Width = 1F;
        // 
        // textBox4
        // 
        this.textBox4.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox4.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox4.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox4.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox4.Border.RightColor = System.Drawing.Color.Black;
        this.textBox4.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox4.Border.TopColor = System.Drawing.Color.Black;
        this.textBox4.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox4.DataField = "english";
        this.textBox4.Height = 0.1979167F;
        this.textBox4.Left = 1.6875F;
        this.textBox4.Name = "textBox4";
        this.textBox4.Style = "";
        this.textBox4.Text = "textBox2";
        this.textBox4.Top = 1.8125F;
        this.textBox4.Width = 1F;
        // 
        // textBox5
        // 
        this.textBox5.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox5.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox5.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox5.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox5.Border.RightColor = System.Drawing.Color.Black;
        this.textBox5.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox5.Border.TopColor = System.Drawing.Color.Black;
        this.textBox5.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox5.Height = 0.1979167F;
        this.textBox5.Left = 3.375F;
        this.textBox5.Name = "textBox5";
        this.textBox5.Style = "";
        this.textBox5.Text = "textBox2";
        this.textBox5.Top = 0F;
        this.textBox5.Width = 1F;
        // 
        // textBox6
        // 
        this.textBox6.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox6.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox6.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox6.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox6.Border.RightColor = System.Drawing.Color.Black;
        this.textBox6.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox6.Border.TopColor = System.Drawing.Color.Black;
        this.textBox6.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox6.Height = 0.1979167F;
        this.textBox6.Left = 3.375F;
        this.textBox6.Name = "textBox6";
        this.textBox6.Style = "";
        this.textBox6.Text = "textBox2";
        this.textBox6.Top = 0.8125F;
        this.textBox6.Width = 1F;
        // 
        // textBox7
        // 
        this.textBox7.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox7.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox7.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox7.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox7.Border.RightColor = System.Drawing.Color.Black;
        this.textBox7.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox7.Border.TopColor = System.Drawing.Color.Black;
        this.textBox7.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox7.Height = 0.1875F;
        this.textBox7.Left = 3.375F;
        this.textBox7.Name = "textBox7";
        this.textBox7.Style = "";
        this.textBox7.Text = "textBox2";
        this.textBox7.Top = 1.8125F;
        this.textBox7.Width = 1F;
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
        this.textBox8.Height = 0.1979167F;
        this.textBox8.Left = 0.625F;
        this.textBox8.Name = "textBox8";
        this.textBox8.Style = "";
        this.textBox8.Text = "textBox2";
        this.textBox8.Top = 0F;
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
        this.textBox9.Height = 0.1979167F;
        this.textBox9.Left = 0.625F;
        this.textBox9.Name = "textBox9";
        this.textBox9.Style = "";
        this.textBox9.Text = "textBox2";
        this.textBox9.Top = 0.8125F;
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
        this.textBox10.Height = 0.1979167F;
        this.textBox10.Left = 0.625F;
        this.textBox10.Name = "textBox10";
        this.textBox10.Style = "";
        this.textBox10.Text = "textBox2";
        this.textBox10.Top = 1.8125F;
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
        this.textBox11.Left = 4.4375F;
        this.textBox11.Name = "textBox11";
        this.textBox11.Style = "";
        this.textBox11.Text = "textBox2";
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
        this.textBox12.Left = 4.4375F;
        this.textBox12.Name = "textBox12";
        this.textBox12.Style = "";
        this.textBox12.Text = "textBox2";
        this.textBox12.Top = 0.8125F;
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
        this.textBox13.Left = 4.4375F;
        this.textBox13.Name = "textBox13";
        this.textBox13.Style = "";
        this.textBox13.Text = "textBox2";
        this.textBox13.Top = 1.8125F;
        this.textBox13.Width = 1F;
        // 
        // pageFooter
        // 
        this.pageFooter.Height = 0.6354167F;
        this.pageFooter.Name = "pageFooter";
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
        this.textBox1.Height = 0.1875F;
        this.textBox1.Left = 1.3125F;
        this.textBox1.Name = "textBox1";
        this.textBox1.Style = "";
        this.textBox1.Text = "textBox1";
        this.textBox1.Top = 0.375F;
        this.textBox1.Width = 0.3125F;
        // 
        // textBox14
        // 
        this.textBox14.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox14.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox14.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox14.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox14.Border.RightColor = System.Drawing.Color.Black;
        this.textBox14.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox14.Border.TopColor = System.Drawing.Color.Black;
        this.textBox14.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox14.DataField = "section";
        this.textBox14.Height = 0.1875F;
        this.textBox14.Left = 3.4375F;
        this.textBox14.Name = "textBox14";
        this.textBox14.Style = "";
        this.textBox14.Text = "textBox14";
        this.textBox14.Top = 0.375F;
        this.textBox14.Width = 0.3125F;
        // 
        // textBox15
        // 
        this.textBox15.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox15.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox15.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox15.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox15.Border.RightColor = System.Drawing.Color.Black;
        this.textBox15.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox15.Border.TopColor = System.Drawing.Color.Black;
        this.textBox15.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox15.DataField = "examtype";
        this.textBox15.Height = 0.1979167F;
        this.textBox15.Left = 5.375F;
        this.textBox15.Name = "textBox15";
        this.textBox15.Style = "";
        this.textBox15.Text = "textBox15";
        this.textBox15.Top = 0.375F;
        this.textBox15.Width = 1F;
        // 
        // textBox16
        // 
        this.textBox16.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox16.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox16.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox16.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox16.Border.RightColor = System.Drawing.Color.Black;
        this.textBox16.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox16.Border.TopColor = System.Drawing.Color.Black;
        this.textBox16.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox16.DataField = "studentname";
        this.textBox16.Height = 0.1979167F;
        this.textBox16.Left = 1.9375F;
        this.textBox16.Name = "textBox16";
        this.textBox16.Style = "";
        this.textBox16.Text = "textBox16";
        this.textBox16.Top = 0.0625F;
        this.textBox16.Width = 1F;
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
        this.label5.HyperLink = null;
        this.label5.Left = 3.9375F;
        this.label5.Name = "label5";
        this.label5.Style = "";
        this.label5.Text = "Roll No";
        this.label5.Top = 0.0625F;
        this.label5.Width = 1F;
        // 
        // textBox17
        // 
        this.textBox17.Border.BottomColor = System.Drawing.Color.Black;
        this.textBox17.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox17.Border.LeftColor = System.Drawing.Color.Black;
        this.textBox17.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox17.Border.RightColor = System.Drawing.Color.Black;
        this.textBox17.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox17.Border.TopColor = System.Drawing.Color.Black;
        this.textBox17.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.textBox17.DataField = "rollno";
        this.textBox17.Height = 0.1979167F;
        this.textBox17.Left = 5F;
        this.textBox17.Name = "textBox17";
        this.textBox17.Style = "";
        this.textBox17.Text = "textBox17";
        this.textBox17.Top = 0.0625F;
        this.textBox17.Width = 1F;
        // 
        // MarksReport
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
        ((System.ComponentModel.ISupportInitialize)(this.label1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label4)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox2)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox3)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox4)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox5)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox6)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox7)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox8)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox9)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox10)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox11)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox12)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox13)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox14)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox15)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox16)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label5)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.textBox17)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this)).EndInit();

	}
	#endregion
}
