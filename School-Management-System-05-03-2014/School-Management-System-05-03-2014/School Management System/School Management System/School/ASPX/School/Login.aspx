<%@ Page Language="C#" AutoEventWireup="true"  CodeFile="Login.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Freshers Site</title>
    <link href="StyleSheet.css" rel="stylesheet" runat="server" />

    <script type="text/javascript" src="JScript.js" language="javascript"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    <center>
        &nbsp;<table>
   <tr>
   <td style="width: 155px">
    <asp:Image ID="Image1" runat="server" Height="160px" ImageUrl="~/Images/images.jpg" Width="207px" />
 
 <td>
<asp:Image id="LoginImage" runat="server" Height="159px" Width="152px" ImageUrl="~/Images/Schools_login_here.gif" />  
 </td>
       
 </td>

   </tr>
 
   </table> 
   
<fieldset id="LoginField" runat="server" style="height: 118px; width: 363px;" title="Login Please" visible="true">
<legend><span style="color: #ffffff">Login</span></legend>
<table style="width: 248px; height: 96px">
   
   <tr>
   <td style="width: 64px">
       <span style="color: #ffffff">
   Username</span>
   </td>
   <td>
   <asp:TextBox ID="txtName" runat="server" CssClass="textbox" Text="admin" >admin</asp:TextBox>
       <span style="color: #ff0066">*</span></td>
  </tr>
 
   <tr>
    <td style="width: 64px">
        <span style="color: #ffffff">
  Password</span>
  </td>
   <td>
  <asp:TextBox ID="txtPassword" runat="server" CssClass="textbox" TextMode="Password" Text="admin"></asp:TextBox>
       <span style="color: #ff0066">*</span></td>
   </tr>
   <tr>
   <td style="width: 64px; height: 24px; text-align: right">
   <asp:Button ID="btnLogin" runat="server" CssClass="button" Text="Login" EnableTheming="True" ForeColor="White" OnClick="btnLogin_Click" OnClientClick="javascript:return LoginValidation()" CausesValidation="False"/>
   </td>
   <td style="height: 24px; text-align: left">
       &nbsp;<asp:Button ID="btnCancel" runat="server" CssClass="button" Text="Cancel" ForeColor="White" OnClientClick="javascript:ClearFields()" CausesValidation="False" /></td>
   </tr>
   </table>
    </fieldset> 
   
   
    </center>
    </div>
    </form>
</body>
</html>
