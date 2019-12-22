<%@ Page Language="C#" MasterPageFile="~/admasterpage.master" AutoEventWireup="true" CodeFile="adquiz.aspx.cs" Inherits="adquiz" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <br />
    <asp:Label ID="Label1" runat="server" BorderColor="Yellow" BorderStyle="Outset" Font-Bold="True"
        Font-Names="Comic Sans MS" Font-Size="Large" ForeColor="#FF8000" Height="30px"
        Style="z-index: 100; left: 31px; position: absolute; top: 209px" Text="Change Quiz"
        Width="272px"></asp:Label>
    <br />
    <br />
    <br />
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="32px" OnClick="LinkButton1_Click"
        Style="z-index: 101; left: 399px; position: absolute; top: 204px" Width="74px">Back</asp:LinkButton>
    <asp:LinkButton ID="LinkButton2" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Large" ForeColor="#FF8000" Height="32px" OnClick="LinkButton2_Click"
        Style="z-index: 104; left: 514px; position: absolute; top: 203px" Width="74px">Log Out</asp:LinkButton>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
        BackColor="White" BorderColor="#CCCCCC" BorderStyle="None" BorderWidth="1px"
        CellPadding="3" DataKeyNames="QuizID" DataSourceID="SqlDataSource1" Font-Bold="True"
        Font-Names="Arial" Font-Size="Medium" Height="216px" Style="z-index: 103; left: 42px;
        position: absolute; top: 301px" Width="287px">
        <FooterStyle BackColor="White" ForeColor="#000066" />
        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
        <RowStyle ForeColor="#000066" />
        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
        <Fields>
            <asp:BoundField DataField="QuizID" HeaderText="QuizID" InsertVisible="False" ReadOnly="True"
                SortExpression="QuizID" />
            <asp:BoundField DataField="Title" HeaderText="Title" SortExpression="Title" />
            <asp:BoundField DataField="Description" HeaderText="Description" SortExpression="Description" />
            <asp:CommandField ShowDeleteButton="True" ShowEditButton="True" ShowInsertButton="True" />
        </Fields>
        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConflictDetection="CompareAllValues"
        ConnectionString="<%$ ConnectionStrings:QUIZConnectionString4 %>" DeleteCommand="DELETE FROM [Quiz] WHERE [QuizID] = @original_QuizID AND [Title] = @original_Title AND [Description] = @original_Description"
        InsertCommand="INSERT INTO [Quiz] ([Title], [Description]) VALUES (@Title, @Description)"
        OldValuesParameterFormatString="original_{0}" SelectCommand="SELECT [QuizID], [Title], [Description] FROM [Quiz]"
        UpdateCommand="UPDATE [Quiz] SET [Title] = @Title, [Description] = @Description WHERE [QuizID] = @original_QuizID AND [Title] = @original_Title AND [Description] = @original_Description">
        <DeleteParameters>
            <asp:Parameter Name="original_QuizID" Type="Int32" />
            <asp:Parameter Name="original_Title" Type="String" />
            <asp:Parameter Name="original_Description" Type="String" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="Title" Type="String" />
            <asp:Parameter Name="Description" Type="String" />
            <asp:Parameter Name="original_QuizID" Type="Int32" />
            <asp:Parameter Name="original_Title" Type="String" />
            <asp:Parameter Name="original_Description" Type="String" />
        </UpdateParameters>
        <InsertParameters>
            <asp:Parameter Name="Title" Type="String" />
            <asp:Parameter Name="Description" Type="String" />
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
</asp:Content>

