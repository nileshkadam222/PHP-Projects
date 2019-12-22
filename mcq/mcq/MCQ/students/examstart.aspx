<%@ Page Language="C#" AutoEventWireup="true" CodeFile="examstart.aspx.cs" Inherits="students_examstart" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>MCQ ONLINE EXAM</title>
    <link rel="favicon icon" href="../images/icon.jpg" />
    <link href="../include/StyleSheet.css" type="text/css" rel="Stylesheet" />
    <script type="text/javascript" src="../include/JScript.js"></script>
    <style type="text/css">
        .style1
        {
            width: 454px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <span id="timerLabel" runat="server"></span>
    <script type="text/javascript">

        function countdown() {
            seconds = document.getElementById("timerLabel").innerHTML;
            if (seconds > 0) {
                document.getElementById("timerLabel").innerHTML = seconds - 1;
                setTimeout("countdown()", 1000);
            }
        }

        setTimeout("countdown()", 1000);

    </script>
   
        <ContentTemplate>
            <asp:Label runat="server" ID="DateStampLabel" />
        </ContentTemplate>
    </asp:UpdatePanel>
    <table border="0px" cellspacing="0" width="100%">
        <tr class="tdbackgroungimage">
            <td>
                <table width="100%">
                    <tr>
                        <td class="tdright">
                            <a href="../Default.aspx">Login Out</a>&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="logo">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <asp:Image ID="txtlogo" runat="server" ImageUrl="~/images/onlinelogo.png" />
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="tdright menu">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0px" cellspacing="0" width="70%" style="padding-left: 60px; padding-top: 60px">
                    <tr>
                        <td>
                            <fieldset>
                                <legend>
                                    <asp:Label ID="lblstudname" runat="server"></asp:Label>
                                </legend>
                                <table width="100%" align="center">
                                    <tr>
                                        <td colspan="2" class="lbl">
                                            <asp:Label ID="lblsubject" runat="server"></asp:Label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <asp:Label ID="lbltime" runat="server"></asp:Label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <asp:Label ID="lblqno" runat="server"></asp:Label>
                                            <br />
                                            <br />
                                            <br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <asp:Label ID="lblquestion" runat="server"></asp:Label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="style1">
                                            &nbsp;&nbsp;A<asp:RadioButton ID="rbtna" runat="server" GroupName="option" TabIndex="1"
                                                Height="20px" />
                                        </td>
                                        <tr>
                                            <td>
                                                &nbsp; B<asp:RadioButton ID="rbtnb" runat="server" GroupName="option" TabIndex="2"
                                                    Height="20px" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style1">
                                                &nbsp;&nbsp;C<asp:RadioButton ID="rbtnc" runat="server" GroupName="option" TabIndex="3" />
                                            </td>
                                        </tr>
                                        <td>
                                            &nbsp;&nbsp;D<asp:RadioButton ID="rbtnd" runat="server" GroupName="option" TabIndex="4"
                                                Height="20px" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <asp:ImageButton ID="btnprev" runat="server" ImageUrl="~/images/prevbtn.png" Height="47px"
                                                Width="97px" OnClick="btnprev_Click" />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <asp:ImageButton ID="btnnext" runat="server" ImageUrl="~/images/nextbtn.png" Height="47px"
                                                Width="97px" OnClick="btnnext_Click" />
                                        </td>
                                        <td align="right">
                                            <asp:ImageButton ID="btnfinish" runat="server" ImageUrl="~/images/finishbtn.png"
                                                Height="47px" Width="157px" OnClientClick="retutn finishmsg()" OnClick="btnfinish_Click" />
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
