﻿<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Editbranch.aspx.cs" Inherits="adminpanel_Editbranch" Title="Admin - Edit Branch" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center><table>
        <tr >
            <td align="left">
                    <asp:Label ID="lblbranch_name" runat="server" Text="Branch Name"></asp:Label>
            </td>
            <td> : </td>
            <td class="style1">
                    <asp:TextBox ID="txtbranch_name" runat="server" Width="200px"></asp:TextBox>
            </td>
            <td align="left">               
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ControlToValidate="txtbranch_name" ErrorMessage="Plese Enter Branch Name" 
                        ToolTip="i.e.(VIP Mobile Shope)"></asp:RequiredFieldValidator>
            </td>
       </tr>
       <tr>
            <td colspan="4"><p></p></td>
       </tr>
       <tr >
            <td align="left">
                      <asp:Label ID="lblbranch_contactno" runat="server" Text="Contact No"></asp:Label>
            </td>
            <td> : </td>
            <td class="style1">
                    <asp:TextBox ID="txtbranch_contactno" runat="server" Width="200px"></asp:TextBox>
            </td>
            <td align="left">                
                     <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" 
                         ControlToValidate="txtbranch_contactno" ErrorMessage="Plese Enter Mobile No" 
                         ToolTip="i.e.(9978036877)" ValidationExpression="\d{10}" Display="Dynamic"></asp:RegularExpressionValidator>               
             </td>
        </tr>
        <tr>
             <td colspan="4"><p></p></td>
        </tr>
        <tr >
             <td align="left" style="padding-bottom:60px">
                        <asp:Label ID="lblbranch_address" runat="server" Text="Address"></asp:Label>
             </td>
             <td style="padding-bottom:60px"> : </td>
             <td class="style1">
                        <asp:TextBox ID="txtbranch_address" runat="server" Width="200px" Height="90px" 
                        TextMode="MultiLine" Rows="3"></asp:TextBox>
             </td>
             <td align="left" style="padding-bottom:60px">             
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                         ControlToValidate="txtbranch_address" ErrorMessage="Plese Enter Address"></asp:RequiredFieldValidator>             
             </td>
        </tr>
        <tr>
             <td colspan="4"><p></p>
             </td>
        </tr>
        <tr >
             <td align="left">
                        <asp:Label ID="lblbranch_city" runat="server" Text="City"></asp:Label>
             </td>
             <td>: </td>
             <td class="style1">
                         <asp:TextBox ID="txtbranch_city" runat="server" Width="200px"></asp:TextBox>
             </td>
             <td align="left">               
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                         ControlToValidate="txtbranch_city" ErrorMessage="Plese Enter City" 
                         ToolTip="i.e(Rajkot)"></asp:RequiredFieldValidator>
             </td>
        </tr>
        <tr>
             <td colspan="4"><p></p> </td>
        </tr>
        <tr align="center">
             <td colspan="3" >
                         <asp:Button ID="btnsubmit" runat="server" Text="Submit" Width="63px" OnClick="btnsubmit_Click" />
             </td>
        </tr>
</table> </center>
</asp:Content>