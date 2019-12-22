<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="fdad.aspx.cs" Inherits="fdad" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Label ID="Label1" runat="server" BorderColor="Yellow" BorderStyle="Outset" Font-Bold="True"
        Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000" Height="35px"
        Style="z-index: 100; left: 86px; position: absolute; top: 219px" Text="Feedback Detail"
        Width="278px"></asp:Label>
    <br />
    <br />
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" BorderColor="Yellow" Font-Bold="True"
        Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000" Height="30px"
        OnClick="LinkButton1_Click" Style="z-index: 101; left: 414px; position: absolute;
        top: 196px" Width="75px">BACK</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" BorderColor="Yellow" Font-Bold="True"
        Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000" Height="30px"
        OnClick="LinkButton2_Click" Style="z-index: 104; left: 521px; position: absolute;
        top: 195px" Width="75px">Log Out</asp:LinkButton>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
        BackColor="White" BorderColor="#CCCCCC" BorderStyle="None" BorderWidth="1px"
        CellPadding="3" DataSourceID="SqlDataSource1" Height="221px" OnPageIndexChanging="DetailsView1_PageIndexChanging"
        Style="z-index: 103; left: 87px; position: absolute; top: 303px" Width="336px">
        <FooterStyle BackColor="White" ForeColor="#000066" />
        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
        <RowStyle ForeColor="#000066" />
        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
        <Fields>
            <asp:BoundField DataField="Name" HeaderText="Name" SortExpression="Name" />
            <asp:BoundField DataField="Review" HeaderText="Review" SortExpression="Review" />
            <asp:BoundField DataField="Remark" HeaderText="Remark" SortExpression="Remark" />
        </Fields>
        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
    </asp:DetailsView>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:QUIZConnectionString5 %>"
        SelectCommand="SELECT [Name], [Branch], [Review], [Remark] FROM [fdbk]"></asp:SqlDataSource>
    <br />
    <br />
    <br />
</asp:Content>

