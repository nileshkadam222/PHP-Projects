<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Sign Up for new user.aspx.cs" Inherits="Login" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
   <table bgcolor="#C4FFFF" >
   
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
       <asp:Label ID="lblconformpassword" runat="server" Text="Conform Password"></asp:Label></td>
   <td>
       <asp:TextBox ID="txtconformpassword" runat="server" TextMode="Password" 
           Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
           ControlToValidate="txtconformpassword" Display="Dynamic" 
           ErrorMessage="Conform Password is Required">*</asp:RequiredFieldValidator>
       <asp:CompareValidator ID="CompareValidator1" runat="server" 
           ControlToCompare="txtpassword" ControlToValidate="txtconformpassword" 
           Display="Dynamic" ErrorMessage="Password and Conform Password is not Match.">*</asp:CompareValidator>
       </td>
   </tr>
   
   
   
   <tr>
   <td>
       <asp:Label ID="lblque" runat="server" Text="Sequrity Quation"></asp:Label>
       </td>
   <td>
       <asp:TextBox ID="txtque" runat="server" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
           ControlToValidate="txtque" Display="Dynamic" 
           ErrorMessage="Sequrity Quation is Required">*</asp:RequiredFieldValidator>
       </td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblans" runat="server" Text="Sequrity Answer"></asp:Label>
       </td>
   <td>
       <asp:TextBox ID="txtans" runat="server" Width="175px"></asp:TextBox>
       <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" 
           ControlToValidate="txtans" Display="Dynamic" 
           ErrorMessage="Sequrity Answer is Required">*</asp:RequiredFieldValidator>
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
       <asp:Label ID="Label2" runat="server" 
           Text="Have You not username Password???????Then" Font-Bold="True"></asp:Label>
       <asp:HyperLink ID="HyperLink1" runat="server" 
           NavigateUrl="~/Request_for_Account.aspx" Font-Bold="True">Click Here</asp:HyperLink>
       </td>
   </tr>
   
   
   </table>
   
</asp:Content>

