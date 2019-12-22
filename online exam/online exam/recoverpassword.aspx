<%@ Page Language="C#" AutoEventWireup="true" CodeFile="recoverpassword.aspx.cs" MasterPageFile="~/MasterPage3.master" Inherits="recoverpassword" Theme="Silver" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
        <table width="560" align="center">
            <tr>
                <td width="100%" align="right" class="boldtext"><a href="Default.aspx"><font color="red">Login</font></a>
                </td>
            </tr>

        </table>    
        <table width="560" align="center">
            <tr>
                <td>
                    <asp:Image ID="imgRecoverPassword" SkinID="recoverpassword" runat="server" Width="127px" /></td>
            </tr>
            <tr>
                <td>
                    <asp:PasswordRecovery ID="PasswordRecovery1" runat="server" UserNameTitleText="" Height="179px" Width="535px">
                        <InstructionTextStyle CssClass="generaltext" />
                        <SuccessTextStyle CssClass="correct" />
                        <ValidatorTextStyle CssClass="incorrect" />
                        <LabelStyle CssClass="login" />
                        <TitleTextStyle CssClass="boldtext" />
                        <FailureTextStyle CssClass="incorrect" />
                    </asp:PasswordRecovery>
                </td>
            </tr>
        </table>
   </asp:Content>
