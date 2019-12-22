<%@ Page Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="Conductevents_admin.aspx.cs" Inherits="Conductevents_admin" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table style="height: 224px; width: 478px">
<tr>
<td>
    <asp:Label ID="lbleventtypeid" runat="server" Text="EventTypeId"></asp:Label>
</td>
<td>
    <asp:DropDownList ID="ddlEventTypes" runat="server">
    </asp:DropDownList>
    <asp:RequiredFieldValidator ID="RFVCirculartype" runat="server" ControlToValidate="ddlEventTypes" InitialValue="Select" ErrorMessage="Please Select Eventtype"></asp:RequiredFieldValidator>

</td>
</tr>
<tr>
<td>
    <asp:Label ID="lblEventName" runat="server" Text="EventName"></asp:Label>
</td>
<td>
<asp:TextBox ID="TxtEventName" runat="server"></asp:TextBox>
</td>
</tr>
<tr>
<td>
   
    <asp:Label ID="lblEventDate" runat="server" Text="EventDate"></asp:Label>
</td>
<td>
 <asp:Calendar ID="CalDate" runat="server" 
        onselectionchanged="CalDate_SelectionChanged"></asp:Calendar>
<asp:TextBox ID="TxtEventDate" runat="server"></asp:TextBox>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="lblTimings" runat="server" Text="Timings"></asp:Label>
</td>
<td>
<asp:TextBox ID="TxtTimings" runat="server"></asp:TextBox>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="lblPlace" runat="server" Text="Place"></asp:Label>
</td>
<td>
<asp:TextBox ID="TxtPlace" runat="server"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="LblDescription" runat="server" Text="Description"></asp:Label>
</td>
<td>
<asp:TextBox ID="TxtDescription" runat="server"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="LblEventOrganizer" runat="server" Text="EventOrganizer"></asp:Label>
</td>
<td>
<asp:TextBox ID="TxtEventOrganizer" runat="server"></asp:TextBox>
</td>
</tr>

<tr>
<td>
    <asp:Button ID="BtnSubmit" runat="server" Text="Submit" 
        onclick="BtnSubmit_Click" />
</td>
<td>
    <asp:Button ID="Btnclear" runat="server" Text="clear" 
        onclick="Btnclear_Click" />
</td>
</tr>
<tr>
<td colspan="2">

    <asp:Label ID="lblStatus" runat="server" ForeColor="#FF6666" 
        Text="Inserted Sucessfully" Visible="False"></asp:Label>

</td>
</tr>
</table>
</asp:Content>

