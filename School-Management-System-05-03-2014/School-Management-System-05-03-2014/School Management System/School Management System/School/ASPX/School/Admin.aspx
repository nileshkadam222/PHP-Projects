<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Admin.aspx.cs" Inherits="Admin" %>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head  runat="server">
 

	<title>School</title>
<link href="StyleSheet.css" runat="server" rel="stylesheet"/> 
<link href="css/styles.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" language="javascript" >
function Pagereplace(Pagename)
{
    var userType= '<%= Session["usertype"].ToString() %>';
    var frame=document.getElementById("frame1");    
    if(userType == 'admin')
   {
   if(Pagename=='Marks.aspx')
   {
   frame.setAttribute("src","NotPermitted.aspx");
   }
   else
   {
   frame.setAttribute("src",Pagename);
  
   }
   }
   
   if(userType != 'admin' )
   {
 
   if(userType=='student')
   {
   if(Pagename=='ViewStudentDetails.aspx' || Pagename== 'School.aspx' || Pagename=='ViewMarks.aspx'||Pagename=='Reports.aspx')
   {
   frame.setAttribute("src",Pagename)
   }
     else
   {

   frame.setAttribute("src",'NotPermitted.aspx')  
   }
   }
   else if(userType == 'parent')
   {
     if(Pagename=='Parent.aspx' || Pagename== 'School.aspx' || Pagename=='ViewMarks.aspx')
   {
      frame.setAttribute("src",Pagename)
   }
   else
   {
    frame.setAttribute("src",'NotPermitted.aspx')  
   }
   }
  
    else if(userType=='teacher')
   {
   if(Pagename=='ViewTeacherDetails.aspx' || Pagename== 'School.aspx' || Pagename=='Marks.aspx' || Pagename=='ViewMarks.aspx')
   {
    frame.setAttribute("src",Pagename)
   }
   else
   {
     frame.setAttribute("src",'NotPermitted.aspx')  
   }
   } 
}
   



}
 
function CallRegistrationPage()
{
   window.open('Student.aspx','mywindow','width=690,height=450,scrollbars=0, resizable=0, status=0, top=0');
}
 function resizeFrame()
{
    var realHeight = document.getElementById("frame1").document.body.scrollHeight;
    document.getElementById("frame1").style.height = realHeight + 30 ;
   } 
 </script>
    </head>
    <body>            
        <form id="form1" runat="server">
   <div id='cssmenu' >

<ul>
   <li class='active '><a href="javascript: Pagereplace('School.aspx');"><span>Home</span></a></li>

  <li class='has-sub '><a href='#'><span>List</span></a>
      <ul>
         <li><a href="javascript:Pagereplace('ViewStudentDetails.aspx');"><span>Student</span></a></li>
         <li><a href="javascript:Pagereplace('Parent.aspx');"><span>Parent</span></a></li>
         <li><a href="javascript:Pagereplace('ViewTeacherDetails.aspx');">View Teacher</a></li>
         
         
      </ul>
   </li> 
   
  <%-- <li class='active'><a href="javascript:Pagereplace('ViewMarks.aspx');">View Marks</a></li>--%>
   <li class='active'><a href="javascript:Pagereplace('Marks.aspx');">Enter Marks</a></li>
   <li class='active'><a href="javascript:Pagereplace('ExamDetails.aspx');">Enter TimeTable</a></li>
   <li class='active'><a href="javascript:Pagereplace('ViewMarks.aspx');">Reports</a></li>
   
 
    <li style="float:right">
                            <asp:ImageButton ID="imgLogOut" runat="server" Height="37px" ToolTip="Logout" ImageUrl="~/Images/gnome_logout.png"
                                Width="32px" OnClick="imgLogOut_Click" /></li>
                                <li></li>
</ul>


</div>
       
      </form>
             <iframe id="frame1"  width="100%"  height="550px" scrolling="no" frameborder="0" src="School.aspx"></iframe>


    </body></html>
