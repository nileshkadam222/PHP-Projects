<%@ Page MasterPageFile="~/admin/MasterPage.master"Language="C#" AutoEventWireup="true" CodeFile="BreakingNews.aspx.cs" Inherits="admin_BreakingNews" %>
<asp:Content ID="c1" runat="server" ContentPlaceHolderID="ContentPlaceHolder1">
        <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" AutoGenerateRows="False"
            CellPadding="4" DataSourceID="SqlDataSourceBreakingNews" ForeColor="#333333"
            GridLines="None" HeaderText="Breaking News Master" Height="50px" Width="310px">
            <PagerSettings FirstPageText="First" LastPageText="Last" Mode="NextPreviousFirstLast"
                NextPageText="Next" PreviousPageText="Previous" />
            <FooterStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
            <CommandRowStyle BackColor="#E2DED6" Font-Bold="True" />
            <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
            <FieldHeaderStyle BackColor="#E9ECF1" Font-Bold="True" />
            <PagerStyle BackColor="#284775" ForeColor="White" HorizontalAlign="Center" />
            <Fields>
                <asp:BoundField DataField="breaking_news_id" HeaderText="Id" InsertVisible="False"
                    ReadOnly="True" SortExpression="breaking_news_id" />
                <asp:BoundField DataField="breaking_news_description" HeaderText="News Details" SortExpression="breaking_news_description" />
                <asp:CommandField ShowDeleteButton="True" ShowEditButton="True" ShowInsertButton="True" />
            </Fields>
            <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
            <EditRowStyle BackColor="#999999" />
            <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
            <EmptyDataTemplate>
                No Breaking News Exists..<br />
                You may add 
                <asp:LinkButton ID="NewButton" runat="server" CausesValidation="False" CommandName="New"
                    Text="New"></asp:LinkButton>
                Breaking News.
            </EmptyDataTemplate>
        </asp:DetailsView>
        <asp:SqlDataSource ID="SqlDataSourceBreakingNews" runat="server" ConflictDetection="CompareAllValues"
            ConnectionString="<%$ ConnectionStrings:ConnectionString %>" DeleteCommand="DELETE FROM [breaking_news_master] WHERE [breaking_news_id] = @original_breaking_news_id AND [breaking_news_description] = @original_breaking_news_description"
            InsertCommand="INSERT INTO [breaking_news_master] ([breaking_news_description]) VALUES (@breaking_news_description)"
            OldValuesParameterFormatString="original_{0}" SelectCommand="SELECT * FROM [breaking_news_master]"
            UpdateCommand="UPDATE [breaking_news_master] SET [breaking_news_description] = @breaking_news_description WHERE [breaking_news_id] = @original_breaking_news_id AND [breaking_news_description] = @original_breaking_news_description">
            <DeleteParameters>
                <asp:Parameter Name="original_breaking_news_id" Type="Decimal" />
                <asp:Parameter Name="original_breaking_news_description" Type="String" />
            </DeleteParameters>
            <UpdateParameters>
                <asp:Parameter Name="breaking_news_description" Type="String" />
                <asp:Parameter Name="original_breaking_news_id" Type="Decimal" />
                <asp:Parameter Name="original_breaking_news_description" Type="String" />
            </UpdateParameters>
            <InsertParameters>
                <asp:Parameter Name="breaking_news_description" Type="String" />
            </InsertParameters>
        </asp:SqlDataSource>
    
</asp:Content>