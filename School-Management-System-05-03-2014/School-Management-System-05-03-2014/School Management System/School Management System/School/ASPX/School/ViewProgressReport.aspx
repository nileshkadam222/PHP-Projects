<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ViewProgressReport.aspx.cs" Inherits="ViewProgressReport" %>

<%@ Register Assembly="Microsoft.ReportViewer.WebForms, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a"
    Namespace="Microsoft.Reporting.WebForms" TagPrefix="rsweb" %>
   
   <%@ Register Assembly="ActiveReports.Web, Version=5.2.0.397, Culture=neutral, PublicKeyToken=cc4967777c49a3ff"
    Namespace="DataDynamics.ActiveReports.Web" TagPrefix="ActiveReportsWeb" %> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
    <link href="stylesheet.css" rel="stylesheet" runat="server" />  
</head>
<body style="text-align: justify">
    <form id="form1" runat="server">
    <div>
        <asp:Label ID="Label2" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label3" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label4" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label5" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label6" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label7" runat="server" Text="Label" Visible="False"></asp:Label>
        <asp:Label ID="Label8" runat="server" Text="Label" Visible="False"></asp:Label>
       <asp:Label ID="Label1" runat="server" Text="Label" Visible="False"></asp:Label></div>
     
   <div>
   <center>
      <fieldset style="width: 684px; height: 94px"><legend><span style="color: #ffffff">StudentDetails</span></legend>
   <table style="width: 630px; height: 49px">
   <tr>
   <td style="height: 21px; text-align: left; width: 405px;">
    <asp:Label ID="lblStudentName" runat="server" ForeColor="White" Font-Size="Larger" Width="395px"></asp:Label>
       </td>
   <td style="height: 21px; text-align: left">
       <asp:Label ID="lblStudentRollNo" runat="server" ForeColor="White" Font-Size="Larger"></asp:Label></td> 
   </tr>
   <tr>
   <td style="height: 23px; width: 405px; text-align: left;">

       <asp:Label ID="lblClass"  runat="server" ForeColor="White" Font-Size="Larger" Width="301px"></asp:Label>
       
      </td>
      <td style="text-align: left">
   <asp:Label ID="lblSection"  runat="server" ForeColor="White" Font-Size="Larger" Width="88px"></asp:Label>&nbsp;</td>
  
   <td style="height: 23px; text-align: left">
       &nbsp;</td>
   </tr>
   </table>

   </fieldset>
   
      </center>
   </div>
   
   <div>
<center>
<fieldset style="width: 692px; height: 257px"><legend><span style="color: #ffffff">Marks Details</span></legend>
   <table>
   <tr>
   <td style="height: 154px">

 <asp:GridView ID="gvStudentMarks" OnRowCommand="gvStudentMarks_RowCommand" BackColor="White" BorderStyle="None" BorderWidth="1px" CellPadding="4" CellSpacing="2" runat="server" ShowFooter="True" PageSize="5" AutoGenerateColumns="false" onrowdatabound="gvStudentMarks_RowDataBound">
  <Columns>
  
   <asp:TemplateField HeaderText="Subject Name">
 <ItemTemplate>
<asp:Label ID="lblSubjectName"  runat="server" Text='<%#Eval("subjectname") %>' ForeColor="#ffffff" Font-Bold="true"></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Left" BackColor="#53B1CC" />
   <FooterStyle HorizontalAlign="Left" BackColor="#53B1CC" ForeColor="White" />
    <FooterTemplate >   
     Totals
  </FooterTemplate>
  </asp:TemplateField>
  
  <asp:TemplateField HeaderText="Unit Test1">
 <ItemTemplate>
<asp:Label ID="lblUnitTest1"  runat="server" Text='<%#Eval("UnitTest1") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
    <FooterTemplate>
  <asp:Label ID="lblTotalUnitTest1" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  
  <asp:TemplateField HeaderText="Unit Test2">
 <ItemTemplate>
<asp:Label ID="lblUnitTest2"  runat="server" Text='<%#Eval("UnitTest2") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
    <FooterTemplate>
  <asp:Label ID="lblTotalUnitTest2" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  
  <asp:TemplateField HeaderText="Unit Test3">
 <ItemTemplate>
<asp:Label ID="lblUnitTest3"  runat="server" Text='<%#Eval("UnitTest3") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
    <FooterTemplate>
  <asp:Label ID="lblTotalUnitTest3" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  <asp:TemplateField HeaderText="Unit Test4">
 <ItemTemplate>
<asp:Label ID="lblUnitTest4"  runat="server" Text='<%#Eval("UnitTest4") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
    <FooterTemplate>
  <asp:Label ID="lblTotalUnitTest4" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  
  <asp:TemplateField HeaderText="Quaterly">
 <ItemTemplate>
<asp:Label ID="lblQuaterly"  runat="server" Text='<%#Eval("Quaterly") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
   <FooterTemplate>
  <asp:Label ID="lblTotalQuaterly" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  
  <asp:TemplateField HeaderText="Half Yearly">
 <ItemTemplate>
<asp:Label ID="lblHalfYearly"  runat="server" Text='<%#Eval("HalfYearly") %>'></asp:Label>
 </ItemTemplate>
      <ItemStyle HorizontalAlign="Center" />
  <FooterTemplate>
  <asp:Label ID="lblTotalHalfYearly" runat="server" ></asp:Label>
  </FooterTemplate>
  </asp:TemplateField>
  
    <asp:TemplateField HeaderText="Annual">
 <ItemTemplate>
<asp:Label ID="lblAnnual"  runat="server" Text='<%#Eval("Annual") %>'></asp:Label>
 </ItemTemplate>
        <ItemStyle HorizontalAlign="Center" />
<FooterTemplate>
<asp:Label ID="lblTotalAnnual" runat="server"  ></asp:Label>
</FooterTemplate>
 </asp:TemplateField>
 
  
  
  
 

  
  </Columns>
       <RowStyle HorizontalAlign="Left" BackColor="SeaShell" />
       <FooterStyle BackColor="SeaShell" ForeColor="Black" HorizontalAlign="Center" VerticalAlign="Middle" Font-Bold="True" />
       <PagerStyle BackColor="White" ForeColor="Black" HorizontalAlign="Right" />
       <SelectedRowStyle BackColor="#CC3333" Font-Bold="True" ForeColor="White" />
       <HeaderStyle BackColor="#13586C" Font-Bold="True" ForeColor="White" />
  
  
   </asp:GridView>
   </td>
   </tr>
   </table>
   </fieldset>
   </center> 
       
<center>
   <table>
   <tr>
   <td style="height: 24px">
        <asp:Button ID="btnGenerateReport" runat="server" Text="Generate Report" BackColor="MediumTurquoise" CssClass="button" OnClick="btnGenerateReport_Click" />
   </td>
   <td style="height: 24px">
    <asp:Button ID="btnClose" runat="server" BackColor="MediumTurquoise" CssClass="button" Text="Close" PostBackUrl="~/ViewMarks.aspx" />
   </td>
   </tr>
      
   </table>
   </center> 
   </div> 
  
     <div>
      <center>
         <table style="text-align: center">
   <tr>
   <td>
   <asp:Label ID="lblGeneral" ForeColor="White" Text="'A' indicates absent and '-' indicates marks are not available" runat="server" ></asp:Label>
   </td>
   </tr>
   
   </table></center>


   </div>
        
    </form>
</body>
</html>
