<%@ Page Language="C#" MasterPageFile="~/local.master" AutoEventWireup="true" CodeFile="login.aspx.cs" Inherits="login" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">


	

</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
   <table width="100%" cellspacing="5" cellpadding="0"   >
    <tr>
        <td width="10%" rowspan="6"></td>
        
         <td rowspan="4"   width="15%"  valign="middle" align="left">
            <asp:Image ID="img" runat="server" ImageUrl="~/images/lock.png"
                Height="177px" Width="197px"/>
        </td>
        
        <td colspan="2" width="15%">
         <fieldset>
           <legend  ><asp:Image ID="imd" runat ="server" ImageUrl="~/images/User_48x48.png"
                   style="margin-right: 0px" Width="43px" />
                   Login Now
                   </legend>
    <table width="100%" cellspacing="5" cellpadding="0"  >
   
    <tr>
            <td class="lbl" align="center">
                E Mail:
            </td>
            <td>
                <asp:TextBox ID="txtemail" runat="server" CssClass="textbox"></asp:TextBox>
               <%-- <asp:RequiredFieldValidator ID="rfvemail" runat="server" ControlToValidate="txtemail" ErrorMessage="Please Enter email"
    ></asp:RequiredFieldValidator>--%>           </td>
            
    </tr>
    <tr>
            <td class="lbl">
                Password:
            </td>
            <td>
                <asp:TextBox ID="txtpassword" runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
                <%--<asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtpassword" ErrorMessage="Please Enter Password"
    ></asp:RequiredFieldValidator>--%> 
            </td>
    </tr>
    <tr>
            <td colspan="2" align="center" valign="middle">
                    
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/login2.png" 
                        OnClientClick="return vallogin()" Height="34px" Width="86px" 
                        onclick="btnsubmit_Click" /> 
                    <br />
                    <a href="registration.aspx" style="text-decoration:underline;">Free Registration Now</a>
                    </td>
    </tr>
    
</table>
        </fieldset>    
                    </td>
         <td width="60%" rowspan="6">
            <asp:Label ID="lblerror" runat="server" ></asp:Label> 
         </td>
        
    </tr>
   </table>
   
   
   
  
       
</asp:Content>

