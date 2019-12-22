<%@ Page Language="C#" MasterPageFile="~/students/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="students_Default" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%" cellspacing="5" cellpadding="0" >
        <tr>
        <td width="10%" rowspan="12"></td>
        
         <td rowspan="12"   width="15%"  valign="middle" align="left">
            <asp:Image ID="img" runat="server" ImageUrl="~/images/Student-1.png"
                Height="364px" Width="197px"/>
        </td>
        <td colspan="2" width="30%">
            <fieldset >
                <legend><asp:Image ID="imd" runat ="server" ImageUrl="~/images/User_48x48.png"
                   style="margin-right: 0px" Width="43px" />Update Profile</legend>
                <table width="100%" cellspacing="5" cellpadding="0"  >
                    <tr>
                        <td class="lbl">
                            Name:
                        </td>
                        <td>
                            <asp:Label ID="lblnname" runat="server" CssClass="updatelbl" ></asp:Label>
                            
                        </td>
            
                    </tr>
                    <tr>
                        <td class="lbl">
                            E Mail:
                        </td>
                        <td>
                            <asp:Label ID="lblemail" runat="server" CssClass="updatelbl"></asp:Label>
                        </td>
            
                    </tr>
                <tr>
                    <td class="lbl">
                         Address:
                    </td>
                    <td>
                        <asp:TextBox ID="txtaddress" runat="server" CssClass="textbox" TextMode="MultiLine"></asp:TextBox>
                    </td>
            
                </tr>
                <tr>
                    <td class="lbl">
                        City:
                    </td>
                    <td>
                        <asp:TextBox ID="txtcity" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
            
                </tr>
                <tr>
                    <td class="lbl">
                        State:
                    </td>
                    <td>
                        <asp:TextBox ID="txtstate" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
            
                </tr>
                <tr>
                    <td class="lbl">
                        Contact:
                    </td>
                    <td>
                        <asp:TextBox ID="txtcontact" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
            
                </tr>
                <tr>
                    <td class="lbl">
                        Qualification:
                    </td>
                    <td>
                        <asp:DropDownList ID="ddlquali" runat="server" CssClass="textbox">
                            <asp:ListItem Text="BCA" Value="BCA"></asp:ListItem >
                            <asp:ListItem Text="MCA" Value="MCA"></asp:ListItem >
                            <asp:ListItem Text="B E" Value="B E"></asp:ListItem >
                            <asp:ListItem Text="M E" Value="M E"></asp:ListItem >
                            <asp:ListItem Text="MSc IT" Value="MSc IT"></asp:ListItem >
                            <asp:ListItem Text="BSc IT" Value="BSc IT"></asp:ListItem >
                            <asp:ListItem Text="Other" Value="Other"></asp:ListItem >
                        
                    
                        </asp:DropDownList>
                    </td>
            
                </tr>
                <tr>
                    <td class="lbl">
                        Subject:
                    </td>
                    <td>
                        <asp:DropDownList ID="ddlsub" runat="server">
                        </asp:DropDownList>
                    </td>
            
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    
                        <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/update.jpg" 
                            onclick="btnsubmit_Click" Height="33px" Width="94px"  />||
                        <asp:ImageButton ID="ImageButton1" runat="server" 
                            ImageUrl="~/images/StartTest.png" Width="96px" 
                            onclick="ImageButton1_Click" />&nbsp;
                   </td>
                </tr>
    
            </table>
        </fieldset>
    </td>
        <td width="60%" rowspan="6">
            <asp:Label ID="lblmsg" runat="server" CssClass="updatelbl"></asp:Label>
        </td>
        
    </tr>
 </table>
</asp:Content>

