<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Request_for_Account.aspx.cs" Inherits="Request_for_Account" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:Panel ID="Panel1" runat="server">
    
    <table bgcolor="#B3FFFF">
    
    <tr>
    <td colspan ="2" align="center" bgcolor="Black">
        <asp:Label ID="lbltitle" runat="server" Text="Request Form" Font-Bold="True" 
            ForeColor="White"></asp:Label></td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="lblrequestid" runat="server" Text="Request Id"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtrequestid" runat="server" ReadOnly="True" Width="175px"></asp:TextBox></td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label2" runat="server" Text="First Name"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtfirstname" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
            ControlToValidate="txtfirstname" Display="Dynamic" 
            ErrorMessage="First Name is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label3" runat="server" Text="Last Name"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtlastname" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
            ControlToValidate="txtlastname" Display="Dynamic" 
            ErrorMessage="Last Name is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label4" runat="server" Text="Address"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtaddress" runat="server" Height="59px" TextMode="MultiLine" 
            Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
            ControlToValidate="txtaddress" Display="Dynamic" 
            ErrorMessage="Address is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label5" runat="server" Text="City"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtcity" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
            ControlToValidate="txtcity" Display="Dynamic" ErrorMessage="City is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    
    <tr>
    <td>
        <asp:Label ID="Label1" runat="server" Text="State"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtstate" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
            ControlToValidate="txtstate" Display="Dynamic" ErrorMessage="State is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label8" runat="server" Text="Country"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtcountry" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" 
            ControlToValidate="txtcountry" Display="Dynamic" 
            ErrorMessage="Country is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label6" runat="server" Text="Phone"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtphone" runat="server" Width="175px"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" 
            ControlToValidate="txtphone" Display="Dynamic" 
            ErrorMessage="Phone No is Required">*</asp:RequiredFieldValidator>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label7" runat="server" Text="E-mail"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtemail" runat="server" Width="175px"></asp:TextBox>
        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" 
            ControlToValidate="txtemail" Display="Dynamic" 
            ErrorMessage="Enter Appropriate E-mail Id." 
            ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">*</asp:RegularExpressionValidator>
        </td>
    </tr>
    
    <tr>
    <td colspan ="2" bgcolor="Black">
        <asp:Button ID="btnsubmit" runat="server" Text="Submit" 
            onclick="btnsubmit_Click" />&nbsp;&nbsp;&nbsp;
        <asp:Button ID="btncancel"
            runat="server" Text="Cancel" CausesValidation="False" 
            onclick="btncancel_Click" /></td>
        </tr>
        
        <tr>
    <td colspan ="2">
        <asp:ValidationSummary ID="ValidationSummary1" runat="server" 
            ShowMessageBox="True" ShowSummary="False" />
    </td>
    </tr>
    
    </table>   
    </asp:Panel>
    
    <asp:Panel ID="Panel2" runat="server" Visible="False">
        <asp:Label ID="lblmessage" runat="server" 
            Text="Thank You.&lt;br&gt;We will contact you as soon as possible on your mail or phone." 
            Font-Bold="True" Font-Names="Candara" Font-Size="X-Large" 
            ForeColor="Yellow"></asp:Label>
        <br />
        <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/UserHome.aspx" 
            Font-Size="X-Large">Continue</asp:HyperLink>
    </asp:Panel> 
    
</asp:Content>

