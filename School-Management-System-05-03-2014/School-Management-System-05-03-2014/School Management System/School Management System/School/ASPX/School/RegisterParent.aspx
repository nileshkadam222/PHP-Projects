<%@ Page Language="C#" AutoEventWireup="true" CodeFile="RegisterParent.aspx.cs" Inherits="RegisterParent" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="stylesheet.css" runat="server" rel="stylesheet" />

<script type="text/javascript" language="javascript" >

function validateparentfields(id)
{
var str='';
var buttonname=document.getElementById(id).value;
if(document.getElementById('txtFirstName').value == '')
{
str+='\n FirstName is Required'
}

if(document.getElementById('txtLastName').value == '')
{
str+='\n LastName is Required'
}


if(document.getElementById('txtEmail').value == '')
{
str+='\n Email is Required'
}


if(document.getElementById('txtContactNo').value == '')
{
str+='\n ContactNo is Required'
}
if(document.getElementById('txtAddress').value == '')
{
str+='\n Address is Required'
}
if(buttonname=="Register")
{
if(document.getElementById('txtUserName').value == '')
{
str+='\n UserName is Required'
}
if(document.getElementById('txtPassword').value == '')
{
str+='\n Password is Required'
}
if(document.getElementById('txtConfirmPassword').value == '')
{
str+='\n Confirm Password is Required'
}
if(document.getElementById('ddlStudent').value == '')
{
str+='\nPlease Select Student Firstname'
}
if(document.getElementById('ddlClass').value == '--Select Class--')
{
str+='\n Class is Required'
}
if(document.getElementById('ddlSection').value == '--Select Section--')
{
str+='\n Section is Required'
}
if(document.getElementById('ddlStudentLastName').value == '')
{
str+='\n Please Select Student Lastname'
}
if(document.getElementById('ddlStudentEmail').value == '')
{
str+='\n Please Select Student Email'
}
}
if(str != '')
{
alert('please check following fields' +str);
return false;
}
return true;
}

function emailfieldcheck()
{
if(document.getElementById('txtEmail').value == '')
{
alert('please enter email and then select email');
return false;
}
return true
}

function passwordsmismatch()
{
var password=document.getElementById('txtPassword').value;
var confirmpassword=document.getElementById('txtConfirmPassword').value;
if(password != "")
{
if(confirmpassword != "")
{
if(password != confirmpassword)
{
alert(password);alert(confirmpassword);
document.getElementById('txtPassword').value="";
document.getElementById('txtConfirmPassword').value="";
alert('passwords mismatch');
return false;
}
return true;
}
}
}

function mobilenumber(evt)
 {
  var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode == 46 || charCode > 94 || charCode > 31 && (charCode < 48 || charCode > 57))
    { 
             return false;
     
    }      
    return true;
 }

