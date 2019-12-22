<%@ Page Language="C#" MasterPageFile="~/Staff.master" AutoEventWireup="true" CodeFile="ViewTimetable_staff.aspx.cs" Inherits="ViewTimetable_staff" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
<table>
<tr>
<td>
    <asp:GridView ID="GVTimetable" runat="server" Height="205px" Width="315px">
    </asp:GridView>
</td>
</tr>
</table>
</asp:Content>

