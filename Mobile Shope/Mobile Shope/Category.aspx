<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Category.aspx.cs" Inherits="category" Title="Mobile Shope - Category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
     <p style="color: #FF0000">The MobileStore is India's largest telecom retailer, with over 1300 Company Owned - Company Operated stores, spread across 200 cities. You can find us at high streets, prime malls and as standalone stores in your neighborhood. So, select your city. Right away!</p>
        <h2 style="color: #FF0000">Search City&nbsp;&nbsp;&nbsp; </h2>
        <h2 style="color: #FF0000">
         <asp:TextBox ID="TextBox1" runat="server" ontextchanged="TextBox1_TextChanged"></asp:TextBox>
        </h2>
     <p style="color: #FF0000; font-size: 20px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
         or </p>
     <p style="color: #FF0000; font-size: 20px; font-weight: bold;">pincode search</p>
        <br />
           <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>&nbsp;&nbsp;
            <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Search" />
        </p>
     <p></p>
</asp:Content>

