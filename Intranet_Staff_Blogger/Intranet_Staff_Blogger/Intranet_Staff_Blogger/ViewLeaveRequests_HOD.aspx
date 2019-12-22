<%@ Page Language="C#" MasterPageFile="~/Hod.master" AutoEventWireup="true" CodeFile="ViewLeaveRequests_HOD.aspx.cs" Inherits="ViewLeaveRequests_HOD" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
<table>
<tr>
<td>
    <asp:GridView ID="GVLeaveRequests" runat="server" 
        onrowcommand="GVLeaveRequests_RowCommand">
    <Columns>
    <asp:TemplateField>
    <ItemTemplate>
    <asp:LinkButton ID="lbAccept" runat="server" Text="Accept" CommandName="Accept" CommandArgument='<%#Eval("leaveid") %>'></asp:LinkButton>
    </ItemTemplate>
    </asp:TemplateField>
      <asp:TemplateField>
    <ItemTemplate>
    <asp:LinkButton ID="lbReject" runat="server" Text="Reject" CommandName="Reject" CommandArgument='<%#Eval("leaveid") %>'></asp:LinkButton>
    </ItemTemplate>
    </asp:TemplateField>
    </Columns>
    </asp:GridView>
</td>
</tr>
</table>
</asp:Content>

