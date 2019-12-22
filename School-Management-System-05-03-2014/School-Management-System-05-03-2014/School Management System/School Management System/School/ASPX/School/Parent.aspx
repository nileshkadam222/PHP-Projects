<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Parent.aspx.cs" Inherits="Parent" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
   <link href="StyleSheet.css" runat="server" rel="stylesheet" /> 
   <script type="text/javascript" language="javascript">
   function clearfields()
   {
   document.getElementById('txtFirstName').value='';
   document.getElementById('txtLastName').value='';
   document.getElementById('txtStudentFirstName').value='';
   document.getElementById('txtStudentLastName').value='';
   document.getElementById('ddlClass').value='--Select Class--';
   document.getElementById('ddlSection').value='--Select Section--';
   }
   
   function openwindow()
   {
   window.open('RegisterParent.aspx','RegisterParent','height=500,width=850, scrollbars=0, resizable=0, status=0, top=75, left=100');
   }
   </script>
</head>
<body>
    <form id="form1" runat="server">

  
   <fieldset style="width: 944px; height: 95px; text-align: right;"><legend><b><span style="color: #ffffff">Search Parent</span></b></legend>
   <table style="width: 940px; height: 58px">
   <tr>
   <td style="height: 40px; width: 109px; text-align: left;">
       <span style="color: #ffffff">
   Father FirstName</span>
   </td>
   <td style="height: 40px; width: 73px; text-align: left;">
   <asp:TextBox ID="txtFirstName" runat="server" CssClass="textbox" Height="18px" Width="100px"></asp:TextBox>
   </td>
   <td style="height: 40px; width: 89px; text-align: left;">
       <span style="color: #ffffff"> LastName</span></td>
   <td style="height: 40px; text-align: left; width: 64px;">
   <asp:TextBox ID="txtLastName" runat="server" CssClass="textbox" Height="18px" Width="100px"></asp:TextBox>
   </td>


   <td style="width: 109px; height: 40px; text-align: left;">
       <span style="color: #ffffff">Student FirstName</span></td>
   <td style="height: 40px; width: 76px; text-align: left;">
   <asp:TextBox ID="txtStudentFirstName" runat="server" CssClass="textbox" Height="18px" Width="100px"></asp:TextBox>
   </td>
   <td style="height: 40px; width: 71px; text-align: left;">
       <span style="color: #ffffff">LastName</span></td>
   <td style="height: 40px; text-align: left; width: 119px;">
   <asp:TextBox ID="txtStudentLastName" runat="server" CssClass="textbox" Height="18px" Width="100px"></asp:TextBox>
   </td>
   </tr>
   <tr>
   <td style="height: 23px; width: 109px; text-align: left;">
       <span style="color: #ffffff">
   Select Class </span>
   </td>
   <td style="height: 23px; width: 73px; text-align: left;">
   <asp:DropDownList ID="ddlClass" runat="server" >
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
   <td style="height: 23px; text-align: left; width: 89px;">
       <span style="color: #ffffff">
   Select Section</span>
   </td>
   <td style="height: 23px; text-align: left; width: 64px;">
    <asp:DropDownList ID="ddlSection" runat="server" >
        <asp:ListItem>--Select--</asp:ListItem>
        <asp:ListItem>A</asp:ListItem>
        <asp:ListItem>B</asp:ListItem>
    </asp:DropDownList>
   </td>
   <td colspan="2">
       <asp:Button ID="btnSearch" runat="server" Text="Search" CssClass="button" OnClick="btnSearch_Click"/>
       &nbsp;
       </td>
   <td style="height: 23px; width: 71px; text-align: left;" >
       <asp:Button ID="btnCancel" runat="server" Text="Reset" OnClientClick="javascript:clearfields()" CssClass="button" OnClick="btnCancel_Click"/></td>
      <td style="text-align: left">
          &nbsp;
      <asp:LinkButton ID="lnkParentRegister" Text="RegisterParent" runat="server" OnClientClick="javascript:openwindow()"></asp:LinkButton></td>
   </tr>
   </table> </fieldset>

   
   
   <center>
   <fieldset style="width: 643px; height: 318px">
   <legend>
   <b><span style="color: #ffffff">
   Parent Details</span>
   </b>
   </legend>
<table style="width: 512px; height: 200px">
   <tr>
   <td style="height: 163px; width: 617px;" valign="top">
   
    <asp:GridView ID="gvParentDetails" runat="server" AutoGenerateColumns="False" ForeColor="#333333" AllowPaging="True" CellPadding="5" CellSpacing="1" GridLines="None" HorizontalAlign="Left" OnPageIndexChanging="gvParentDetails_PageIndexChanging" PageSize="5" Width="560px" OnRowDataBound="gvParentDetails_RowDataBound">
        <Columns>
        <asp:TemplateField Visible="False" >
        <ItemTemplate >
        <asp:Label ID="lblSno" runat="server" Text='<%#Eval("id") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="FatherName">
        <ItemTemplate>
        <asp:LinkButton ID="lnkFirstLastName" runat="server" Text='<%#Eval("firstname")  +" "+Eval("lastname") %>' Visible="false"></asp:LinkButton>
<asp:Label ID="lblFirstLastName" runat="server" Text='<%#Eval("firstname")  +" "+Eval("lastname") %>' Visible="false"></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
          <asp:TemplateField HeaderText="StudentName">
        <ItemTemplate>
        <asp:Label ID="lblStudentName" runat="Server" Text='<%#Eval("studentfirstname") +" "+Eval("studentlastname") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="StudentClass,Section">
        <ItemTemplate>
        <asp:Label ID="lblStudentClass" runat="Server" Text='<%#Eval("class") +" "+ Eval("section") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        
        <asp:TemplateField HeaderText="ParentEmail">
        <ItemTemplate>
        <asp:Label ID="lblEmail" runat="server" Text='<%#Eval("email") %>'>       
        </asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        <asp:TemplateField HeaderText="ParentContactNo">
        <ItemTemplate>
        <asp:Label ID="lblContactNo" runat="server" Text='<%#Eval("contactno") %>'></asp:Label>
        </ItemTemplate>
        </asp:TemplateField>
        
        
        </Columns>
            <PagerSettings FirstPageText="" LastPageText="" NextPageText="" PreviousPageText="" />
            <RowStyle BackColor="Silver" BorderColor="#E0E0E0" ForeColor="#333333" HorizontalAlign="Left" VerticalAlign="Top" />
            <FooterStyle BackColor="White" Font-Bold="True" ForeColor="White" />
            <PagerStyle BackColor="#E0E0E0" ForeColor="Black" HorizontalAlign="Center" />
            <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
            <HeaderStyle BackColor="Black" Font-Bold="True" ForeColor="White" />
            <AlternatingRowStyle BackColor="Silver" />
        
        </asp:GridView>

      
    </td>
   </tr>
   </table> 
  </fieldset> 
  
     
 
 
   </center>
  
    </form>
</body>
</html>
