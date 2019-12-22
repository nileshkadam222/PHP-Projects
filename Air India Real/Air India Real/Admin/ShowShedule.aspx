<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="ShowShedule.aspx.cs" Inherits="Admin_ShowShedule" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DetailsView ID="DetailsView1" runat="server" AutoGenerateRows="False" 
        CellPadding="4" DataKeyNames="Sch_Id" DataSourceID="SqlDataSource1" 
        ForeColor="#333333" GridLines="None" Height="50px" Width="125px">
        <FooterStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <CommandRowStyle BackColor="#E2DED6" Font-Bold="True" />
        <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
        <FieldHeaderStyle BackColor="#E9ECF1" Font-Bold="True" />
        <PagerStyle BackColor="#284775" ForeColor="White" HorizontalAlign="Center" />
        <Fields>
            <asp:BoundField DataField="Sch_Id" HeaderText="Sch_Id" ReadOnly="True" 
                SortExpression="Sch_Id" />
            <asp:BoundField DataField="Route_Id" HeaderText="Route_Id" 
                SortExpression="Route_Id" />
            <asp:BoundField DataField="Depart_Time" HeaderText="Depart_Time" 
                SortExpression="Depart_Time" />
            <asp:BoundField DataField="Arr_Time" HeaderText="Arr_Time" 
                SortExpression="Arr_Time" />
            <asp:BoundField DataField="Sch_Type" HeaderText="Sch_Type" 
                SortExpression="Sch_Type" />
            <asp:BoundField DataField="Sch_detail" HeaderText="Sch_detail" 
                SortExpression="Sch_detail" />
            <asp:BoundField DataField="Route_Rate" HeaderText="Route_Rate" 
                SortExpression="Route_Rate" />
        </Fields>
        <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <EditRowStyle BackColor="#999999" />
        <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT [Sch_Id], [Route_Id], [Depart_Time], [Arr_Time], [Sch_Type], [Sch_detail], [Route_Rate] FROM [Schedule_Master]">
    </asp:SqlDataSource>
</asp:Content>

