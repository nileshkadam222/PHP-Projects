<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="ShowRoute.aspx.cs" Inherits="Admin_ShowRoute" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" 
        AutoGenerateRows="False" CellPadding="4" DataKeyNames="Route_Id" 
        DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" 
        Height="50px" Width="125px">
        <FooterStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <CommandRowStyle BackColor="#E2DED6" Font-Bold="True" />
        <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
        <FieldHeaderStyle BackColor="#E9ECF1" Font-Bold="True" />
        <PagerStyle BackColor="#284775" ForeColor="White" HorizontalAlign="Center" />
        <Fields>
            <asp:BoundField DataField="Route_Id" HeaderText="Route_Id" ReadOnly="True" 
                SortExpression="Route_Id" />
            <asp:BoundField DataField="Route_Source" HeaderText="Route_Source" 
                SortExpression="Route_Source" />
            <asp:BoundField DataField="Route_Destination" HeaderText="Route_Destination" 
                SortExpression="Route_Destination" />
            <asp:BoundField DataField="Route_Status" HeaderText="Route_Status" 
                SortExpression="Route_Status" />
            <asp:BoundField DataField="Route_Distance" HeaderText="Route_Distance" 
                SortExpression="Route_Distance" />
        </Fields>
        <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <EditRowStyle BackColor="#999999" />
        <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT * FROM [Route_Master]"></asp:SqlDataSource>
</asp:Content>

