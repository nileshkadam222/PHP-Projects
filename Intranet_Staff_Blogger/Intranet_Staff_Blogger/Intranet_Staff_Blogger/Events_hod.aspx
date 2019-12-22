<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="Events_hod.aspx.cs" Inherits="Events_hod" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 255px; width: 526px">
<tr>
<td>
    <asp:Label ID="LblEventtype" runat="server" Text="Event Type"></asp:Label>
</td>
<td style="width: 242px">
    <asp:DropDownList ID="DDLEventtype" runat="server" 
        onselectedindexchanged="DDLEventtype_SelectedIndexChanged" 
        AutoPostBack="True">
    </asp:DropDownList>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVEventtype" runat="server" ControlToValidate="DDLEventtype" InitialValue="Select" ErrorMessage="Please Select Eventtype"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td colspan="2">
    <asp:GridView ID="GVEventtype" runat="server">
    </asp:GridView>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="Lblevent" runat="server" Text="Give EventId"></asp:Label>
</td>
<td>
    <asp:TextBox ID="txtEventId" runat="server"></asp:TextBox>
     
</td>

</tr>&gt;
<tr>
<td>
    <asp:Label ID="Lblsuggestions" runat="server" Text="Give Your Suggestions"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txtsuggestions" runat="server" Height="88px" 
        TextMode="MultiLine"></asp:TextBox>
</td>

</tr>
<tr>
<td colspan="2">
    <asp:Button ID="Btnsuggestions" runat="server" Text="Add Suggestions" 
        onclick="Btnsuggestions_Click" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:Button ID="Button1" runat="server" Text="Clear" onclick="Button1_Click" />
</td>
<td>
    <asp:Label ID="lblErrorMessage" runat="server" ForeColor="Red"></asp:Label>
</td>
</tr>

</table>
</asp:Content>

