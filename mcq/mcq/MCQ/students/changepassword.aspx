<%@ Page Language="C#" MasterPageFile="~/students/MasterPage.master" AutoEventWireup="true" CodeFile="changepassword.aspx.cs" Inherits="students_changepassword" Title="Untitled Page" %>

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
        
        <td colspan="2" width="55%">
         <fieldset>
           <legend  >Change Password
                   
                   </legend>
    <table width="100%" cellspacing="5" cellpadding="0"  >
   
    <tr>
            <td class="lbl" align="center" width="25%">
                Current Password:
            </td>
            <td width="30%">
                <asp:TextBox ID="txtcpassword" runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
            </td>
            <td width="40%">
                <%--<asp:RequiredFieldValidator ID="rfcpass" runat="server" ControlToValidate="txtcpassword" ErrorMessage="Please Enter Current Password"
    ></asp:RequiredFieldValidator>--%>       
            </td>
            
    </tr>
    <tr>
            <td class="lbl">
                New Password:
            </td>
            <td>
                <asp:TextBox ID="txtnpassword"   runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
                
            </td>
            <td>
                <%--<asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtnpassword" ErrorMessage="Please Enter New Password"
    ></asp:RequiredFieldValidator> --%>
            </td>
    </tr>
    <tr>
            <td class="lbl">
                Conform Password:
            </td>
            <td>
                <asp:TextBox ID="txtconpassword" runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
                
            </td>
            <td>
               <%-- <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtconpassword" ErrorMessage="Please Enter Con Password"
    ></asp:RequiredFieldValidator><br />
    <asp:CompareValidator ID="comppass" runat="server" ControlToCompare="txtnpassword" ControlToValidate="txtconpassword" ErrorMessage="NewPassword & Con Password Not Math"></asp:CompareValidator>--%> 
            </td>
    </tr>
    <tr>
            <td colspan="2" align="center">
                    
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/sabmit2.png"  
                        OnClientClick="return changepass()" Height="23px" Width="71px" 
                        onclick="btnsubmit_Click" />
                    
                    </td>
    </tr>
    
</table>
        </fieldset>    
                    </td>
         <td width="60%" rowspan="6"></td>
        
    </tr>
   </table>
</asp:Content>

