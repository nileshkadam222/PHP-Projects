<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true"
    CodeFile="addcategory.aspx.cs" Inherits="adminpanel_addcategory" Title="Admin - Add Category" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
    <style type="text/css">
        .style1
        {
            width: 163px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
     <center> <table>
            <tr >
                <td align="left">
                        <asp:Label ID="lblcategoryname" runat="server" Text="Category Name"></asp:Label>
                </td>
                <td>  : </td>
                <td class="style1">
                        <asp:TextBox ID="txtcategoryname" runat="server" Width="149px"></asp:TextBox>
                </td >
                <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ControlToValidate="txtcategoryname" ErrorMessage="Plese Enter Category Name" 
                        ToolTip="i.e(Nokia)"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left">
                        <asp:Label ID="lblstatus" runat="server" Text="Status"></asp:Label>
                </td>
                <td> : </td>
                <td class="style1">
                        <asp:DropDownList ID="ddlstatus" runat="server" Width="149px">
                        <asp:ListItem Selected="True">Active</asp:ListItem>
                        <asp:ListItem>InActive</asp:ListItem>
                        </asp:DropDownList>
                </td>
                 <td align="left">
                     &nbsp;</td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left">
                        <asp:Label ID="lblrank" runat="server" Text="Rank"></asp:Label>
                </td>
                <td> : </td>
                <td class="style1">
                        <asp:TextBox ID="txtrank" runat="server" Width="149px"></asp:TextBox>
                </td>
                 <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                         ControlToValidate="txtrank" Display="Dynamic" ErrorMessage="Plese Enter Rank"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr align="center">
                <td colspan="3">
                        <asp:Button ID="btnsubmit" runat="server" Text="Submit" Width="63px" OnClick="btnsubmit_Click" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <asp:Button ID="btnclear" runat="server" Text="Clear" Width="63px" 
                        onclick="btnclear_Click" />
                </td>
            </tr>
        </table>
    </center>
</asp:Content>
