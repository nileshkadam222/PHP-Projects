<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Contactus.aspx.cs" Inherits="feedback" Title="Mobile Shope - Contact US" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            height: 32px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <h2>MobileShop-together 
        Mobile For Ever</h2><br />
    <br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <h3 style="color: #FF9900">Please feel free 
       to contact us anytime to give your feedback or for any enquiry<br />
        We Always welcome 
        your feedback and response as soon as possible.</h3>
    <br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" size="3px"> * Mandatory fields</font><br />
    <br />
    <table align="center" 
        style="background-image: url('file:///C:/Documents and Settings/Tejas/Desktop/27-3-11/Mobile Shope 3/images/table back.jpg')">
<tr>
    <td >
            <asp:Label ID="lblname" runat="server" Text="Name *" Font-Size="Medium" 
            ForeColor="#0099FF"></asp:Label>
    </td>
    <td>&nbsp;&nbsp; :</td>
    <td>
            <asp:TextBox ID="txtname" runat="server" Width="218px"></asp:TextBox>
    </td>
    <td> 
            <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
            ControlToValidate="txtname" ErrorMessage="Plese Enter Name"></asp:RequiredFieldValidator>
    </td>
</tr>
<tr><td colspan="4"><p></p></td></tr>
<tr>
    <td >
            <asp:Label ID="lblemail" runat="server" Text="E-mail *" Font-Size="Medium" 
            ForeColor="#0099FF"></asp:Label>
    </td>
    <td>&nbsp;&nbsp; :</td>
    <td>
            <asp:TextBox ID="txtemail" runat="server" Width="217px"></asp:TextBox>
    </td>
    <td>   
            <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" 
            ControlToValidate="txtemail" ErrorMessage="Enter Your E-mail ID" 
            ToolTip="i.e.(Tejas_savaliya@yahoo.com)" 
            ValidationExpression="\S+@\S+\.\S+" Display="Dynamic"></asp:RegularExpressionValidator>
    </td>
</tr>
<tr><td colspan="4"><p></p></td></tr>
<tr>
    <td >
            <asp:Label ID="lblmobile_no" runat="server" Text=" Mobile No*" align="top" Font-Size="Medium" 
            ForeColor="#0099FF"></asp:Label>
    </td>
    <td>&nbsp;&nbsp; :</td>
    <td>
             <asp:TextBox ID="txtmobileno" runat="server" Width="217px" MaxLength="10"></asp:TextBox>
    </td>
    <td>
            <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
            ControlToValidate="txtmobileno" Display="Dynamic" 
            ErrorMessage="Plese Enter Mobile No"></asp:RequiredFieldValidator>
    </td>
</tr>
<tr><td colspan="4"><p></p></td></tr>
<tr>
    <td style="padding-bottom:60px" >
            <asp:Label ID="lblfeedback" runat="server" Text="Feedback *" align="top" Font-Size="Medium" 
            ForeColor="#0099FF"></asp:Label>
       </td>
    <td style="padding-bottom:60px" >&nbsp;&nbsp;&nbsp;
    </td>
    <td>
            <asp:TextBox ID="txtfeedback" runat="server" Height="70px" Width="215px" 
            TextMode="MultiLine"></asp:TextBox>
    </td>
    <td style="padding-bottom:60px" >
            <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
            ControlToValidate="txtfeedback" ErrorMessage="Enter Your Feedback"></asp:RequiredFieldValidator>
    </td>
</tr>
<tr><td colspan="4"><p></p></td></tr>
<tr><td colspan="4"><p></p></td></tr>
<tr>
    <td class="style1" colspan="3">
        <center><asp:Button ID="btnsubmit" runat="server" Text="Submit" 
                onclick="btnsubmit_Click" />
                &nbsp;&nbsp;&nbsp;&nbsp;
                <asp:Button ID="btnclear" runat="server" Text="Clear" Width="57px" 
                onclick="btnclear_Click" /></center>
    </td>
    </tr>
</table>
</asp:Content>

