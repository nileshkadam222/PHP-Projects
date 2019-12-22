<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Search.aspx.cs" Inherits="Search" Title="Untitled Page" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="cc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
    <table  align="left" style="font-weight: bold; " bgcolor="#CCFFFF">
        <tr>
            <td align="center" bgcolor="Black" colspan="3" style="height: 21px">
                <asp:Label ID="lbltitle" runat="server" Text="Search Detail" ForeColor="White"></asp:Label>
            </td>
        </tr>
        <tr>
            <td colspan="3">
            </td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lblsource" runat="server" Text="Source"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:DropDownList ID="ddlSource" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlSource_SelectedIndexChanged">
                </asp:DropDownList>
                <asp:CompareValidator ID="CompareValidator3" runat="server" ControlToValidate="ddlSource"
                    Display="Dynamic" ErrorMessage="Select Source Station" Operator="NotEqual" SetFocusOnError="True"
                    ValueToCompare="0">*</asp:CompareValidator></td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lbldestination" runat="server" Text="Destination"></asp:Label>
            </td>
            <td>
            </td>
            <td>
                <asp:DropDownList ID="ddlDestination" runat="server">
                </asp:DropDownList>
                <asp:CompareValidator ID="CompareValidator4" runat="server" ControlToValidate="ddlDestination"
                    Display="Dynamic" ErrorMessage="Select Destination  Station" Operator="NotEqual"
                    SetFocusOnError="True" ValueToCompare="0">*</asp:CompareValidator></td>
        </tr>
        
        <tr>
            <td>
                <asp:Label ID="lbldate" runat="server" Text="Date"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:TextBox ID="txtDate" runat="server" MaxLength="10" Width="110px"></asp:TextBox>
                <asp:Image
                    ID="Imgcalender" runat="server" Height="16px" 
                    ImageUrl="~/Image/Calendar_scheduleHS.PNG" />
                <asp:ScriptManager ID="ScriptManager1" runat="server">
                </asp:ScriptManager>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                    ControlToValidate="txtDate" Display="Dynamic" 
                    ErrorMessage="Select Date From Calender">*</asp:RequiredFieldValidator>
                <cc1:CalendarExtender ID="CalendarExtender1" runat="server" Format="dd/MM/yyyy" 
                    PopupButtonID="Imgcalender" TargetControlID="txtDate">
                </cc1:CalendarExtender> </td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lblnoseats" runat="server" Text="No Of Seats"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:DropDownList ID="ddlSeats" runat="server">
                    <asp:ListItem Value="0">--Select--</asp:ListItem>
                    <asp:ListItem>1</asp:ListItem>
                    <asp:ListItem>2</asp:ListItem>
                    <asp:ListItem>3</asp:ListItem>
                    <asp:ListItem>4</asp:ListItem>
                    <asp:ListItem>5</asp:ListItem>
                    <asp:ListItem>6</asp:ListItem>
                    <asp:ListItem>7</asp:ListItem>
                    <asp:ListItem>8</asp:ListItem>
                    <asp:ListItem>9</asp:ListItem>
                    <asp:ListItem>10</asp:ListItem>
                </asp:DropDownList>&nbsp;<asp:CompareValidator ID="CompareValidator5" runat="server"
                    ControlToValidate="ddlSeats" Display="Dynamic" ErrorMessage="Select Total Seats"
                    Operator="NotEqual" SetFocusOnError="True" ValueToCompare="0">*</asp:CompareValidator></td>
        </tr>
        <tr>
            <td colspan="3">
                <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
                    ShowMessageBox="True" ShowSummary="False" />
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="Black" colspan="3" style="height: 21px">
                <asp:Button ID="btnfind" runat="server" Font-Bold="True" Text="Find" Width="68px" OnClick="btnfind_Click" /></td>
        </tr>
    </table>
 
    </asp:Content>

