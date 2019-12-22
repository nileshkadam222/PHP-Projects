<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="adminpanel_Login" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server">
 <br /> <br />
        <b style="font-size: xx-large; padding-left:100px; color: #0099FF" >&nbsp;&nbsp; Login Here:&nbsp;&nbsp;&nbsp;&nbsp;
 <br /><br /><br />
        </b><br />
    <table align="center">
        <tr>
            <td colspan="3" align="center"> 
                    <asp:Image ID="Image1" runat="server" Width="80px" Height="80px" 
                     ImageUrl="~/images/login.png" />
            </td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td>
                    <asp:Label ID="lblusername" runat="server" Text="User Name"></asp:Label>
            </td>
            <td align="center">&nbsp;: </td>
            <td>
                    <asp:TextBox ID="txtusername" runat="server" Width="145px" ></asp:TextBox>
            </td>
            <td>
                    &nbsp;<asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                    ControlToValidate="txtusername" ErrorMessage="Plese Enter Name" 
                    ValidationGroup="l1"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr><td colspan="4"></td><P></P></tr>
        <tr>
            <td>
                    <asp:Label ID="lblpassword" runat="server" Text="Password"></asp:Label>
            </td>
            <td align="center">&nbsp;: </td>
            <td>
                    <asp:TextBox ID="txtpasswrod" runat="server" Width="145px" 
                    TextMode="Password" ></asp:TextBox>
            </td>
            <td>
                    &nbsp; <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                    ControlToValidate="txtpasswrod" ErrorMessage="Plese Enter Password" 
                    InitialValue="12" ValidationGroup="l1"></asp:RequiredFieldValidator>
             </td>
        </tr>
        <tr><td colspan="4"></td><P></P></tr>
        <tr>
            <td colspan="3" align="center">
                    <asp:Button ID="btnlogin" runat="server" 
                    Text="Login" onclick="btnlogin_Click" />&nbsp;&nbsp;&nbsp;
                    <asp:Button ID="btnclear" runat="server" Text="Clear" />&nbsp;</td>
        </tr>
</table>
 </form>
</body>
</html>
