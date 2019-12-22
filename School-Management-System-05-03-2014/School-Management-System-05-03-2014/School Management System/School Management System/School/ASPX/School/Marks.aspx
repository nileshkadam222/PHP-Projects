<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Marks.aspx.cs" Inherits="Marks" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="stylesheet.css" rel="stylesheet" runat="server" />
    <title>Untitled Page</title>

    <script type="text/javascript" language="javascript">
   function ClassSection()
   {
   if(document.getElementById('ddlClass').value=='--Select--')
   {
   alert('Please Select Class');
   return false;
   }
   if(document.getElementById('ddlSection').value=='--Select--')
   {
   alert('Please Select Section');
   return false;
   }
   if(document.getElementById('ddlExamtype').value=='--Select--')
   {
   alert('Please Select  Examtype');
   return false;
   }
   }
   
  function cancelbutton()
  {
  document.getElementById('ddlClass').value='--Select--';
  document.getElementById('ddlSection').value='--Select--'; 
  document.getElementById('ddlExamtype').value='--Select--';
  }


 function validateGenaeratewavefile()
    {

        var frm = document.forms['form3'];
       var select =0;
      var name="";  
 

          for (i=0;i<frm.elements.length;i++)
          {        
            if (frm.elements[i].type == "text")
             {     
             if(frm.elements[i].value == "absent" || !isNaN(frm.elements[i].value))
              {                             
                if(frm.elements[i].value =='')             
                select=1;                    
               else if(frm.elements[i].value < 0)    
                  select=3;                                
               else if(frm.elements[i].value >100)
                 select=2;                                                                
                      if(select==1)
                     {
                      alert('The marks fields of any student should not be left blank');             
                      return false;
                     }
                    else if(select==2)
                    {
                      alert('The marks of students should not be greater than 100 or should be marked as absent');             
                      return false;
                    } 
                   else if(select==3)
                    {
                       alert('The marks of students should not be less than 0  or should be marked as absent');             
                       return false;
                    }  
        }
          if(frm.elements[i].value != "absent" && isNaN(frm.elements[i].value))
          {
            alert('Student marks should be marked only as "absent" if the student is not present for the exam.\nMarks should be entered in numerical values from(0-100) if the student is present for the exam');           
         return false;
          } 

 }
    }
             return true;  
    }
    

    </script>

