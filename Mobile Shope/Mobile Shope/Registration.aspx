<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Registration.aspx.cs" Inherits="Registration" Title="User Registration" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table align="center" 
    style="background-image: url('images/background2.jpg')">
    <tr>
        <td >
                <asp:Label ID="lblfname" runat="server" Text="First Name *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
        </td>
        <td>&nbsp;&nbsp; :</td>
        <td>
                <asp:TextBox ID="txtfname" runat="server" Width="218px"></asp:TextBox>
        </td>
        <td> 
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                ControlToValidate="txtfname" ErrorMessage="Plese Enter First Name"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
         <td >
                <asp:Label ID="lbllname" runat="server" Text="Last Name *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
         </td>
        <td>&nbsp;&nbsp; :</td>
        <td>
                <asp:TextBox ID="txtlname" runat="server" Width="218px"></asp:TextBox>
        </td>
        <td> 
                <asp:RequiredFieldValidator ID="RequiredFieldValidator8" runat="server" 
                ControlToValidate="txtlname" ErrorMessage="Plase Enter Last Name"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
         <td style="padding-bottom:60px" >
                <asp:Label ID="lbladdress" runat="server" Text="Address *" align="top" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
       </td>
        <td style="padding-bottom:60px" >&nbsp;&nbsp;&nbsp;
        </td>
        <td>
                <asp:TextBox ID="txtaddress" runat="server" Height="70px" Width="215px" 
                TextMode="MultiLine"></asp:TextBox>
         </td>
         <td style="padding-bottom:60px" > 
                <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" 
                ControlToValidate="txtaddress" ErrorMessage="Enter Your Address"></asp:RequiredFieldValidator>
         </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
        <td >
                <asp:Label ID="lblmobile_no" runat="server" Text=" Mobile No*" align="top" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>  
         </td>
         <td>&nbsp;&nbsp; :</td>
         <td>
                <asp:TextBox ID="txtmobileno" runat="server" Width="217px"></asp:TextBox>
         </td>
        <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" 
                ControlToValidate="txtmobileno" ErrorMessage="Enter Mobile No" 
                ToolTip="Ex(9978036877)" ValidationExpression="\d{10}" Display="Dynamic"></asp:RegularExpressionValidator>
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>   
    <tr>
        <td >
                <asp:Label ID="lblemail" runat="server" Text="E-mail *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
        </td>
        <td>&nbsp;&nbsp; :</td>
        <td>
                <asp:TextBox ID="txtemail" runat="server" Width="217px"></asp:TextBox>
        </td>
        <td>   
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" 
                ControlToValidate="txtemail" ErrorMessage="Enter Your E-mail ID" 
                ToolTip="i.e.(Tejas_savaliya@yahoo.com)" 
                ValidationExpression="\S+@\S+\.\S+" Display="Dynamic"></asp:RegularExpressionValidator>
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
         <td >
                <asp:Label ID="lblgender" runat="server" Text="Gender *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
    </td>
         <td>&nbsp;&nbsp; :</td>
    <td>
                <asp:RadioButton ID="rdbmale" runat="server" Text="Male" Checked="True" 
                GroupName="g1" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <asp:RadioButton ID="rdbfemale" runat="server" Text="Female" GroupName="g1" />
        </td>
        <td style="padding-bottom:60px" >
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
        <td >
                <asp:Label ID="lblstate" runat="server" Text="State *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
        </td>
        <td>&nbsp;&nbsp; :</td>
        <td>
                <asp:TextBox ID="txtstate" runat="server" Width="218px"></asp:TextBox>
        </td>
        <td> 
                <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                ControlToValidate="txtstate" ErrorMessage="Enter Your State"></asp:RequiredFieldValidator>
        </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
        <td >
                <asp:Label ID="lblcity" runat="server" Text="City *" Font-Size="Medium" 
                ForeColor="#0099FF"></asp:Label>
        </td>
        <td>&nbsp;&nbsp; :</td>
        <td>
                <asp:TextBox ID="txtcity" runat="server" Width="218px"></asp:TextBox>
        </td>
        <td> 
                <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" 
                ControlToValidate="txtcity" ErrorMessage="Enter Your city"></asp:RequiredFieldValidator>
      </td>
    </tr>
    <tr><td colspan="4"><p></p></td></tr>
    <tr>
        <td class="style1" colspan="3">
            <center><asp:Button ID="btnsubmit" runat="server" Text="Submit" 
                onclick="btnsubmit_Click" />
                &nbsp;&nbsp;&nbsp;&nbsp;
                <asp:Button ID="btnclear" runat="server" Text="Clear" Width="57px" 
                onclick="btnclear_Click" /></center>
    </td>
    </tr>
</table>
</asp:Content>

