<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="News.aspx.cs" Inherits="Admin_News" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DetailsView ID="DetailsView1" runat="server" AllowPaging="True" 
        AutoGenerateRows="False" CellPadding="4" DataKeyNames="News_Id" 
        DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None" 
        Height="50px" Width="227px">
        <FooterStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
        <CommandRowStyle BackColor="#D1DDF1" Font-Bold="True" />
        <RowStyle BackColor="#EFF3FB" />
        <FieldHeaderStyle BackColor="#DEE8F5" Font-Bold="True" />
        <PagerStyle BackColor="#2461BF" ForeColor="White" HorizontalAlign="Center" />
        <EmptyDataTemplate>
            There is no data in database.<br />
            You can add
            <asp:LinkButton ID="NewButton" runat="server" CausesValidation="False" 
                CommandName="New" Text="New"></asp:LinkButton>
            &nbsp;data in database.
        </EmptyDataTemplate>
        <Fields>
            <asp:BoundField DataField="News_Id" HeaderText="News_Id" InsertVisible="False" 
                ReadOnly="True" SortExpression="News_Id" />
            <asp:BoundField DataField="News_Desc" HeaderText="News_Desc" 
                SortExpression="News_Desc" />
            <asp:CommandField ShowDeleteButton="True" ShowEditButton="True" 
                ShowInsertButton="True" />
        </Fields>
        <HeaderStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
        <EditRowStyle BackColor="#2461BF" />
        <AlternatingRowStyle BackColor="White" />
    </asp:DetailsView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConflictDetection="CompareAllValues" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        DeleteCommand="DELETE FROM [News_Master] WHERE [News_Id] = @original_News_Id AND [News_Desc] = @original_News_Desc" 
        InsertCommand="INSERT INTO [News_Master] ([News_Desc]) VALUES (@News_Desc)" 
        OldValuesParameterFormatString="original_{0}" 
        SelectCommand="SELECT * FROM [News_Master]" 
        UpdateCommand="UPDATE [News_Master] SET [News_Desc] = @News_Desc WHERE [News_Id] = @original_News_Id AND [News_Desc] = @original_News_Desc">
        <DeleteParameters>
            <asp:Parameter Name="original_News_Id" Type="Decimal" />
            <asp:Parameter Name="original_News_Desc" Type="String" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="News_Desc" Type="String" />
            <asp:Parameter Name="original_News_Id" Type="Decimal" />
            <asp:Parameter Name="original_News_Desc" Type="String" />
        </UpdateParameters>
        <InsertParameters>
            <asp:Parameter Name="News_Desc" Type="String" />
        </InsertParameters>
    </asp:SqlDataSource>
</asp:Content>

