<%@ Page Language="C#" MasterPageFile="~/Login.master" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="Login" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cLogin" Runat="Server">
    <table width="280px">
<tr>
<td>
    <asp:Label ID="LblUsername" runat="server" Text="UserName"></asp:Label>
</td>
<td style="width: 114px">
    <asp:TextBox ID="TxtUsername" runat="server"></asp:TextBox>
</td>
<td style="width: 104px">
    <asp:RequiredFieldValidator ID="RFVUsername" runat="server" ControlToValidate="TxtUsername" ErrorMessage="Enter UserName"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="LblPassword" runat="server" Text="Password"></asp:Label>
</td>
<td style="width: 114px">
    <asp:TextBox ID="TxtPassword" runat="server" TextMode="Password"></asp:TextBox>
</td>
<td style="width: 104px">
    <asp:RequiredFieldValidator ID="RFVPassword" runat="server" ControlToValidate="TxtPassword" ErrorMessage="Enter Password"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="LblDesignation" runat="server" Text="Designation"></asp:Label>
</td>
<td>
    <asp:DropDownList ID="DDLDesignation" runat="server" 
        onselectedindexchanged="DDLDesignation_SelectedIndexChanged">
    </asp:DropDownList>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVDesignation" InitialValue="Select" ControlToValidate="DDLDesignation" runat="server" ErrorMessage="Select Designation"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="LblMsg" runat="server" Text="Label"></asp:Label>
</td>
</tr>
<tr>
<td align="center">
    <asp:Button ID="BtnSubmit" runat="server" Text="Submit" Width="80px" 
        onclick="BtnSubmit_Click" EnableTheming="False" />
</td>
<td align="center">
    <asp:Button ID="BtnClear" runat="server" Text="Clear" Width="80px" 
        CausesValidation="False" onclick="BtnClear_Click" />
</td>
</tr>

</table>


</asp:Content>

