<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Editcategory.aspx.cs" Inherits="adminpanel_editcategory" Title="Admin - Edit CAtegory" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            width: 163px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br /><br /><br />
  <center>
        <table>
            <tr >
                <td align="left">
                        <asp:Label ID="lblcategoryname" runat="server" Text="Category Name"></asp:Label>
                </td>
                <td> :</td>
                <td class="style1">
                         <asp:TextBox ID="txtcategoryname" runat="server" Width="149px"></asp:TextBox>
                </td>
                <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ControlToValidate="txtcategoryname" ErrorMessage="Plese Enter Category Name" 
                        ToolTip="i.e.(2626)"></asp:RequiredFieldValidator>
                
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
                <td class="style1" align="left">
                        <asp:DropDownList ID="ddlstatus" runat="server" Width="149px">
                        <asp:ListItem Selected="True">Active</asp:ListItem>
                        <asp:ListItem>InActive</asp:ListItem>
                        </asp:DropDownList>
                </td>
                 <td align="left"> </td>
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
                         ControlToValidate="txtrank" ErrorMessage="Plese Enter Rank" 
                         Display="Dynamic"></asp:RequiredFieldValidator> 
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr align="center">
                <td colspan="3">
                        <asp:Button ID="btnupdate" runat="server" Text="Update" Width="63px" onclick="btnupdate_Click" />
                </td>
            </tr>
        </table>
    </center>
</asp:Content>