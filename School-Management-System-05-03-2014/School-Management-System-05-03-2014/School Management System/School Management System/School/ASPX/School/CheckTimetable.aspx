<%@ Page Language="C#" AutoEventWireup="true" CodeFile="CheckTimetable.aspx.cs" Inherits="CheckTimetable" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="stylesheet.css" runat="server" rel="stylesheet" /> 
   <script type="text/javascript" language="javascript" >
   function ValidateClassAndSection()
   {
   var Class=document.getElementById('ddlClass').value;
   var section=document.getElementById('ddlSection').value;
   
   if(Class !="--Select--" || section !="--Select--")
   {
   
   if(Class =="--Select--" && section !="--Select--")
   {
   alert('Please Select Class');
   return false;
   }
   if(Class !="--Select--" && section =="--Select--")
   {
   alert('Please Select Section');
   return false;
   }
   
   }
   else   
   return true;
   
   }
   function CancelButton()
   {
   document.getElementById('ddlClass').value ="--Select--";
   document.getElementById('ddlSection').value ="--Select--";
   document.getElementById('ddlExamtype').value ="--Select--";
   }
   
   </script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
   <center>
       &nbsp;<fieldset style="width: 447px; height: 81px" >
    <table>
   <tr>
   <td>
       <span style="color: #ffffff">
     Class</span>
   </td>
   <td>
   <asp:DropDownList ID="ddlClass" runat="server" AutoPostBack="True"></asp:DropDownList>
   </td>
   <td>
       <span style="color: #ffffff"><span style="color: #000000"></span>Section</span>
   </td>
   <td>
   <asp:DropDownList ID="ddlSection" runat="server" AutoPostBack="True" ></asp:DropDownList>
   </td>
   <td>
    <span style="color: #ffffff">
   Examtype </span>
   </td>
   <td>
   <asp:DropDownList ID="ddlExamtype" runat="server" AutoPostBack="True" >
       <asp:ListItem>--Select--</asp:ListItem>
       <asp:ListItem>Unit Test1</asp:ListItem>
       <asp:ListItem>Unit Test2</asp:ListItem>
       <asp:ListItem>Unit Test3</asp:ListItem>
       <asp:ListItem>Unit Test4</asp:ListItem>
       <asp:ListItem>Quaterly</asp:ListItem>
       <asp:ListItem>Half Yearly</asp:ListItem>
       <asp:ListItem>Annual</asp:ListItem>
   </asp:DropDownList>
   </td>
   </tr>
    </table>
   <table>
   <tr>
 
   <td>
   <asp:Button ID="btnSearch" Text="Search" runat="server" CssClass="button" OnClientClick="javascript:return ValidateClassAndSection()"
    OnClick="btnSearch_Click" />
   </td>
   <td>
   <asp:Button ID="btnCancel" runat="Server" Text="Cancel" CssClass="button" OnClientClick="javascript:return CancelButton()" OnClick="btnCancel_Click" />
   </td>
   <td>
   <asp:Button ID="Button1" runat="Server" Text="Close" CssClass="button" PostBackUrl="~/examdetails.aspx"/>
   </td>
   </tr>
   </table> 
   </fieldset>
   <fieldset style="width: 644px; height: 248px"><legend><span style="color: #ffffff"><strong>
     TimeTable</strong></span></legend>
   <table style="width: 562px; height: 186px">
   <tr>
   <td style="height: 254px" valign="baseline">
   <asp:GridView ID="gvTimetable" runat="server" ForeColor="white" AutoGenerateColumns="false" AllowPaging="True" OnPageIndexChanging="gvTimetable_PageIndexChanging" PageSize="5" CellPadding="5" CellSpacing="1" OnSelectedIndexChanged="gvTimetable_SelectedIndexChanged" Width="641px">
   <Columns>
   <asp:TemplateField HeaderText="Telugu">
   <ItemTemplate>
   <asp:Label ID="lblTelugu" runat="server" Text='<%#Eval("telugu") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
   <asp:TemplateField HeaderText="Hindi">
   <ItemTemplate>
   <asp:Label ID="lblHindi" runat="server" Text='<%#Eval("hindi") %>'> </asp:Label>

   </ItemTemplate>
   </asp:TemplateField>
   
   <asp:TemplateField HeaderText="English">
   <ItemTemplate>
   <asp:Label ID="lblEnglish" runat="server" Text='<%#Eval("english") %>'> </asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
   <asp:TemplateField HeaderText="Maths">
   <ItemTemplate>
   <asp:Label ID="lblMaths" runat="server" Text='<%#Eval("maths") %>'> </asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
     <asp:TemplateField HeaderText="Science">
   <ItemTemplate>
   <asp:Label ID="lblScience" runat="server" Text='<%#Eval("science") %>'> </asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
     <asp:TemplateField HeaderText="Social">
   <ItemTemplate>
   <asp:Label ID="lblSocial" runat="server" Text='<%#Eval("social") %>'> </asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
    <asp:TemplateField HeaderText="Class">
   <ItemTemplate>
   <asp:Label ID="lblClass" runat="server" Text='<%#Eval("class") %>'> </asp:Label>
   </ItemTemplate>
   <ItemStyle HorizontalAlign="center" />
   </asp:TemplateField>
   
   <asp:TemplateField HeaderText="Section">
   <ItemTemplate>
   <asp:Label ID="lblSection" runat="server" Text='<%#Eval("section") %>'> </asp:Label>
   </ItemTemplate>
      <ItemStyle HorizontalAlign="center" />
   </asp:TemplateField>
   
     <asp:TemplateField HeaderText="ExamType">
   <ItemTemplate>
   <asp:Label ID="lblExamType" runat="server" Text='<%#Eval("examtype") %>'> </asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   </Columns>
       <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PageButtonCount="5"
           PreviousPageText="" />
       <RowStyle BackColor="Linen" ForeColor="Black" HorizontalAlign="Left" />
       <HeaderStyle BackColor="Black" />
       <PagerStyle HorizontalAlign="Center" />
   </asp:GridView>
   
   
   </td>
   </tr>
   </table>
   </fieldset>
   </center> 
   
    </div>
    </form>
</body>
</html>