</head>
<body>
    <form id="form3" runat="server">
        <div>
            <center>
                <fieldset style="width: 924px; height: 115px">
                    <legend style="text-align: center;"><b><span style="color: #ffffff">Student&nbsp;Selection</span></b></legend>
                    <table style="width: 930px; height: 53px">
                        <tr>
                            <td style="text-align: left; width: 28px; height: 58px;">
                                <span style="color: #ffffff">Class</span>
                            </td>
                            <td style="text-align: left; width: 90px; height: 58px;" valign="middle">
                                <asp:DropDownList ID="ddlClass" runat="server" OnSelectedIndexChanged="ddlClass_SelectedIndexChanged"
                                    AutoPostBack="True" Height="22px" Width="76px">
                                    <asp:ListItem>--Select--</asp:ListItem>
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
                                </asp:DropDownList>
                            </td>
                            <td style="text-align: left; width: 48px; height: 58px;">
                                <span style="color: #ffffff">Section</span>
                            </td>
                            <td style="text-align: left; width: 77px; height: 58px;" valign="middle">
                                <asp:DropDownList ID="ddlSection" runat="server" OnSelectedIndexChanged="ddlSection_SelectedIndexChanged"
                                    AutoPostBack="True" Height="22px" Width="75px">
                                    <asp:ListItem>--Select--</asp:ListItem>
                                    <asp:ListItem>A</asp:ListItem>
                                    <asp:ListItem>B</asp:ListItem>
                                </asp:DropDownList>
                            </td>
                            <td style="width: 143px; text-align: left; height: 58px;">
                                <span style="color: #ffffff">StudentName</span>
                            </td>
                            <td style="text-align: left; width: 5728px; height: 58px;" valign="middle">
                                <asp:DropDownList ID="ddlStudentName" runat="server" OnSelectedIndexChanged="ddlStudentName_SelectedIndexChanged" AutoPostBack="True">
                                </asp:DropDownList>
                            </td>
                            <td style="width: 122px; height: 58px; text-align: left" valign="middle">
                                <span style="color: #ffffff">RollNo</span></td>
                            <td style="width: 158px; height: 58px; text-align: left" valign="middle">
                                <asp:DropDownList ID="ddlRollNo" runat="server" OnSelectedIndexChanged="ddlRollNo_SelectedIndexChanged">
                                </asp:DropDownList></td>
                            <td style="text-align: left; width: 76px; height: 58px;" valign="middle">
                                <span style="color: #ffffff">ExamType</span>&nbsp;</td>
                            <td style="width: 139px; height: 58px; text-align: left" valign="middle">
                                <asp:DropDownList ID="ddlExamtype" runat="server">
                                    <asp:ListItem>--Select--</asp:ListItem>
                                    <asp:ListItem>UnitTest1</asp:ListItem>
                                    <asp:ListItem>UnitTest2</asp:ListItem>
                                    <asp:ListItem>UnitTest3</asp:ListItem>
                                    <asp:ListItem>UnitTest4</asp:ListItem>
                                    <asp:ListItem>Quaterly</asp:ListItem>
                                    <asp:ListItem>HalfYearly</asp:ListItem>
                                    <asp:ListItem>Annual</asp:ListItem>
                                </asp:DropDownList></td>
                            <td style="width: 121px; height: 58px; text-align: right" valign="middle">
                                <asp:Button ID="btnSearchMarks" runat="server" Text="Search" class="button" OnClick="btnSearchMarks_Click"
                                    OnClientClick="javascript:return ClassSection()" Height="22px" Width="53px" /></td>
                            <td style="text-align: left; width: 56px; height: 58px;" valign="middle">
                                <asp:Button ID="btnReset" runat="server" Text="Cancel" class="button" OnClientClick='javascript:cancelbutton()'
                                    OnClick="btnReset_Click" Width="52px" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </center>
        </div>
        <div>
            <center>
                <fieldset style="width: 436px; height: 254px; text-align: center;">
                    <legend>&nbsp;<b><span style="color: #ffffff">Student Marks Details </span></b></legend>
                    <table style="width: 434px; height: 227px">
                        <tr>
                            <td>
                                <asp:GridView ID="gvStudentExamMarks" runat="server" ForeColor="White" AutoGenerateColumns="False"
                                    OnRowDataBound="gvStudentExamMarks_RowDataBound" AllowPaging="True" OnPageIndexChanging="gvStudentExamMarks_PageIndexChanging"
                                    PageSize="5" Width="422px">
                                    <Columns>
                                        <asp:TemplateField HeaderText="RollNo">
                                            <ItemTemplate>
                                                <asp:Label ID="lblRollno" runat="server" Text='<%#Eval("rollno") %>'></asp:Label>
                                            </ItemTemplate>
                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="StudentName">
                                            <ItemTemplate>
                                                <asp:Label ID="lblStudentName" Text='<%#Eval("studentname") %>' runat="server"></asp:Label>
                                            </ItemTemplate>
                                        </asp:TemplateField>
                                        <asp:TemplateField>
                                            <HeaderTemplate>
                                                <asp:Label ID="lblSubjectName" runat="server"></asp:Label>
                                            </HeaderTemplate>
                                            <ItemTemplate>
                                                <asp:TextBox ID="txtSubjectMarks" runat="server" Text='<%#Eval(Session["subjectName"].ToString(),"")%>' MaxLength='6'></asp:TextBox>
                                            </ItemTemplate>
                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="ExamType">
                                            <ItemTemplate>
                                                <asp:Label ID="lblExamType" runat="server" Text='<%#Eval("examtype")%>'></asp:Label>
                                            </ItemTemplate>
                                        </asp:TemplateField>
                                    </Columns>
                                    <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PreviousPageText="" />
                                    <RowStyle HorizontalAlign="Left" VerticalAlign="Bottom" />
                                    <PagerStyle HorizontalAlign="Center" />
                                </asp:GridView>
                            </td>
                        </tr>
                        <tr>
                            <td>
                           
                                    <asp:Button ID="btnInsertUpdate" runat="Server" Text="Save" OnClick="btnInsertUpdate_Click" OnClientClick="javascript:return validateGenaeratewavefile();" />
                                   
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </center>
        </div>
    </form>
</body>
</html>
