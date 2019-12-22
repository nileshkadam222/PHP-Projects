<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="sub_master.aspx.cs" Inherits="admin_sub_master" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<table width="100%" cellspacing="5" cellpadding="0"   >
    <tr>
        
        <td colspan="2" width="15%" valign="top">
         <fieldset >
           <legend  >
                  Subject
                   </legend>
    <table width="30%" cellspacing="5" cellpadding="0"  >
        <tr>
            <td class="lbl">
                Subject:
            </td>
            <td>
                <asp:TextBox ID="txtsubject" runat="server" CssClass="textbox"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="lbl">
                Activation:
            </td>
            <td   >
                <asp:CheckBox ID="chkstatus" runat="server" Text="Status" CssClass="lbl" />
            </td>
       </tr>
       <tr> 
                <td  align="center" colspan="2" valign="bottom">
                <asp:Label ID="lblmsg" runat="server"></asp:Label>
                <br />
                    
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/save2.png" 
                         Height="34px" Width="86px" OnClientClick="return valsub()" onclick="btnsubmit_Click"  
                        /> 
                    
                    <asp:ImageButton ID="btnupdate" runat="server" ImageUrl="~/images/update.jpg" OnClientClick="return valsub()"
                         Height="34px" Width="86px" onclick="btnupdate_Click" 
                        /> 
                    
                    </td>
        </tr>
        </table>
        </fieldset>    
                    </td>
            <td width="70%">
                <asp:GridView ID="grdshowsubject" runat="server" AutoGenerateColumns="false" DataKeyNames="subid" AllowPaging="true" RowStyle-CssClass="item" HeaderStyle-CssClass="header" AlternatingRowStyle-CssClass="alter">
                    <Columns>
                    <asp:TemplateField HeaderText="Status">
                        <ItemTemplate>
                            <%--<asp:Image runat="server" ID="imgstatus"  ImageUrl='<%#Eval("a_status").Equals(1)?"~/images/sucssess.png":"~/images/Fail.gif"%>' Height="30" Width="30" />--%>
                            <asp:Image ID="status_img" runat="server" ImageAlign="Right" ImageUrl='<%# get_status_img_url(Convert.ToString(Eval("sub_status")))%>' 
                                    Height="20" Width="20"   />                            
                        </ItemTemplate>
                    </asp:TemplateField>
                        <asp:BoundField DataField="subname" HeaderText="Subjact" />
                        
                        <asp:BoundField DataField="s_date" HeaderText="Insert Date"  />
                        <asp:BoundField DataField="up_date" HeaderText="Update Date"  />
                        <asp:TemplateField HeaderText="Action">
                            <ItemTemplate>
                                <asp:ImageButton ID="imgupdate" runat="server" ImageUrl="~/images/edit.jpeg" Height="34px" Width="36px" OnClick="selectdata" CommandArgument='<% # Eval("subid") %>'  />
                                <asp:ImageButton ID="Image1" runat="server" ImageUrl="~/images/delete (3).png" Height="34px" Width="36px" OnClick="deletedata" CommandArgument='<% # Eval("subid") %>'  />
                            </ItemTemplate>
                        </asp:TemplateField>
                    </Columns>
                </asp:GridView>
            </td>
        
    </tr>
   </table>
</asp:Content>

