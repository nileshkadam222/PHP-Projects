<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ViewTeacherDetails.aspx.cs" Inherits="ViewTeacherDetails" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="stylesheet.css" rel="stylesheet" runat="server" />
   <script type="text/javascript"language="javascript">
   function opennewwindow()
   {
   window.open('Teacher.aspx','RegisterTeacher','height=350,width=850, scrollbars=0, resizable=0, status=0, top=170, left=80');
   }
   
function isvalidEmail()
{
 var email = document.getElementById('txtEmail');
 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 if (!filter.test(email.value))
 {
document.getElementById('txtEmail').focus();
alert('Please provide a valid email address in the form of "user@domain.com"');
document.getElementById('txtEmail').value="";
return false;
}
else if(filter.test(email.value))
{
return true;
}
}

   </script> 
</head>
<body>
    <form id="form1" runat="server">
    <div>
   <center>
   <fieldset style="width: 881px; height: 75px; text-align: right;" ><legend><b><span style="color: #ffffff">Search Teacher Details</span></b></legend>
   <table>
   
   <tr>
   <td style="height: 51px">
  <table>
  <tr>
  <td>
      <span style="color: #ffffff">
  Name</span>
  </td>
  <td>
  <asp:TextBox ID="txtName" CssClass="textbox" runat="server" ></asp:TextBox>
  </td>
  <td>
      <span style="color: #ffffff">
  Subject</span>
  </td>
  <td>
      &nbsp;<asp:DropDownList ID="ddlSubject" runat="server">
          <asp:ListItem>--Select Subject--</asp:ListItem>
          <asp:ListItem>Telugu</asp:ListItem>
          <asp:ListItem>Hindi</asp:ListItem>
          <asp:ListItem>English</asp:ListItem>
          <asp:ListItem>Maths</asp:ListItem>
          <asp:ListItem>Science</asp:ListItem>
          <asp:ListItem>Social</asp:ListItem>
      </asp:DropDownList></td>
  <td>
      <span style="color: #ffffff">
  Qualification</span>
  </td>
  <td>
  <asp:TextBox ID="txtQualification" CssClass="textbox" runat="server" ></asp:TextBox>
  </td>
  
  <td>
      <span style="color: #ffffff">
  Email</span>
  </td>
  <td>
 <input type="text" id="txtEmail" runat="server" onchange="javascript:return isvalidEmail()" class="textbox"/>
  </td>
  <td>
  <asp:Button ID="btnSearch" runat="server" CssClass="button" Text="Search" OnClick="btnSearch_Click" />
  </td>
  <td>
  <asp:Button ID="txtCancel" runat="server" CssClass="button" Text="Reset" OnClick="txtCancel_Click" />
  </td>
  </tr>
  
  </table>
   <asp:LinkButton ID="lnkRegisterTeacher" runat="server" Text="RegisterTeacher" OnClientClick="javascript:opennewwindow()" ></asp:LinkButton></td>
   </tr>
   </table> </fieldset>
   </center> 
   <center>
   <fieldset style="width: 655px; height: 298px"><legend><b><span style="color: #ffffff">Teacher Details</span></b></legend>
   <table style="width: 620px; height: 281px">
   <tr>
   <td valign="top" style="height: 294px">
    <asp:GridView ID="gvTeacherDetails" runat="server" AutoGenerateColumns="False" AllowPaging="True" CellPadding="4" CellSpacing="2" HorizontalAlign="Center"  PageSize="5" OnPageIndexChanging="gvTeacherDetails_PageIndexChanging" Width="609px" OnRowDataBound="gvTeacherDetails_RowDataBound">
        <Columns>
<asp:TemplateField Visible="False">
<ItemTemplate>
<asp:Label ID="lblSno" runat="Server" Text='<%#Eval("id") %>'></asp:Label>
</ItemTemplate>
</asp:TemplateField>
        
        <asp:TemplateField HeaderText="Name">
        <ItemTemplate>        
        <asp:LinkButton ID="lnkName" runat="server" Text='<%#Eval("name")%>' Visible="false"></asp:LinkButton>
         <asp:Label ID="lblName" runat="server" Text='<%#Eval("name") %>' Visible="false"></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="Subject">
        <ItemTemplate>
        <asp:Label ID="lblSubject" runat="Server" Text='<%#Eval("subject") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="Qualification">
        <ItemTemplate>
        <asp:Label ID="lblQualification" runat="Server" Text='<%#Eval("qualification") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
          <asp:TemplateField HeaderText="Date of Joining">
        <ItemTemplate>
        <asp:Label ID="lblDateofJoining" runat="Server" Text='<%#Eval("dateofjoining")%>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        
        
        
        <asp:TemplateField HeaderText="Email">
        <ItemTemplate>
        <asp:Label ID="lblEmail" runat="server" Text='<%#Eval("email") %>'>       
        </asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="ContactNo">
        <ItemTemplate>
        <asp:Label ID="lblContactNo" runat="server" Text='<%#Eval("contactno") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        
        </Columns>
        <RowStyle BackColor="Silver" HorizontalAlign="Left" VerticalAlign="Top" />
        <HeaderStyle BackColor="Black" ForeColor="White" />
        <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PreviousPageText="" />
        <FooterStyle BackColor="#E0E0E0" />
        <PagerStyle BackColor="#E0E0E0" HorizontalAlign="Center" />
        <EditRowStyle BackColor="Silver" BorderStyle="None" />
        <AlternatingRowStyle BackColor="Silver" />
      
        
        </asp:GridView>
   </td>
   </tr>
   </table> 
   </fieldset>
   </center>
    </div>
    </form>
</body>
</html>
