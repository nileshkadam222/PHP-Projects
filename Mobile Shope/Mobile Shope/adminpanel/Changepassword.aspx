<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Changepassword.aspx.cs" Inherits="adminpanel_Changepassword" Title="Admin - Change Password" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            width: 143px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table align="center">
    <tr>
        <td >
                <asp:Label ID="lblusername" runat="server" Text="User Name"></asp:Label>
        </td>
        <td align="center">:</td>
        <td class="style1">
                <asp:TextBox ID="txtusername" runat="server" Width="144px" ToolTip="Ex:(abc)"></asp:TextBox>
        </td>
        <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                ControlToValidate="txtusername" ErrorMessage="Please Enter User Name" 
                ToolTip="Ex:(abc)"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr>
        <td colspan="4"> </td>
    </tr>
    <tr>
        <td >
                <asp:Label ID="lbloldpassword" runat="server" Text="Old Password"></asp:Label>
        </td>       
        <td align="center">:</td>
        <td class="style1">
                <asp:TextBox ID="txtoldpassword" runat="server" Width="144px" TextMode="Password"></asp:TextBox>
        </td>
        <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                ControlToValidate="txtoldpassword" ErrorMessage="Plese Enter Old Password"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td >
                <asp:Label ID="lblnewpassword" runat="server" Text="New Password"></asp:Label>
        </td>     
        <td align="center">: </td>
        <td class="style1">
                <asp:TextBox ID="txtnewpassword" runat="server" Width="144px" TextMode="Password"></asp:TextBox>
        </td>
        <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" 
                ControlToValidate="txtnewpassword" 
                ErrorMessage="Enter Password Character &amp; Digit Both" 
                ValidationExpression="\D{1,}\d{1,}" Display="Dynamic" 
                ToolTip="i.e.(jemsbond007)"></asp:RegularExpressionValidator>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator3" 
                runat="server" ControlToValidate="txtnewpassword" Display="Dynamic" 
                ErrorMessage="Plese Enter New Password"></asp:RequiredFieldValidator>
                &nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td >
                <asp:Label ID="lblconfirmpassword" runat="server" Text="Confirm Password"></asp:Label>
        </td>        
        <td align="center">:</td>
        <td class="style1">
                <asp:TextBox ID="txtconfirmpassword" runat="server" Width="144px" 
                TextMode="Password"></asp:TextBox>
        </td>
        <td>
                 <asp:CompareValidator ID="CompareValidator1" runat="server" 
                ControlToCompare="txtnewpassword" ControlToValidate="txtconfirmpassword" 
                ErrorMessage="Enter Same as New Password" Display="Dynamic"></asp:CompareValidator>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
                ControlToValidate="txtconfirmpassword" Display="Dynamic" 
                ErrorMessage="Enter same as New Password"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="3" align="center">
                <asp:Button ID="btnsave" runat="server" Text="Save" Height="26px" Width="61px" 
                onclick="btnsave_Click" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <asp:Button ID="btnreset" runat="server" Text="Reset"  Height="26px" Width="61px" 
                onclick="btnreset_Click"/>
        </td>
    </tr>
</table>
</asp:Content>

