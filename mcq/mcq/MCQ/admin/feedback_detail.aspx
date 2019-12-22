<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="feedback_detail.aspx.cs" Inherits="admin_feedback_detail" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style2
        {
            width: 4%;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%" cellspacing="5" cellpadding="0"   >
    <tr>
        <td class="style2"  >
            <asp:Image ID="img1" runat="server" ImageUrl="~/images/Text-Edit-icon.png" 
                Height="276px" Width="244px" />
        </td>
        <td colspan="2" width="15%" valign="top">
<asp:GridView ID="grdshow" runat="server"  
            DataKeyNames="fid" 
            AutoGenerateColumns="false"  
            HeaderStyle-CssClass="header" 
            RowStyle-CssClass="item" 
            AlternatingRowStyle-CssClass="alter" 
            EmptyDataText="Not Any question"
            AllowPaging="true"
            PageSize="5" 
            
            
            >
                <Columns>
                
                    <asp:BoundField DataField="sname" HeaderText="Student Name" />
                    <asp:BoundField DataField="email" HeaderText="E-Mail ID" />
                    <asp:BoundField DataField="comment"  HeaderText="Comment" />
                    <asp:BoundField DataField="f_date" HeaderText="Date" />
                    <asp:TemplateField HeaderText="Action">
                            <ItemTemplate>
                                
                                <asp:ImageButton ID="Image1" runat="server" ImageUrl="~/images/delete (3).png" Height="34px" Width="36px" OnClientClick="Javascript:return confirmation();" OnClick="deletedata" CommandArgument='<% # Eval("fid") %>' />
                            </ItemTemplate>
                        </asp:TemplateField>
                    
                </Columns>  
            </asp:GridView>
        </td>
    </tr>
   </table>
</asp:Content>

