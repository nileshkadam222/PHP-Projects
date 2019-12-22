<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ExamDetails.aspx.cs" Inherits="ExamDetails" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head  runat="server">
    <title>Untitled Page</title>
    <link href="stylesheet.css" rel="stylesheet" runat="server" />
   <script language="javascript" type="text/javascript">
   
  function validatedate(x)
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



function validateallfields()
{

str='';

if(document.getElementById('txtTelugu').value == '')
{
str +='\n Please Enter Date for Telugu';
}
if(document.getElementById('txtHindi').value == '')
{
str +='\n Please Enter Date for Hindi';
}
if(document.getElementById('txtEnglish').value == '')
{
str +='\n Please Enter Date for English';
}
if(document.getElementById('txtMaths').value == '')
{
str +='\n Please Enter Date for Maths';
}
if(document.getElementById('txtScience').value == '')
{
str +='\n Please Enter Date for Science';
}
if(document.getElementById('txtSocial').value == '')
{
str +='\n Please Enter Date for Social';
}
if(document.getElementById('ddlClass').value == '--Select--')
{
str +='\n Please Select a Class';
}
if(document.getElementById('ddlSection').value == '--Select--')
{
str +='\n Please Select a Section';
}
if(document.getElementById('ddlExamtype').value == '--Select--')
{
str +='\n Please Select an Exam Type';
}
if(str !='')
{
alert('Please Check Following Fields' +str);
return false;
}
var telugu=document.getElementById('txtTelugu').value ;
var hindi=document.getElementById('txtHindi').value;
var english=document.getElementById('txtEnglish').value;
var maths=document.getElementById('txtMaths').value;
var science=document.getElementById('txtScience').value;
var social=document.getElementById('txtSocial').value;

if(telugu==hindi || telugu==english || telugu==maths || telugu==science || telugu==social || hindi==english || hindi==maths || hindi==science || hindi==social || 
english==maths || english== science || english == social || maths==science || maths == social || science == social)
{
alert('Dates are Duplicating Please Check');
return false;
}

return true;
}


   function calwindow1()
   {
   window.open("Calendar.aspx?id=3","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
    function calwindow2()
   {
   window.open("Calendar.aspx?id=4","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
    function calwindow3()
   {
   window.open("Calendar.aspx?id=5","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
    function calwindow4()
   {
   window.open("Calendar.aspx?id=6","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
    function calwindow5()
   {
   window.open("Calendar.aspx?id=7","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
    function calwindow6()
   {
   window.open("Calendar.aspx?id=8","Calendar","left=20,top=20,width=250,height=220,toolbar=0,resizable=0");
   }
   
function clearallfields()
{
document.getElementById('txtTelugu').value = '';
document.getElementById('txtHindi').value = '';
document.getElementById('txtEnglish').value = '';
document.getElementById('txtMaths').value = '';
document.getElementById('txtScience').value = '';
document.getElementById('txtSocial').value = '';
document.getElementById('ddlClass').value = '--Select--';
document.getElementById('ddlSection').value = '--Select--';
document.getElementById('ddlExamtype').value = '--Select--';
}


   </script>  
</head>
<body>
    <form id="form1" runat="server">
        <div>
            
            
        </div>
        <div style="text-align: right">
           
      <center>
                &nbsp;
        <fieldset style="width: 303px; height: 369px"><legend><b><span style="color: #ffffff">Enter Time Table</span></b></legend>
       
              <center style="text-align: center">
            <table style="width: 259px; height: 298px">
                <tr>
                    <td style="width: 85px; text-align: left" colspan="1">
                    </td>
                    <td style="width: 69px; text-align: left">
              <table ><tr><td valign="bottom">   <asp:LinkButton ID="LinkButton1" runat="server" ForeColor="#FFFFFF" PostBackUrl="~/CheckTimetable.aspx" Height="33px" Width="121px">Check TimeTable</asp:LinkButton> </td></tr></table>          </td>
                    <td style="width: 19px">
                    </td>
                </tr>
                <tr>
               
                    <td style="text-align: left; width: 85px;">
                        <span style="color: #ffffff">
                        Telugu</span>
                    </td>
                    <td style="width: 69px; text-align: left">
                        <input type="text" onchange="javascript:return validatedate(this)"  onblur="javascript:return numericcheck(this)" class="textbox" runat="server" id="txtTelugu" />
                    </td>
                    <td style="width: 19px; text-align: left;">
                    <asp:Button ID="btnCalendar1" CssClass="button" runat="server" Text="..." OnClientClick="javascript:calwindow1()" Height="26px" Width="22px" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 85px;">
                        <span style="color: #ffffff">
                      Hindi</span>
                    </td>
                    <td style="width: 69px; text-align: left">
                    <input type="text" onchange="javascript:return validatedate(this)" class="textbox" runat="server" id="txtHindi" />
                    </td>
                        <td style="width: 19px; text-align: left;">
                    <asp:Button ID="btnCalendar2" CssClass="button" runat="server" Text="..." Height="26px" OnClientClick="javascript:calwindow2()"  Width="22px" />
                    </td>
                </tr>
               <tr>
               <td style="text-align: left; width: 85px; height: 28px;">
               <span style="color: #ffffff">
                      English</span>
               </td>
               <td style="width: 69px; text-align: left; height: 28px;">
               <input type="text" class="textbox" onchange="javascript:return validatedate(this)" runat="server" id="txtEnglish" />
               </td>
                   <td style="width: 19px; height: 28px; text-align: left;">
                    <asp:Button ID="btnCalendar3" CssClass="button" runat="server" Text="..." Height="26px" OnClientClick="javascript:calwindow3()"  Width="22px" />
                    </td>
               </tr> 
               <tr>
               <td style="text-align: left; width: 85px;">
            <span style="color: #ffffff">
                      Maths</span>
               </td>
               <td style="width: 69px; text-align: left">
                <input type="text" class="textbox" onchange="javascript:return validatedate(this)"  runat="server" id="txtMaths" />
               </td>
                   <td style="width: 19px; text-align: left;">
                    <asp:Button ID="btnCalendar4" CssClass="button" runat="server" Text="..." Height="26px" OnClientClick="javascript:calwindow4()"  Width="22px" />
                    </td>
               </tr>
               <tr>
               <td style="text-align: left; width: 85px;">
            <span style="color: #ffffff">
                   Science</span>
               </td>
               <td style="width: 69px; text-align: left">
                <input type="text" class="textbox" runat="server" id="txtScience" onchange="javascript:return validatedate(this)"  />
               </td>
                   <td style="width: 19px; text-align: left;">
                    <asp:Button ID="btnCalendar5" CssClass="button" runat="server" Text="..." Height="26px" OnClientClick="javascript:calwindow5()"  Width="22px" />
                    </td>
               </tr>
               <tr>
               <td style="text-align: left; width: 85px;">
            <span style="color: #ffffff">
                    Social</span>
               </td>
               <td style="width: 69px; text-align: left">
                <input type="text" class="textbox" runat="server" id="txtSocial"  onchange="javascript:return validatedate(this)" />
               </td>
                   <td style="width: 19px; text-align: left;">
                    <asp:Button ID="btnCalendar6" CssClass="button" runat="server" Text="..." OnClientClick="javascript:calwindow6()" Height="26px" Width="22px" />
                    </td>
               </tr>
                <tr>
                    <td style="width: 85px; text-align: left">
                        <span style="color: #ffffff">Class</span></td>
                    <td style="width: 69px; text-align: left">
                        <asp:DropDownList ID="ddlClass" runat="server" Height="24px" Width="90px">
                            <asp:ListItem>--Select--</asp:ListItem>
                            <asp:ListItem>Nursery</asp:ListItem>
                            <asp:ListItem>L.K.G</asp:ListItem>
                            <asp:ListItem>U.K.G</asp:ListItem>
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
                        </asp:DropDownList></td>
                    <td style="width: 19px">
                    </td>
                </tr>
                <tr>
                    <td style="width: 85px; text-align: left">
                        <span style="color: #ffffff">Section</span></td>
                    <td style="width: 69px; text-align: left">
                        <asp:DropDownList ID="ddlSection" runat="server" Height="24px" Width="90px">
                            <asp:ListItem>--Select--</asp:ListItem>
                            <asp:ListItem>A</asp:ListItem>
                            <asp:ListItem>B</asp:ListItem>
                        </asp:DropDownList></td>
                    <td style="width: 19px">
                    </td>
                </tr>
                <tr>
                    <td style="width: 85px; text-align: left">
                        <span style="color: #ffffff">Exam Type</span></td>
                    <td style="width: 69px; text-align: left">
                        <asp:DropDownList ID="ddlExamtype" runat="server" Height="24px" Width="90px">
                            <asp:ListItem>--Select--</asp:ListItem>
                            <asp:ListItem>Unit Test1</asp:ListItem>
                            <asp:ListItem>Unit Test2</asp:ListItem>
                            <asp:ListItem>Unit Test3</asp:ListItem>
                            <asp:ListItem>Unit Test4</asp:ListItem>
                            <asp:ListItem>Quaterly</asp:ListItem>
                            <asp:ListItem>Half Yearly</asp:ListItem>
                            <asp:ListItem>Annual</asp:ListItem>
                        </asp:DropDownList></td>
                    <td style="width: 19px">
                    </td>
                </tr>
               <tr>
               <td style="width: 85px; text-align: right">
                   &nbsp;</td>
               <td style="text-align: left; width: 69px;">
                   &nbsp;<input type="submit" onclick="javascript:return validateallfields()" runat="server" class="button" id="btnInsert" value="Insert " causesvalidation="true" onserverclick="btnInsert_ServerClick" />
               <asp:Button ID="btnCancel" OnClientClick="javascript:return clearallfields()" runat="server" CssClass="button" Text="Cancel" /></td>
               </tr>
            </table>
            &nbsp;&nbsp;&nbsp;
              </center></fieldset></center>
            &nbsp;&nbsp;
 
  
                     
        </div>
    </form>
</body>
</html>
