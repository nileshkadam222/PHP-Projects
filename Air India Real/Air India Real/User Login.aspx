<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="User Login.aspx.cs" Inherits="User_Login" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
 
    <table bgcolor="#BFFFFF">

<tr>
<td colspan ="2" align="center" bgcolor="Black">
    <asp:Label ID="Label2" runat="server" Text="Login" Font-Bold="True" 
        ForeColor="White"></asp:Label></td>
</tr>

<tr>
<td>
    <asp:Label ID="Label1" runat="server" Text="User Name"></asp:Label></td>
<td>
    <asp:TextBox ID="txtusername" runat="server" Width="175px"></asp:TextBox>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
        ErrorMessage="User Name is Required" ControlToValidate="txtusername">*</asp:RequiredFieldValidator>
    </td>
</tr>

<tr>
<td>
    <asp:Label ID="Label3" runat="server" Text="Password"></asp:Label></td>
<td>
    <asp:TextBox ID="txtpassword" runat="server" Width="175px" TextMode="Password"></asp:TextBox>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
        ErrorMessage="Password is Required" ControlToValidate="txtpassword">*</asp:RequiredFieldValidator>
    </td>
</tr>

<tr>
<td colspan ="2">
    <asp:HyperLink ID="HyperLink1" runat="server" 
        NavigateUrl="~/Sign Up for new user.aspx">Sign Up For New User.</asp:HyperLink>
    <br />
    <asp:HyperLink ID="HyperLink2" runat="server" 
        NavigateUrl="~/ForgotPassword.aspx">Forgot Password</asp:HyperLink>
    </td>
</tr>

<tr>
<td colspan ="2" bgcolor="Black">
    <asp:Button ID="btnlogin" runat="server" Text="Login" 
        onclick="btnlogin_Click" />
&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:Button ID="btncancel" runat="server" CausesValidation="False" 
        Text="Cancel" onclick="btncancel_Click" />
    </td>
</tr>

<tr>
<td colspan ="2" align="center">
    <asp:Label ID="lblduplicate" runat="server" Font-Bold="True" ForeColor="Red"></asp:Label>&nbsp;
    <asp:HyperLink ID="hyprthis" runat="server" Font-Bold="True" Font-Names="Arial" 
        Font-Size="Large" NavigateUrl="~/Sign Up for new user.aspx" Visible="False">this</asp:HyperLink>
&nbsp;
    <asp:Label ID="lblpage" runat="server" Font-Bold="True" ForeColor="Red" 
        Visible="False">page.</asp:Label></td>
</tr>


</table>   
   
</asp:Content>

