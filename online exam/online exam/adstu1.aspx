<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="adstu1.aspx.cs" Inherits="adstu1" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:LinkButton ID="LinkButton1" runat="server" BorderColor="Yellow" BorderStyle="Outset"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000"
        Height="36px" OnClick="LinkButton1_Click" Style="z-index: 100; left: 70px; position: absolute;
        top: 204px" Width="150px">Student Record</asp:LinkButton>
    <asp:LinkButton ID="LinkButton3" runat="server" BorderColor="Yellow" BorderStyle="Outset"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000"
        Height="36px" OnClick="LinkButton3_Click" Style="z-index: 101; left: 72px; position: absolute;
        top: 276px" Width="150px">Result</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        ForeColor="#FF8000" OnClick="LinkButton2_Click" Style="z-index: 103; left: 522px;
        position: absolute; top: 95px">BACK</asp:LinkButton>
</asp:Content>

