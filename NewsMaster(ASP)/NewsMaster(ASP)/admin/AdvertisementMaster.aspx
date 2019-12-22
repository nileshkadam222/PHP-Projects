<%@ Page MasterPageFile="~/admin/MasterPage.master"Language="C#" AutoEventWireup="true" CodeFile="AdvertisementMaster.aspx.cs" Inherits="admin_AdvertisementMaster" %>
<asp:Content ID="c1" runat="server" ContentPlaceHolderID="ContentPlaceHolder1">
        <asp:ValidationSummary ID="ValidationSummary1" runat="server" HeaderText="Following Error(s) Occrued:"
            ShowMessageBox="True" ShowSummary="False" />
    <table>
    <tr>
    <td align="center" style="background-color: black" colspan="2">
        <asp:Label ID="Label4" runat="server" Font-Bold="True" ForeColor="White" Text="Advertisement Master"></asp:Label></td>
    </tr>
        <tr>
    <td>
        <asp:Label ID="Label1" runat="server" Text="Image Url"></asp:Label></td>
    <td>
        <asp:FileUpload ID="fuImageUrl" runat="server" />
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Image Url can not be Empty" ControlToValidate="fuImageUrl">*</asp:RequiredFieldValidator></td>
    </tr>

    <tr>
    <td>
        <asp:Label ID="Label2" runat="server" Text="Navigate Url"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtNavigateUrl" runat="server" MaxLength="50" Width="300px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Navigate Url cat not Empty" ControlToValidate="txtNavigateUrl">*</asp:RequiredFieldValidator></td>
    </tr>
    <tr>
    <td>
        <asp:Label ID="Label3" runat="server" Text="Alternate Text"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtAltText" runat="server" MaxLength="15"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Alternate Text can not be Empty" ControlToValidate="txtNavigateUrl">*</asp:RequiredFieldValidator></td>
    </tr>
    <tr>
    <td colspan="2">
        <asp:Button ID="btnAdd" runat="server" Text="Add" OnClick="btnAdd_Click" /></td>
    </tr>

    </table>
</asp:Content>