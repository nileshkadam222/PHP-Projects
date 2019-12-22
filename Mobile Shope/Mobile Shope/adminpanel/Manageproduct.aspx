<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true"
    CodeFile="Manageproduct.aspx.cs" Inherits="adminpanel_Manageproduct" Title="Admin - Manage Product" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
    <style type="text/css">
        .style1
        {
            height: 38px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
<center>
    <table border="1" >
          <tr>
                <td align="right" colspan="8">
                        <asp:Button ID="btnpre" runat="server" Text="Previous" onclick="btnpre_Click" />
                        <asp:Label ID="lblpage" runat="server" ></asp:Label>
                        <asp:Button ID="btnnext" runat="server" Text="Next" onclick="btnnext_Click" />
                </td>
          </tr>
                        <asp:Repeater ID="rptid" runat="server" >
                        <HeaderTemplate> 
            <tr><td colspan="8"></td><p></p></tr>
            <tr>
                    <td width="50px" align="center">
                        <strong >Modify</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Product ID</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Product Name</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Product Image</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Product Price</strong>
                    </td>
                    <td width="50px" align="center">
                        <strong>Status</strong>
                    </td>
                    <td width="50px" align="center">
                        <strong>Rank</strong>
                    </td>
                    <td width="50px" align="center" valign="top" class="rptcolor">
                        <strong>Delete</strong>
                    </td>
                </tr>
            </HeaderTemplate>
            <ItemTemplate>
                <tr>
                    <td align="center">
                        <a href="Editproduct.aspx?product_no=<%# DataBinder.Eval(Container.DataItem,"product_id")%>">
                            Edit</a>
                    </td>
                    <td align="center">
                        <%#DataBinder.Eval(Container.DataItem, "product_id")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"product_name")%>
                    </td>
                    <td align="center">
                        
                          <img alt="" width="40px" height="40px" style="cursor: pointer;" src="<%# GetUserImage(Eval("product_img").ToString())%>" />
                                
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"product_price")%>
                    </td>
                    <td align="center">
                        <%#DataBinder.Eval(Container.DataItem,"status")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"rank")%>
                    </td>
                     <td width="75px" align="center" valign="middle" class="rptcolor">
                          <asp:Label ID="hfproduct_id" runat="server" Visible="false" Text='<%# DataBinder.Eval(Container.DataItem,"Product_id")%>'></asp:Label>
                          <asp:CheckBox ID="chkdelete" Text="" runat="server" />
                     </td>
                </tr>
            </ItemTemplate>
        </asp:Repeater>
                <tr>
                     <td colspan="8" align="center" class="style1">
                            <asp:Button ID="btndelete" CssClass="input" runat="server" 
                            Text="Delete Selected" onclick="btndelete_Click"/>
                </td>    
                </tr>
</table></center>
</asp:Content>
