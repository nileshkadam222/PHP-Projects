<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ViewStudentDetails.aspx.cs" Inherits="ViewStudentDetails" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
<link href="StyleSheet.css" runat="server" rel="stylesheet" />
<script type="text/javascript" language="javascript">
function CallRegistrationPage()
{
 window.open("Student.aspx",["student"],"height=530,width=725, scrollbars=0, resizable=0, status=0, top=75, left=200");   
}

function ResetAllFields()
{
document.getElementById('txtAdmissionNo').value='';
document.getElementById('txtFirstName').value='';
document.getElementById('txtLastName').value='';
document.getElementById('ddlClass').value='--Select Class--';
document.getElementById('ddlSection').value='--Select Section--';
}
</script>
</head>
<body>
   
    <form id="form1" runat="server">
    
    <div>
   <center>
   <fieldset style="width: 693px; height: 120px; text-align: right;">
   <legend><b><span style="color: #ffffff">Search</span></b></legend>
   <table style="width: 684px; height: 19px">
   <tr>
   <td style="height: 27px; width: 105px;">
       <span style="color: #ffffff">
   Admission No</span>
   </td>
   <td style="height: 27px; width: 142px;" valign="middle">
   <asp:TextBox ID="txtAdmissionNo" runat="server" CssClass="textbox" ></asp:TextBox>
   </td>
   <td style="height: 27px; width: 84px;">
       <span style="color: #ffffff">
 First  Name</span>
   </td>
   <td style="height: 27px; width: 139px;" valign="middle">
   <asp:TextBox ID="txtFirstName" runat="server" CssClass="textbox" ></asp:TextBox>
   </td>
  <td style="width: 94px">
      <span style="color: #ffffff">Last Name</span>
  </td>
  <td style="width: 131px; text-align: left;" valign="middle">
  <asp:TextBox ID="txtLastName" runat="server" CssClass="textbox" ></asp:TextBox>
  </td>
  </tr>
  <tr>
   <td style="height: 27px; width: 105px;" valign="top">
       <span style="color: #ffffff">
   Class</span>
   </td>
   <td style="height: 27px; width: 142px;" valign="top">
   <asp:DropDownList ID="ddlClass" runat="server" Height="24px" Width="127px" >
       <asp:ListItem>--Select Class--</asp:ListItem>
       <asp:ListItem>Nursery</asp:ListItem>
       <asp:ListItem>LKG</asp:ListItem>
       <asp:ListItem>UKG</asp:ListItem>
       <asp:ListItem>1st</asp:ListItem>
       <asp:ListItem>2nd</asp:ListItem>
       <asp:ListItem>3rd</asp:ListItem>
       <asp:ListItem>4th</asp:ListItem>
       <asp:ListItem>5th</asp:ListItem>
       <asp:ListItem Value="6th"></asp:ListItem>
       <asp:ListItem>7th</asp:ListItem>
       <asp:ListItem>8th</asp:ListItem>
       <asp:ListItem>9th</asp:ListItem>
       <asp:ListItem>10th</asp:ListItem>
   </asp:DropDownList>
   </td>
   <td style="width: 46px; height: 27px" valign="top">
       <span style="color: #ffffff">
   Section</span>
   </td>
   <td style="height: 27px; width: 139px;" valign="top">
   <asp:DropDownList ID="ddlSection" runat="server" Height="22px" Width="123px" >
       <asp:ListItem>--Select Section--</asp:ListItem>
       <asp:ListItem>A</asp:ListItem>
       <asp:ListItem>B</asp:ListItem>
   </asp:DropDownList>&nbsp;
   </td>
   <td style="height: 27px; width: 94px; text-align: right;">
       &nbsp;</td>
   <td style="height: 27px; width: 131px; text-align: left;" valign="top">
      <table style="width: 140px; height: 27px">
   <tr>
   <td style="width: 58px; text-align: left;">
       <asp:Button ID="btnSearch" runat="server" CssClass="button" Text="Search" OnClick="btnSearch_Click" /></td>
      <td style="text-align: left; width: 89px;">
      <asp:Button id="btnReset" runat="server" CssClass="button" Text="Reset" OnClientClick="javascript:ResetAllFields()" Height="22px" Width="59px" OnClick="btnReset_Click"  />
      </td> 
   </tr>
   </table>
<asp:LinkButton id="lnkNewStudent" runat="server"  OnClientClick="javascript:CallRegistrationPage()" ForeColor="#353539" Height="28px" Width="157px" >New Student Registration</asp:LinkButton></td>
   </tr>
   </table> </fieldset> 
  </center> 
        <br />
           <center>
        <fieldset style="width: 568px; height: 264px"><legend><b><span style="color: #ffffff">View Student</span></b></legend>

    <table id="tblViewStudent" >
   <tr>
   <td style="height: 154px" valign="top">
   <asp:gridview ID="gvStudentDetails" runat="server" ForeColor="Black" AutoGenerateColumns="False" AllowPaging="True" CellPadding="5" CellSpacing="1" HorizontalAlign="Left" OnPageIndexChanging="gvStudentDetails_PageIndexChanging" PageSize="5" OnRowDataBound="gvStudentDetails_RowDataBound" >
   <Columns>
   
   <asp:TemplateField Visible="False">
         <ItemTemplate>
         <asp:Label ID="lblSno" Text='<%#Eval("id") %>' runat="server">
         </asp:Label>
         </ItemTemplate>
         
         </asp:TemplateField>
   
   <asp:TemplateField HeaderText="AdmissionNo">
   <ItemTemplate>
   <asp:Label ID="lblAdmissionNo" runat="server" Text='<%#Eval("admissionno") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   <asp:TemplateField HeaderText="FirstName and LastName">
   <ItemTemplate>
   <asp:LinkButton ID="lnkFirstLastName" runat="server" Text='<%#Eval("firstname") + " " + Eval("lastname")%>' Visible="false"></asp:LinkButton>
  <asp:Label ID="lblFirstLastName" runat="server" Text='<%#Eval("firstname") + " " + Eval("lastname")%>' Visible="false"></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   <asp:TemplateField HeaderText="Class">
   <ItemTemplate>
   <asp:Label ID="lblClass" runat="server" Text='<%#Eval("class") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   <asp:TemplateField HeaderText="Section">
   <ItemTemplate>
   <asp:Label ID="lblSection" runat="server" Text='<%#Eval("section") %>'  ></asp:Label> </ItemTemplate>
   </asp:TemplateField>
   <asp:TemplateField HeaderText="Email">
   <ItemTemplate >
   <asp:Label ID="lblEmail"  runat="server" Text='<%#Eval("email") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   </Columns>
       <RowStyle BackColor="Silver" HorizontalAlign="Left" VerticalAlign="Top" />
       <HeaderStyle BackColor="Black" ForeColor="White" />
       <AlternatingRowStyle BackColor="Silver" />
       <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PreviousPageText="" />
       <PagerStyle ForeColor="Black" HorizontalAlign="Center" BackColor="#E0E0E0" />
   </asp:gridview>

   </td>
   </tr>
    </table>
   </fieldset> 
   </center> 
    </div>
    </form>
     
</body>
</html>
