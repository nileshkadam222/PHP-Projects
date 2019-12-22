<%@ Page Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="viewstaffattendance_admin.aspx.cs" Inherits="viewstaffattendance_admin" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">

<table>
<tr>
<td>
<asp:DropDownList ID="ddlDepts" runat="server" AutoPostBack="True" 
        onselectedindexchanged="ddlDepts_SelectedIndexChanged"></asp:DropDownList>
</td>

</tr>
<tr>
<td>
    <asp:GridView ID="GVStaffAttendance" runat="server">
    </asp:GridView>

</td>
</tr>
<tr>
<td>
<asp:Label ID="lblStatus" Text="Details Does not Exists" runat="server" 
        Visible="False" ForeColor="#FF6666"></asp:Label>
</td>
</tr>
</table>

</asp:Content>

