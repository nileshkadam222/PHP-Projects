<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="Circulars_hod.aspx.cs" Inherits="Circulars_hod" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 248px; width: 526px">
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
<tr>
<td colspan="2">
    <asp:Button ID="Butcir" runat="server" Text="Add New Circular" 
        onclick="Butcir_Click" Visible="False" />
</td>
</tr>
<tr>
<td>
<asp:Panel ID="pancir" runat="server" Visible="False">
<table style="width: 485px">


<tr>
<td>
<asp:Label ID="LblCircularDescription" runat="server" Text="CircularDescription"></asp:Label>
</td>
<td>
    <asp:TextBox ID="TxtCircularDescription" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVCircularDescription" runat="server" ControlToValidate="TxtCircularDescription"  ErrorMessage="Please Enter CircularDescription"></asp:RequiredFieldValidator>
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
<td>
    <asp:RequiredFieldValidator ID="RFVDate" runat="server" ControlToValidate="TxtDate"  ErrorMessage="Please Pick Date"></asp:RequiredFieldValidator>
</td>
</tr>

<tr>
<td>
<asp:Label ID="Lbltimings" runat="server" Text="Timings"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txttimings" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RfvTimings" runat="server" ControlToValidate="Txttimings"  ErrorMessage="Please Enter Timings"></asp:RequiredFieldValidator>
</td>

</tr>


<tr>
<td>
<asp:Label ID="Lblplace" runat="server" Text="Place"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txtplace" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVPlace" runat="server" ControlToValidate="Txtplace"  ErrorMessage="Please Enter Place"></asp:RequiredFieldValidator>
</td>

</tr>

<tr>
<td>
<asp:Label ID="Lblduration" runat="server" Text="Duration"></asp:Label>
</td>
<td>
    <asp:TextBox ID="Txtduration" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVDuration" runat="server" ControlToValidate="Txtduration"  ErrorMessage="Please Enter Duration"></asp:RequiredFieldValidator>
</td>
</tr>

<tr>
<td>
    <asp:Button ID="Btncircular" runat="server" Text="Add Circular" 
        onclick="Btncircular_Click" />
      
</td>
<td>
    <asp:Button ID="Btnclear" runat="server" Text="Clear" 
        onclick="Btnclear_Click" />
</td>
</tr>
<tr>
<td colspan="2">
    <asp:Label ID="Lblerrmsg" runat="server" ForeColor="#FF5050" Text=""></asp:Label>
</td>
</tr>
</table>
</asp:Panel>

</td>

</tr>




</table>
</asp:Content>