function isvalidEmail()
{
 var email = document.getElementById('txtEmail');
 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 if (!filter.test(email.value))
 {
//document.getElementById('txtEmail').value=""; 
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

function windowclose()
{
window.close("RegisterParent.aspx");
}

function clearallfields()
{

document.getElementById('txtFirstName').value = '';
document.getElementById('txtLastName').value = '';
document.getElementById('ddlClass').value = '--Select Class--';
document.getElementById('ddlSection').value = '--Select Section--';
document.getElementById('txtEmail').value = '';
document.getElementById('ddlStudent').value = '';
document.getElementById('ddlStudentLastName').value = '';
document.getElementById('txtContactNo').value = '';
document.getElementById('txtAddress').value = '';
document.getElementById('txtUserName').value = '';
document.getElementById('txtPassword').value = '';
document.getElementById('txtConfirmPassword').value = '';
return false;
}

</script>
</head>
<body style="text-align: left">
    <form id="form1" runat="server">
    <div>
   <center>
   <fieldset style="width: 811px; height: 452px"><legend id="lgdParentRegistration" runat="server" ><b><span style="color: #ffffff">Parent Registration</span></b></legend>
    <table id="tblParentDetails" runat="server" style="width: 787px; height: 411px">
   <tr>
   <td style="text-align: left; width: 374px;">
       <span style="color: #ffffff">
   FirstName </span>
   </td>
   <td style="width: 2433px; text-align: left">
   <asp:TextBox id="txtFirstName" runat="server" CssClass="textbox"></asp:TextBox><span
       style="color: #ff0000">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left; width: 374px;">
       <span style="color: #ffffff">
   LastName </span>
   </td>
   <td style="width: 2433px; text-align: left">
   <asp:TextBox id="txtLastName" runat="server" CssClass="textbox" ></asp:TextBox><span
       style="color: #ff0000">*</span></td>
  <td rowspan="7" style="width: 63px">
  <fieldset id="fldUsernameDetails" runat="server" ><legend><b><span style="color: #ffffff">Enter Login Credentials</span></b></legend>
  <center>
  <table id="tblUsernameDetails" runat="server"  style="width: 345px; height: 122px">
  
  <tr>
  <td style="text-align: left; width: 111px;">
      <span style="color: #ffffff">
  UserName </span>
  </td>
  <td style="text-align: left; width: 205px;">
  <asp:TextBox ID="txtUserName" runat="server" CssClass="textbox" ReadOnly="True" ></asp:TextBox><span
      style="color: #ff0000">*<asp:LinkButton ID="lnkEmailSelect" runat="server" OnClientClick="javascript:return emailfieldcheck()" OnClick="lnkEmailSelect_Click">Select Email</asp:LinkButton></span>

  </td>
  </tr>
  <tr>
  <td style="text-align: left; width: 111px;">
      <span style="color: #ffffff">
  Password</span>
  </td>
  <td style="width: 205px; text-align: left;">
  <input type="password" id="txtPassword"  runat="server" onchange="javascript:return passwordsmismatch()" class="textbox"/><span
      style="color: #ff0000">*</span></td>
  </tr>
  <tr>
  <td style="width: 111px; text-align: left">
      <span style="color: #ffffff">ConfirmPassword</span>
  </td>
  <td style="width: 205px; text-align: left;">
  <input type="password" id="txtConfirmPassword" runat="server" onchange="javascript:return passwordsmismatch()" class="textbox"/><span
      style="color: #ff0000">*&nbsp;</span></td>
  </tr>
  </table>
  </center>
  </fieldset>
  </td>
   </tr>
   <tr>
   <td style="text-align: left; width: 374px; height: 37px;">
   <table>
   <tr id="rowStudentClassSection" runat="server">
   <td>
   <span style="color: #ffffff">
   Parent of Student
   
</span>
   </td>
   </tr>
   <tr>
   <td  id="colStudentClassSection" runat="server">
   <span style="color: #ffffff">
       (select class,section)
   </span>
   </td>
   </tr>
   </table>
       </td>
   <td style="width: 2433px; text-align: left; height: 37px;" id="colClassAndSection" runat="server">
   <asp:DropDownList ID="ddlClass" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlClass_SelectedIndexChanged" >
       <asp:ListItem>--Select Class--</asp:ListItem>

       <asp:ListItem>Nursery</asp:ListItem>
       <asp:ListItem>LKG</asp:ListItem>
       <asp:ListItem>UKG</asp:ListItem>
       <asp:ListItem>1st</asp:ListItem>
       <asp:ListItem>2nd</asp:ListItem>
       <asp:ListItem>3rd</asp:ListItem>
       <asp:ListItem>4th</asp:ListItem>
       <asp:ListItem>5th</asp:ListItem>
       <asp:ListItem>6th</asp:ListItem>
       <asp:ListItem>7th</asp:ListItem>
       <asp:ListItem>8th</asp:ListItem>
       <asp:ListItem>9th</asp:ListItem>
       <asp:ListItem>10th</asp:ListItem>
   </asp:DropDownList><span style="color: #ff0000">* </span>

   
   <asp:DropDownList ID="ddlSection" runat="server" OnSelectedIndexChanged="ddlSection_SelectedIndexChanged" AutoPostBack="True" >
       <asp:ListItem>--Select Section--</asp:ListItem>

       <asp:ListItem>A</asp:ListItem>
       <asp:ListItem>B</asp:ListItem>
   </asp:DropDownList><span style="color: #ff0033">*</span>
       &nbsp;
   </td>
   </tr>
        <tr>
            <td style="text-align: left; width: 374px;">
                <table style="width: 172px; height: 59px">
   <tr>
   <td style="width: 171px" id="colParentOfStudent" runat="server" >
   <span style="color: #ffffff">
   Parent of Student
   
</span>
   </td>
   </tr>
   <tr id="rowStudentFirstLastNames" runat="server" >
   <td style="width: 171px">
   <span style="color: #ffffff">
(select firstname,lastname)</span></td>
   </tr>
   </table> 
   </td>
            <td style="width: 2433px; text-align: left" id="colFirstAndLastNames" runat="server">
  
   <asp:DropDownList ID="ddlStudent" runat="server" OnSelectedIndexChanged="ddlStudent_SelectedIndexChanged" AutoPostBack="True"  >
       <asp:ListItem></asp:ListItem>
   </asp:DropDownList><span style="color: #ff0000">*</span><asp:DropDownList ID="ddlStudentLastName" runat="server" OnSelectedIndexChanged="ddlStudentLastName_SelectedIndexChanged" AutoPostBack="True">
       <asp:ListItem></asp:ListItem>
                </asp:DropDownList><span style="color: #ff0000">*</span></td>
        </tr>
        <tr id="rowStudentEmail" runat="server">
            <td style="width: 374px; text-align: left">
                <span style="color: #ffffff">Select StudentEmail</span></td>
            <td style="width: 2433px; text-align: left">
                <asp:DropDownList ID="ddlStudentEmail" runat="server">
                </asp:DropDownList></td>
        </tr>
   <tr>
   <td style="text-align: left; width: 374px;">
       <span style="color: #ffffff">
   Email </span>
   </td>
   <td style="width: 2433px; text-align: left">
<input type="text" id="txtEmail" runat="server" onchange="javascript:return isvalidEmail()" class="textbox"/><span
    style="color: #ff0000">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left; width: 374px;">
       <span style="color: #ffffff">
   Phone </span>
   </td>
   <td style="width: 2433px; text-align: left">
   <input type="text" id="txtContactNo" onkeypress="javascript:return mobilenumber(event)"
                                            class="textbox" runat="server" maxlength="10" size="10" tabindex="10" /><span style="color: #ff0000">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left; width: 374px;">
       <span style="color: #ffffff">
   Address </span>
   </td>
   <td style="width: 2433px; text-align: left">
   <asp:TextBox ID="txtAddress" runat="server" CssClass="textbox" TextMode="MultiLine" ></asp:TextBox><span
       style="color: #ff0000">*</span></td>
   </tr>
   <tr>
   <td style="text-align: right; width: 374px; height: 16px;">
       &nbsp;<asp:Button ID="btnRegister" OnClientClick="javascript:return validateparentfields(this.id)" runat="server" CssClass="button" OnClick="btnRegister_Click" Text="Register" /></td>
   <td style="text-align: left; width: 2433px; height: 16px;">
       &nbsp;<asp:Button ID="btnCancel" runat="server" CssClass="button" Text="Reset" OnClientClick="javascript:clearallfields()" OnClick="btnCancel_Click"/>
   </td>
   <td style="text-align: right; height: 16px;">
   <asp:Button ID="btnClose" runat="server" Text="Close" CssClass="button" OnClientClick="javascript:windowclose()"/>
   </td>
   </tr>
    </table>
   </fieldset> 
   </center>  
    </div>
    </form>
</body>
</html>
