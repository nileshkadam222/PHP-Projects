<%@ Page Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="Viewcirculars_admin.aspx.cs" Inherits="Viewcirculars" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
<table style="height: 255px; width: 526px">
<tr>
<td>
    <asp:Label ID="Lblcirculartype" runat="server" Text="Circular Type"></asp:Label>
</td>
<td style="width: 320px">
    <asp:DropDownList ID="DDLCirculartype" runat="server" 
        onselectedindexchanged="DDLCirculartype_SelectedIndexChanged" 
        AutoPostBack="True">
    </asp:DropDownList>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVCirculartype" runat="server" ControlToValidate="DDLCirculartype" InitialValue="Select" ErrorMessage="Please Select Circulartype"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td colspan="2" >
    <asp:GridView ID="GVCirculartype" runat="server">
    </asp:GridView>
</td>
</tr>

</table>
</asp:Content>

