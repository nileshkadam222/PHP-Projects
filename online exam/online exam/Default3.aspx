<%@ Page Language="C#" MasterPageFile="~/MasterPage3.master" AutoEventWireup="true" CodeFile="Default3.aspx.cs" Inherits="Default3" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
    <asp:Panel ID="Panel1" runat="server" BorderColor="Yellow" BorderStyle="Outset" Font-Names="Comic Sans MS"
        ForeColor="Goldenrod" Height="253px" Style="z-index: 100; left: 35px; position: absolute;
        top: 288px" Width="500px">
        1. Total Question is 10.<br />
            2. Only 60% is consisdered as PASS for professional level.<br />
            3. If you already pass 2 times the last score only considered<br />
            &nbsp; &nbsp; even if less than the first score.<br />
            4. IF YOU FAIL YOU, CAN WRITE EXAM AFTER 7 DAYS&nbsp;<br />
            &nbsp; &nbsp;&nbsp; ONLY.<br />
            5. If&nbsp; you already passed exam , you can write exam maximum 2
            <br />
            &nbsp; &nbsp;&nbsp; times.<br />
            6. Time for EXAM is only 30min.<br />
    
    </asp:Panel>
    <br />
    <asp:Label ID="Label1" runat="server" BorderColor="Yellow" BorderStyle="Outset" Font-Bold="True"
        Font-Italic="True" Font-Names="Comic Sans MS" Font-Size="X-Large" ForeColor="Goldenrod"
        Height="50px" Style="z-index: 103; left: 33px; position: absolute; top: 209px"
        Text="Rule And Regulation" Width="502px"></asp:Label>
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
    <br />
    <br />
    <asp:Button ID="Button1" runat="server" BackColor="#FFFF80" BorderStyle="Double"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#00C000"
        Height="39px" OnClick="Button1_Click" Style="z-index: 102; left: 218px; position: absolute;
        top: 581px" Text="Accept It" Width="148px" />
    <br />
    <br />
    <br />
    <br />
    
</asp:Content>

