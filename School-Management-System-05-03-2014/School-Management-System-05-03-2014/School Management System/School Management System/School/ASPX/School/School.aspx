<%@ Page Language="C#" AutoEventWireup="true" CodeFile="School.aspx.cs" Inherits="School" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<link href="StyleSheet.css" runat="server" rel="stylesheet"/> 
    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server">
    <div style="text-align: left">
   <table>
   <tr>
   <td style="height: 21px">
   <asp:Label ID="lblWelcome" runat="server" ForeColor="white"  ></asp:Label>
   </td>
    </tr>
   <tr>
   <td style="height: 21px">
     <asp:Label ID="lblLogIn" runat="server" ForeColor="white"  ></asp:Label>
   </td>
   </tr>
   <tr>
   <td style="height: 21px">
        <asp:Label ID="lblLogOut" runat="server" ForeColor="white"  ></asp:Label>
       <asp:HyperLink ID="hlnkCheckTimeTable" runat="server" ForeColor="White" NavigateUrl="~/CheckTimetable.aspx">Check TimeTable</asp:HyperLink></td>
   </tr> 
   </table> 
    </div>

    </form>
</body>
</html>
