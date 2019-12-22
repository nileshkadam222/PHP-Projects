<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Main_Payment.aspx.cs" Inherits="UserLogin_Main_Payment" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
   <table bgcolor="#B9FFFF">
   
   <tr>
   <td colspan ="2" align="center" bgcolor="Black">
       <asp:Label ID="lblheader" runat="server" Text="Payment" Font-Bold="True" 
           ForeColor="White"></asp:Label></td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblreservation" runat="server" Text="User Name"></asp:Label></td>
   <td>
       <asp:TextBox ID="txtusername" runat="server" ReadOnly="True"></asp:TextBox></td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="Label1" runat="server" Text="Customer Name"></asp:Label></td>
   <td>
       <asp:TextBox ID="txtcustomername" runat="server"></asp:TextBox></td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblbalanceinaccount" runat="server" Text="Balance In Account"></asp:Label></td>
   <td>
       <asp:TextBox ID="txt_balance_in_account" runat="server"></asp:TextBox></td>
   </tr>
   
   <tr>
   <td>
       <asp:Label ID="lblticketbill" runat="server" Text="Payment to Bill"></asp:Label></td>
   <td>
       <asp:TextBox ID="txt_payment_to_bill" runat="server"></asp:TextBox></td>
   </tr>
   
   
   
   <tr>
   <td colspan ="2" bgcolor="Black">
       <asp:Button ID="btnpayment" runat="server" Text="Proceed" Font-Bold="False" 
           onclick="btnpayment_Click1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<asp:Button ID="btncancel"
           runat="server" Text="Cancel" /></td>
   </tr>
   
   <tr>
   <td colspan ="2" align="center">
       <asp:Label ID="lblduplicate" runat="server" Font-Bold="True" ForeColor="Red"></asp:Label></td>
   </tr>
   
   
   </table> 
</asp:Content>

