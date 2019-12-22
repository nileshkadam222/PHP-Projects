using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using DataDynamics.ActiveReports;
using DataDynamics.ActiveReports.Document;

/// <summary>
/// Summary description for FinalMarksReport.
/// </summary>
public class FinalMarksReport : DataDynamics.ActiveReports.ActiveReport3
{
    #region "Fields"
    decimal unitTest1Total;
    decimal unitTest2Total;
    decimal unitTest3Total;
    decimal unitTest4Total;
    decimal quaterlyTotal;
    decimal halfYearlyTotal;
    decimal annualTotal;
    decimal countUt1;
    decimal countUt2;
    decimal countUt3;
    decimal countUt4;
    decimal countQtrly;
    decimal countHfly;
    decimal countAnnual;
    string upperText = null;
    #endregion


    private Detail detail;
    private TextBox txtSubjectTelugu;
    private TextBox txtUt1Telugu;
    private TextBox txtUt2Telugu;
    private TextBox txtUt3Telugu;
    private TextBox txtUt4Telugu;
    private TextBox txtQtrlyTelugu;
    private TextBox txtHflyTelugu;
    private Line line8;
    private Line line15;
    private Line line16;
    private Line line17;
    private Line line18;
    private Line line11;
    private Line line12;
    private Line line13;
    private Line line20;
    private Line line21;
    private TextBox txtAnlTelugu;
    private ReportHeader reportHeader1;
    private ReportFooter reportFooter1;
    private TextBox txtUT1Total;
    private Label label2;
    private Line line24;
    private Line line25;
    private Line line26;
    private Line line27;
    private TextBox txtUT2Total;
    private TextBox txtUT3Total;
    private TextBox txtUT4Total;
    private TextBox txtQtlyTotal;
    private TextBox txtHflyTotal;
    private TextBox txtAnlTotal;
    private Line line28;
    private Line line29;
    private Line line30;
    private Line line31;
    private Line line32;
    private Line line33;
    private Label label3;
    private PageHeader pageHeader;
    private TextBox txtStudentName;
    private Label lblStudentName;
    private TextBox txtClass;
    private Label lblClass;
    private Label lblSection;
    private TextBox txtSection;
    private Label lblRollNo;
    private TextBox txtRollNo;
    private Label label1;
    private Label lblSubjectName;
    private Label lblUnitTest1;
    private Label lblUnitTest2;
    private Label lblUnitTest3;
    private Label lblUnitTest4;
    private Label lblQuaterly;
    private Label lblHalfYearly;
    private Label lblAnnual;
    private Line line5;
    private Line line14;
    private Line line4;
    private Line line1;
    private Line line2;
    private Line line3;
    private Line line6;
    private Line line19;
    private Line line7;
    private Line line22;
    private Line line23;
    private PageFooter pageFooter;
    

