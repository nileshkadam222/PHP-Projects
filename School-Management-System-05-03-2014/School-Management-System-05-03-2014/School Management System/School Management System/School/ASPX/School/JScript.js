// JScript File
function LoginValidation()
{      
            var username=document.getElementById('txtName').value;
            var password=document.getElementById('txtPassword').value;
             if(username == "" && password == "")
            {
            alert('Please enter your User name and Password');
            document.getElementById('txtName').focus();
            return false;
            } 
            if(username == "" || password == "")
            {
                if(username == "")
                {
                alert('Please enter your UserName');
                document.getElementById('txtName').focus();
                }
                else
                {
                alert('Please enter your Password');
                document.getElementById('txtPassword').focus();
                }
            return false;
           }
            else
            {
            return true;
            }
}


function ClearFields()
{
document.getElementById('txtName').value="";
document.getElementById('txtPassword').value="";
document.getElementById('txtName').focus();
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
alert('Please provide a valid amail address in the form of "user@domain.com"');
document.getElementById('txtEmail').value="";
return false;
}
else if(filter.test(email.value))
{
return true;
}
}




function isvalidUsername()
{
 var username = document.getElementById('txtUserName');
 var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 if (!emailfilter.test(username.value))
 {
document.getElementById('txtUserName').focus();
alert('Please provide a valid email address in the form of "user@domain.com"');
document.getElementById('txtUserName').value="";
return false;
}
else if(emailfilter.test(username.value))
{
return true;
}
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
alert('Passwords Mismatch');
return false;
}
return true;
}
}
}



function validateupdatefields(id)
{


var buttontext=id.innerHTML
var sometext=document.getElementById('btnLogin').value;

calendardate();
var mobile=document.getElementById('txtContactNo').value;
var mobilelength=mobile.length;
  str='';
  if(document.getElementById('txtAdmissionNo').value =='')
  {
  str+='\n-Admission number Required'
  }
  if(document.getElementById('txtFirstName').value =='')
  {
  str+='\n-FirstName Required'
  }
  if(document.getElementById('txtLastName').value =='')
  {
  str+='\n-LastName Required'
  }
   if(document.getElementById('txtFatherName').value =='')
  {
  str+='\n-FatherName Required'
  }
   if(document.getElementById('txtDateOfBirth').value =='')
  {
  str+='\n-Date of birth Required'
  }
    if(document.getElementById('ddlSection').value =='--Select Section--')
  {
  str+='\n-Section Required'
  }
    if(document.getElementById('txtJoinDate').value =='')
  {
  str+='\n-Joindate Required'
  }
  
    if(document.getElementById('txtBloodGroup').value =='')
  {
  str+='\n-Blood group Required'
  }
  
   if(document.getElementById('txtContactNo').value =='')
  {
  str+='\n-ContactNo Required'
  }
     if(document.getElementById('txtAddress').value =='')
  {
  str+='\n-Address Required'
  }
      if(document.getElementById('txtEmail').value =='')
  {
  str+='\n-Email Required'
  }
         if(document.getElementById('ddlBusFacility').value =='--Select Bus Facility--')
  {
  str+='\n-Bus facility Required'
  }
  
     if(document.getElementById('txtRollNo').value =='')
  {
  str+='\n-Rollno Required'
  }
  if(document.getElementById('ddlClass').value =='--Select Class--')
  {
  str+='\n-Class Required'
  }
   if(sometext=='Register')
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
 alert('Contact Number should be of 10 digits');
  return false;
  }
   return true; 
}


 
 
function ClearAllFields()
{
document.getElementById('txtFirstName').value="";
document.getElementById('txtLastName').value="";
document.getElementById('txtFatherName').value="";
document.getElementById('txtDateOfBirth').value="";
document.getElementById('txtJoinDate').value="";
document.getElementById('ddlClass').value="--Select Class--";
document.getElementById('ddlSection').value="--Select Section-- ";
document.getElementById('ddlBusFacility').value="--Select Bus Facility--";
document.getElementById('txtUserName').value="";
document.getElementById('txtPassword').value="";
document.getElementById('txtConfirmPassword').value="";
document.getElementById('imgStudent').imageUrl="";
document.getElementById('txtBloodGroup').value="";
document.getElementById('txtEmail').value="";
document.getElementById('txtAddress').value="";
document.getElementById('txtContactNo').value="";
document.getElementById('txtRollNo').value="";


} 
function CalWindowOpen1()
{
window.open("Calendar.aspx?id=1","MyWindow","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
}
function CalWindowOpen2()
{
window.open("Calendar.aspx?id=2","MyWindow","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
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
alert('Dates should not be equal');
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(year1 < year)
 {

   alert('JoinedYear Should not be earlier than BirthYear');
   document.getElementById('txtJoinDate').value = "";
   document.getElementById('txtJoinDate').focus();
   return false;
 }
if(year > currentyear)
{
alert('DateOfBirth should not be greater than CurrentYear');
document.getElementById('txtDateOfBirth').value = "";
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(month1 > currentmonth && month1 <= 12)
{
alert('JoinDate Month should not be greater than CurrentMonth');
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtJoinDate').focus();
return false;
}
 
if(year1 > currentyear)
{
alert('JoiningYear should not be greater than CurrentYear');
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtJoinDate').focus();
return false;
} 
if(year1 == year)
{

alert('JoinedYear and BirthYear should not be equal');

document.getElementById('txtDateOfBirth').value = "";
document.getElementById('txtJoinDate').value = "";
document.getElementById('txtDateOfBirth').focus();
return false;

}
if(month > 12)
{
alert('Please Enter DateOfBirth in the format of mm/dd/yyyy');
document.getElementById('txtDateOfBirth').value="";
document.getElementById('txtDateOfBirth').focus();
return false;
}
if(month1 > 12)
{
alert('Please Enter JoiningDate in the format of mm/dd/yyyy');
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


function numericcheck(x)
{

var s_len=x.value.length;
var s_charcode = 0;
    for (var s_i=0;s_i<s_len;s_i++)
    {
     s_charcode = x.value.charCodeAt(s_i);
     if(!((s_charcode>=47 && s_charcode<=57)))
      {
         alert("Only Numeric Values and ' / ' are  Allowed for Dates");
          x.value='';
         x.focus();
        return false;
      }
    }
    return true;
}

