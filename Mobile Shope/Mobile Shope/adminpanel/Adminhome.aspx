<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Adminhome.aspx.cs" Inherits="adminpanel_adminhome" Title="Admin - Home" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            width: 125px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center><table height="30%" width="50%">
  <tr>
      <td align="left" class="style1">
            <asp:Label ID="lbltotalcompany" runat="server" Text="Total Company" Width="125px"></asp:Label>
      </td>
      <td align="left">
            <asp:Label ID="lblcountcompany" runat="server" Text=""></asp:Label>
      </td>
  </tr>
  <tr><td colspan="2"><p></p></td></tr>
  <tr>
      <td align="left" class="style1">
            <asp:Label ID="lbltotalmobile" runat="server" Text="Total Mobile" Width="125px"></asp:Label>
      </td>
      <td align="left">
            <asp:Label ID="lblcountmobile" runat="server" Text=""></asp:Label>
      </td>
  </tr>
  <tr><td colspan="2"><p></p></td></tr>
  <tr>
      <td align="left" class="style1">
            <asp:Label ID="lbltotalbranch" runat="server" Text="Total Branch" Width="125px"></asp:Label>
      </td>
      <td align="left">
             <asp:Label ID="lblbranch" runat="server" Text=""></asp:Label>
     </td>
   </tr>
 </table></center>
</asp:Content>

