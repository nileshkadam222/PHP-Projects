<%@ Page Language="C#" MasterPageFile="~/MasterPage3.master" AutoEventWireup="true" CodeFile="Default2.aspx.cs" Inherits="Default2" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:FormView ID="FormView1" runat="server" AllowPaging="True" BackColor="LightGoldenrodYellow"
        BorderColor="Tan" BorderWidth="1px" CellPadding="2" DataKeyNames="UserQuizID"
        DataSourceID="SqlDataSource1" ForeColor="Black" Height="340px" Style="z-index: 45;
        left: 43px; position: absolute; top: 203px" Width="308px">
        <FooterStyle BackColor="Tan" />
        <EditRowStyle BackColor="DarkSlateBlue" ForeColor="GhostWhite" />
        <EditItemTemplate>
            Score:
            <asp:TextBox ID="ScoreTextBox" runat="server" Text='<%# Bind("Score") %>'>
            </asp:TextBox><br />
            UserQuizID:
            <asp:Label ID="UserQuizIDLabel1" runat="server" Text='<%# Eval("UserQuizID") %>'>
            </asp:Label><br />
            QuizID:
            <asp:TextBox ID="QuizIDTextBox" runat="server" Text='<%# Bind("QuizID") %>'>
            </asp:TextBox><br />
            DateTimeComplete:
            <asp:TextBox ID="DateTimeCompleteTextBox" runat="server" Text='<%# Bind("DateTimeComplete") %>'>
            </asp:TextBox><br />
            UserName:
            <asp:TextBox ID="UserNameTextBox" runat="server" Text='<%# Bind("UserName") %>'>
            </asp:TextBox><br />
            <asp:LinkButton ID="UpdateButton" runat="server" CausesValidation="True" CommandName="Update"
                Text="Update">
            </asp:LinkButton>
            <asp:LinkButton ID="UpdateCancelButton" runat="server" CausesValidation="False" CommandName="Cancel"
                Text="Cancel">
            </asp:LinkButton>
        </EditItemTemplate>
        <PagerStyle BackColor="PaleGoldenrod" ForeColor="DarkSlateBlue" HorizontalAlign="Center" />
        <InsertItemTemplate>
            Score:
            <asp:TextBox ID="ScoreTextBox" runat="server" Text='<%# Bind("Score") %>'>
            </asp:TextBox><br />
            QuizID:
            <asp:TextBox ID="QuizIDTextBox" runat="server" Text='<%# Bind("QuizID") %>'>
            </asp:TextBox><br />
            DateTimeComplete:
            <asp:TextBox ID="DateTimeCompleteTextBox" runat="server" Text='<%# Bind("DateTimeComplete") %>'>
            </asp:TextBox><br />
            UserName:
            <asp:TextBox ID="UserNameTextBox" runat="server" Text='<%# Bind("UserName") %>'>
            </asp:TextBox><br />
            <asp:LinkButton ID="InsertButton" runat="server" CausesValidation="True" CommandName="Insert"
                Text="Insert">
            </asp:LinkButton>
            <asp:LinkButton ID="InsertCancelButton" runat="server" CausesValidation="False" CommandName="Cancel"
                Text="Cancel">
            </asp:LinkButton>
        </InsertItemTemplate>
        <ItemTemplate>
            Score:
            <asp:Label ID="ScoreLabel" runat="server" Text='<%# Bind("Score") %>'></asp:Label><br />
            UserQuizID:
            <asp:Label ID="UserQuizIDLabel" runat="server" Text='<%# Eval("UserQuizID") %>'>
            </asp:Label><br />
            QuizID:
            <asp:Label ID="QuizIDLabel" runat="server" Text='<%# Bind("QuizID") %>'></asp:Label><br />
            DateTimeComplete:
            <asp:Label ID="DateTimeCompleteLabel" runat="server" Text='<%# Bind("DateTimeComplete") %>'>
            </asp:Label><br />
            UserName:
            <asp:Label ID="UserNameLabel" runat="server" Text='<%# Bind("UserName") %>'></asp:Label><br />
        </ItemTemplate>
        <HeaderStyle BackColor="Tan" Font-Bold="True" />
    </asp:FormView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:QUIZConnectionString8 %>"
        SelectCommand="SELECT [Score], [UserQuizID], [QuizID], [DateTimeComplete], [UserName] FROM [UserQuiz] ORDER BY [UserName], [QuizID], [UserQuizID]">
    </asp:SqlDataSource>
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
    <br />
    <br />
    <br />
</asp:Content>

