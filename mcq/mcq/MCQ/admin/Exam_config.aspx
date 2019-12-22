<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="Exam_config.aspx.cs" Inherits="admin_Exam_config" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table border="0px"  cellspacing="0" width="100%" >
    <tr>
        <td width="20%" valign="top">
            <fieldset>
                <legend >
                    EXAM Configuration</legend>
                     <table cellspacing="5" cellpadding="0" style="width: 78%"  >
        <tr>
            <td class="lbl">
                Subject:
            </td>
            <td>
                 <asp:DropDownList ID="ddlsubject" runat="server"  CssClass="textboxexam" ></asp:DropDownList>
            </td>
       </tr>
       <tr>
            <td class="lbl">
                Total Question:
            </td>
            <td>
                <asp:TextBox ID="txttotalquestion" runat="server" CssClass="textboxexam" ></asp:TextBox>
            </td>
       </tr>
       
       <tr>
            <td class="lbl">
                Mark Per Question:
            </td>
            <td>
                <asp:TextBox ID="txtmpq" runat="server" CssClass="textboxexam" ></asp:TextBox>
            </td>
       </tr>
       
       <tr>
            <td class="lbl">
                Negetive Mark:
            </td>
            <td>
                <asp:TextBox ID="txtnegmark" runat="server" CssClass="textboxexam" ></asp:TextBox>
            </td>
       </tr>
       
       <tr>
            <td class="lbl">
                 Exam Time:
            </td>
            <td>
                <asp:TextBox ID="txtexamtime" runat="server" CssClass="textboxexam" ></asp:TextBox>
            </td>
       </tr>
       <tr>
            <td class="lbl">
                 Active:
            </td>
            <td>
                <asp:CheckBox ID="chkactive" runat="server" Text="Exam Active" />
            </td>
       </tr>
       <tr>
            <td class="lbl" align="center" colspan="2">
                <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/save2.png" 
                         Height="34px" Width="86px" OnClientClick="return valExamconfig()" onclick="btnsubmit_Click"  
                        /> 
                        <asp:ImageButton ID="btnupdate" runat="server" ImageUrl="~/images/update.jpg" 
                         Height="34px" Width="86px" OnClientClick="return valExamconfig()" onclick="btnupdate_Click" 
                        /> 
            </td>

       </tr>
    </table>
                 
              
                    
            </fieldset>
        </td>
        <td width="40%">
        
                <asp:GridView ID="grdshow" runat="server" AutoGenerateColumns="false" EmptyDataText="Not Racord Found" DataKeyNames="eid" AllowPaging="true" RowStyle-CssClass="item" HeaderStyle-CssClass="header" AlternatingRowStyle-CssClass="alter">
                    <Columns>
                        <asp:BoundField DataField="subname" HeaderText="Subject" />
                        <asp:BoundField DataField="t_n_q" HeaderText="Total Question"  />
                        <asp:BoundField DataField="p_q_m" HeaderText="Mark Per Ques."  />
                        <asp:BoundField DataField="n_m" HeaderText="Negetive Mark"  />
                        <asp:BoundField DataField="etime" HeaderText="Exam Time"  />
                        <asp:TemplateField HeaderText="Action">
                            <ItemTemplate>
                            <asp:Image ID="status_img" runat="server" ImageAlign="Right" ImageUrl='<%# get_status_img_url(Convert.ToString(Eval("a_status")))%>' 
                                    Height="20" Width="20"   /> 
                                <asp:ImageButton ID="imgupdate" runat="server" ImageUrl="~/images/edit.jpeg" Height="34px" Width="36px"  OnClick="selectdata" CommandArgument='<% # Eval("eid") %>' />
                                <asp:ImageButton ID="Image1" runat="server" ImageUrl="~/images/delete (3).png" Height="34px" Width="36px" OnClientClick="Javascript:return confirmation();" OnClick="deletedata" CommandArgument='<% # Eval("eid") %>'   />
                            </ItemTemplate>
                        </asp:TemplateField>
                    </Columns>
                </asp:GridView>
        
        </td>
       
    </tr>
   
</table>

</asp:Content>

