<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="Updates_hod.aspx.cs" Inherits="Updates_hod" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 250px">
<tr>
<td>
    <asp:GridView ID="GVUpdates" runat="server">
    </asp:GridView>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="Lblupdatename" runat="server" Text="UpdateName"></asp:Label>
    
</td>
<td>
    <asp:TextBox ID="Txtupdatename" runat="server"></asp:TextBox>
</td>
</tr>


<tr>
<td>
    <asp:Label ID="LblUpdateDescription" runat="server" Text="UpdateDescription"></asp:Label>
    
</td>
<td>
    <asp:TextBox ID="TxtUpdateDescription" runat="server"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="Lbldate" runat="server" Text="UpdateDate"></asp:Label>
    
</td>
<td>
    <asp:Calendar ID="Calendar1" runat="server" 
        onselectionchanged="Calendar1_SelectionChanged"></asp:Calendar>
    <asp:TextBox ID="Txtdate" runat="server"></asp:TextBox>
</td>
</tr>



<tr>
<td>
    <asp:Button ID="Btnupdate" runat="server" Text="Add New Update" 
        onclick="Btnupdate_Click" />
</td>
<td>
    <asp:Button ID="Button1" runat="server" Text="Clear" />
</td>
</tr>
<tr>
<td>
    <asp:Label ID="lblStatus" runat="server" Text=""></asp:Label>
</td>
</tr>

</table>
</asp:Content>

