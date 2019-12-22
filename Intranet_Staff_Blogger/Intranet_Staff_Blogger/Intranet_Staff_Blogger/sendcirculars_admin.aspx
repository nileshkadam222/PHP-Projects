<%@ Page Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="sendcirculars_admin.aspx.cs" Inherits="sendcirculars_admin" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 476px; width: 507px">
<tr>
<td>
    <asp:Label ID="Lblcir" runat="server" Text="CircularType"></asp:Label>
</td>
<td>
    <asp:DropDownList ID="DDLCircular" runat="server">
    </asp:DropDownList>
</td>
<td>
    <asp:RequiredFieldValidator ID="rfvDDLCircular" runat="server" ControlToValidate="DDLCircular" ErrorMessage="Select Circular"></asp:RequiredFieldValidator>

</td>

</tr>

<tr>
<td>
<asp:Label ID="LblCircularDescription" runat="server" Text="CircularDescription"></asp:Label>
</td>
<td>
    <asp:TextBox ID="TxtCircularDescription" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RfvCircularDescription" runat="server" ControlToValidate="TxtCircularDescription" ErrorMessage="Enter CircularDescription"></asp:RequiredFieldValidator>

</td>
</tr>

<tr>
<td>
<asp:Label ID="lbldate" runat="server" Text="Date"></asp:Label>
</td>
<td>
    <asp:Calendar ID="CalDate" runat="server" 
        onselectionchanged="CalDate_SelectionChanged"></asp:Calendar>
    <asp:TextBox ID="TxtDate" runat="server"></asp:TextBox>
</td>


</tr>

<tr>
<td>
<asp:Label ID="Lbltimings" runat="server" Text="Timings"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txttimings" runat="server"></asp:TextBox>
</td>
</tr>


<tr>
<td>
<asp:Label ID="Lblplace" runat="server" Text="Place"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txtplace" runat="server"></asp:TextBox>
</td>
</tr>

<tr>
<td>
<asp:Label ID="Lblduration" runat="server" Text="Duration"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txtduration" runat="server"></asp:TextBox>
</td>
</tr>
<tr>
<td>
    <asp:Button ID="Btnsend" runat="server" Text="Send" onclick="Btnsend_Click" 
        Height="24px" Width="81px" />


   
</td>
<td>

    <asp:Button ID="BtnClear" runat="server" Text="Clear" onclick="BtnClear_Click" 
            Width="87px" />
       
</td></tr>
<tr>
<td colspan="2">
    <asp:Label ID="Lblerrmsg" runat="server" ForeColor="#FF5050"></asp:Label>
</td></tr>



</table>

</asp:Content>

