<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="Default5.aspx.cs" Inherits="Default5" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Login ID="Login1" runat="server" DestinationPageUrl="~/Default6.aspx" EnableTheming="True"
        Font-Bold="False" Font-Names="Comic Sans MS" Font-Size="Medium" ForeColor="#FF8000"
        OnAuthenticate="Login1_Authenticate" Style="z-index: 100; left: 104px; position: absolute;
        top: 345px">
        <TextBoxStyle BorderStyle="Inset" />
        <LoginButtonStyle BackColor="#FFFF80" BorderColor="#00C000" BorderStyle="Double" />
    </asp:Login>
    <asp:Panel ID="Panel1" runat="server" BorderColor="#FFFF80" BorderStyle="Outset"
        Height="211px" Style="z-index: 101; left: 30px; position: absolute; top: 300px"
        Width="385px">
    </asp:Panel>
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="35px" OnClick="LinkButton1_Click"
        Style="z-index: 104; left: 500px; position: absolute; top: 192px" Width="82px">HOME</asp:LinkButton>
    <br />
    <br />
    <asp:Label ID="Label1" runat="server" BorderColor="#FFFF80" BorderStyle="Outset"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="X-Large" ForeColor="#FF8000"
        Height="50px" Style="z-index: 103; left: 33px; position: absolute; top: 219px"
        Text="Admin LogIn" Width="382px"></asp:Label>
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
    <br />
    <br />

</asp:Content>

