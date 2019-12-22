<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Main.aspx.cs" Inherits="Main" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Welcome to School</title>
<link href="StyleSheet.css" runat="server" rel="stylesheet"/> 
    <script type="text/javascript" language="javascript" >

function Pagereplace(Pagename)
{
    var realHeight = document.getElementById("frame1").document.body.scrollHeight;
    document.getElementById("frame1").style.height = realHeight + 30 ;
    var frame=document.getElementById("frame1");    
    frame.setAttribute("src",Pagename)
}
 </script>
</head>


<body>
    <form id="form1" runat="server">
    <div>
    
   <table style="width: 970px; height: 16px">
   <tr> 
   <td style="width: 640px">
  <asp:Label ID="lblUserName" runat="server" ForeColor="white"></asp:Label>
   </td>
   <td style="text-align: right">
   <asp:Label ID="lblLoginTime" runat="server" ForeColor="White" ></asp:Label>
   </td>
   </tr>
   </table> 
    </div>
    </form>
   <iframe id="frame1" width="100%" height="550px" frameborder="0" src="Admin.aspx" scrolling="no"></iframe>
   
   
</body>
</html>
