<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="adsture.aspx.cs" Inherits="adsture" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Label ID="Label1" runat="server" BorderColor="Yellow" BorderStyle="Outset" BorderWidth="4px"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000"
        Height="42px" Style="z-index: 100; left: 80px; position: absolute; top: 321px"
        Text="Student Result" Width="419px"></asp:Label>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="32px" OnClick="LinkButton1_Click"
        Style="z-index: 101; left: 423px; position: absolute; top: 192px" Width="72px">BACK</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="32px" OnClick="LinkButton2_Click"
        Style="z-index: 104; left: 497px; position: absolute; top: 190px" Width="72px">Log Out</asp:LinkButton>
    <br />
    <br />
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
        BackColor="White" BorderColor="Yellow" BorderStyle="Outset" BorderWidth="4px"
        CellPadding="3" DataKeyNames="UserQuizID" DataSourceID="SqlDataSource1" Font-Bold="True"
        Font-Names="Arial" Height="253px" Style="z-index: 103; left: 80px; position: absolute;
        top: 398px" Width="429px">
        <FooterStyle BackColor="White" ForeColor="#000066" />
        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
        <RowStyle ForeColor="#000066" />
        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
        <Fields>
            <asp:BoundField DataField="UserQuizID" HeaderText="UserQuizID" InsertVisible="False"
                ReadOnly="True" SortExpression="UserQuizID" />
            <asp:BoundField DataField="QuizID" HeaderText="QuizID" SortExpression="QuizID" />
            <asp:BoundField DataField="DateTimeComplete" HeaderText="DateTimeComplete" SortExpression="DateTimeComplete" />
            <asp:BoundField DataField="Score" HeaderText="Score" SortExpression="Score" />
            <asp:BoundField DataField="UserName" HeaderText="UserName" SortExpression="UserName" />
            <asp:CommandField ShowDeleteButton="True" ShowEditButton="True" ShowInsertButton="True" />
        </Fields>
        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:QUIZConnectionString6 %>"
        DeleteCommand="DELETE FROM [UserQuiz] WHERE [UserQuizID] = @UserQuizID" InsertCommand="INSERT INTO [UserQuiz] ([QuizID], [DateTimeComplete], [Score], [UserName]) VALUES (@QuizID, @DateTimeComplete, @Score, @UserName)"
        SelectCommand="SELECT [UserQuizID], [QuizID], [DateTimeComplete], [Score], [UserName] FROM [UserQuiz]"
        UpdateCommand="UPDATE [UserQuiz] SET [QuizID] = @QuizID, [DateTimeComplete] = @DateTimeComplete, [Score] = @Score, [UserName] = @UserName WHERE [UserQuizID] = @UserQuizID">
        <DeleteParameters>
            <asp:Parameter Name="UserQuizID" Type="Int32" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="QuizID" Type="Int32" />
            <asp:Parameter Name="DateTimeComplete" Type="DateTime" />
            <asp:Parameter Name="Score" Type="Byte" />
            <asp:Parameter Name="UserName" Type="String" />
            <asp:Parameter Name="UserQuizID" Type="Int32" />
        </UpdateParameters>
        <InsertParameters>
            <asp:Parameter Name="QuizID" Type="Int32" />
            <asp:Parameter Name="DateTimeComplete" Type="DateTime" />
            <asp:Parameter Name="Score" Type="Byte" />
            <asp:Parameter Name="UserName" Type="String" />
        </InsertParameters>
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
</asp:Content>

