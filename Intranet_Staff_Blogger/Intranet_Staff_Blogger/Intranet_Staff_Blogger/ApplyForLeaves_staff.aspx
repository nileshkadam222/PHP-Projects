<%@ Page Language="C#" MasterPageFile="~/Staff.master" AutoEventWireup="true" CodeFile="ApplyForLeaves_staff.aspx.cs" Inherits="ApplyForLeaves_staff" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
      
    <table style="width: 525px">
<tr>
<td>
    <asp:Label ID="LblReason" runat="server" Text="Reason"></asp:Label>
</td>
<td>
    <asp:TextBox ID="TxtReason" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVReason" runat="server" ControlToValidate="TxtReason" ErrorMessage="Please Enter Reason"></asp:RequiredFieldValidator>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="LblDescription" runat="server" Text="Description"></asp:Label>
</td>
<td>
    <asp:TextBox ID="TxtDescription" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVDescription" runat="server" ControlToValidate="TxtDescription" ErrorMessage="Please Enter Description"></asp:RequiredFieldValidator>
</td>
</tr>



<tr>
<td>
    <asp:Label ID="LblFromDate" runat="server" Text="FromDate"></asp:Label>
</td>
<td>
<asp:Calendar ID="CalFromDate" runat="server" 
        onselectionchanged="CalFromDate_SelectionChanged"></asp:Calendar>
    <asp:TextBox ID="TxtFromDate" runat="server" 
        ontextchanged="TxtFromDate_TextChanged"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVFromDate" ControlToValidate="TxtFromDate" runat="server" ErrorMessage="Plase Enter FromDate"></asp:RequiredFieldValidator>
</td>
</tr>

<tr>
<td>
    <asp:Label ID="LblToDate" runat="server" Text="ToDate"></asp:Label>
</td>
<td>
<asp:Calendar ID="CalToDate" runat="server" 
        onselectionchanged="CalToDate_SelectionChanged"></asp:Calendar>
    <asp:TextBox ID="TxtToDate" runat="server" 
        ontextchanged="TxtToDate_TextChanged"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="RFVToDate" runat="server" ControlToValidate="TxtToDate" ErrorMessage="Please Enter ToDate"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td>
    <asp:Label ID="LblNoOfLeaves" runat="server" Text="No.Of Leaves"></asp:Label>
</td>
<td>
    <asp:TextBox ID="TxtNoOfLeaves" runat="server"></asp:TextBox>
</td>
<td>
    <asp:RequiredFieldValidator ID="rfvNoOfLeaves" runat="server" ControlToValidate="TxtNoOfLeaves" ErrorMessage="Please Enter NoOfLeaves"></asp:RequiredFieldValidator>
</td>
</tr>
<tr>
<td>
    <asp:Button ID="Btnsend" runat="server" Text="Send" onclick="Btnsend_Click" />
</td>
<td>
    <asp:Button ID="Btnclear" runat="server" Text="Clear" 
        onclick="Btnclear_Click" CausesValidation="False" />
</td>
</tr>
<tr><td colspan="3" align="center" valign="middle">
 <asp:Label ID="Lblerrmsg" runat="server" ForeColor="#FF5050" ></asp:Label>
</td></tr>
</table>
</asp:Content>

