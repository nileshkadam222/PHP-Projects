<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Conform.aspx.cs" Inherits="UserLogin_Conform" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
    <table bgcolor="#B9FFFF">
    <tr>
    <td>
        <asp:Label ID="Label1" runat="server" Text="Booking Successfully"></asp:Label></td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label2" runat="server" Text="Your Ticket Id"></asp:Label>&nbsp; :
        <asp:Label ID="lbltId" runat="server"></asp:Label>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Button ID="Button1" runat="server" Text="Print Ticket" 
            onclick="Button1_Click" PostBackUrl="~/PrintTicket.aspx" /></td>
    </tr>
    </table>
</asp:Content>

