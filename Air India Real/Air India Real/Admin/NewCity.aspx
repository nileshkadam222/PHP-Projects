<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="NewCity.aspx.cs" Inherits="Admin_NewCity" Title="Untitled Page" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="cc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
  
   <table align="center" style="font-weight: bold" bgcolor="#CCFFFF">
            <tr>
                <td align="center" bgcolor="Black" colspan="3">
                    <asp:Label ID="lblid" runat="server" ForeColor="White" Text="New City Detail"></asp:Label>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblcityid" runat="server" Text="City Id"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtCityid" runat="server" Width="54px" Enabled="False"></asp:TextBox>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 26px">
                    <asp:Label ID="lblcityname" runat="server" Text="City Name"></asp:Label>
                </td>
                <td style="height: 26px">
                    :</td>
                <td style="height: 26px">
                    <asp:TextBox ID="txtCName" runat="server" Width="227px" MaxLength="25"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtCName"
                        Display="Dynamic" ErrorMessage="City Name Required" SetFocusOnError="True">*</asp:RequiredFieldValidator>
                    &nbsp;</td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblcityaddress" runat="server" Text="Address"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtAddress" runat="server" Rows="3" TextMode="MultiLine" 
                        Width="227px" MaxLength="200"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="txtAddress"
                        Display="Dynamic" ErrorMessage="Address Required" SetFocusOnError="True">*</asp:RequiredFieldValidator></td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblcontactperson" runat="server" Text="Contact Person"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtConPer" runat="server" Width="227px" MaxLength="25"></asp:TextBox></td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblphoneno" runat="server" Text="Phone No."></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtPhoneNo" runat="server" Width="227px" MaxLength="15"></asp:TextBox></td>
            </tr>
            <tr>
                <td colspan ="3">
                
                
                    <asp:ScriptManager ID="ScriptManager1" runat="server">
                    </asp:ScriptManager>
                    <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender3" runat="server" 
                        TargetControlID="txtConPer" 
                        ValidChars="abcdefgh ijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.">
                    </cc1:FilteredTextBoxExtender>
                    <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender2" runat="server" 
                        TargetControlID="txtCName" 
                        ValidChars="abcdefghij klmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ">
                    </cc1:FilteredTextBoxExtender>
                    <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender1" runat="server" 
                        TargetControlID="txtPhoneNo" ValidChars="01234 56789+-">
                    </cc1:FilteredTextBoxExtender>
                    <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
                        ShowMessageBox="True" ShowSummary="False" />
                
                
                </td>
                </tr>
            
            <tr>
                <td align="left" bgcolor="Black" colspan="3" height="25">
                    <asp:Button ID="btnSubmit" runat="server" Font-Bold="True" Text="Submit" OnClick="btnSubmit_Click" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <asp:Button ID="btncancel" runat="server" Font-Bold="True" Text="Cnacel" 
                        Width="62px" CausesValidation="False" onclick="btncancel_Click" /></td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <asp:Label ID="lblDuplicate" runat="server" ForeColor="Red"></asp:Label></td>
            </tr>
        </table>
  
</asp:Content>

