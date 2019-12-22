<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="ShowCity.aspx.cs" Inherits="Admin_ShowCity" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" 
        AutoGenerateRows="False" CellPadding="4" DataKeyNames="City_Id" 
        DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" 
        Height="50px" Width="125px">
        <FooterStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <CommandRowStyle BackColor="#E2DED6" Font-Bold="True" />
        <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
        <FieldHeaderStyle BackColor="#E9ECF1" Font-Bold="True" />
        <PagerStyle BackColor="#284775" ForeColor="White" HorizontalAlign="Center" />
        <Fields>
            <asp:BoundField DataField="City_Id" HeaderText="City_Id" ReadOnly="True" 
                SortExpression="City_Id" />
            <asp:BoundField DataField="City_Name" HeaderText="City_Name" 
                SortExpression="City_Name" />
            <asp:BoundField DataField="City_Address" HeaderText="City_Address" 
                SortExpression="City_Address" />
            <asp:BoundField DataField="City_ContactPerson" HeaderText="City_ContactPerson" 
                SortExpression="City_ContactPerson" />
            <asp:BoundField DataField="City_PhoneNo" HeaderText="City_PhoneNo" 
                SortExpression="City_PhoneNo" />
        </Fields>
        <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <EditRowStyle BackColor="#999999" />
        <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT * FROM [City_Master]"></asp:SqlDataSource>
</asp:Content>

