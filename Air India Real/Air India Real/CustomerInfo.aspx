<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="CustomerInfo.aspx.cs" Inherits="CustomerInfo" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style2
        {
            height: 28px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   
    <table align="left" style="font-weight: bold" bgcolor="#97FFFF" width="900" >
       
        
        <tr>
            <td align="center" colspan="6" bgcolor="Black">
                <asp:Label ID="lbltitle" runat="server" Text="Customer Detail" 
                    ForeColor="White"></asp:Label>
            </td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lblroutefrom" runat="server" Text="Route From"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblSource" runat="server"></asp:Label></td>
            <td>
                <asp:Label ID="lblto" runat="server" Text="To"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblDestination" runat="server"></asp:Label></td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lblbookingdate" runat="server" Text="Booking Date"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblBDate" runat="server"></asp:Label></td>
            <td>
                <asp:Label ID="lbljournydate" runat="server" Text="Journey Date"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblJDate" runat="server"></asp:Label></td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="lblnoofseat" runat="server" Text="No. Of Seats"></asp:Label>
            </td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblNoOfSeats" runat="server"></asp:Label></td>
            <td>
                <asp:Label ID="lblseatnoo" runat="server" Text="Seat No."></asp:Label>
&nbsp;</td>
            <td>
                :</td>
            <td>
                <asp:Label ID="lblSeatNo" runat="server"></asp:Label></td>
        </tr>
        <tr>
            <td align="center" colspan="6">
                <asp:Label ID="Label1" runat="server" Text="Passenger Detail"></asp:Label>
            </td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="Label2" runat="server" Text="Name"></asp:Label>
            </td>
            <td>
                :</td>
            <td colspan="4">
                <asp:TextBox ID="txtName" runat="server" Width="276px" MaxLength="20"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtName"
                    Display="Dynamic" ErrorMessage="Name Required">*</asp:RequiredFieldValidator></td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="Label3" runat="server" Text="Address"></asp:Label>
            </td>
            <td>
                :</td>
            <td colspan="4">
                <asp:TextBox ID="txtAddress" runat="server" Rows="3" TextMode="MultiLine" Width="276px" MaxLength="200"></asp:TextBox></td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="Label4" runat="server" Text="Contact No."></asp:Label>
            </td>
            <td>
                :</td>
            <td colspan="4">
                <asp:TextBox ID="txtContNo" runat="server" Width="179px" MaxLength="15"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                    ErrorMessage="Please Enter Contact No." ControlToValidate="txtContNo">*</asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td>
                <asp:Label ID="Label5" runat="server" Text="Total Amount"></asp:Label>
            </td>
            <td>
                :</td>
            <td colspan="4">
                <asp:Label ID="Label6" runat="server" Text="Rs."></asp:Label>
&nbsp;<asp:Label ID="lblTotalAmt" runat="server"></asp:Label></td>
        </tr>
        <tr>
            <td align="center" colspan="6" bgcolor="Black" class="style2">
                <asp:Button ID="btnPayment" runat="server" Font-Bold="True" Text="Proceed" 
                    Width="112px" OnClick="btnPayment_Click" />
                <asp:Button ID="btnBack" runat="server" CausesValidation="False" Font-Bold="True"
                    Text="Back" Width="70px" />&nbsp;</td>
        </tr>
        <tr>
        <td colspan ="6">
            <asp:Label ID="Label7" runat="server" Text="Label" Visible="False"></asp:Label>
            <asp:ValidationSummary ID="ValidationSummary1" runat="server" ShowMessageBox="True"
        ShowSummary="False" /> 
    
            </td>
        </tr>
        
    </table>
    
    </asp:UpdatePanel>
</asp:Content>

