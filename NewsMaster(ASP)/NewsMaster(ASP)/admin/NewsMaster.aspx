<%@ Page MasterPageFile="~/admin/MasterPage.master"Language="C#" AutoEventWireup="true" CodeFile="NewsMaster.aspx.cs" Inherits="admin_NewsMaster" %>
<asp:Content ID="c1" runat="server" ContentPlaceHolderID="contentPlaceHolder1">
    <table>
        <tr>
            <td align="center" colspan="2" style="background-color: black">
                <asp:Label ID="Label8" runat="server" Font-Bold="True" ForeColor="White" Text="News Master"></asp:Label></td>
        </tr>
        <tr>
            <td colspan="2">
                <asp:Label ID="lblMessage" runat="server"></asp:Label></td>
        </tr>
    <tr>
    <td>
        <asp:Label ID="lblCategory" runat="server" Text="Category"></asp:Label></td>
    <td>
        <asp:DropDownList ID="drpdwnlstCategoryMaster" runat="server" DataSourceID="SqlDataSourceCategoryMaster" DataTextField="cat_title" DataValueField="cat_id">
        </asp:DropDownList><asp:SqlDataSource ID="SqlDataSourceCategoryMaster" runat="server"
            ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [cat_id], [cat_title] FROM [category_master]">
        </asp:SqlDataSource>
    </td>
    </tr>
        <tr>
    <td>
        <asp:Label ID="lblTitle" runat="server" Text="Title"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtNewsTitle" runat="server" Width="450px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Title can not be Empty" ControlToValidate="txtNewsTitle"></asp:RequiredFieldValidator></td>
    </tr>

    <tr>
    <td>
        <asp:Label ID="lblPostedBy" runat="server" Text="Posted By"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtPostedBy" runat="server" Width="450px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Posted By can not be Empty" ControlToValidate="txtPostedBy"></asp:RequiredFieldValidator></td>
    </tr>

    <tr>
    <td>
        <asp:Label ID="Label4" runat="server" Text="Date Time"></asp:Label></td>
    <td>
        <asp:Label ID="lblNewsDateTime" runat="server"></asp:Label></td>
    </tr>

    <tr>
    <td style="height: 21px" valign="top">
        <asp:Label ID="Label5" runat="server" Text="Description"></asp:Label></td>
    <td style="height: 21px">
        <asp:TextBox ID="txtDescription" runat="server" Columns="50" Rows="4" TextMode="MultiLine" Width="450px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Description can not be Empty" ControlToValidate="txtDescription"></asp:RequiredFieldValidator></td>
    </tr>

    <tr>
    <td valign="top">
        <asp:Label ID="Label6" runat="server" Text="Details"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtDetails" runat="server" Columns="50" Rows="8" TextMode="MultiLine" Width="450px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Details can not be Empty" ControlToValidate="txtDetails"></asp:RequiredFieldValidator></td>
    </tr>

    <tr>
    <td style="height: 21px">
        <asp:Label ID="Label7" runat="server" Text="Image"></asp:Label></td>
    <td style="height: 21px">
        <asp:FileUpload ID="fuNewsImage" runat="server" /></td>
    </tr>

    <tr>
    <td colspan="2">
        <asp:Button ID="btnAddNews" runat="server" Text="Add News" OnClick="btnAddNews_Click" /></td>
    </tr>

    </table>
</asp:Content>