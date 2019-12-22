<%@ Page Language="C#" MasterPageFile="~/Staff.master" AutoEventWireup="true" CodeFile="StaffProfile_staff.aspx.cs" Inherits="StaffProfile_staff" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cpStaffDetails" Runat="Server">
    <table>
    <tr>
    <td>
        <asp:Label ID="LbiUserName" runat="server" Text="User Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtUserName" runat="server" Enabled="False"></asp:TextBox>
    </td>
    
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblPassword" runat="server" Text="Password"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="Txtpassword" runat="server" TextMode="Password" 
            Enabled="False"></asp:TextBox>
    </td>
   
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblFirstName" runat="server" Text="First Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtFirstname" runat="server" Enabled="False"></asp:TextBox>
    </td>
    
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="LblLastName" runat="server" Text="Last Name"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtLastname" runat="server" Enabled="False"></asp:TextBox>
    </td>

    </tr>
    
    
     <tr>
    <td>
        <asp:Label ID="LblDob" runat="server" Text="Date Of Birst"></asp:Label>
    </td>
    <td>
        <asp:Calendar ID="CalDob" runat="server" 
            onselectionchanged="CalDob_SelectionChanged" Enabled="False"></asp:Calendar>
          <asp:TextBox ID="TxtDob" runat="server" Enabled="False"></asp:TextBox>
    </td>
   
  
    
    </tr>
    <tr>
    <td>
        <asp:Label ID="LblAddress" runat="server" Text="Address"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtAddress" runat="server" TextMode="MultiLine" 
            Enabled="False"></asp:TextBox>
    </td>
    
    </tr>
    
    
    <tr>
    <td>
        <asp:Label ID="LblEmailid" runat="server" Text="Email Id"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtEmailid" runat="server" Enabled="False"></asp:TextBox>
    </td>
    
    </tr>
    <tr>
    <td>
    <asp:Label ID="LblContactNumber" runat="server" Text="Contact Number"></asp:Label>
    </td>
    <td>
        <asp:TextBox ID="TxtContactNumber" runat="server" Enabled="False"></asp:TextBox>
    </td>
    
    </tr>
    <tr>
    <td>
       
    <asp:Label ID="LblDesignation" runat="server" Text="Designation"></asp:Label>
    </td>
    <td>
        <asp:DropDownList ID="DDDLDesignation" runat="server" Enabled="False">
        </asp:DropDownList>
    </td>
 
    </tr>
    <tr>
    <td>
        <asp:Label ID="Lbldepartment" runat="server" Text="Department"></asp:Label>
    </td>
    <td>
        <asp:DropDownList ID="DDDLDepartment" runat="server" Enabled="False">
        </asp:DropDownList>
    </td>
   
    </tr>
   
   <tr>
   <td align="center">
       <asp:Button ID="BtnEdit" runat="server" Text="Edit" 
           onclick="BtnEdit_Click" style="height: 26px" />
           <td>
               <asp:Button ID="Btnupdate" runat="server" Text="Update" 
                   onclick="Btnupdate_Click" Enabled="False" />
           
           </td>
   </td>
   <td align="center">
       <asp:Button ID="BtnCancel" runat="server" Text="Cancel" 
           onclick="BtnCancel_Click" />
   </td>
   
   </tr>
   <tr>
   <td align="center">
       <asp:Label ID="Lblerrmsg" runat="server" ForeColor="#FF3300" ></asp:Label>
       </td>
   </tr>
    
    </table>
</asp:Content>

