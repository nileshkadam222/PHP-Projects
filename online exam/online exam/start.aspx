<%@ Page Language="C#" AutoEventWireup="true" CodeFile="start.aspx.cs" MasterPageFile="~/MasterPage3.master" Inherits="start" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

        <table width="560" align="center">
            <tr>
                <td width="100%" align="right">
                    <asp:LoginName ID="LoginName1" runat="server" CssClass="boldtext" FormatString="Currently logged in as: {0}" />
                </td>
            </tr>
        </table>     
        <table width="560" align="center">
            <tr>
                <td style="width: 556px">
                    <asp:Image ID="imgQuizStartingNow" SkinID="quizstartingnow" runat="server" /></td>
            </tr>
            <tr>
                <td style="width: 556px">&nbsp;</td>
            </tr>
            <tr>
                <td class="h1" style="width: 556px">Ready to Start the Test
                </td>
            </tr>
            <tr>
                <td style="width: 556px"><asp:Image ID="imgLine1" SkinID="line" runat="server" /></td>
            </tr>
            <tr>
                <td class="generaltext" style="width: 556px; height: 116px;">
                    You are about to take the quiz.&nbsp; The quiz contains multiple choice style questions.&nbsp;
                    Complete each question from the drop down list box then select the Next button.&nbsp;
                    You will not be able to go back and change your answers once you select the Next
                    button, so choose carefully.<br />
                    <br />
                    When you are ready to begin, select the Start button below.</td>
            </tr>                                    
            <tr>
                <td align="right" style="width: 556px; height: 8px;">
                    <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Style="z-index: 100;
                        left: 477px; position: absolute; top: 414px" Text="START" Font-Bold="True" Font-Size="Medium" Width="94px" BackColor="#FFFF80" ForeColor="#00C000" />
                    </td>
            </tr>
        </table>
  
</asp:Content>