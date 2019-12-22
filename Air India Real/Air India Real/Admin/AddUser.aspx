<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="AddUser.aspx.cs" Inherits="Admin_AddUser" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
  
  <table bgcolor="#C4FFFF" align="center">
   
   <tr >
   <td colspan ="2" align="center" bgcolor="Black">
       <asp:Label ID="Label1" runat="server" Text="Sign Up For Your New Account" 
           Font-Bold="True" ForeColor="White"></asp:Label></td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblusername" runat="server" Text="User Name"></asp:Label></td>
   <td>
       <asp:TextBox ID="txtuname" runat="server" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
           ControlToValidate="txtuname" Display="Dynamic" 
           ErrorMessage="User Name is Required">*</asp:RequiredFieldValidator>
       </td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblpassword" runat="server" Text="Password"></asp:Label></td>
   <td>
       <asp:TextBox ID="txtpassword" runat="server" TextMode="Password" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
           ControlToValidate="txtpassword" Display="Dynamic" 
           ErrorMessage="Password is Required">*</asp:RequiredFieldValidator>
       </td>
   </tr>
   
   
   
   <tr>
   <td>
       <asp:Label ID="lblemail" runat="server" Text="E-mail"></asp:Label>
       </td>
   <td>
       <asp:TextBox ID="txtemail" runat="server" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
           ControlToValidate="txtemail" Display="Dynamic" 
           ErrorMessage="E-mail is Required">*</asp:RequiredFieldValidator>
       <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" 
           ControlToValidate="txtemail" ErrorMessage="Enter Appropriate E-mail Id" 
           ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">*</asp:RegularExpressionValidator>
       </td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblque" runat="server" Text="Balance"></asp:Label>
       </td>
   <td>
       <asp:TextBox ID="txtbalance" runat="server" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
           ControlToValidate="txtbalance" Display="Dynamic" 
           ErrorMessage="Sequrity Quation is Required">*</asp:RequiredFieldValidator>
       </td>
   </tr>
   
   
   <tr>
   <td colspan ="2">
       <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
           ShowMessageBox="True" ShowSummary="False" />
       </td>
   </tr>
   
   <tr>
   <td bgcolor="Black" colspan ="2">
       &nbsp;<asp:Button ID="btncreateuser" runat="server" Text="Create User" 
           onclick="btncreateuser_Click" />
   
       &nbsp;&nbsp;&nbsp;
   
       <asp:Button ID="btncancel" runat="server" Text="Cancel" 
           CausesValidation="False" onclick="btncancel_Click" />
       </td>
   </tr>
   
   <tr>
   <td colspan ="2" align="center">
       <asp:Label ID="lblDuplicate" runat="server" Text=""></asp:Label>
       <br />
       </td>
   </tr>
   
   
   </table>
  
  
</asp:Content>

