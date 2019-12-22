<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" Title="Untitled Page" %>
<%@ OutputCache Location="Client" Duration="30" VaryByParam="id" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   

<%--<marquee onmousemover="this.stop" >
		
		</marquee>--%>
		<marquee direction="up" onmouseover ="this.stop()" onmouseout ="this.start()">
		
		

    <asp:DataList ID="DataList2" runat="server" DataKeyField="news_id" 
        DataSourceID="SqlDataSource1kl">
        <ItemTemplate>
            <asp:Label ID="Label1" runat="server" Text='<%# Eval("news_title") %>'></asp:Label>
            <br />
            <asp:Label ID="Label2" runat="server" Text='<%# Eval("news_description") %>'></asp:Label>
            <br />
            <asp:HyperLink ID="HyperLink2" runat="server" 
                NavigateUrl='<%# Eval("news_id","MoreNews.aspx?id={0}") %>'>MORE.......</asp:HyperLink>
            <br />
            <br />
        </ItemTemplate>
    </asp:DataList>
    <asp:SqlDataSource ID="SqlDataSource1kl" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT [news_id], [news_title], [news_description] FROM [news_master] WHERE (([news_datetime] &gt;= @news_datetime) AND ([news_datetime] &lt;= @news_datetime2) AND ([cat_id] = @cat_id)) ORDER BY [news_id] DESC">
        <SelectParameters>
            <asp:SessionParameter Name="news_datetime" SessionField="st_date" 
                Type="DateTime" />
            <asp:SessionParameter Name="news_datetime2" SessionField="end_date" 
                Type="DateTime" />
            <asp:QueryStringParameter Name="cat_id" QueryStringField="id" Type="Decimal" />
        </SelectParameters>
    </asp:SqlDataSource>
    
    </marquee>
</asp:Content>

