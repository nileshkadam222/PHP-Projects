<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="NewRoute.aspx.cs" Inherits="Admin_NewRoute" Title="Untitled Page" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="cc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
   <table align="center" style="font-weight: bold" bgcolor="#CCFFFF">
            <tr>
                <td align="center" bgcolor="Black" colspan="3">
                    <asp:Label ID="lbltitle" runat="server" Text="Route Creation" ForeColor="White"></asp:Label>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblrouteid" runat="server" Text="Route Id"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtRNo" runat="server" style="text-align: right" 
                        Enabled="False" Width="54px"></asp:TextBox>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lblsource" runat="server" Text="Source"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:DropDownList ID="ddlSource" runat="server" 
                        DataTextField="City_Name" DataValueField="City_Code" Width="150px">
                        <asp:ListItem>a</asp:ListItem>
                        <asp:ListItem>b</asp:ListItem>
                        <asp:ListItem>c</asp:ListItem>
                    </asp:DropDownList>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="ddlSource"
                        Display="Dynamic" ErrorMessage="Select Source" InitialValue="0" SetFocusOnError="True">*</asp:RequiredFieldValidator>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lbldestination" runat="server" Text="Destination"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:DropDownList ID="ddlDest" runat="server" Width="150px">
                        <asp:ListItem>a</asp:ListItem>
                        <asp:ListItem>b</asp:ListItem>
                        <asp:ListItem>c</asp:ListItem>
                    </asp:DropDownList>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="ddlDest"
                        Display="Dynamic" ErrorMessage="Select Destination" InitialValue="0" SetFocusOnError="True">*</asp:RequiredFieldValidator>
                    <asp:CompareValidator ID="CompareValidator1" runat="server" ControlToCompare="ddlSource"
                        ControlToValidate="ddlDest" Display="Dynamic" ErrorMessage="Invalid Destination"
                        Operator="NotEqual" SetFocusOnError="True">*</asp:CompareValidator></td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lbldistance" runat="server" Text="Distance(Km)"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
                    <asp:TextBox ID="txtKm" runat="server" style="text-align: right" MaxLength="6" 
                        Width="150px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="txtKm"
                        Display="Dynamic" ErrorMessage="Kilometer Required" SetFocusOnError="True">*</asp:RequiredFieldValidator>
                    </td>
            </tr>
           
            
            <tr>
                <td>
                    <asp:Label ID="lblstatus" runat="server" Text="Status"></asp:Label>
                </td>
                <td>
                    :</td>
                <td>
        <asp:RadioButton ID="radrunnig" runat="server" GroupName="status" 
            Text="Running" Checked="True" />
        <asp:RadioButton ID="radcancel" runat="server" GroupName="status" 
            Text="Cancel" />
                    </td>
            </tr>
            <tr>
            <td colspan ="3">  
                <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
                    ShowMessageBox="True" ShowSummary="False" />
                <asp:ScriptManager ID="ScriptManager1" runat="server">
                </asp:ScriptManager>
                <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender1" runat="server" 
                    FilterType="Numbers" TargetControlID="txtKm">
                </cc1:FilteredTextBoxExtender>
                
            </td>
            </tr>
            
            <tr>
                <td align="left" bgcolor="Black" colspan="3" height="25">
                    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Font-Bold="True" OnClick="btnSubmit_Click" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <asp:Button ID="btncancel" runat="server" Text="Cancel" Font-Bold="True" 
                        Width="70px" CausesValidation="False" onclick="btncancel_Click" /></td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <asp:Label ID="lblDuplicate" runat="server" ForeColor="Red"></asp:Label></td>
            </tr>
        </table>
</asp:Content>

