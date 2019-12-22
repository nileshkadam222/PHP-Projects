<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="ChangePassword.aspx.cs" Inherits="UserLogin_Main_Payment" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Panel ID="Panel1" runat="server">
  
   <table border="0" cellpadding="1" cellspacing="0" 
                style="border-collapse:collapse;"bgcolor="#B9FFFF">
                <tr>
                    <td>
                        <table border="0" cellpadding="0">
                            <tr>
                                <td align="center" colspan="2" bgcolor="Black" height="25">
                                    <asp:Label ID="lbltitle" runat="server" Font-Bold="True" ForeColor="White" 
                                        Text="Change Your Password"></asp:Label>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <asp:Label ID="CurrentPasswordLabel" runat="server">Password:</asp:Label>
                                </td>
                                <td>
                                    <asp:TextBox ID="txtpassword" runat="server" TextMode="Password" Width="175px"></asp:TextBox>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                                        Display="Dynamic" ErrorMessage="Enter Current Password" 
                                        ControlToValidate="txtpassword">*</asp:RequiredFieldValidator>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <asp:Label ID="NewPasswordLabel" runat="server">New Password:</asp:Label>
                                </td>
                                <td>
                                    <asp:TextBox ID="txtnewpassword" runat="server" TextMode="Password" 
                                        Width="175px"></asp:TextBox>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                                        Display="Dynamic" ErrorMessage="Enter New password" 
                                        ControlToValidate="txtnewpassword">*</asp:RequiredFieldValidator>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <asp:Label ID="ConfirmNewPasswordLabel" runat="server">Confirm New Password:</asp:Label>
                                </td>
                                <td>
                                    <asp:TextBox ID="txtconform" runat="server" TextMode="Password" Width="175px"></asp:TextBox>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                                        Display="Dynamic" ErrorMessage="Enter Conform Password" 
                                        ControlToValidate="txtconform">*</asp:RequiredFieldValidator>
                                    <asp:CompareValidator ID="CompareValidator1" runat="server" 
                                        ErrorMessage="Confrom Password does not match with New Password" 
                                        ControlToCompare="txtnewpassword" ControlToValidate="txtconform">*</asp:CompareValidator>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
                                        ShowMessageBox="True" ShowSummary="False" />
                                </td>
                            </tr>
                            <tr>
                                <td align="left" colspan="2" style="color:Red;" bgcolor="Black">
                                    <asp:Button ID="btncontinue" runat="server" Text="Continue" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <asp:Button ID="btncancel" runat="server" Text="Cancel" />
                                </td>
                            </tr>
                            </table>
                    </td>
                </tr>
            </table>
      </asp:Panel>
    <asp:Panel ID="Panel2" runat="server">
    <table >
    <tr>
    <td bgcolor="#B9FFFF">
        <asp:Label ID="Label1" runat="server" Text="Your Password Change SuccessFully"></asp:Label>
        <br />
        <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/User Login.aspx">Continue</asp:HyperLink>
        </td>
    </tr>
    </table>
    </asp:Panel>
</asp:Content>

