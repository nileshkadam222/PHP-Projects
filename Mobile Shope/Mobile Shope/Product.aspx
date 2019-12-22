<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Product.aspx.cs" Inherits="product" Title="Mobile Shope - Product" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
     <asp:Panel ID="Panel1" runat="server">
              <p style="padding-left:20px;font-family: Algerian; font-size: x-large; font-style: italic; color: #03A5C7; text-decoration: underline;">
                Select Company :</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=1">
                        <asp:ImageButton ID="imgnokia" runat="server"  Height="140px" Width="260px" 
                        ImageUrl="~/images/images (1).jpg" />
                 </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=2">
                        <asp:ImageButton ID="imgsamsung" runat="server" Height="140px" Width="260px" ImageUrl="~/images/images (2).jpg"/>
                </a>
            <br /><br /><br />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=3">
                    <asp:ImageButton ID="imgblackberry" runat="server" Height="140px" ImageUrl="~/images/images (3).jpg" Width="260px" />
                </a>
           <br /><br /><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=4">
                    <asp:ImageButton ID="imgspice" runat="server" Height="140px" ImageUrl="~/images/images (4).jpg"  
                    Width="260px" />
                </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=5">
                    <asp:ImageButton ID="imgapple" runat="server" Height="144px" Width="260px" ImageUrl="~/images/images (6).jpg" /> 
                </a>   
           <br /><br /><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=6">
                    <asp:ImageButton ID="imgmotorola" runat="server" Height="140px" ImageUrl="~/images/images (7).jpg" Width="260px" />
                </a>
           <br /><br /> <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=7">
                    <asp:ImageButton ID="imgsony" runat="server" Height="144px" ImageUrl="~/images/images (9).jpg"   Width="277px" />
                 </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ProductDetail.aspx?cat_id=8">
                    <asp:ImageButton ID="imgmicromax" runat="server" Height="144px" Width="277px"  ImageUrl="~/images/micromax-logo.gif" />
                </a>           
           <br />        
    </asp:Panel>
</asp:Content>

