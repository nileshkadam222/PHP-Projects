<%@ Page Language="C#" MasterPageFile="~/Login.master" AutoEventWireup="true" CodeFile="Registrations.aspx.cs" Inherits="Registrations" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cLogin" Runat="Server">
    <table style="width: 375px">
    <tr>
    <td>
        <asp:Label ID="LbiUserName" runat="server" Text="User Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtUserName" runat="server"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVUserName" runat="server" ControlToValidate="TxtUsername" ErrorMessage="Enter User Name"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblPassword" runat="server" Text="Password"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="Txtpassword" runat="server" TextMode="Password"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVPassword" runat="server" ControlToValidate="Txtpassword" ErrorMessage="Enter Password"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblFirstName" runat="server" Text="First Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtFirstname" runat="server"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVFirstname" runat="server" ControlToValidate="TxtFirstname" ErrorMessage="Enter First Name"></asp:RequiredFieldValidator>
    </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="LblLastName" runat="server" Text="Last Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtLastname" runat="server"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVLastname" runat="server" ControlToValidate="TxtLastname" ErrorMessage="Enter Last Name"></asp:RequiredFieldValidator>
    </td>
    </tr>
    
    
     <tr>
    <td>
        <asp:Label ID="LblDob" runat="server" Text="Date Of Birst"></asp:Label>
    </td>
    <td>
        <asp:Calendar ID="CalDob" runat="server" 
            onselectionchanged="CalDob_SelectionChanged"></asp:Calendar>
          <asp:TextBox ID="TxtDob" runat="server"></asp:TextBox>
    </td>
   
  
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFV" runat="server" ControlToValidate="TxtDob" ErrorMessage="Select Date Of Birth"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblAddress" runat="server" Text="Address"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtAddress" runat="server" TextMode="MultiLine"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVAddress" runat="server" ControlToValidate="TxtAddress" ErrorMessage="Enter Address"></asp:RequiredFieldValidator>
    </td>
    </tr>
    
    
    <tr>
    <td>
        <asp:Label ID="LblEmailid" runat="server" Text="Email Id"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtEmailid" runat="server"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVEmailid" runat="server" ControlToValidate="TxtEmailid" ErrorMessage="Enter Email Id"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
    <asp:Label ID="LblContactNumber" runat="server" Text="Contact Number"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtContactNumber" runat="server"></asp:TextBox>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVMobileNumber" ControlToValidate="TxtContactNumber" runat="server" ErrorMessage="Enter Contact Number"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
       
    <asp:Label ID="LblDesignation" runat="server" Text="Designation"></asp:Label>
    </td>
    <td>
        <asp:DropDownList ID="DDDLDesignation" runat="server">
            <asp:ListItem>Select</asp:ListItem>
            <asp:ListItem>Admin</asp:ListItem>
            <asp:ListItem>Hod</asp:ListItem>
            <asp:ListItem>Staff</asp:ListItem>
        </asp:DropDownList>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RFVDesignation" InitialValue="Select" ControlToValidate="DDDLDesignation" runat="server" ErrorMessage="Select Designation"></asp:RequiredFieldValidator>
    </td>
    </tr>
    <tr>
    <td>
        <asp:Label ID="Lbldepartment" runat="server" Text="Department"></asp:Label>
    </td>
    <td>
        <asp:DropDownList ID="DDDLDepartment" runat="server">
            <asp:ListItem>Select</asp:ListItem>
            <asp:ListItem>CSE</asp:ListItem>
            <asp:ListItem>CSIT</asp:ListItem>
            <asp:ListItem>EEE</asp:ListItem>
            <asp:ListItem>ECE</asp:ListItem>
        </asp:DropDownList>
    </td>
    <td style="width: 114px">
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" InitialValue="Select" runat="server" ControlToValidate="DDDLDepartment" ErrorMessage="Select Department"></asp:RequiredFieldValidator>
    </td>
    </tr>
   
   <tr>
   <td align="center">
       <asp:Button ID="BtnRegister" runat="server" Text="Register" 
           onclick="BtnRegister_Click" style="height: 26px" />
   </td>
   <td align="center">
       <asp:Button ID="BtnClear" runat="server" Text="Clear" 
           onclick="BtnClear_Click" CausesValidation="False" />
   </td>
   
   </tr>
   <tr>
   <td>
       <asp:Label ID="Lblerrmsg" runat="server" ></asp:Label>
   </td>
   </tr>
    
    </table>
</asp:Content>

