<%@ Page Language="C#" MasterPageFile="~/local.master" AutoEventWireup="true" CodeFile="Feedback.aspx.cs" Inherits="Feedback" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    
        
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%" cellspacing="5" cellpadding="0" >
     <tr>
        <td width="10%" rowspan="6"></td>
        <td colspan="2" width="15%">
            <fieldset>
                <legend>
                    &nbsp;<asp:Image ID="image" runat="server" ImageUrl="~/images/User_48x48.png" 
                    Height="48px" Width="49px" />FeedBack&nbsp; </legend>
                    <table width="100%" cellspacing="5" cellpadding="0"  >
   
                        <tr>
                             <td class="lbl">
                                 Name:
                            </td>
                            <td>
                                <asp:TextBox ID="txtname" runat="server" CssClass="textbox"></asp:TextBox>
                            </td>
                    </tr>
                    <tr>
                        <td class="lbl">
                            E Mail:
                        </td>
                        <td>
                            <asp:TextBox ID="txtemail" runat="server" CssClass="textbox"></asp:TextBox>
                        </td>
                </tr>
                <tr>
                    <td valign="top" class="lbl">
                        Comment:
                    </td>
                    <td>
                        <asp:TextBox ID="txtcomment" runat="server" TextMode="MultiLine" Height="56px"></asp:TextBox>
                    </td>
            </tr>
            <tr>
                 <td colspan="2" align="center">
                    
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/sabmit2.png" 
                         OnClientClick="return valfeed()" onclick="btnsubmit_Click" Height="27px" 
                         Width="88px"/>
                </td>
            </tr>
        </table>

    </fieldset>
  </td>
   <td rowspan="6"   width="30%"  valign="middle" align="left">
        <asp:Image ID="img" runat="server" ImageUrl="~/images/ContactPhone.png"   
                Height="268px" Width="275px"/>
  </td>
        
 </tr>

</table>

</asp:Content>

