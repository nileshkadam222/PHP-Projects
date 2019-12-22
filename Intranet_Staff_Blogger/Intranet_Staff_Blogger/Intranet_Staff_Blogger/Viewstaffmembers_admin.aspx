<%@ Page Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="Viewstaffmembers_admin.aspx.cs" Inherits="Viewstaffmembers_admin" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 255px; width: 351px">
<tr>
<td>
    <asp:Label ID="Lbldepartment" runat="server" Text="Department"></asp:Label>
</td>
<td>
    <asp:DropDownList ID="DDLDepartment" runat="server" 
        onselectedindexchanged="DDLDepartment_SelectedIndexChanged" 
        AutoPostBack="True">
    </asp:DropDownList>
</td>
</tr>
<tr>
<td colspan="2">
    <asp:GridView ID="GVStaffMembers" runat="server">
    </asp:GridView>
</td>
</tr>

</table>
</asp:Content>

