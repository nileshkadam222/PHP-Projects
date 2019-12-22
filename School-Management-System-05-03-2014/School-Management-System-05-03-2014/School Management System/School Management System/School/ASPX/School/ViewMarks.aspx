<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ViewMarks.aspx.cs" Inherits="ViewMarks" %>

<%@ Register Assembly="Microsoft.ReportViewer.WebForms, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a"
    Namespace="Microsoft.Reporting.WebForms" TagPrefix="rsweb" %>
   <%@ Register Assembly="ActiveReports.Web, Version=5.2.0.397, Culture=neutral, PublicKeyToken=cc4967777c49a3ff"
    Namespace="DataDynamics.ActiveReports.Web" TagPrefix="ActiveReportsWeb" %> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="stylesheet.css" rel="stylesheet" runat="server" /> 
   <script type="text/javascript" language="javascript">
      function classection()
      {
      if(document.getElementById('ddlClass').value!='--Select--' && document.getElementById('ddlSection').value=='--Select--' )
       {             
         alert('Please Select Section');
         return false;
     }
        else if(document.getElementById('ddlClass').value=='--Select--' && document.getElementById('ddlSection').value!='--Select--' )
       {             
         alert('Please Select Class');
         return false;
     }
      
 
      else
      {
      return true;
      } 
      }    
      
      
      function clearallfields()
      {
      document.getElementById('ddlClass').value='--Select--';
      document.getElementById('ddlSection').value='--Select--';
      document.getElementById('ddlExamType').value='--Select--' ;
      document.getElementById('txtRollNo').value='' ;
      
      }
           
        </script>
   
   
</head>
<body>
    <form id="form1" runat="server">
    <div>
      <center> 
   <fieldset style="width: 463px; height: 154px"><legend><span style="color: #ffffff">Search Marks</span></legend>

    <table style="width: 460px; height: 86px">

   
   <tr>
   <td style="text-align: left">
       <span style="color: #ffffff">Student
   Class</span>
   </td>
   <td style="text-align: left; width: 154px;">
   <asp:DropDownList ID="ddlClass" runat="server" Height="22px" Width="125px" OnSelectedIndexChanged="ddlClass_SelectedIndexChanged" AutoPostBack="True" >
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
   <td style="text-align: left">
       <span style="color: #ffffff">
   Section</span>
   </td>
   <td style="text-align: left">
   <asp:DropDownList ID="ddlSection" runat="server" Width="127px" AutoPostBack="True" OnSelectedIndexChanged="ddlSection_SelectedIndexChanged" >
       <asp:ListItem>--Select--</asp:ListItem>
       <asp:ListItem>A</asp:ListItem>
       <asp:ListItem>B</asp:ListItem>
   </asp:DropDownList>
   </td>
   
       </tr>

      <tr>
      <td style="text-align: left">
       <span style="color: #ffffff">
  Student Name</span>
   </td>
   
  <td style="text-align: left; width: 154px;">
  <asp:DropDownList ID="ddlStudentName" runat="server" Width="163px" AutoPostBack="True" ></asp:DropDownList>
  </td>
   <td style="text-align: left">
       <span style="color: #ffffff">
   Rollno</span>
   </td>
   <td style="text-align: left">
   <asp:TextBox ID="txtRollNo" runat="server" CssClass="textbox" ></asp:TextBox>
   </td>

  
        </tr>
    </table> 
   <table style="width: 169px; height: 32px">
   <tr>
   <td style="text-align: right">
   <asp:Button ID="btnSearch" runat="server" Text="Search" CssClass="button" OnClick="btnSearch_Click" OnClientClick="javascript:return classection()"/>
   </td>
   <td style="text-align: left">
  <asp:Button ID="btnCancel" runat="server" CssClass="button" Text="Cancel" OnClientClick="javascript:return clearallfields()" OnClick="btnCancel_Click"/> 
   </td>
   </tr> 
  
   </table> 
   </fieldset>  
   </center>  
        <center>
            &nbsp;</center>
    </div>
   
   <center>
   <div>
   <fieldset style="width: 358px; height: 180px"><legend><span style="color: #ffffff">View Marks</span></legend>
   <table>
   <tr>
   <td style="width: 311px">
   <asp:GridView ID="gvStudentMarks" runat="server" ForeColor="White" AutoGenerateColumns="False" AllowPaging="True" PageSize="5" OnPageIndexChanging="gvStudentMarks_PageIndexChanging" Width="342px" OnRowCommand="gvStudentMarks_RowCommand" OnRowDataBound="gvStudentMarks_RowDataBound"  >
   <Columns>
   
    <asp:TemplateField Visible="False">
   <ItemTemplate>
   <asp:Label ID="lblId" runat="server" Text='<%#Eval("id") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
      <asp:TemplateField HeaderText="Rollno">
   <ItemTemplate>
   <asp:Label ID="lblRollno" runat="server" Text='<%#Eval("rollno") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
   
   <asp:TemplateField HeaderText="StudentName">
   <ItemTemplate>
   <asp:Label ID="lblStudentName" runat="server" Text='<%#Eval("firstname") +" "+Eval("lastname") %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
     <asp:TemplateField Visible="false">
   <ItemTemplate>
   <asp:Label ID="lblEmail" runat="server" Text='<%#Eval("email")%>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>
   
    <asp:TemplateField Visible="False">
   <ItemTemplate>
   <asp:Label ID="lblClass" runat="server" Text='<%#Eval("class")  %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>

    <asp:TemplateField Visible="False">
   <ItemTemplate>
   <asp:Label ID="lblSection" runat="server" Text='<%#Eval("section")  %>'></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>

  
   
   <asp:TemplateField HeaderText="View Report">
   <ItemTemplate>
  <asp:LinkButton ID="lnkGenerateReport" runat="server" Text="Progress Report" CommandName="Sample"
   CommandArgument='<%# ((GridViewRow) Container).RowIndex %>'></asp:LinkButton>
   <asp:Label ID="lblReport" runat="server" Text="ProgressReport" ></asp:Label>
   </ItemTemplate>
   </asp:TemplateField>  
   
   
   </Columns>
       <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PreviousPageText="" />
       <RowStyle HorizontalAlign="Left" />
      </asp:GridView>
   </td>
   </tr>
   </table>
   </fieldset>
   </div>    
   </center> 
     
    </form>
</body>
</html>
