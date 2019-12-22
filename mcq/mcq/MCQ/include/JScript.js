
//============== Registration validation form================================


function valreg()
{
    var fname=document.getElementById("ctl00_ContentPlaceHolder1_txtfname").value;
    if (fname=="")
    {
        alert("Pleas Enter First Name");
        document.getElementById("ctl00_ContentPlaceHolder1_txtfname").focus()
        return false;
    }
    var mname=document.getElementById("ctl00_ContentPlaceHolder1_txtmname").value;
    if (mname=="")
    {
        alert("Pleas Enter Midel Name");
        document.getElementById("ctl00_ContentPlaceHolder1_txtmname").focus()
        return false;
    }
    var lname=document.getElementById("ctl00_ContentPlaceHolder1_txtlname").value;
    if (lname=="")
    {
        alert("Pleas Enter Last Name");
        document.getElementById("ctl00_ContentPlaceHolder1_txtlname").focus()
        return false;
    }
    var email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    if (email=="")
    {
        alert("Pleas Enter E Mail");
        document.getElementById("ctl00_ContentPlaceHolder1_txtemail").focus()
        return false;
    }
    var Email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/
            var EmailmatchArray = Email.match(emailPat);
    if (EmailmatchArray == null) {
            alert("Your email address seems incorrect. Please try again.");
            document.getElementById("ctl00_ContentPlaceHolder1_txtemail").focus()
        return false;
    }

    var password=document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").value;
    if (password=="")
    {
        alert("Pleas Enter Password");
        document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").focus();
        return false;
    }
     if (password.length>16)
           {
                alert("enter Maximum 16 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").focus();
                return false;
           }
           if (password.length<8)
           {
                alert("enter Minimum 8 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").focus();
                return false;
           }
    var cpassword=document.getElementById("ctl00_ContentPlaceHolder1_txtconpassword").value;
    if (password=="")
    {
        alert("Pleas Enter Password");
        document.getElementById("ctl00_ContentPlaceHolder1_txtconpassword").focus();
        return false;
    }
        
    if (password!=cpassword)
    {
        alert("Password & Conform Password Not Match");
        document.getElementById("ctl00_ContentPlaceHolder1_txtconpassword").focus();
        return false;
    }
    var address=document.getElementById("ctl00_ContentPlaceHolder1_txtaddress").value;
    if (address=="")
    {
        alert("Pleas Enter Address");
        document.getElementById("ctl00_ContentPlaceHolder1_txtaddress").focus();
        return false;
    }
    var city=document.getElementById("ctl00_ContentPlaceHolder1_txtcity").value;
    if (city=="")
    {
        alert("Pleas Enter City");
        document.getElementById("ctl00_ContentPlaceHolder1_txtcity").focus();
        return false;
    }
    var state=document.getElementById("ctl00_ContentPlaceHolder1_txtstate").value;
    if (state=="")
    {
        alert("Pleas Enter State");
        document.getElementById("ctl00_ContentPlaceHolder1_txtstate").focus();
        return false;
    }
    
    var mobile=document.getElementById("ctl00_ContentPlaceHolder1_txtcontact").value;
    if(mobile=="")
    {
        alert('Please enter Contact No') 
      document.getElementById("ctl00_ContentPlaceHolder1_txtcontact").focus(); 
      return false;
    }
    if(isNaN(mobile)||mobile.indexOf(" ")!=-1)
           {
              alert("Enter numeric value");
              document.getElementById("ctl00_ContentPlaceHolder1_txtcontact").focus();
              return false; 
           }
           if (mobile.length>10)
           {
                alert("enter 10 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtcontact").focus();
                return false;
           }
           if (mobile.length<10)
           {
                alert("enter 10 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtcontact").focus();
                return false;
           }
           var qualification=document.getElementById("ctl00_ContentPlaceHolder1_ddlquali").value;
    if (qualification=="quali")
    {
        alert("Pleas Select Qualification");
        document.getElementById("ctl00_ContentPlaceHolder1_ddlquali").focus()
        return false;
    }
   
}


//============================Login vallidation=============

function vallogin()
{
    var email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    if (email=="")
    {
        alert("Pleas Enter E Mail");
        document.getElementById("ctl00_ContentPlaceHolder1_txtemail").focus()
        return false;
    }
     var Email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/
            var EmailmatchArray = Email.match(emailPat);
    if (EmailmatchArray == null) {
            alert("Your email address seems incorrect. Please try again.");
            document.getElementById("ctl00_ContentPlaceHolder1_txtemail").focus()
        return false;
    }
    var password=document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").value;
    if (password=="")
    {
        alert("Pleas Enter Password");
        document.getElementById("ctl00_ContentPlaceHolder1_txtpassword").focus();
        return false;
    }
}



//====================================Feedback form val==================


function valfeed()
{
        var fname=document.getElementById("ctl00_ContentPlaceHolder1_txtname").value;
    if (fname=="")
    {
        alert("Pleas Enter Name");
        document.getElementById("ctl00_ContentPlaceHolder1_txtname").focus()
        return false;
    }
    var email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    if (email=="")
    {
        alert("Pleas Enter E Mail");
        document.getElementById("ctl00_ContentPlaceHolder1_txtemail").focus()
        return false;
    }
    var Email=document.getElementById("ctl00_ContentPlaceHolder1_txtemail").value;
    var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/
            var EmailmatchArray = Email.match(emailPat);
    if (EmailmatchArray == null) {
            alert("Your email address seems incorrect. Please try again.");
        return false;
    }
     var comment=document.getElementById("ctl00_ContentPlaceHolder1_txtcomment").value;
    if (comment=="")
    {
        alert("Pleas Enter Comment");
        document.getElementById("ctl00_ContentPlaceHolder1_txtcomment").focus()
        return false;
    }
}