	public FinalMarksReport()
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
        string resourceFileName = "FinalMarksReport.resx";
        System.Resources.ResourceManager resources = Resources.FinalMarksReport.ResourceManager;
        this.detail = new DataDynamics.ActiveReports.Detail();
        this.txtSubjectTelugu = new DataDynamics.ActiveReports.TextBox();
        this.txtUt1Telugu = new DataDynamics.ActiveReports.TextBox();
        this.txtUt2Telugu = new DataDynamics.ActiveReports.TextBox();
        this.txtUt3Telugu = new DataDynamics.ActiveReports.TextBox();
        this.txtUt4Telugu = new DataDynamics.ActiveReports.TextBox();
        this.txtQtrlyTelugu = new DataDynamics.ActiveReports.TextBox();
        this.txtHflyTelugu = new DataDynamics.ActiveReports.TextBox();
        this.line8 = new DataDynamics.ActiveReports.Line();
        this.line15 = new DataDynamics.ActiveReports.Line();
        this.line16 = new DataDynamics.ActiveReports.Line();
        this.line17 = new DataDynamics.ActiveReports.Line();
        this.line18 = new DataDynamics.ActiveReports.Line();
        this.line11 = new DataDynamics.ActiveReports.Line();
        this.line12 = new DataDynamics.ActiveReports.Line();
        this.line13 = new DataDynamics.ActiveReports.Line();
        this.line20 = new DataDynamics.ActiveReports.Line();
        this.line21 = new DataDynamics.ActiveReports.Line();
        this.txtAnlTelugu = new DataDynamics.ActiveReports.TextBox();
        this.reportHeader1 = new DataDynamics.ActiveReports.ReportHeader();
        this.reportFooter1 = new DataDynamics.ActiveReports.ReportFooter();
        this.txtUT1Total = new DataDynamics.ActiveReports.TextBox();
        this.label2 = new DataDynamics.ActiveReports.Label();
        this.line24 = new DataDynamics.ActiveReports.Line();
        this.line25 = new DataDynamics.ActiveReports.Line();
        this.line26 = new DataDynamics.ActiveReports.Line();
        this.line27 = new DataDynamics.ActiveReports.Line();
        this.txtUT2Total = new DataDynamics.ActiveReports.TextBox();
        this.txtUT3Total = new DataDynamics.ActiveReports.TextBox();
        this.txtUT4Total = new DataDynamics.ActiveReports.TextBox();
        this.txtQtlyTotal = new DataDynamics.ActiveReports.TextBox();
        this.txtHflyTotal = new DataDynamics.ActiveReports.TextBox();
        this.txtAnlTotal = new DataDynamics.ActiveReports.TextBox();
        this.line28 = new DataDynamics.ActiveReports.Line();
        this.line29 = new DataDynamics.ActiveReports.Line();
        this.line30 = new DataDynamics.ActiveReports.Line();
        this.line31 = new DataDynamics.ActiveReports.Line();
        this.line32 = new DataDynamics.ActiveReports.Line();
        this.line33 = new DataDynamics.ActiveReports.Line();
        this.label3 = new DataDynamics.ActiveReports.Label();
        this.pageHeader = new DataDynamics.ActiveReports.PageHeader();
        this.txtStudentName = new DataDynamics.ActiveReports.TextBox();
        this.lblStudentName = new DataDynamics.ActiveReports.Label();
        this.txtClass = new DataDynamics.ActiveReports.TextBox();
        this.lblClass = new DataDynamics.ActiveReports.Label();
        this.lblSection = new DataDynamics.ActiveReports.Label();
        this.txtSection = new DataDynamics.ActiveReports.TextBox();
        this.lblRollNo = new DataDynamics.ActiveReports.Label();
        this.txtRollNo = new DataDynamics.ActiveReports.TextBox();
        this.label1 = new DataDynamics.ActiveReports.Label();
        this.lblSubjectName = new DataDynamics.ActiveReports.Label();
        this.lblUnitTest1 = new DataDynamics.ActiveReports.Label();
        this.lblUnitTest2 = new DataDynamics.ActiveReports.Label();
        this.lblUnitTest3 = new DataDynamics.ActiveReports.Label();
        this.lblUnitTest4 = new DataDynamics.ActiveReports.Label();
        this.lblQuaterly = new DataDynamics.ActiveReports.Label();
        this.lblHalfYearly = new DataDynamics.ActiveReports.Label();
        this.lblAnnual = new DataDynamics.ActiveReports.Label();
        this.line5 = new DataDynamics.ActiveReports.Line();
        this.line14 = new DataDynamics.ActiveReports.Line();
        this.line4 = new DataDynamics.ActiveReports.Line();
        this.line1 = new DataDynamics.ActiveReports.Line();
        this.line2 = new DataDynamics.ActiveReports.Line();
        this.line3 = new DataDynamics.ActiveReports.Line();
        this.line6 = new DataDynamics.ActiveReports.Line();
        this.line19 = new DataDynamics.ActiveReports.Line();
        this.line7 = new DataDynamics.ActiveReports.Line();
        this.line22 = new DataDynamics.ActiveReports.Line();
        this.line23 = new DataDynamics.ActiveReports.Line();
        this.pageFooter = new DataDynamics.ActiveReports.PageFooter();
        ((System.ComponentModel.ISupportInitialize)(this.txtSubjectTelugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt1Telugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt2Telugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt3Telugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt4Telugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtQtrlyTelugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtHflyTelugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtAnlTelugu)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT1Total)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT2Total)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT3Total)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT4Total)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtQtlyTotal)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtHflyTotal)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtAnlTotal)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtStudentName)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblStudentName)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtClass)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblClass)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblSection)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtSection)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblRollNo)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtRollNo)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.label1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblSubjectName)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest1)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest2)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest3)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest4)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblQuaterly)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblHalfYearly)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblAnnual)).BeginInit();
        ((System.ComponentModel.ISupportInitialize)(this)).BeginInit();
        // 
        // detail
        // 
        this.detail.ColumnSpacing = 0F;
        this.detail.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.txtSubjectTelugu,
            this.txtUt1Telugu,
            this.txtUt2Telugu,
            this.txtUt3Telugu,
            this.txtUt4Telugu,
            this.txtQtrlyTelugu,
            this.txtHflyTelugu,
            this.line8,
            this.line15,
            this.line16,
            this.line17,
            this.line18,
            this.line11,
            this.line12,
            this.line13,
            this.line20,
            this.line21,
            this.txtAnlTelugu});
        this.detail.Height = 0.2604167F;
        this.detail.Name = "detail";
        this.detail.Format += new System.EventHandler(this.detail_Format);
        // 
        // txtSubjectTelugu
        // 
        this.txtSubjectTelugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtSubjectTelugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSubjectTelugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtSubjectTelugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSubjectTelugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtSubjectTelugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSubjectTelugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtSubjectTelugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSubjectTelugu.DataField = "subjectname";
        this.txtSubjectTelugu.Height = 0.25F;
        this.txtSubjectTelugu.Left = 0.0625F;
        this.txtSubjectTelugu.Name = "txtSubjectTelugu";
        this.txtSubjectTelugu.Style = "ddo-char-set: 0; font-weight: normal; font-size: 9.75pt; font-family: Microsoft S" +
            "ans Serif; ";
        this.txtSubjectTelugu.Text = "Telugu";
        this.txtSubjectTelugu.Top = 0F;
        this.txtSubjectTelugu.Width = 0.875F;
        // 
        // txtUt1Telugu
        // 
        this.txtUt1Telugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUt1Telugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt1Telugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUt1Telugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt1Telugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtUt1Telugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt1Telugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtUt1Telugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt1Telugu.CountNullValues = true;
        this.txtUt1Telugu.DataField = "UnitTest1";
        this.txtUt1Telugu.Height = 0.25F;
        this.txtUt1Telugu.Left = 1.0625F;
        this.txtUt1Telugu.Name = "txtUt1Telugu";
        this.txtUt1Telugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUt1Telugu.Text = null;
        this.txtUt1Telugu.Top = 0F;
        this.txtUt1Telugu.Width = 0.688F;
        // 
        // txtUt2Telugu
        // 
        this.txtUt2Telugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUt2Telugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt2Telugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUt2Telugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt2Telugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtUt2Telugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt2Telugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtUt2Telugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt2Telugu.DataField = "UnitTest2";
        this.txtUt2Telugu.Height = 0.25F;
        this.txtUt2Telugu.Left = 1.875F;
        this.txtUt2Telugu.Name = "txtUt2Telugu";
        this.txtUt2Telugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUt2Telugu.Text = null;
        this.txtUt2Telugu.Top = 0F;
        this.txtUt2Telugu.Width = 0.688F;
        // 
        // txtUt3Telugu
        // 
        this.txtUt3Telugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUt3Telugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt3Telugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUt3Telugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt3Telugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtUt3Telugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt3Telugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtUt3Telugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt3Telugu.DataField = "UnitTest3";
        this.txtUt3Telugu.Height = 0.25F;
        this.txtUt3Telugu.Left = 2.6875F;
        this.txtUt3Telugu.Name = "txtUt3Telugu";
        this.txtUt3Telugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUt3Telugu.Text = null;
        this.txtUt3Telugu.Top = 0F;
        this.txtUt3Telugu.Width = 0.688F;
        // 
        // txtUt4Telugu
        // 
        this.txtUt4Telugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUt4Telugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt4Telugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUt4Telugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt4Telugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtUt4Telugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt4Telugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtUt4Telugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUt4Telugu.DataField = "UnitTest4";
        this.txtUt4Telugu.Height = 0.25F;
        this.txtUt4Telugu.Left = 3.5625F;
        this.txtUt4Telugu.Name = "txtUt4Telugu";
        this.txtUt4Telugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUt4Telugu.Text = null;
        this.txtUt4Telugu.Top = 0F;
        this.txtUt4Telugu.Width = 0.688F;
        // 
        // txtQtrlyTelugu
        // 
        this.txtQtrlyTelugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtQtrlyTelugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtrlyTelugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtQtrlyTelugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtrlyTelugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtQtrlyTelugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtrlyTelugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtQtrlyTelugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtrlyTelugu.DataField = "Quaterly";
        this.txtQtrlyTelugu.Height = 0.25F;
        this.txtQtrlyTelugu.Left = 4.375F;
        this.txtQtrlyTelugu.Name = "txtQtrlyTelugu";
        this.txtQtrlyTelugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtQtrlyTelugu.Text = null;
        this.txtQtrlyTelugu.Top = 0F;
        this.txtQtrlyTelugu.Width = 0.688F;
        // 
        // txtHflyTelugu
        // 
        this.txtHflyTelugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtHflyTelugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTelugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtHflyTelugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTelugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtHflyTelugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTelugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtHflyTelugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTelugu.DataField = "HalfYearly";
        this.txtHflyTelugu.Height = 0.25F;
        this.txtHflyTelugu.Left = 5.1875F;
        this.txtHflyTelugu.Name = "txtHflyTelugu";
        this.txtHflyTelugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtHflyTelugu.Text = null;
        this.txtHflyTelugu.Top = 0F;
        this.txtHflyTelugu.Width = 0.688F;
        // 
        // line8
        // 
        this.line8.Border.BottomColor = System.Drawing.Color.Black;
        this.line8.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line8.Border.LeftColor = System.Drawing.Color.Black;
        this.line8.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line8.Border.RightColor = System.Drawing.Color.Black;
        this.line8.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line8.Border.TopColor = System.Drawing.Color.Black;
        this.line8.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line8.Height = 0.25F;
        this.line8.Left = 1F;
        this.line8.LineWeight = 1F;
        this.line8.Name = "line8";
        this.line8.Top = 0F;
        this.line8.Width = 0F;
        this.line8.X1 = 1F;
        this.line8.X2 = 1F;
        this.line8.Y1 = 0F;
        this.line8.Y2 = 0.25F;
        // 
        // line15
        // 
        this.line15.Border.BottomColor = System.Drawing.Color.Black;
        this.line15.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line15.Border.LeftColor = System.Drawing.Color.Black;
        this.line15.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line15.Border.RightColor = System.Drawing.Color.Black;
        this.line15.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line15.Border.TopColor = System.Drawing.Color.Black;
        this.line15.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line15.Height = 0F;
        this.line15.Left = 0.0625F;
        this.line15.LineWeight = 1F;
        this.line15.Name = "line15";
        this.line15.Top = 0.25F;
        this.line15.Width = 6.75F;
        this.line15.X1 = 0.0625F;
        this.line15.X2 = 6.8125F;
        this.line15.Y1 = 0.25F;
        this.line15.Y2 = 0.25F;
        // 
        // line16
        // 
        this.line16.Border.BottomColor = System.Drawing.Color.Black;
        this.line16.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line16.Border.LeftColor = System.Drawing.Color.Black;
        this.line16.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line16.Border.RightColor = System.Drawing.Color.Black;
        this.line16.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line16.Border.TopColor = System.Drawing.Color.Black;
        this.line16.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line16.Height = 0.25F;
        this.line16.Left = 1.8125F;
        this.line16.LineWeight = 1F;
        this.line16.Name = "line16";
        this.line16.Top = 0F;
        this.line16.Width = 0F;
        this.line16.X1 = 1.8125F;
        this.line16.X2 = 1.8125F;
        this.line16.Y1 = 0F;
        this.line16.Y2 = 0.25F;
        // 
        // line17
        // 
        this.line17.Border.BottomColor = System.Drawing.Color.Black;
        this.line17.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line17.Border.LeftColor = System.Drawing.Color.Black;
        this.line17.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line17.Border.RightColor = System.Drawing.Color.Black;
        this.line17.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line17.Border.TopColor = System.Drawing.Color.Black;
        this.line17.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line17.Height = 0.25F;
        this.line17.Left = 2.625F;
        this.line17.LineWeight = 1F;
        this.line17.Name = "line17";
        this.line17.Top = 0F;
        this.line17.Width = 0F;
        this.line17.X1 = 2.625F;
        this.line17.X2 = 2.625F;
        this.line17.Y1 = 0F;
        this.line17.Y2 = 0.25F;
        // 
        // line18
        // 
        this.line18.Border.BottomColor = System.Drawing.Color.Black;
        this.line18.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line18.Border.LeftColor = System.Drawing.Color.Black;
        this.line18.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line18.Border.RightColor = System.Drawing.Color.Black;
        this.line18.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line18.Border.TopColor = System.Drawing.Color.Black;
        this.line18.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line18.Height = 0.25F;
        this.line18.Left = 3.5F;
        this.line18.LineWeight = 1F;
        this.line18.Name = "line18";
        this.line18.Top = 0F;
        this.line18.Width = 0F;
        this.line18.X1 = 3.5F;
        this.line18.X2 = 3.5F;
        this.line18.Y1 = 0F;
        this.line18.Y2 = 0.25F;
        // 
        // line11
        // 
        this.line11.Border.BottomColor = System.Drawing.Color.Black;
        this.line11.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line11.Border.LeftColor = System.Drawing.Color.Black;
        this.line11.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line11.Border.RightColor = System.Drawing.Color.Black;
        this.line11.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line11.Border.TopColor = System.Drawing.Color.Black;
        this.line11.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line11.Height = 0.25F;
        this.line11.Left = 4.3125F;
        this.line11.LineWeight = 1F;
        this.line11.Name = "line11";
        this.line11.Top = 0F;
        this.line11.Width = 0F;
        this.line11.X1 = 4.3125F;
        this.line11.X2 = 4.3125F;
        this.line11.Y1 = 0F;
        this.line11.Y2 = 0.25F;
        // 
        // line12
        // 
        this.line12.Border.BottomColor = System.Drawing.Color.Black;
        this.line12.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line12.Border.LeftColor = System.Drawing.Color.Black;
        this.line12.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line12.Border.RightColor = System.Drawing.Color.Black;
        this.line12.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line12.Border.TopColor = System.Drawing.Color.Black;
        this.line12.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line12.Height = 0.25F;
        this.line12.Left = 5.125F;
        this.line12.LineWeight = 1F;
        this.line12.Name = "line12";
        this.line12.Top = 0F;
        this.line12.Width = 0F;
        this.line12.X1 = 5.125F;
        this.line12.X2 = 5.125F;
        this.line12.Y1 = 0F;
        this.line12.Y2 = 0.25F;
        // 
        // line13
        // 
        this.line13.Border.BottomColor = System.Drawing.Color.Black;
        this.line13.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line13.Border.LeftColor = System.Drawing.Color.Black;
        this.line13.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line13.Border.RightColor = System.Drawing.Color.Black;
        this.line13.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line13.Border.TopColor = System.Drawing.Color.Black;
        this.line13.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line13.Height = 0.25F;
        this.line13.Left = 6F;
        this.line13.LineWeight = 1F;
        this.line13.Name = "line13";
        this.line13.Top = 0F;
        this.line13.Width = 0F;
        this.line13.X1 = 6F;
        this.line13.X2 = 6F;
        this.line13.Y1 = 0F;
        this.line13.Y2 = 0.25F;
        // 
        // line20
        // 
        this.line20.Border.BottomColor = System.Drawing.Color.Black;
        this.line20.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line20.Border.LeftColor = System.Drawing.Color.Black;
        this.line20.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line20.Border.RightColor = System.Drawing.Color.Black;
        this.line20.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line20.Border.TopColor = System.Drawing.Color.Black;
        this.line20.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line20.Height = 0.25F;
        this.line20.Left = 0.0625F;
        this.line20.LineWeight = 1F;
        this.line20.Name = "line20";
        this.line20.Top = 0F;
        this.line20.Width = 0F;
        this.line20.X1 = 0.0625F;
        this.line20.X2 = 0.0625F;
        this.line20.Y1 = 0F;
        this.line20.Y2 = 0.25F;
        // 
        // line21
        // 
        this.line21.Border.BottomColor = System.Drawing.Color.Black;
        this.line21.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line21.Border.LeftColor = System.Drawing.Color.Black;
        this.line21.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line21.Border.RightColor = System.Drawing.Color.Black;
        this.line21.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line21.Border.TopColor = System.Drawing.Color.Black;
        this.line21.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line21.Height = 0.25F;
        this.line21.Left = 6.8125F;
        this.line21.LineWeight = 1F;
        this.line21.Name = "line21";
        this.line21.Top = 0F;
        this.line21.Width = 0F;
        this.line21.X1 = 6.8125F;
        this.line21.X2 = 6.8125F;
        this.line21.Y1 = 0F;
        this.line21.Y2 = 0.25F;
        // 
        // txtAnlTelugu
        // 
        this.txtAnlTelugu.Border.BottomColor = System.Drawing.Color.Black;
        this.txtAnlTelugu.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTelugu.Border.LeftColor = System.Drawing.Color.Black;
        this.txtAnlTelugu.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTelugu.Border.RightColor = System.Drawing.Color.Black;
        this.txtAnlTelugu.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTelugu.Border.TopColor = System.Drawing.Color.Black;
        this.txtAnlTelugu.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTelugu.DataField = "Annual";
        this.txtAnlTelugu.Height = 0.25F;
        this.txtAnlTelugu.Left = 6.0625F;
        this.txtAnlTelugu.Name = "txtAnlTelugu";
        this.txtAnlTelugu.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtAnlTelugu.Text = null;
        this.txtAnlTelugu.Top = 0F;
        this.txtAnlTelugu.Width = 0.688F;
        // 
        // reportHeader1
        // 
        this.reportHeader1.Height = 0F;
        this.reportHeader1.Name = "reportHeader1";
        // 
        // reportFooter1
        // 
        this.reportFooter1.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.txtUT1Total,
            this.label2,
            this.line24,
            this.line25,
            this.line26,
            this.line27,
            this.txtUT2Total,
            this.txtUT3Total,
            this.txtUT4Total,
            this.txtQtlyTotal,
            this.txtHflyTotal,
            this.txtAnlTotal,
            this.line28,
            this.line29,
            this.line30,
            this.line31,
            this.line32,
            this.line33,
            this.label3});
        this.reportFooter1.Height = 0.6875F;
        this.reportFooter1.Name = "reportFooter1";
        this.reportFooter1.Format += new System.EventHandler(this.reportFooter1_Format_1);
        // 
        // txtUT1Total
        // 
        this.txtUT1Total.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUT1Total.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT1Total.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUT1Total.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT1Total.Border.RightColor = System.Drawing.Color.Black;
        this.txtUT1Total.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT1Total.Border.TopColor = System.Drawing.Color.Black;
        this.txtUT1Total.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT1Total.Height = 0.25F;
        this.txtUT1Total.Left = 1.0625F;
        this.txtUT1Total.Name = "txtUT1Total";
        this.txtUT1Total.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUT1Total.Top = 0F;
        this.txtUT1Total.Width = 0.688F;
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
        this.label2.Height = 0.25F;
        this.label2.HyperLink = "";
        this.label2.Left = 0.0625F;
        this.label2.Name = "label2";
        this.label2.Style = "ddo-char-set: 0; font-weight: normal; font-size: 9.75pt; font-family: Microsoft S" +
            "ans Serif; ";
        this.label2.Text = "Total Marks";
        this.label2.Top = 0F;
        this.label2.Width = 0.75F;
        // 
        // line24
        // 
        this.line24.Border.BottomColor = System.Drawing.Color.Black;
        this.line24.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line24.Border.LeftColor = System.Drawing.Color.Black;
        this.line24.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line24.Border.RightColor = System.Drawing.Color.Black;
        this.line24.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line24.Border.TopColor = System.Drawing.Color.Black;
        this.line24.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line24.Height = 0.25F;
        this.line24.Left = 0.0625F;
        this.line24.LineWeight = 1F;
        this.line24.Name = "line24";
        this.line24.Top = 0F;
        this.line24.Width = 0F;
        this.line24.X1 = 0.0625F;
        this.line24.X2 = 0.0625F;
        this.line24.Y1 = 0F;
        this.line24.Y2 = 0.25F;
        // 
        // line25
        // 
        this.line25.Border.BottomColor = System.Drawing.Color.Black;
        this.line25.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line25.Border.LeftColor = System.Drawing.Color.Black;
        this.line25.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line25.Border.RightColor = System.Drawing.Color.Black;
        this.line25.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line25.Border.TopColor = System.Drawing.Color.Black;
        this.line25.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line25.Height = 0.25F;
        this.line25.Left = 1F;
        this.line25.LineWeight = 1F;
        this.line25.Name = "line25";
        this.line25.Top = 0F;
        this.line25.Width = 0F;
        this.line25.X1 = 1F;
        this.line25.X2 = 1F;
        this.line25.Y1 = 0F;
        this.line25.Y2 = 0.25F;
        // 
        // line26
        // 
        this.line26.Border.BottomColor = System.Drawing.Color.Black;
        this.line26.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line26.Border.LeftColor = System.Drawing.Color.Black;
        this.line26.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line26.Border.RightColor = System.Drawing.Color.Black;
        this.line26.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line26.Border.TopColor = System.Drawing.Color.Black;
        this.line26.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line26.Height = 0.25F;
        this.line26.Left = 1.8125F;
        this.line26.LineWeight = 1F;
        this.line26.Name = "line26";
        this.line26.Top = 0F;
        this.line26.Width = 0F;
        this.line26.X1 = 1.8125F;
        this.line26.X2 = 1.8125F;
        this.line26.Y1 = 0F;
        this.line26.Y2 = 0.25F;
        // 
        // line27
        // 
        this.line27.Border.BottomColor = System.Drawing.Color.Black;
        this.line27.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line27.Border.LeftColor = System.Drawing.Color.Black;
        this.line27.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line27.Border.RightColor = System.Drawing.Color.Black;
        this.line27.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line27.Border.TopColor = System.Drawing.Color.Black;
        this.line27.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line27.Height = 0.25F;
        this.line27.Left = 2.625F;
        this.line27.LineWeight = 1F;
        this.line27.Name = "line27";
        this.line27.Top = 0F;
        this.line27.Width = 0F;
        this.line27.X1 = 2.625F;
        this.line27.X2 = 2.625F;
        this.line27.Y1 = 0F;
        this.line27.Y2 = 0.25F;
        // 
        // txtUT2Total
        // 
        this.txtUT2Total.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUT2Total.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT2Total.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUT2Total.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT2Total.Border.RightColor = System.Drawing.Color.Black;
        this.txtUT2Total.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT2Total.Border.TopColor = System.Drawing.Color.Black;
        this.txtUT2Total.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT2Total.Height = 0.25F;
        this.txtUT2Total.Left = 1.875F;
        this.txtUT2Total.Name = "txtUT2Total";
        this.txtUT2Total.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUT2Total.Text = null;
        this.txtUT2Total.Top = 0F;
        this.txtUT2Total.Width = 0.688F;
        // 
        // txtUT3Total
        // 
        this.txtUT3Total.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUT3Total.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT3Total.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUT3Total.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT3Total.Border.RightColor = System.Drawing.Color.Black;
        this.txtUT3Total.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT3Total.Border.TopColor = System.Drawing.Color.Black;
        this.txtUT3Total.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT3Total.Height = 0.25F;
        this.txtUT3Total.Left = 2.6875F;
        this.txtUT3Total.Name = "txtUT3Total";
        this.txtUT3Total.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUT3Total.Text = null;
        this.txtUT3Total.Top = 0F;
        this.txtUT3Total.Width = 0.75F;
        // 
        // txtUT4Total
        // 
        this.txtUT4Total.Border.BottomColor = System.Drawing.Color.Black;
        this.txtUT4Total.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT4Total.Border.LeftColor = System.Drawing.Color.Black;
        this.txtUT4Total.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT4Total.Border.RightColor = System.Drawing.Color.Black;
        this.txtUT4Total.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT4Total.Border.TopColor = System.Drawing.Color.Black;
        this.txtUT4Total.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtUT4Total.Height = 0.25F;
        this.txtUT4Total.Left = 3.5625F;
        this.txtUT4Total.Name = "txtUT4Total";
        this.txtUT4Total.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtUT4Total.Text = null;
        this.txtUT4Total.Top = 0F;
        this.txtUT4Total.Width = 0.688F;
        // 
        // txtQtlyTotal
        // 
        this.txtQtlyTotal.Border.BottomColor = System.Drawing.Color.Black;
        this.txtQtlyTotal.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtlyTotal.Border.LeftColor = System.Drawing.Color.Black;
        this.txtQtlyTotal.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtlyTotal.Border.RightColor = System.Drawing.Color.Black;
        this.txtQtlyTotal.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtlyTotal.Border.TopColor = System.Drawing.Color.Black;
        this.txtQtlyTotal.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtQtlyTotal.Height = 0.25F;
        this.txtQtlyTotal.Left = 4.375F;
        this.txtQtlyTotal.Name = "txtQtlyTotal";
        this.txtQtlyTotal.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtQtlyTotal.Text = null;
        this.txtQtlyTotal.Top = 0F;
        this.txtQtlyTotal.Width = 0.6875F;
        // 
        // txtHflyTotal
        // 
        this.txtHflyTotal.Border.BottomColor = System.Drawing.Color.Black;
        this.txtHflyTotal.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTotal.Border.LeftColor = System.Drawing.Color.Black;
        this.txtHflyTotal.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTotal.Border.RightColor = System.Drawing.Color.Black;
        this.txtHflyTotal.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTotal.Border.TopColor = System.Drawing.Color.Black;
        this.txtHflyTotal.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtHflyTotal.Height = 0.25F;
        this.txtHflyTotal.Left = 5.1875F;
        this.txtHflyTotal.Name = "txtHflyTotal";
        this.txtHflyTotal.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtHflyTotal.Text = null;
        this.txtHflyTotal.Top = 0F;
        this.txtHflyTotal.Width = 0.688F;
        // 
        // txtAnlTotal
        // 
        this.txtAnlTotal.Border.BottomColor = System.Drawing.Color.Black;
        this.txtAnlTotal.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTotal.Border.LeftColor = System.Drawing.Color.Black;
        this.txtAnlTotal.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTotal.Border.RightColor = System.Drawing.Color.Black;
        this.txtAnlTotal.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTotal.Border.TopColor = System.Drawing.Color.Black;
        this.txtAnlTotal.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtAnlTotal.Height = 0.25F;
        this.txtAnlTotal.Left = 6.0625F;
        this.txtAnlTotal.Name = "txtAnlTotal";
        this.txtAnlTotal.Style = "ddo-char-set: 0; font-size: 9.75pt; font-family: Microsoft Sans Serif; ";
        this.txtAnlTotal.Text = null;
        this.txtAnlTotal.Top = 0F;
        this.txtAnlTotal.Width = 0.688F;
        // 
        // line28
        // 
        this.line28.Border.BottomColor = System.Drawing.Color.Black;
        this.line28.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line28.Border.LeftColor = System.Drawing.Color.Black;
        this.line28.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line28.Border.RightColor = System.Drawing.Color.Black;
        this.line28.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line28.Border.TopColor = System.Drawing.Color.Black;
        this.line28.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line28.Height = 0.25F;
        this.line28.Left = 3.5F;
        this.line28.LineWeight = 1F;
        this.line28.Name = "line28";
        this.line28.Top = 0F;
        this.line28.Width = 0F;
        this.line28.X1 = 3.5F;
        this.line28.X2 = 3.5F;
        this.line28.Y1 = 0F;
        this.line28.Y2 = 0.25F;
        // 
        // line29
        // 
        this.line29.Border.BottomColor = System.Drawing.Color.Black;
        this.line29.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line29.Border.LeftColor = System.Drawing.Color.Black;
        this.line29.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line29.Border.RightColor = System.Drawing.Color.Black;
        this.line29.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line29.Border.TopColor = System.Drawing.Color.Black;
        this.line29.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line29.Height = 0.25F;
        this.line29.Left = 4.3125F;
        this.line29.LineWeight = 1F;
        this.line29.Name = "line29";
        this.line29.Top = 0F;
        this.line29.Width = 0F;
        this.line29.X1 = 4.3125F;
        this.line29.X2 = 4.3125F;
        this.line29.Y1 = 0F;
        this.line29.Y2 = 0.25F;
        // 
        // line30
        // 
        this.line30.Border.BottomColor = System.Drawing.Color.Black;
        this.line30.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line30.Border.LeftColor = System.Drawing.Color.Black;
        this.line30.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line30.Border.RightColor = System.Drawing.Color.Black;
        this.line30.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line30.Border.TopColor = System.Drawing.Color.Black;
        this.line30.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line30.Height = 0.25F;
        this.line30.Left = 5.125F;
        this.line30.LineWeight = 1F;
        this.line30.Name = "line30";
        this.line30.Top = 0F;
        this.line30.Width = 0F;
        this.line30.X1 = 5.125F;
        this.line30.X2 = 5.125F;
        this.line30.Y1 = 0F;
        this.line30.Y2 = 0.25F;
        // 
        // line31
        // 
        this.line31.Border.BottomColor = System.Drawing.Color.Black;
        this.line31.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line31.Border.LeftColor = System.Drawing.Color.Black;
        this.line31.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line31.Border.RightColor = System.Drawing.Color.Black;
        this.line31.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line31.Border.TopColor = System.Drawing.Color.Black;
        this.line31.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line31.Height = 0.25F;
        this.line31.Left = 6F;
        this.line31.LineWeight = 1F;
        this.line31.Name = "line31";
        this.line31.Top = 0F;
        this.line31.Width = 0F;
        this.line31.X1 = 6F;
        this.line31.X2 = 6F;
        this.line31.Y1 = 0F;
        this.line31.Y2 = 0.25F;
        // 
        // line32
        // 
        this.line32.Border.BottomColor = System.Drawing.Color.Black;
        this.line32.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line32.Border.LeftColor = System.Drawing.Color.Black;
        this.line32.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line32.Border.RightColor = System.Drawing.Color.Black;
        this.line32.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line32.Border.TopColor = System.Drawing.Color.Black;
        this.line32.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line32.Height = 0.25F;
        this.line32.Left = 6.8125F;
        this.line32.LineWeight = 1F;
        this.line32.Name = "line32";
        this.line32.Top = 0F;
        this.line32.Width = 0F;
        this.line32.X1 = 6.8125F;
        this.line32.X2 = 6.8125F;
        this.line32.Y1 = 0F;
        this.line32.Y2 = 0.25F;
        // 
        // line33
        // 
        this.line33.Border.BottomColor = System.Drawing.Color.Black;
        this.line33.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line33.Border.LeftColor = System.Drawing.Color.Black;
        this.line33.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line33.Border.RightColor = System.Drawing.Color.Black;
        this.line33.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line33.Border.TopColor = System.Drawing.Color.Black;
        this.line33.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line33.Height = 0F;
        this.line33.Left = 0.0625F;
        this.line33.LineWeight = 1F;
        this.line33.Name = "line33";
        this.line33.Top = 0.25F;
        this.line33.Width = 6.75F;
        this.line33.X1 = 0.0625F;
        this.line33.X2 = 6.8125F;
        this.line33.Y1 = 0.25F;
        this.line33.Y2 = 0.25F;
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
        this.label3.Height = 0.25F;
        this.label3.HyperLink = "";
        this.label3.Left = 1.5625F;
        this.label3.Name = "label3";
        this.label3.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.label3.Text = "\'A\' indicates absent and \'-\' indicates marks are not available.";
        this.label3.Top = 0.4375F;
        this.label3.Width = 3.75F;
        // 
        // pageHeader
        // 
        this.pageHeader.Controls.AddRange(new DataDynamics.ActiveReports.ARControl[] {
            this.txtStudentName,
            this.lblStudentName,
            this.txtClass,
            this.lblClass,
            this.lblSection,
            this.txtSection,
            this.lblRollNo,
            this.txtRollNo,
            this.label1,
            this.lblSubjectName,
            this.lblUnitTest1,
            this.lblUnitTest2,
            this.lblUnitTest3,
            this.lblUnitTest4,
            this.lblQuaterly,
            this.lblHalfYearly,
            this.lblAnnual,
            this.line5,
            this.line14,
            this.line4,
            this.line1,
            this.line2,
            this.line3,
            this.line6,
            this.line19,
            this.line7,
            this.line22,
            this.line23});
        this.pageHeader.Height = 1.875F;
        this.pageHeader.Name = "pageHeader";
        // 
        // txtStudentName
        // 
        this.txtStudentName.Border.BottomColor = System.Drawing.Color.Black;
        this.txtStudentName.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtStudentName.Border.LeftColor = System.Drawing.Color.Black;
        this.txtStudentName.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtStudentName.Border.RightColor = System.Drawing.Color.Black;
        this.txtStudentName.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtStudentName.Border.TopColor = System.Drawing.Color.Black;
        this.txtStudentName.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtStudentName.DataField = "studentname";
        this.txtStudentName.Height = 0.25F;
        this.txtStudentName.Left = 1.5F;
        this.txtStudentName.Name = "txtStudentName";
        this.txtStudentName.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.txtStudentName.Text = null;
        this.txtStudentName.Top = 0.5F;
        this.txtStudentName.Width = 3F;
        // 
        // lblStudentName
        // 
        this.lblStudentName.Border.BottomColor = System.Drawing.Color.Black;
        this.lblStudentName.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblStudentName.Border.LeftColor = System.Drawing.Color.Black;
        this.lblStudentName.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblStudentName.Border.RightColor = System.Drawing.Color.Black;
        this.lblStudentName.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblStudentName.Border.TopColor = System.Drawing.Color.Black;
        this.lblStudentName.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblStudentName.Height = 0.25F;
        this.lblStudentName.HyperLink = "";
        this.lblStudentName.Left = 0.1875F;
        this.lblStudentName.Name = "lblStudentName";
        this.lblStudentName.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.lblStudentName.Text = "StudentName: ";
        this.lblStudentName.Top = 0.5F;
        this.lblStudentName.Width = 1.3125F;
        // 
        // txtClass
        // 
        this.txtClass.Border.BottomColor = System.Drawing.Color.Black;
        this.txtClass.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtClass.Border.LeftColor = System.Drawing.Color.Black;
        this.txtClass.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtClass.Border.RightColor = System.Drawing.Color.Black;
        this.txtClass.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtClass.Border.TopColor = System.Drawing.Color.Black;
        this.txtClass.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtClass.DataField = "class";
        this.txtClass.Height = 0.25F;
        this.txtClass.Left = 1.5F;
        this.txtClass.Name = "txtClass";
        this.txtClass.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.txtClass.Text = null;
        this.txtClass.Top = 0.875F;
        this.txtClass.Width = 0.9375F;
        // 
        // lblClass
        // 
        this.lblClass.Border.BottomColor = System.Drawing.Color.Black;
        this.lblClass.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblClass.Border.LeftColor = System.Drawing.Color.Black;
        this.lblClass.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblClass.Border.RightColor = System.Drawing.Color.Black;
        this.lblClass.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblClass.Border.TopColor = System.Drawing.Color.Black;
        this.lblClass.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblClass.Height = 0.25F;
        this.lblClass.HyperLink = "";
        this.lblClass.Left = 0.1875F;
        this.lblClass.Name = "lblClass";
        this.lblClass.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.lblClass.Text = "Class             : ";
        this.lblClass.Top = 0.875F;
        this.lblClass.Width = 1.3125F;
        // 
        // lblSection
        // 
        this.lblSection.Border.BottomColor = System.Drawing.Color.Black;
        this.lblSection.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSection.Border.LeftColor = System.Drawing.Color.Black;
        this.lblSection.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSection.Border.RightColor = System.Drawing.Color.Black;
        this.lblSection.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSection.Border.TopColor = System.Drawing.Color.Black;
        this.lblSection.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSection.Height = 0.25F;
        this.lblSection.HyperLink = "";
        this.lblSection.Left = 5.4375F;
        this.lblSection.Name = "lblSection";
        this.lblSection.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.lblSection.Text = "Section : ";
        this.lblSection.Top = 0.875F;
        this.lblSection.Width = 0.8125F;
        // 
        // txtSection
        // 
        this.txtSection.Border.BottomColor = System.Drawing.Color.Black;
        this.txtSection.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSection.Border.LeftColor = System.Drawing.Color.Black;
        this.txtSection.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSection.Border.RightColor = System.Drawing.Color.Black;
        this.txtSection.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSection.Border.TopColor = System.Drawing.Color.Black;
        this.txtSection.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtSection.DataField = "section";
        this.txtSection.Height = 0.25F;
        this.txtSection.Left = 6.3125F;
        this.txtSection.Name = "txtSection";
        this.txtSection.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.txtSection.Text = null;
        this.txtSection.Top = 0.875F;
        this.txtSection.Width = 1.0625F;
        // 
        // lblRollNo
        // 
        this.lblRollNo.Border.BottomColor = System.Drawing.Color.Black;
        this.lblRollNo.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblRollNo.Border.LeftColor = System.Drawing.Color.Black;
        this.lblRollNo.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblRollNo.Border.RightColor = System.Drawing.Color.Black;
        this.lblRollNo.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblRollNo.Border.TopColor = System.Drawing.Color.Black;
        this.lblRollNo.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblRollNo.Height = 0.25F;
        this.lblRollNo.HyperLink = "";
        this.lblRollNo.Left = 5.5F;
        this.lblRollNo.Name = "lblRollNo";
        this.lblRollNo.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.lblRollNo.Text = "RollNo : ";
        this.lblRollNo.Top = 0.5F;
        this.lblRollNo.Width = 0.75F;
        // 
        // txtRollNo
        // 
        this.txtRollNo.Border.BottomColor = System.Drawing.Color.Black;
        this.txtRollNo.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtRollNo.Border.LeftColor = System.Drawing.Color.Black;
        this.txtRollNo.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtRollNo.Border.RightColor = System.Drawing.Color.Black;
        this.txtRollNo.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtRollNo.Border.TopColor = System.Drawing.Color.Black;
        this.txtRollNo.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.txtRollNo.DataField = "rollno";
        this.txtRollNo.Height = 0.25F;
        this.txtRollNo.Left = 6.3125F;
        this.txtRollNo.Name = "txtRollNo";
        this.txtRollNo.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.txtRollNo.Text = null;
        this.txtRollNo.Top = 0.5F;
        this.txtRollNo.Width = 1F;
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
        this.label1.Height = 0.25F;
        this.label1.HyperLink = "";
        this.label1.Left = 2.9375F;
        this.label1.Name = "label1";
        this.label1.Style = "ddo-char-set: 0; font-size: 9.75pt; ";
        this.label1.Text = "Progress Report";
        this.label1.Top = 0.0625F;
        this.label1.Width = 1.125F;
        // 
        // lblSubjectName
        // 
        this.lblSubjectName.Border.BottomColor = System.Drawing.Color.Black;
        this.lblSubjectName.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSubjectName.Border.LeftColor = System.Drawing.Color.Black;
        this.lblSubjectName.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSubjectName.Border.RightColor = System.Drawing.Color.Black;
        this.lblSubjectName.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSubjectName.Border.TopColor = System.Drawing.Color.Black;
        this.lblSubjectName.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblSubjectName.Height = 0.25F;
        this.lblSubjectName.HyperLink = "";
        this.lblSubjectName.Left = 0.0625F;
        this.lblSubjectName.Name = "lblSubjectName";
        this.lblSubjectName.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblSubjectName.Text = "SubjectName";
        this.lblSubjectName.Top = 1.625F;
        this.lblSubjectName.Width = 1.3125F;
        // 
        // lblUnitTest1
        // 
        this.lblUnitTest1.Border.BottomColor = System.Drawing.Color.Black;
        this.lblUnitTest1.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest1.Border.LeftColor = System.Drawing.Color.Black;
        this.lblUnitTest1.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest1.Border.RightColor = System.Drawing.Color.Black;
        this.lblUnitTest1.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest1.Border.TopColor = System.Drawing.Color.Black;
        this.lblUnitTest1.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest1.Height = 0.25F;
        this.lblUnitTest1.HyperLink = "";
        this.lblUnitTest1.Left = 1.0625F;
        this.lblUnitTest1.Name = "lblUnitTest1";
        this.lblUnitTest1.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblUnitTest1.Text = "UnitTest1";
        this.lblUnitTest1.Top = 1.625F;
        this.lblUnitTest1.Width = 0.6875F;
        // 
        // lblUnitTest2
        // 
        this.lblUnitTest2.Border.BottomColor = System.Drawing.Color.Black;
        this.lblUnitTest2.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest2.Border.LeftColor = System.Drawing.Color.Black;
        this.lblUnitTest2.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest2.Border.RightColor = System.Drawing.Color.Black;
        this.lblUnitTest2.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest2.Border.TopColor = System.Drawing.Color.Black;
        this.lblUnitTest2.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest2.Height = 0.25F;
        this.lblUnitTest2.HyperLink = "";
        this.lblUnitTest2.Left = 1.875F;
        this.lblUnitTest2.Name = "lblUnitTest2";
        this.lblUnitTest2.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblUnitTest2.Text = "UnitTest2";
        this.lblUnitTest2.Top = 1.625F;
        this.lblUnitTest2.Width = 0.688F;
        // 
        // lblUnitTest3
        // 
        this.lblUnitTest3.Border.BottomColor = System.Drawing.Color.Black;
        this.lblUnitTest3.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest3.Border.LeftColor = System.Drawing.Color.Black;
        this.lblUnitTest3.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest3.Border.RightColor = System.Drawing.Color.Black;
        this.lblUnitTest3.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest3.Border.TopColor = System.Drawing.Color.Black;
        this.lblUnitTest3.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest3.Height = 0.25F;
        this.lblUnitTest3.HyperLink = "";
        this.lblUnitTest3.Left = 2.6875F;
        this.lblUnitTest3.Name = "lblUnitTest3";
        this.lblUnitTest3.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblUnitTest3.Text = "UnitTest3";
        this.lblUnitTest3.Top = 1.625F;
        this.lblUnitTest3.Width = 0.688F;
        // 
        // lblUnitTest4
        // 
        this.lblUnitTest4.Border.BottomColor = System.Drawing.Color.Black;
        this.lblUnitTest4.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest4.Border.LeftColor = System.Drawing.Color.Black;
        this.lblUnitTest4.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest4.Border.RightColor = System.Drawing.Color.Black;
        this.lblUnitTest4.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest4.Border.TopColor = System.Drawing.Color.Black;
        this.lblUnitTest4.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblUnitTest4.Height = 0.25F;
        this.lblUnitTest4.HyperLink = "";
        this.lblUnitTest4.Left = 3.5625F;
        this.lblUnitTest4.Name = "lblUnitTest4";
        this.lblUnitTest4.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblUnitTest4.Text = "UnitTest4";
        this.lblUnitTest4.Top = 1.625F;
        this.lblUnitTest4.Width = 0.688F;
        // 
        // lblQuaterly
        // 
        this.lblQuaterly.Border.BottomColor = System.Drawing.Color.Black;
        this.lblQuaterly.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblQuaterly.Border.LeftColor = System.Drawing.Color.Black;
        this.lblQuaterly.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblQuaterly.Border.RightColor = System.Drawing.Color.Black;
        this.lblQuaterly.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblQuaterly.Border.TopColor = System.Drawing.Color.Black;
        this.lblQuaterly.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblQuaterly.Height = 0.25F;
        this.lblQuaterly.HyperLink = "";
        this.lblQuaterly.Left = 4.375F;
        this.lblQuaterly.Name = "lblQuaterly";
        this.lblQuaterly.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblQuaterly.Text = "Quaterly";
        this.lblQuaterly.Top = 1.625F;
        this.lblQuaterly.Width = 0.688F;
        // 
        // lblHalfYearly
        // 
        this.lblHalfYearly.Border.BottomColor = System.Drawing.Color.Black;
        this.lblHalfYearly.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblHalfYearly.Border.LeftColor = System.Drawing.Color.Black;
        this.lblHalfYearly.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblHalfYearly.Border.RightColor = System.Drawing.Color.Black;
        this.lblHalfYearly.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblHalfYearly.Border.TopColor = System.Drawing.Color.Black;
        this.lblHalfYearly.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblHalfYearly.Height = 0.25F;
        this.lblHalfYearly.HyperLink = "";
        this.lblHalfYearly.Left = 5.1875F;
        this.lblHalfYearly.Name = "lblHalfYearly";
        this.lblHalfYearly.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblHalfYearly.Text = "HalfYearly";
        this.lblHalfYearly.Top = 1.625F;
        this.lblHalfYearly.Width = 0.75F;
        // 
        // lblAnnual
        // 
        this.lblAnnual.Border.BottomColor = System.Drawing.Color.Black;
        this.lblAnnual.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblAnnual.Border.LeftColor = System.Drawing.Color.Black;
        this.lblAnnual.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblAnnual.Border.RightColor = System.Drawing.Color.Black;
        this.lblAnnual.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblAnnual.Border.TopColor = System.Drawing.Color.Black;
        this.lblAnnual.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.lblAnnual.Height = 0.25F;
        this.lblAnnual.HyperLink = "";
        this.lblAnnual.Left = 6.0625F;
        this.lblAnnual.Name = "lblAnnual";
        this.lblAnnual.Style = "ddo-char-set: 0; font-weight: bold; font-size: 9.75pt; font-family: Arial; ";
        this.lblAnnual.Text = "Annual";
        this.lblAnnual.Top = 1.625F;
        this.lblAnnual.Width = 0.5625F;
        // 
        // line5
        // 
        this.line5.Border.BottomColor = System.Drawing.Color.Black;
        this.line5.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line5.Border.LeftColor = System.Drawing.Color.Black;
        this.line5.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line5.Border.RightColor = System.Drawing.Color.Black;
        this.line5.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line5.Border.TopColor = System.Drawing.Color.Black;
        this.line5.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line5.Height = 0.25F;
        this.line5.Left = 2.625F;
        this.line5.LineWeight = 1F;
        this.line5.Name = "line5";
        this.line5.Top = 1.625F;
        this.line5.Width = 0F;
        this.line5.X1 = 2.625F;
        this.line5.X2 = 2.625F;
        this.line5.Y1 = 1.625F;
        this.line5.Y2 = 1.875F;
        // 
        // line14
        // 
        this.line14.Border.BottomColor = System.Drawing.Color.Black;
        this.line14.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line14.Border.LeftColor = System.Drawing.Color.Black;
        this.line14.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line14.Border.RightColor = System.Drawing.Color.Black;
        this.line14.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line14.Border.TopColor = System.Drawing.Color.Black;
        this.line14.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line14.Height = 0.25F;
        this.line14.Left = 3.5F;
        this.line14.LineWeight = 1F;
        this.line14.Name = "line14";
        this.line14.Top = 1.625F;
        this.line14.Width = 0F;
        this.line14.X1 = 3.5F;
        this.line14.X2 = 3.5F;
        this.line14.Y1 = 1.625F;
        this.line14.Y2 = 1.875F;
        // 
        // line4
        // 
        this.line4.Border.BottomColor = System.Drawing.Color.Black;
        this.line4.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line4.Border.LeftColor = System.Drawing.Color.Black;
        this.line4.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line4.Border.RightColor = System.Drawing.Color.Black;
        this.line4.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line4.Border.TopColor = System.Drawing.Color.Black;
        this.line4.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line4.Height = 0.25F;
        this.line4.Left = 4.3125F;
        this.line4.LineWeight = 1F;
        this.line4.Name = "line4";
        this.line4.Top = 1.625F;
        this.line4.Width = 0F;
        this.line4.X1 = 4.3125F;
        this.line4.X2 = 4.3125F;
        this.line4.Y1 = 1.625F;
        this.line4.Y2 = 1.875F;
        // 
        // line1
        // 
        this.line1.Border.BottomColor = System.Drawing.Color.Black;
        this.line1.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line1.Border.LeftColor = System.Drawing.Color.Black;
        this.line1.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line1.Border.RightColor = System.Drawing.Color.Black;
        this.line1.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line1.Border.TopColor = System.Drawing.Color.Black;
        this.line1.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line1.Height = 0.25F;
        this.line1.Left = 5.125F;
        this.line1.LineWeight = 1F;
        this.line1.Name = "line1";
        this.line1.Top = 1.625F;
        this.line1.Width = 0F;
        this.line1.X1 = 5.125F;
        this.line1.X2 = 5.125F;
        this.line1.Y1 = 1.625F;
        this.line1.Y2 = 1.875F;
        // 
        // line2
        // 
        this.line2.Border.BottomColor = System.Drawing.Color.Black;
        this.line2.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line2.Border.LeftColor = System.Drawing.Color.Black;
        this.line2.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line2.Border.RightColor = System.Drawing.Color.Black;
        this.line2.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line2.Border.TopColor = System.Drawing.Color.Black;
        this.line2.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line2.Height = 0.25F;
        this.line2.Left = 6F;
        this.line2.LineWeight = 1F;
        this.line2.Name = "line2";
        this.line2.Top = 1.625F;
        this.line2.Width = 0F;
        this.line2.X1 = 6F;
        this.line2.X2 = 6F;
        this.line2.Y1 = 1.625F;
        this.line2.Y2 = 1.875F;
        // 
        // line3
        // 
        this.line3.Border.BottomColor = System.Drawing.Color.Black;
        this.line3.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line3.Border.LeftColor = System.Drawing.Color.Black;
        this.line3.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line3.Border.RightColor = System.Drawing.Color.Black;
        this.line3.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line3.Border.TopColor = System.Drawing.Color.Black;
        this.line3.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line3.Height = 0.25F;
        this.line3.Left = 1.8125F;
        this.line3.LineWeight = 1F;
        this.line3.Name = "line3";
        this.line3.Top = 1.625F;
        this.line3.Width = 0F;
        this.line3.X1 = 1.8125F;
        this.line3.X2 = 1.8125F;
        this.line3.Y1 = 1.625F;
        this.line3.Y2 = 1.875F;
        // 
        // line6
        // 
        this.line6.Border.BottomColor = System.Drawing.Color.Black;
        this.line6.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line6.Border.LeftColor = System.Drawing.Color.Black;
        this.line6.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line6.Border.RightColor = System.Drawing.Color.Black;
        this.line6.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line6.Border.TopColor = System.Drawing.Color.Black;
        this.line6.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line6.Height = 0.25F;
        this.line6.Left = 1F;
        this.line6.LineWeight = 1F;
        this.line6.Name = "line6";
        this.line6.Top = 1.625F;
        this.line6.Width = 0F;
        this.line6.X1 = 1F;
        this.line6.X2 = 1F;
        this.line6.Y1 = 1.625F;
        this.line6.Y2 = 1.875F;
        // 
        // line19
        // 
        this.line19.Border.BottomColor = System.Drawing.Color.Black;
        this.line19.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line19.Border.LeftColor = System.Drawing.Color.Black;
        this.line19.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line19.Border.RightColor = System.Drawing.Color.Black;
        this.line19.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line19.Border.TopColor = System.Drawing.Color.Black;
        this.line19.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line19.Height = 0F;
        this.line19.Left = 0.0625F;
        this.line19.LineWeight = 1F;
        this.line19.Name = "line19";
        this.line19.Top = 1.875F;
        this.line19.Width = 6.75F;
        this.line19.X1 = 0.0625F;
        this.line19.X2 = 6.8125F;
        this.line19.Y1 = 1.875F;
        this.line19.Y2 = 1.875F;
        // 
        // line7
        // 
        this.line7.Border.BottomColor = System.Drawing.Color.Black;
        this.line7.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line7.Border.LeftColor = System.Drawing.Color.Black;
        this.line7.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line7.Border.RightColor = System.Drawing.Color.Black;
        this.line7.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line7.Border.TopColor = System.Drawing.Color.Black;
        this.line7.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line7.Height = 0F;
        this.line7.Left = 0.0625F;
        this.line7.LineWeight = 1F;
        this.line7.Name = "line7";
        this.line7.Top = 1.625F;
        this.line7.Width = 6.75F;
        this.line7.X1 = 0.0625F;
        this.line7.X2 = 6.8125F;
        this.line7.Y1 = 1.625F;
        this.line7.Y2 = 1.625F;
        // 
        // line22
        // 
        this.line22.Border.BottomColor = System.Drawing.Color.Black;
        this.line22.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line22.Border.LeftColor = System.Drawing.Color.Black;
        this.line22.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line22.Border.RightColor = System.Drawing.Color.Black;
        this.line22.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line22.Border.TopColor = System.Drawing.Color.Black;
        this.line22.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line22.Height = 0.25F;
        this.line22.Left = 0.0625F;
        this.line22.LineWeight = 1F;
        this.line22.Name = "line22";
        this.line22.Top = 1.625F;
        this.line22.Width = 0F;
        this.line22.X1 = 0.0625F;
        this.line22.X2 = 0.0625F;
        this.line22.Y1 = 1.625F;
        this.line22.Y2 = 1.875F;
        // 
        // line23
        // 
        this.line23.Border.BottomColor = System.Drawing.Color.Black;
        this.line23.Border.BottomStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line23.Border.LeftColor = System.Drawing.Color.Black;
        this.line23.Border.LeftStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line23.Border.RightColor = System.Drawing.Color.Black;
        this.line23.Border.RightStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line23.Border.TopColor = System.Drawing.Color.Black;
        this.line23.Border.TopStyle = DataDynamics.ActiveReports.BorderLineStyle.None;
        this.line23.Height = 0.25F;
        this.line23.Left = 6.8125F;
        this.line23.LineWeight = 1F;
        this.line23.Name = "line23";
        this.line23.Top = 1.625F;
        this.line23.Width = 0F;
        this.line23.X1 = 6.8125F;
        this.line23.X2 = 6.8125F;
        this.line23.Y1 = 1.625F;
        this.line23.Y2 = 1.875F;
        // 
        // pageFooter
        // 
        this.pageFooter.Height = 0F;
        this.pageFooter.Name = "pageFooter";
        // 
        // FinalMarksReport
        // 
        this.PageSettings.Margins.Bottom = 0.5F;
        this.PageSettings.Margins.Left = 0.5F;
        this.PageSettings.Margins.Right = 0.5F;
        this.PageSettings.Margins.Top = 0.5F;
        this.PageSettings.PaperHeight = 11F;
        this.PageSettings.PaperWidth = 8.5F;
        this.PrintWidth = 7.510417F;
        this.Sections.Add(this.reportHeader1);
        this.Sections.Add(this.pageHeader);
        this.Sections.Add(this.detail);
        this.Sections.Add(this.pageFooter);
        this.Sections.Add(this.reportFooter1);
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-family: Arial; font-style: normal; text-decoration: none; font-weight: norma" +
                    "l; font-size: 10pt; color: Black; ", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-size: 16pt; font-weight: bold; ", "Heading1", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-family: Times New Roman; font-size: 14pt; font-weight: bold; font-style: ita" +
                    "lic; ", "Heading2", "Normal"));
        this.StyleSheet.Add(new DDCssLib.StyleSheetRule("font-size: 13pt; font-weight: bold; ", "Heading3", "Normal"));
        this.ReportStart += new System.EventHandler(this.FinalMarksReport_ReportStart);
        ((System.ComponentModel.ISupportInitialize)(this.txtSubjectTelugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt1Telugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt2Telugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt3Telugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUt4Telugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtQtrlyTelugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtHflyTelugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtAnlTelugu)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT1Total)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label2)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT2Total)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT3Total)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtUT4Total)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtQtlyTotal)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtHflyTotal)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtAnlTotal)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label3)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtStudentName)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblStudentName)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtClass)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblClass)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblSection)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtSection)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblRollNo)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.txtRollNo)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.label1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblSubjectName)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest1)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest2)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest3)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblUnitTest4)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblQuaterly)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblHalfYearly)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this.lblAnnual)).EndInit();
        ((System.ComponentModel.ISupportInitialize)(this)).EndInit();

	}
	#endregion

    private void pageHeader_Format(object sender, EventArgs e)
    {

    }
    
   

   

    private void FinalMarksReport_ReportStart(object sender, EventArgs e)
    {

    }


    private void reportFooter1_Format_1(object sender, EventArgs e)
    {
        if (flagUnitTest1)
        {
            txtUT1Total.Text = unitTest1Total.ToString();
        }
        else if (flagUnitTest1 == false && countUt1 == 6)
        {
            txtUT1Total.Text = "";
        }
        if (flagUnitTest2)
        {
            txtUT2Total.Text = unitTest2Total.ToString();
        }
        else if (flagUnitTest2 == false && countUt2 == 6)
        {
            txtUT2Total.Text = "";
        }

        if (flagUnitTest3)
        {
            txtUT3Total.Text = unitTest3Total.ToString();
        }
        else if (flagUnitTest3 == false && countUt3 == 6)
        {
            txtUT3Total.Text = "";
        }
        if (flagUnitTest4)
        {
            txtUT4Total.Text = unitTest4Total.ToString();
        }
        else if (flagUnitTest4 == false && countUt4 == 6)
        {
            txtUT4Total.Text = "";
        }
        if (flagQuaterly)
        {
            txtQtlyTotal.Text = quaterlyTotal.ToString();
        }
        else if (flagQuaterly == false && countQtrly == 6)
        {
            txtQtlyTotal.Text = "";
        }
        if (flagHalfYearly)
        {
            txtHflyTotal.Text = halfYearlyTotal.ToString();
        }
        else if (flagHalfYearly == false && countHfly == 6)
        {
            txtHflyTotal.Text = "";
        }
        if (flagAnnual)
        {
            txtAnlTotal.Text = annualTotal.ToString();
        }
        else if (flagAnnual == false && countAnnual == 6)
        {
            txtAnlTotal.Text = "";
        }
        
    }
    bool flagUnitTest1, flagUnitTest2, flagUnitTest3, flagUnitTest4,flagQuaterly,flagHalfYearly,flagAnnual;
    private void detail_Format(object sender, EventArgs e)
    {
        if (!string.IsNullOrEmpty(txtUt1Telugu.Text) )
        {
            if (txtUt1Telugu.Text.Trim().ToLower() != "absent" && txtUt1Telugu.Text.Trim() != "-")
            {
                flagUnitTest1 = true;
                unitTest1Total += Convert.ToDecimal(txtUt1Telugu.Text);
            }
            else if (txtUt1Telugu.Text.Trim() == "-")
            {
                countUt1 = countUt1 + 1;
                if (countUt1 == 6)
                {
                    flagUnitTest1 = false;
                    txtUt1Telugu.Text = "";
                }

            }
        }
        if (!string.IsNullOrEmpty(txtUt2Telugu.Text))
        {
            if (txtUt2Telugu.Text.Trim().ToLower() != "absent" && txtUt2Telugu.Text.Trim() != "-")
            {
                flagUnitTest2 = true;
                unitTest2Total += Convert.ToDecimal(txtUt2Telugu.Text);
            }
            else if (txtUt2Telugu.Text.Trim() == "-")
            {
                countUt2 = countUt2 + 1;
                if (countUt2 == 6)
                {
                    flagUnitTest2 = false;
                    txtUt2Telugu.Text = "";
                }

            }
        }
        if (!string.IsNullOrEmpty(txtUt3Telugu.Text))
        {
            if (txtUt3Telugu.Text.Trim().ToLower() != "absent"  && txtUt3Telugu.Text.Trim() != "-")
            {
                flagUnitTest3 = true;
                unitTest3Total += Convert.ToDecimal(txtUt3Telugu.Text); 
            }
            else if (txtUt3Telugu.Text.Trim() == "-")
            {
                countUt3 = countUt3 + 1;
                if (countUt3 == 6)
                {
                    flagUnitTest3 = false;
                    txtUt3Telugu.Text = "";
                }

            }
        }
        if (!string.IsNullOrEmpty(txtUt4Telugu.Text))
        {
            if (txtUt4Telugu.Text.Trim().ToLower() != "absent" &&  txtUt4Telugu.Text.Trim() != "-")
            {
                flagUnitTest4 = true;
                unitTest4Total += Convert.ToDecimal(txtUt4Telugu.Text);
            }
            else if (txtUt4Telugu.Text.Trim() == "-")
            {
                countUt4 = countUt4 + 1;
                if (countUt4 == 6)
                {
                    flagUnitTest4 = false;
                    txtUt4Telugu.Text = "";
                }
           
            }
        }

        if (!string.IsNullOrEmpty(txtQtrlyTelugu.Text))
        {
            if (txtQtrlyTelugu.Text.Trim().ToLower() != "absent" && txtQtrlyTelugu.Text.Trim() != "-")
            {
                flagQuaterly = true;
                quaterlyTotal += Convert.ToDecimal(txtQtrlyTelugu.Text);
            }
            else if (txtQtrlyTelugu.Text.Trim() == "-")
            {
                countQtrly = countQtrly + 1;
                if (countQtrly == 6)
                {
                    flagQuaterly = false;
                    txtQtrlyTelugu.Text = "";
                }

            }
        }
        if (!string.IsNullOrEmpty(txtHflyTelugu.Text))
        {
            if (txtHflyTelugu.Text.Trim().ToLower() != "absent" && txtHflyTelugu.Text.Trim() != "-")
            {
                flagHalfYearly = true;
                halfYearlyTotal += Convert.ToDecimal(txtHflyTelugu.Text);
            }
            else if (txtHflyTelugu.Text.Trim() == "-")
            {
                countHfly = countHfly + 1;
                if (countHfly == 6)
                {
                    flagHalfYearly = false;
                    txtHflyTelugu.Text = "";
                }

            }
        }
        if (!string.IsNullOrEmpty(txtAnlTelugu.Text))
        {
            if (txtAnlTelugu.Text.Trim().ToLower() != "absent" && txtAnlTelugu.Text.Trim() != "-")
            {
                flagAnnual = true;
                annualTotal += Convert.ToDecimal(txtAnlTelugu.Text);
            }
            else if (txtAnlTelugu.Text.Trim() == "-")
            {
                countAnnual = countAnnual + 1;
                if (countAnnual == 6)
                {
                    flagAnnual = false;
                    txtAnlTelugu.Text = "";
                }

            }
        }
    }

}
