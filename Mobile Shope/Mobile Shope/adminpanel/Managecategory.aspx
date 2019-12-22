<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Managecategory.aspx.cs" Inherits="adminpanel_Managecategory" Title="Admin - Manage Category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            height: 42px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center>
 <table border="1" align="center">
        <asp:Repeater ID="rptid" runat="server">
            <HeaderTemplate>
                <tr>
                    <td width="50px" align="center">
                        <strong>Modify</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Category ID</strong>
                    </td> 
                    <td width="120px" align="center">
                        <strong>Category Name</strong>
                    </td>                 
                    <td width="50px" align="center">
                        <strong>Status</strong>
                    </td>
                    <td width="50px" align="center">
                        <strong>Rank</strong>
                    </td>
                    <td width="50px" align="center" valign="top">
                        <strong>Delete</strong>
                    </td>
                </tr>
            </HeaderTemplate>
            <ItemTemplate>
                <tr align="center">
                    <td>
                        <a href="Editcategory.aspx?category_no=<%# DataBinder.Eval(Container.DataItem,"category_id")%>">
                            Edit</a>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem, "category_id")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"category_name")%>
                    </td>           
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"status")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"rank")%>
                    </td>
                     <td width="75px" align="center" valign="middle">
                                    <asp:Label ID="hfcategory_id" runat="server" Visible="false" Text='<%# DataBinder.Eval(Container.DataItem,"Category_id")%>'></asp:Label>
                                    <asp:CheckBox ID="chkdelete" Text="" runat="server" />
                                </td>
                </tr>
            </ItemTemplate>
        </asp:Repeater>
                <tr>
                      <td colspan="6" align="center" class="style1">
                            <asp:Button ID="btndelete" runat="server" Text="Delete Selected" OnClick="btndelete_Click" />
                     </td>    
                </tr>
</table>
</center>
</asp:Content>

