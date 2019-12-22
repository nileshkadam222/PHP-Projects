<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true"
    CodeFile="result.aspx.cs" Inherits="admin_result" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <asp:GridView ID="grdshow" runat="server" DataKeyNames="sid" AutoGenerateColumns="false"
        HeaderStyle-CssClass="header" RowStyle-CssClass="item" AlternatingRowStyle-CssClass="alter"
        EmptyDataText="No Any Exam Rresult">
        <Columns>
            <asp:BoundField DataField="total" HeaderText="Total Mark" />
            <asp:BoundField DataField="n_m" HeaderText="Neg.Mark" />
            <asp:BoundField DataField="etime" HeaderText="Time Limite" />
            <asp:BoundField DataField="stime" HeaderText="Start Time" />
            <asp:BoundField DataField="endtime" HeaderText="End Time" />
            <asp:BoundField DataField="omark" HeaderText="Obtain Mark" />
            <asp:BoundField DataField="otime" HeaderText="Time" />
            <asp:BoundField DataField="e_date" HeaderText="Exam Date" />
        </Columns>
    </asp:GridView>
</asp:Content>
