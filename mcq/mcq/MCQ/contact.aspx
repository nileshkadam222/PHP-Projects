<%@ Page Language="C#" MasterPageFile="~/local.master" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="contact" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%" cellspacing="5" cellpadding="0"  >
    <tr>
        <td width="10%" rowspan="6"></td>
        <td colspan="2" width="10%">
            <h1>Contact US</h1>
        </td>
        
        
    </tr>
    <tr>
            <td >
                <asp:Image ID="img1" runat="server" ImageUrl="~/images/edit-icon.png" />
            </td>
            <td>
                Name:Kishan Vaishnani<br />
                EMail:kishanvaishnani<br />
                Mobile:9601971668.
                
            </td>
             <td rowspan="6"   width="30%"  valign="top" align="left">
            <asp:Image ID="img" runat="server" ImageUrl="~/images/ContactPhone.png"  
                Height="268px" Width="275px"/>
        </td>
    </tr>
    
    <tr>
            <td >
                <asp:Image ID="Image1" runat="server" ImageUrl="~/images/edit-icon.png" />
            </td>
            <td>
                Name:Gohil <br />
                EMail:<br />
                Mobile:
                
            </td>
    </tr>
    
    <tr>
            <td >
                <asp:Image ID="Image2" runat="server" ImageUrl="~/images/edit-icon.png" />
            </td>
            <td>
                Name:<br />
                EMail:<br />
                Mobile:
                
            </td>
    </tr>
</table>
</asp:Content>

