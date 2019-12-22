<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Managebranch.aspx.cs" Inherits="adminpanel_Managebranch" Title="Admin - Manage Branch" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .input
        {
            height: 26px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center>
<table border="1" align="center">
    <asp:Repeater ID="rptid" runat="server">
        <HeaderTemplate>
            <tr align="center">
                <td width="50px" >
                    <strong> Edit </strong>
                </td>
                <td width="100px">
                     <strong> Branch ID </strong>
                </td>
                <td width="150px">
                     <strong> Branch Name </strong>
                </td>
                <td width="110px">
                     <strong> Contect NO </strong>
                </td>
                <td width="70px">
                     <strong> Addess </strong>
                </td>
                <td width="50px">
                     <strong> City </strong>
                </td>
                <td width="80px" valign="top">
                    <strong> Delete </strong>
                </td>
            </tr>
        </HeaderTemplate>
        <ItemTemplate>
                <tr>
                    <td>
                        <a href="Editbranch.aspx?branch_no=<%# DataBinder.Eval(Container.DataItem,"branch_id")%>">Edit</a>
                    </td>
                    <td>
                        <%# DataBinder.Eval(Container.DataItem,"branch_id")%>
                    </td>
                    <td>
                        <%# DataBinder.Eval(Container.DataItem,"branch_name")%>
                    </td>
                    <td>
                        <%# DataBinder.Eval(Container.DataItem,"branch_contactno")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"branch_address")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"branch_city")%>
                    </td>
                    <td width="75px" align="center" valign="middle" >
                        <asp:Label ID="hfbranch_id" runat="server" Visible="false" Text='<%# DataBinder.Eval(Container.DataItem,"branch_id")%>'></asp:Label>
                        <asp:CheckBox ID="chkdelete" runat="server" />
                    </td>
                </tr>
            </ItemTemplate>
        </asp:Repeater>
                <tr>
                    <td align="center" class="style1" colspan="6">
                            <asp:Button ID="btndelete" CssClass="input" runat="server" 
                            Text="Delete Selected" onclick="btndelete_Click"/>
            </td>    
        </tr>
</table>
</center>
</asp:Content>

