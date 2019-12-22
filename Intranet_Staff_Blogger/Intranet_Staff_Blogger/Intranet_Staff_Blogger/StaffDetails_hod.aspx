<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="StaffDetails_hod.aspx.cs" Inherits="StaffDetails_hod" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table>
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
    <asp:GridView ID="GVdetails" runat="server" Height="195px" Width="301px">
        </asp:GridView>

</td>
</tr>

</table>
</asp:Content>

