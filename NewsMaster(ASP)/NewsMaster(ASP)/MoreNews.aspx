<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="MoreNews.aspx.cs" Inherits="MoreNews" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:DataList ID="DataList2" runat="server" DataKeyField="news_id" 
        DataSourceID="SqlDataSource1">
        <ItemTemplate>
            <asp:Label ID="Label1" runat="server" Text='<%# Eval("news_title") %>'></asp:Label>
            <br />
            <asp:Label ID="Label2" runat="server" Text='<%# Eval("news_postedby") %>'></asp:Label>
            <asp:Label ID="Label3" runat="server" Text='<%# Eval("news_datetime") %>'></asp:Label>
            <asp:Image ID="Image1" runat="server" Height="150px" ImageAlign="Right" 
                ImageUrl='<%# Eval("news_img","~/imgs/{0}") %>' Width="150px" />
            <br />
            <br />
            <asp:Label ID="Label4" runat="server" Text='<%# Eval("news_details") %>'></asp:Label>
        </ItemTemplate>
    </asp:DataList>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT [news_postedby], [news_details], [news_img], [news_datetime], [cat_id], [news_description], [news_title], [news_id] FROM [news_master] WHERE ([news_id] = @news_id)">
        <SelectParameters>
            <asp:QueryStringParameter Name="news_id" QueryStringField="id" Type="Decimal" />
        </SelectParameters>
    </asp:SqlDataSource>
</asp:Content>

