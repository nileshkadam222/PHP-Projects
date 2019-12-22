<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Branch.aspx.cs" Inherits="category" Title="Mobile Shope - Branch" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
     <p><b>The MobileStore is India&#39;s largest telecom retailer, with over 1300 Company 
            Owned - Company Operated stores, spread across 50 cities. You can find us at high streets, prime malls and as standalone stores in your neighborhood. So, select your city. Right away!</b></p>
     <p style="color: #FF0000; font-size: 20px; font-weight: bold; height: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search By City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            Total Visitor :</p>
     <h2 style="color: #FF0000; height: 33px;">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <asp:DropDownList ID="ddlcity" runat="server" Height="24px"  Width="135px">
                </asp:DropDownList>
                &nbsp;
                <asp:Button ID="btnok" runat="server" Height="27px" Text="Ok" onclick="btnok_Click" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <asp:Label ID="lblCounter" runat="server"></asp:Label>   </h2>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                &nbsp;&nbsp;
                &nbsp;
     <br /><br /><br />
     <p>
            &nbsp;<asp:Image ID="imgbranch1" runat="server" Height="330px" 
              ImageUrl="~/images/branch.JPG" Width="555px" style="margin-bottom: 0px" />
     </p>
     <p></p>
     <p>
            <asp:Image ID="imgbranch2" runat="server" Height="335px" 
             ImageUrl="~/images/Branch3.JPG" Width="555px" 
             style="margin-left: 4px; margin-right: 11px" />
     </p>
     <p>
     </p>
</asp:Content>

