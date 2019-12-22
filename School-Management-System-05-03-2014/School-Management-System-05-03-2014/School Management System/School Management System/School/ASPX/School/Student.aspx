<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Student.aspx.cs" Inherits="Student" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="StyleSheet.css" runat="server" rel="stylesheet" />

    <script language="javascript" type="text/javascript" src="jScript.js"></script>

    <title>Student Registration Page</title>

    <script type="text/javascript" language="javascript"> 


function windowclose()
{
window.close("Student.aspx");
}

    </script>

</head>
<body>
    <form id="form1" runat="server">
        <div>
            <center id="CENTER1">
                <fieldset style="width: 667px; height: 486px; text-align: left;">
                    <legend id="lgdStudentRegistration" runat="server"><b><span style="color: #ffffff">Student Registration</span></b></legend>
                    <table id="tblCommon" style="width: 558px; height: 370px">
                        <tr>
                            <td style="width: 376px; height: 419px;">
                                <table style="width: 224px; height: 26px" id="tblDetails">
                                    <tr>
                                        <td style="text-align: left">
                                            <span style="color: #ffffff">Enter Student Details:</span></td>
                                    </tr>
                                </table>
                                <table style="text-align: center; width: 292px; height: 333px;" id="tblStudent">
                                    <tr>
                                        <td style="width: 115px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">AdmissionNo</span></td>
                                        <td style="text-align: left">
                                            <asp:TextBox ID="txtAdmissionNo" runat="server" CssClass="textbox" MaxLength="10"
                                                TabIndex="1" ReadOnly="True"></asp:TextBox><span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">FirstName </span>
                                        </td>
                                        <td style="text-align: left">
                                            <asp:TextBox ID="txtFirstName" runat="server" CssClass="textbox" MaxLength="40" TabIndex="2"></asp:TextBox>
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">LastName </span>
                                        </td>
                                        <td style="text-align: left">
                                            <asp:TextBox ID="txtLastName" runat="server" CssClass="textbox" MaxLength="40" TabIndex="3"></asp:TextBox>
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px; height: 26px;">
                                            <span style="color: #ffffff">FatherName </span>
                                        </td>
                                        <td style="text-align: left; height: 26px;">
                                            <asp:TextBox ID="txtFatherName" runat="server" CssClass="textbox" MaxLength="40"
                                                TabIndex="4"></asp:TextBox><span style="color: #ff0000">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Class</span></td>
                                        <td style="text-align: left">
                                            <select id="ddlClass" runat="server" tabindex="5">
                                                <option value="--Select Class--"></option>
                                                <option value="Nursery"></option>
                                                <option value="LKG"></option>
                                                <option value="UKG"></option>
                                                <option value="1st"></option>
                                                <option value="2nd"></option>
                                                <option value="3rd"></option>
                                                <option value="4th"></option>
                                                <option value="5th"></option>
                                                <option value="6th"></option>
                                                <option value="7th"></option>
                                                <option value="8th"></option>
                                                <option value="9th"></option>
                                                <option value="10th"></option>
                                            </select>
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Section</span></td>
                                        <td style="text-align: left">
                                            <asp:DropDownList ID="ddlSection" runat="server" TabIndex="6">
                                                <asp:ListItem>--Select Section--</asp:ListItem>
                                                <asp:ListItem>A</asp:ListItem>
                                                <asp:ListItem>B</asp:ListItem>
                                            </asp:DropDownList><span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 21px; text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Roll No</span></td>
                                        <td style="height: 21px; text-align: left">
                                            <span style="color: #ff0000">
                                                <asp:TextBox ID="txtRollNo" runat="server" CssClass="textbox" TabIndex="7" ReadOnly="True"></asp:TextBox>*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 21px; text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Date of Birth</span></td>
                                        <td style="height: 21px; text-align: left">
                                            <span style="color: #ff0000">
                                                <input type="text" id="txtDateOfBirth" class="textbox" runat="server" onblur="javascript:return calendardate()"
                                                    onchange="javascript:return numericcheck(this)" size="10" tabindex="8" maxlength="10"  />
                                                <asp:Button ID="btnCalendarDOB" runat="server" OnClientClick="javascript:return CalWindowOpen1()"
                                                    Height="20px" Text="..." Width="25px" CssClass="button" />*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; height: 26px; width: 115px;">
                                            <span style="color: #ffffff">JoinDate </span>
                                        </td>
                                        <td style="text-align: left; height: 26px;">
                                            <input type="text" id="txtJoinDate" class="textbox" runat="server" onblur="javascript:return calendardate()"
                                                onchange="javascript:return numericcheck(this)" size="10" tabindex="9" maxlength="10" />
                                            <asp:Button ID="btnCalendarJoinDate" runat="server" Height="20px" OnClientClick="javascript:CalWindowOpen2()"
                                                Text="..." Width="25px" CssClass="button" /><span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">BloodGroup</span>
                                        </td>
                                        <td style="text-align: left">
                                            <asp:TextBox ID="txtBloodGroup" runat="server" CssClass="textbox" Columns="5" TabIndex="10"></asp:TextBox>
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">ContactNo </span>
                                        </td>
                                        <td style="text-align: left">
                                            <input type="text" id="txtContactNo" onkeypress="javascript:return mobilenumber(event)"
                                                class="textbox" runat="server" maxlength="10" size="10" tabindex="11" />
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Address </span>
                                        </td>
                                        <td style="text-align: left">
                                            <asp:TextBox ID="txtAddress" runat="server" CssClass="textbox" TextMode="MultiLine"
                                                MaxLength="200" TabIndex="12"></asp:TextBox>
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px;">
                                            <span style="color: #ffffff">Email Id</span>
                                        </td>
                                        <td style="text-align: left">
                                            <input type="text" id="txtEmail" runat="server" class="textbox" onchange="javascript:return isvalidEmail()"
                                                maxlength="50" size="40" tabindex="13" />
                                            <span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width: 115px; height: 24px;">
                                            <span style="color: #ffffff">Bus Facility</span></td>
                                        <td style="text-align: left; height: 24px;">
                                            <asp:DropDownList ID="ddlBusFacility" runat="server" TabIndex="14">
                                                <asp:ListItem>--Select Bus Facility--</asp:ListItem>
                                                <asp:ListItem>Yes</asp:ListItem>
                                                <asp:ListItem>No</asp:ListItem>
                                            </asp:DropDownList><span style="color: #ff0000">*</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 115px;">
                                            <asp:Button ID="btnLogin" runat="server" Text="Register" CssClass="button" OnClientClick="javascript:return validateupdatefields(this.id)"
                                                OnClick="btnLogin_Click" TabIndex="19" /></td>
                                        <td style="text-align: left;">
                                            <asp:Button ID="btnReset" runat="server" Text="Reset" CssClass="button" OnClientClick="javascript:return ClearAllFields();"
                                                ForeColor="Black" OnClick="btnReset_Click" />
                                        <asp:Button ID="btnClose" runat="server" CssClass="button" Text="Close" OnClientClick="javascript:windowclose()" /></td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width: 314px; height: 419px; text-align: right;">
                                &nbsp;
                                <table id="tblPhoto" style="width: 373px; height: 420px">
                                    <tr>
                                    <td style="text-align: left">
                                        <span style="color: #ffffff">Upload Photo <span style="color: #ff0000">*</span></span></td></tr>
                                    <tr>
                                        <td style="width: 304px; text-align: left;">
                                            <asp:Image ID="imgStudent" runat="server" Height="131px" Width="111px" /></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 304px; height: 24px; text-align: left;">
                                            <asp:FileUpload ID="fupImgUpload" runat="server" TabIndex="15" />
                                            <asp:Button ID="btnUpload" runat="server" CssClass="button" OnClick="btnUpload_Click"
                                                Text="Upload" /></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 304px; height: 171px;">
                                            <table id="tblUsernameDetails" runat="server" style="width: 379px; height: 98px">
                                                <tr>
                                                <td style="text-align: left">
                                                    <span style="color: #ffffff">Enter Login Credentials:</span></td></tr>
                                                <tr>
                                                    <td style="text-align: left; width: 132px; height: 39px;">
                                                        <span style="color: #ffffff">User Name(email id)</span></td>
                                                    <td style="width: 143px; text-align: left; height: 39px;">
                                                        <input type="text" id="txtUserName" runat="server" class="textbox" onchange="javascript:return isvalidUsername()"
                                                            maxlength="50" size="40" tabindex="16" />
                                                        <span style="color: #ff0000">*</span></td>
                                                    <td style="height: 39px; text-align: left" valign="top">
                                                        <table>
                                                            <tr>
                                                                <td style="text-align: left">
                                                                    <asp:LinkButton ID="LinkButton1" runat="server" OnClick="LinkButton1_Click" Height="3px" Width="59px">SelectEmail</asp:LinkButton></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left; height: 26px; width: 132px;">
                                                        <span style="color: #ffffff">Password </span>
                                                    </td>
                                                    <td style="height: 26px; width: 143px; text-align: left;">
                                                        <input type="password" id="txtPassword" runat="server" class="textbox" onchange="javascript:return passwordsmismatch()"
                                                            maxlength="15" size="40" tabindex="17" />
                                                        <span style="color: #ff0000">*</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 132px; text-align: left">
                                                        <span style="color: #ffffff">Confirm Password</span>
                                                    </td>
                                                    <td style="width: 143px; text-align: left">
                                                        <input type="password" id="txtConfirmPassword" runat="server" class="textbox" onchange="javascript:return passwordsmismatch()"
                                                            maxlength="15" size="40" tabindex="18" />
                                                        <span style="color: #ff0000">*</span></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        &nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 53px; text-align: right" valign="bottom">
                                        </td>
                                        <td style="height: 53px; text-align: right" valign="bottom">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 376px">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                &nbsp;
            </center>
        </div>
    </form>
</body>
</html>
