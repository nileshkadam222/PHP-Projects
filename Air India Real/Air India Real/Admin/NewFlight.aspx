<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="NewFlight.aspx.cs" Inherits="Admin_NewFlight" Title="Untitled Page" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="cc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table bgcolor="#CCFFFF" align="center">
   
   
    <tr>
    <td colspan ="3" align="center" bgcolor="Black" height="20" width="200">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Label ID="lbltitle" runat="server" Font-Bold="True" 
            Text="New Flight Detail" ForeColor="White"></asp:Label>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="lblid" runat="server" Text="Flight Id"></asp:Label></td>
    <td>:</td>
    <td>
        <asp:TextBox ID="txtplaneid" runat="server" ReadOnly="True"></asp:TextBox></td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="lblplanename" runat="server" Text="Flight Name"></asp:Label></td>
    <td>:</td>
    <td>
        <asp:TextBox ID="txtplanename" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
            ControlToValidate="txtplanename" Display="Dynamic" 
            ErrorMessage="Plane Name is Required.">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="lbltotalseats" runat="server" Text="Total Seat"></asp:Label></td>
    <td>:</td>
    <td>
        <asp:TextBox ID="txttotalseats" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
            ControlToValidate="txttotalseats" Display="Dynamic" 
            ErrorMessage="Total Seats areRequired">*</asp:RequiredFieldValidator>
                </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="lblstatus" runat="server" Text="Status"></asp:Label></td>
    <td>:</td>
    <td>
        <asp:RadioButton ID="radrunnig" runat="server" GroupName="status" 
            Text="Running" Checked="True" />
        <asp:RadioButton ID="radcancel" runat="server" GroupName="status" 
            Text="Cancel" />
    </td>
    </tr>
    
    <tr>
    <td colspan ="3" align="center">
        <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
            ShowMessageBox="True" ShowSummary="False" />
        <asp:ScriptManager ID="ScriptManager1" runat="server">
        </asp:ScriptManager>
        
        <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender1" runat="server" 
            FilterType="Numbers" TargetControlID="txttotalseats">
        </cc1:FilteredTextBoxExtender>
        </td>
    </tr>
    
    <tr>
    <td colspan ="3" bgcolor="Black" height="20" width="200">
        <asp:Button ID="btnsubmit" runat="server" Text="Submit" 
            onclick="btnsubmit_Click" />
        &nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Button ID="btncancel" runat="server" Text="Cancel" 
            onclick="btncancel_Click" CausesValidation="False" /></td>
    
    </tr>
    
    <tr>
    <td colspan ="3" align="center" valign="baseline">
        <asp:Label ID="lblDuplicate" runat="server" Text=""></asp:Label>
        </td>
    </tr>
    
    
    </table>
   
</asp:Content>

