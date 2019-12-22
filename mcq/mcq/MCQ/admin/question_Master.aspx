<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="question_Master.aspx.cs" Inherits="question_Master" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            padding-left: 40px;
            color: #164490;
            font-weight: bolder;
            text-align: left;
            width: 385px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
 <table width="100%" cellspacing="5" cellpadding="0"   >
    <tr>
        
        <td colspan="2" width="75%">
         <fieldset >
           <legend  >
                   Question
                   </legend>
    <table width="100%" cellspacing="5" cellpadding="0"  >
    <tr>
            <td class="style1">
                Subject:
                 <asp:DropDownList ID="ddlsubject" runat="server"  CssClass="textboxexam" ></asp:DropDownList>
            
                 <asp:CheckBox ID="chkstatus" runat="server"  CssClass="lbl" Text="Active" TextAlign="Left" />
            </td>
            <td class="lbl">
            
            Answer:<asp:DropDownList ID="ddlans" runat="server" Height="17px" 
                Width="81px">
                <asp:ListItem Value="A">Ans</asp:ListItem>
                <asp:ListItem Value="A">A</asp:ListItem>
                <asp:ListItem Value="B">B</asp:ListItem>
                <asp:ListItem Value="C">C</asp:ListItem>
                <asp:ListItem Value="D">D</asp:ListItem>
            </asp:DropDownList>
                    
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/save2.png" 
                         Height="34px" Width="86px" OnClientClick="return valquestion()" onclick="btnsubmit_Click" 
                        /> 
                        <asp:ImageButton ID="btnupdate" runat="server" ImageUrl="~/images/update.jpg" 
                         Height="34px" Width="86px" OnClientClick="return valquestion()" onclick="btnupdate_Click" 
                        /> 
                    
            </td>
       </tr>
    <tr>
            <td colspan="2" class="lbl"  valign="top">
                Question:
            
                <asp:TextBox ID="txtquestion" runat="server" CssClass="textbox" 
                    TextMode="MultiLine" Width="664px"></asp:TextBox>
            </td>
            
    </tr>
    <tr>
            <td class="style1"  valign="top">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                A:<asp:TextBox ID="txta" runat="server" CssClass="textbox" TextMode="MultiLine" 
                    Width="271px"></asp:TextBox>
            </td>
            <td class="lbl" valign="top">
                B:<asp:TextBox ID="txtb" runat="server" CssClass="textbox" TextMode="MultiLine" 
                    Width="289px"></asp:TextBox>
                
            </td>
    </tr>
    <tr>
            <td class="style1"  valign="top">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                C:<asp:TextBox ID="txtc" runat="server" CssClass="textbox" TextMode="MultiLine" 
                    Width="266px"></asp:TextBox>
            </td >
            <td   class="lbl" valign="top">
                D:<asp:TextBox ID="txtd" runat="server" CssClass="textbox" TextMode="MultiLine" 
                    Width="287px"></asp:TextBox>
                
            </td>
    </tr>
    <tr>
        <td class="style1" valign="top">
            &nbsp;</td>
            <td  align="left" valign="middle">
                    
                    &nbsp;</td>
    </tr>
    
</table>
        </fieldset>    
                    </td>
            <td width="70%">
                <asp:Label ID="lblmsg" runat="server" CssClass="updatelbl"></asp:Label>
            </td>
        
    </tr>
    <tr>
    
        <td colspan="4" class="lbl">
        Select Subject:
        <asp:DropDownList ID="ddlsubject1" runat="server" onselectedindexchanged="ddlsubject1_SelectedIndexChanged" AutoPostBack="true"
                   ></asp:DropDownList>
                  
            <asp:GridView ID="grdshow" runat="server"  
            DataKeyNames="qid" 
            AutoGenerateColumns="false"  
            HeaderStyle-CssClass="header" 
            RowStyle-CssClass="item" 
            AlternatingRowStyle-CssClass="alter" 
            EmptyDataText="Not Any question"
            AllowPaging="true"
            PageSize="20" onpageindexchanging="grdshow_PageIndexChanging"
            
            
            >
                <Columns>
                
                    <asp:BoundField DataField="qname" HeaderText="Question" />
                    <asp:BoundField DataField="A" HeaderText="Option A" />
                    <asp:BoundField DataField="B"  HeaderText="Option B" />
                    <asp:BoundField DataField="C" HeaderText="Option C" />
                    <asp:BoundField DataField="D"  HeaderText="Option D"/>
                    <asp:BoundField DataField="ans" HeaderText="Answer" />
                    <asp:TemplateField HeaderText="Action">
                            <ItemTemplate>
                                <asp:Image ID="status_img" runat="server" ImageAlign="Right" ImageUrl='<%# get_status_img_url(Convert.ToString(Eval("q_status")))%>' 
                                    Height="20" Width="20"   /> 
                                <asp:ImageButton ID="imgupdate" runat="server" ImageUrl="~/images/edit.jpeg" Height="34px" Width="36px" OnClick="selectdata" CommandArgument='<% # Eval("qid") %>'    />
                                <asp:ImageButton ID="Image1" runat="server" ImageUrl="~/images/delete (3).png" Height="34px" Width="36px" OnClientClick="Javascript:return confirmation();" OnClick="deletedata" CommandArgument='<% # Eval("qid") %>'  />
                            </ItemTemplate>
                        </asp:TemplateField>
                </Columns>  
            </asp:GridView>
        </td>
    </tr>
   </table>
</asp:Content>