//====================================changepassword form=============

function changepass()
{
    var cpassword=document.getElementById("ctl00_ContentPlaceHolder1_txtcpassword").value;
    if (cpassword=="")
    {
        alert("Pleas Enter Password");
        document.getElementById("ctl00_ContentPlaceHolder1_txtcpassword").focus();
        return false;
    }
    
    
    if (cpassword.length>16)
           {
                alert("enter Maximum 16 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtcpassword").focus();
                return false;
           }
           if (cpassword.length<8)
           {
                alert("enter Minimum 8 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtcpassword").focus();
                return false;
           }
     var npassword=document.getElementById("ctl00_ContentPlaceHolder1_txtnpassword").value;
     if (npassword.length>16)
           {
                alert("enter Maximum 16 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtnpassword").focus();
                return false;
           }
           if (npassword.length<8)
           {
                alert("enter Minimum 8 characters");
                document.getElementById("ctl00_ContentPlaceHolder1_txtnpassword").focus();
                return false;
           }
        var conpassword=document.getElementById("ctl00_ContentPlaceHolder1_txtconpassword").value;
    if (npassword!=conpassword)
    {
        alert("Password & Conform Password Not Match");
        document.getElementById("ctl00_ContentPlaceHolder1_txtconpassword").focus();
        return false;
    }  
    
    
}

//================admin panal subject     vall==========
function valsub()
{
    var Subject=document.getElementById("ctl00_ContentPlaceHolder1_txtsubject").value;
    if (Subject=="")
    {
        alert("Pleas Enter Subject");
        document.getElementById("ctl00_ContentPlaceHolder1_txtsubject").focus();
        return false;
    }
}




//================admin panal quastion add     vall==========
function valquestion()
{
    var question=document.getElementById("ctl00_ContentPlaceHolder1_txtquestion").value;
    if (question=="")
    {
        alert("Pleas Enter Question");
        document.getElementById("ctl00_ContentPlaceHolder1_txtquestion").focus();
        return false;
    }
     var a=document.getElementById("ctl00_ContentPlaceHolder1_txta").value;
    if (a=="")
    {
        alert("Pleas Enter Option A");
        document.getElementById("ctl00_ContentPlaceHolder1_txta").focus();
        return false;
    } 
    var b=document.getElementById("ctl00_ContentPlaceHolder1_txtb").value;
    if (b=="")
    {
        alert("Pleas Enter Option B");
        document.getElementById("ctl00_ContentPlaceHolder1_txtb").focus();
        return false;
    }
     var ans=document.getElementById("ctl00_ContentPlaceHolder1_ddlans").value;
    if (ans=="Ans")
    {
        alert("Pleas Select  Question Answer");
        document.getElementById("ctl00_ContentPlaceHolder1_ddlans").focus();
        return false;
    }
}



//================admin panal Exam Configuration  vall==========
function valExamconfig()
{
    var tq=document.getElementById("ctl00_ContentPlaceHolder1_txttotalquestion").value;
    if (tq=="")
    {
        alert("Pleas Enter Total Question");
        document.getElementById("ctl00_ContentPlaceHolder1_txttotalquestion").focus();
        return false;
    }
    
    if (isNaN(tq))
    {
        alert("Pleas Enter Total Question Numeric");
        document.getElementById("ctl00_ContentPlaceHolder1_txttotalquestion").focus();
        return false;
    }
     var mpq=document.getElementById("ctl00_ContentPlaceHolder1_txtmpq").value;
    if (mpq=="")
    {
        alert("Pleas Enter Mark Per Question");
        document.getElementById("ctl00_ContentPlaceHolder1_txtmpq").focus();
        return false;
    }
    
    if (isNaN(mpq))
    {
        alert("Pleas Enter Mark Per Question Numeric");
        document.getElementById("ctl00_ContentPlaceHolder1_txtmpq").focus();
        return false;
    } 
    var etime=document.getElementById("ctl00_ContentPlaceHolder1_txtexamtime").value;
    if (etime=="")
    {
        alert("Pleas Enter Exam Time");
        document.getElementById("ctl00_ContentPlaceHolder1_txtexamtime").focus();
        return false;
    }
    if (isNaN(etime))
    {
        alert("Pleas Enter Exam Time Numeric");
        document.getElementById("ctl00_ContentPlaceHolder1_txtexamtime").focus();
        return false;
    }
}



//=========================delete message==================

function confirmation()
            {
                if(confirm("Are you sure to delete ? "))
                    return true;
               else
                    return false;
            }


function updatemsg()
            {
                if(confirm("Are you sure to Update ? "))
                    return true;
               else
                    return false;
            }
function confirmationlogout()
            {
                if(confirm("Are you sure to LogOut ? "))
                    return true;
               else
                    return false;
            }
            function finishmsg()
            {
                if(confirm("Are you sure to Update ? "))
                    return true;
               else
                    return false;
            }