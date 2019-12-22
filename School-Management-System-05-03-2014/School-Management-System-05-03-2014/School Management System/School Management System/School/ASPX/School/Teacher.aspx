<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Teacher.aspx.cs" Inherits="Teacher" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="stylesheet.css" rel="stylesheet" runat="server" />
   <script language="javascript" type="text/javascript">
   

function mobilenumber(evt)
 {
  var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode == 46 || charCode > 94 || charCode > 31 && (charCode < 48 || charCode > 57))
    { 
             return false;
     
    }      
    return true;
 }

function calendardate()
{

var firstdate = document.getElementById('txtDateOfBirth').value;
 var lastdate = document.getElementById('txtJoinDate').value;
var today = new Date();
var currentdate = today.getDate();
var currentyear=today.getFullYear();
var currentmonth=today.getMonth() + 1;

 var n = firstdate;
 var posmonth = firstdate.indexOf("/"); 
 var n1 = lastdate;
 var posmonth1 = lastdate.indexOf("/");

 if(posmonth == 1)
 n = "0" + firstdate;
 if(posmonth1 == 1)
   n1 = "0" + lastdate;

if(n.lastIndexOf("/") == 4 )
   n = n.replace("/","/0");
 if(n1.lastIndexOf("/") == 4 )
   n1 = n1.replace("/","/0");

 var month=n.substr(0,2);
 var month1=n1.substr(0,2);
 var date=n.substr(3,2); 
 var date1=n1.substr(3,2); 
 var year=n.substr(6,4);
 var year1=n1.substr(6,4);

  
if(firstdate != "" && lastdate != "")
{

if(firstdate == lastdate)
{

document.getElementById('txtDateOfBirth').value = "";
document.getElementById('txtJoinDate').value = "";
alert('dates should not be equal');
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(year1 < year)
 {

   alert('joined year should not be earlier than birth year');
   document.getElementById('txtJoinDate').value = "";
   document.getElementById('txtJoinDate').focus();
   return false;
 }
if(year > currentyear)
{
alert('Date of Birth should not be greater than current year');
document.getElementById('txtDateOfBirth').value = "";
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(month1 > currentmonth && month1 <= 12)
{
alert('joindate month should not be greater than current month');
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtJoinDate').focus();
return false;
}
 
if(year1 > currentyear)
{
alert('joining year should not be greater than current year');
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtJoinDate').focus();
return false;
} 
if(year1 == year)
{

alert('joined year and birth year should not be equal');

document.getElementById('txtDateOfBirth').value = "";
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtDateOfBirth').focus();
return false;

}
if(month > 12)
{
alert('please enter date of birth in the format of mm/dd/yyyy');
document.getElementById('txtDateOfBirth').value="";
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(month1 > 12)
{
alert('please enter joining date in the format of mm/dd/yyyy');
document.getElementById('txtJoinDate').value="";
document.getElementById('txtJoinDate').focus();
return false;
}
if(year1 != year &&  year1 > year && month < 12 && month1 < !2)
{
return true;
}

}
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



function validateupdatefields(id)
{
calendardate();
var buttontext=document.getElementById(id).value;
var mobile=document.getElementById('txtContactNo').value;
var mobilelength=mobile.length;
  str='';
 
  if(document.getElementById('txtName').value =='')
  {
  str+='\n-FirstName Required'
  }
 
   if(document.getElementById('txtFatherName').value =='')
  {
  str+='\n-FatherName Required'
  }
   if(document.getElementById('txtQualification').value =='')
  {
  str+='\n-Qualification Required'
  }
   if(document.getElementById('txtSubject').value =='')
  {
  str+='\n-Subject Required'
  }
  
   if(document.getElementById('txtDateOfBirth').value =='')
  {
  str+='\n-Date of birth Required'
  }
 if(document.getElementById('txtJoinDate').value =='')
  {
  str+='\n-joindate Required'
  }
    if(document.getElementById('txtEmail').value =='')
  {
  str+='\n-Email Required'
  }
   
   if(document.getElementById('txtContactNo').value =='')
  {
  str+='\n-ContactNo Required'
  }
     if(document.getElementById('txtAddress').value =='')
  {
  str+='\n-Address Required'
  }
    
if(buttontext=='Register')
{
    if(document.getElementById('txtUserName').value =='')
  {
  str+='\n-UserName Required'
  }
   if(document.getElementById('txtPassword').value =='')
  {
  str+='\n-Password Required'
  }
   if(document.getElementById('txtConfirmPassword').value =='')
  {
  str+='\n-ConfirmPassword Required'
  }
}
  
 if(str!='')
    {
    alert('Please check following fields'+str);
    return false;
    } 
   if(mobilelength != 10)
  {
 alert('contact number should be of 10 digits');
  return false;
  }
   return true; 
}


function CalWindowOpen2()
{
window.open("Calendar.aspx?id=1","MyWindow","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
}


function CalWindowOpen1()
{
window.open("Calendar.aspx?id=2","MyWindow","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
}


function numericcheck(x)
{

var s_len=x.value.length;
var s_charcode = 0;
    for (var s_i=0;s_i<s_len;s_i++)
    {
     s_charcode = x.value.charCodeAt(s_i);
     if(!((s_charcode>=47 && s_charcode<=57)))
      {
         alert("Only Numeric Values and ' / ' are  Allowed for dates");
          x.value='';
         x.focus();
        return false;
      }
    }
    return true;
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

function windowclose()
{
window.close('Teacher.aspx');
}

function ClearAllFields()
{
document.getElementById('txtName').value="";
document.getElementById('txtFatherName').value="";
document.getElementById('txtDateOfBirth').value="";
document.getElementById('txtJoinDate').value ='';
document.getElementById('txtUserName').value="";
document.getElementById('txtPassword').value="";
document.getElementById('txtConfirmPassword').value="";
document.getElementById('txtEmail').value="";
document.getElementById('txtAddress').value="";
document.getElementById('txtContactNo').value="";


} 
 
   </script> 
</head>
<body>
    <form id="form1" runat="server">
    <div>
   <fieldset  style="width: 809px; height: 314px" ><legend id="lgdTeacherRegistration" runat="server"> <b><span style="color: #ffffff">Teacher Registration</span></b></legend>
   <center>
  <table >
  <tr>
  <td>
  
  
    <table >
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Name </span>
   </td>
   <td style="text-align: left">
   <asp:TextBox ID="txtName" runat="server" CssClass="textbox"></asp:TextBox><span style="color: #ff0066">*</span>
   </td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">Father Name</span>
   </td>
   <td style="text-align: left">
   <asp:TextBox ID="txtFatherName" runat="server" CssClass="textbox"></asp:TextBox><span
       style="color: #ff0066">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left; height: 26px;">
       <span style="color: #ffffff">
   Qualification</span>
   </td>
   <td style="text-align: left; height: 26px;">
   <asp:TextBox ID="txtQualification" runat="server" CssClass="textbox"></asp:TextBox><span
       style="color: #ff0066">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Subject </span>
   </td>
   <td style="text-align: left">
   <asp:TextBox ID="txtSubject" runat="Server" CssClass="textbox"></asp:TextBox><span
       style="color: #ff0066">*</span>
   </td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Date Of Birth</span>
   </td>
   <td style="text-align: left">
  <input type="text" runat="server" id="txtDateOfBirth" class="textbox" maxlength="10" onblur="javascript:return calendardate()" onchange="javascript:return numericcheck(this)"/><span
      style="color: #ff0066">*</span></td>
   <td>
   <asp:Button ID="btnCalendar" runat="server" OnClientClick="javascript:CalWindowOpen2()" CssClass="button" Text=".." Width="21px"/>
   </td>
   </tr>
   <tr>
   <td>
       <span style="color: #ffffff">Date Of Joining</span>
   </td>
   <td style="text-align: left">
   <input type="text" runat="server" class="textbox" onblur="javascript:return calendardate()" onchange="javascript:return numericcheck(this)" id="txtJoinDate"/><span
       style="color: #ff0066">*</span></td>
   <td>
    <asp:Button ID="Button1" runat="server" OnClientClick="javascript:CalWindowOpen1()" CssClass="button" Text=".." Width="21px"/>
   </td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Email </span>
   </td>
   <td style="text-align: left">
 <input type="text" runat="server" id="txtEmail" onchange="javascript:return isvalidEmail()"  class="textbox" /><span
     style="color: #ff0066">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">Contact No</span>
   </td>
   <td style="text-align: left">
   <input type="text" id="txtContactNo" runat="server" class="textbox" onkeypress="javascript:return mobilenumber(event)" maxlength="10" /><span
       style="color: #ff0066">*</span></td>
   </tr>
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Address </span>
   </td>
   <td style="text-align: left" valign="top">
   <asp:TextBox ID="txtAddress" runat="server" CssClass="textbox" TextMode="MultiLine"></asp:TextBox><span
       style="color: #ff3366">*</span></td>
   </tr>
   
   <tr>
   <td style="text-align: right; height: 24px;">
   <asp:Button ID="btnRegister" CssClass="button" OnClientClick="javascript:return validateupdatefields(this.id)" runat="server"  Text="Register" OnClick="btnRegister_Click" />
   </td>
   <td style="text-align: left; height: 24px;">
   <asp:Button ID="btnReset" OnClientClick="javascript:ClearAllFields()"  CssClass="button" runat="server" Text="Reset" OnClick="btnReset_Click" />
       <asp:Button ID="btnClose" runat="server" CssClass="button" OnClientClick="javascript:windowclose()" Text="Close" /></td>
   </tr>
   
    </table>
   </td>
<td>
<fieldset id="fldUsernameDetails" runat="server" ><legend><b><span style="color: #ffffff">Login Credentials</span></b></legend>
<table id="tblUsernameDetails" runat="server" style="width: 351px; height: 88px" >
<tr>
<td style="text-align: left; height: 26px;">
    <span style="color: #ffffff">User Name </span>
</td>
<td style="height: 26px">
<asp:TextBox ID="txtUserName" runat="server" CssClass="textbox" ReadOnly="True"></asp:TextBox><span
    style="color: #ff3366">*</span>
</td>
<td style="height: 26px">
<asp:LinkButton ID="lnkEmailSelect" runat="server" Text="SelectEmail" OnClick="lnkEmailSelect_Click" Width="76px"></asp:LinkButton>
</td>
</tr>
<tr>
<td style="text-align: left">
    <span style="color: #ffffff">Password </span>
</td>
<td>
<input type="password" id="txtPassword" runat="server" class="textbox" onchange="javascript:return passwordsmismatch()" maxlength="20" /><span
    style="color: #ff3366">*</span>
</td>
</tr>
<tr>
<td style="text-align: left">
    <span style="color: #ffffff">
Confirm Password</span>
</td>
<td>
<input type="password" id="txtConfirmPassword" runat="server" class="textbox" onchange="javascript:return passwordsmismatch()" maxlength="20" /><span
    style="color: #ff3366">*</span></td>
</tr>
</table>
</fieldset>
</td>

  </tr>
  </table> 
   </center>  
   </fieldset> 
    </div>
    </form>
</body>
</html>
