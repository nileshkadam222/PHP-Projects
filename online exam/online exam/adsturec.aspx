<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="adsturec.aspx.cs" Inherits="adsturec" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Label ID="Label1" runat="server" BorderColor="Yellow" BorderStyle="Outset" Font-Bold="True"
        Font-Names="Comic Sans MS" Font-Size="X-Large" ForeColor="#FF8000" Height="29px"
        Style="z-index: 100; left: 41px; position: absolute; top: 318px" Text="Student Record"
        Width="295px"></asp:Label>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
        BackColor="White" BorderColor="Yellow" BorderStyle="Outset" BorderWidth="4px"
        CellPadding="3" DataSourceID="SqlDataSource1" Font-Bold="True" Font-Names="Arial"
        Height="179px" Style="z-index: 101; left: 44px; position: absolute; top: 397px"
        Width="299px">
        <FooterStyle BackColor="White" ForeColor="#000066" />
        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
        <RowStyle ForeColor="#000066" />
        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
        <Fields>
            <asp:BoundField DataField="UserId" HeaderText="UserId" SortExpression="UserId" />
            <asp:BoundField DataField="UserName" HeaderText="UserName" SortExpression="UserName" />
            <asp:BoundField DataField="MobileAlias" HeaderText="MobileAlias" SortExpression="MobileAlias" />
        </Fields>
        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ASPNETDBConnectionString %>"
        SelectCommand="SELECT [UserId], [UserName], [MobileAlias] FROM [vw_aspnet_Users]">
    </asp:SqlDataSource>
    <asp:LinkButton ID="LinkButton1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="30px" OnClick="LinkButton1_Click"
        Style="z-index: 102; left: 391px; position: absolute; top: 198px" Width="72px">BACK</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="30px" OnClick="LinkButton2_Click"
        Style="z-index: 104; left: 467px; position: absolute; top: 196px" Width="72px">Log Out</asp:LinkButton>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</asp:Content>

