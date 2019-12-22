<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="exad.aspx.cs" Inherits="exad" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    &nbsp;
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="26px" OnClick="LinkButton1_Click"
        Style="z-index: 100; left: 443px; position: absolute; top: 201px" Width="53px">Back</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="26px" OnClick="LinkButton2_Click"
        Style="z-index: 104; left: 517px; position: absolute; top: 198px" Width="80px">Log Out</asp:LinkButton>
    <br />
    <asp:Label ID="Label1" runat="server" BorderColor="#FFFF80" BorderStyle="Outset"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="X-Large" ForeColor="#FF8000"
        Height="34px" Style="z-index: 102; left: 30px; position: absolute; top: 271px"
        Text="Make Question" Width="491px"></asp:Label>
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
        BackColor="White" BorderColor="Yellow" BorderStyle="Outset" BorderWidth="4px"
        CellPadding="3" DataKeyNames="QuestionID" DataSourceID="SqlDataSource1" Font-Bold="True"
        Font-Names="Arial" Height="50px" Style="z-index: 103; left: 31px; position: absolute;
        top: 332px" Width="498px">
        <FooterStyle BackColor="White" ForeColor="#000066" />
        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
        <RowStyle ForeColor="#000066" />
        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
        <Fields>
            <asp:BoundField DataField="QuestionID" HeaderText="QuestionID" InsertVisible="False"
                ReadOnly="True" SortExpression="QuestionID" />
            <asp:BoundField DataField="Title" HeaderText="Title" SortExpression="Title" />
            <asp:BoundField DataField="Answer2" HeaderText="Answer2" SortExpression="Answer2" />
            <asp:BoundField DataField="Answer1" HeaderText="Answer1" SortExpression="Answer1" />
            <asp:BoundField DataField="Answer3" HeaderText="Answer3" SortExpression="Answer3" />
            <asp:BoundField DataField="Answer4" HeaderText="Answer4" SortExpression="Answer4" />
            <asp:BoundField DataField="CorrectAnswer" HeaderText="CorrectAnswer" SortExpression="CorrectAnswer" />
            <asp:BoundField DataField="QuestionOrder" HeaderText="QuestionOrder" SortExpression="QuestionOrder" />
            <asp:BoundField DataField="QuizID" HeaderText="QuizID" SortExpression="QuizID" />
            <asp:CommandField ShowDeleteButton="True" ShowEditButton="True" ShowInsertButton="True" />
        </Fields>
        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:QUIZConnectionString7 %>"
        DeleteCommand="DELETE FROM [Question] WHERE [QuestionID] = @QuestionID" InsertCommand="INSERT INTO [Question] ([Title], [Answer2], [Answer1], [Answer3], [Answer4], [CorrectAnswer], [QuestionOrder], [QuizID]) VALUES (@Title, @Answer2, @Answer1, @Answer3, @Answer4, @CorrectAnswer, @QuestionOrder, @QuizID)"
        SelectCommand="SELECT [QuestionID], [Title], [Answer2], [Answer1], [Answer3], [Answer4], [CorrectAnswer], [QuestionOrder], [QuizID] FROM [Question]"
        UpdateCommand="UPDATE [Question] SET [Title] = @Title, [Answer2] = @Answer2, [Answer1] = @Answer1, [Answer3] = @Answer3, [Answer4] = @Answer4, [CorrectAnswer] = @CorrectAnswer, [QuestionOrder] = @QuestionOrder, [QuizID] = @QuizID WHERE [QuestionID] = @QuestionID">
        <DeleteParameters>
            <asp:Parameter Name="QuestionID" Type="Int32" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="Title" Type="String" />
            <asp:Parameter Name="Answer2" Type="String" />
            <asp:Parameter Name="Answer1" Type="String" />
            <asp:Parameter Name="Answer3" Type="String" />
            <asp:Parameter Name="Answer4" Type="String" />
            <asp:Parameter Name="CorrectAnswer" Type="Byte" />
            <asp:Parameter Name="QuestionOrder" Type="Byte" />
            <asp:Parameter Name="QuizID" Type="Int32" />
            <asp:Parameter Name="QuestionID" Type="Int32" />
        </UpdateParameters>
        <InsertParameters>
            <asp:Parameter Name="Title" Type="String" />
            <asp:Parameter Name="Answer2" Type="String" />
            <asp:Parameter Name="Answer1" Type="String" />
            <asp:Parameter Name="Answer3" Type="String" />
            <asp:Parameter Name="Answer4" Type="String" />
            <asp:Parameter Name="CorrectAnswer" Type="Byte" />
            <asp:Parameter Name="QuestionOrder" Type="Byte" />
            <asp:Parameter Name="QuizID" Type="Int32" />
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
    <br />
    <br />
</asp:Content>

