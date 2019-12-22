<%@ Page Language="C#" MasterPageFile="~/local.master" AutoEventWireup="true" CodeFile="registration.aspx.cs" Inherits="registration" Title="Untitled Page" %>

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
            <fieldset>
                <legend><asp:Image ID="imd" runat ="server" ImageUrl="~/images/User_48x48.png"
                   style="margin-right: 0px" Width="43px" />Registration Now</legend>
                <table width="100%" cellspacing="5" cellpadding="0"  >
                    <tr>
                        <td class="lbl">
                            Name:
                        </td>
                        <td>
                            <asp:TextBox ID="txtfname" runat="server" Width="64px" ></asp:TextBox>
                            <asp:TextBox ID="txtmname" runat="server" Width="41px" ></asp:TextBox>
                            <asp:TextBox ID="txtlname" runat="server" Width="55px" ></asp:TextBox>
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
                        <td class="lbl">
                            Password:
                        </td>
                        <td>
                            <asp:TextBox ID="txtpassword" runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
                        </td>
                    </tr>
                    <tr>
                        <td class="lbl">
                             Conf-Password:
                        </td>
                        <td>
                            <asp:TextBox ID="txtconpassword" runat="server" CssClass="textbox" TextMode="Password"></asp:TextBox>
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
                            <asp:ListItem Text="Select Qualification" Value="quali" Selected="True" ></asp:ListItem >
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
                        <asp:DropDownList ID="ddlsub" runat="server" CssClass="textbox">
                            
                        </asp:DropDownList>
                    </td>
            
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    
                        <br />
                    
                        <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/sabmit2.png" 
                            OnClientClick="return valreg()" onclick="btnsubmit_Click" Height="35px" 
                            Width="89px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                        <asp:ImageButton ID="btnclear" runat="server" ImageUrl="~/images/clear2.png" 
                            Height="35px" Width="92px" />
                   </td>
                </tr>
    
            </table>
        </fieldset>
    </td>
        <td width="60%" rowspan="6"></td>
        
    </tr>
 </table>
    
</asp:Content>

