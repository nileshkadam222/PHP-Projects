<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="ViewAttendance_hod.aspx.cs" Inherits="ViewAttendance_hod" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 263px; width: 507px">
<tr>
<td>
    <asp:Label ID="LblNoofworkingdays" runat="server" Text="No.Of Working Days"></asp:Label>
</td>
<td style="width: 248px">
    <asp:TextBox ID="Txtworkingdays" runat="server" ReadOnly="True"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="Lblnoofleavesapplied" runat="server" Text="No.Of Leaves Applied"></asp:Label>
</td>
<td style="width: 248px">
    <asp:TextBox ID="Txtnoofleavesapplied" runat="server" ReadOnly="True"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="LblNoofdaysattended" runat="server" Text="No.Of Days Attended"></asp:Label>
</td>
<td style="width: 248px">
    <asp:TextBox ID="TxtNoofdaysattended" runat="server" ReadOnly="True"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="Lblnoofavailableleaves" runat="server" Text="No.Of Available Leaves"></asp:Label>
</td>
<td style="width: 248px">
    <asp:TextBox ID="Txtnoofavailableleaves" runat="server" ReadOnly="True"></asp:TextBox>
</td>
</tr>

</table>
</asp:Content>

