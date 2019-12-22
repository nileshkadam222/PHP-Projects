<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Manage register.aspx.cs" Inherits="adminpanel_register" Title="Manage Register" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">\
<center><table border="1" align="center">
        <asp:Repeater ID="rptid" runat="server">
            <HeaderTemplate>
                <tr>
                    <td width="50px" align="center">
                        <strong>User No</strong>
                    </td> 
                    <td width="150px" align="center">
                        <strong>First Name</strong>
                    </td> 
                    <td width="150px" align="center">
                        <strong>Last Name</strong>
                    </td>   
                     <td width="200px" align="center">
                        <strong>Address</strong>
                    </td> 
                     <td width="100px" align="center">
                        <strong>Mobile No</strong>
                    </td>                 
                    <td width="200px" align="center">
                        <strong>E-mail ID</strong>
                    </td>
                    <td width="50px" align="center">
                        <strong>Gender</strong>
                    </td>
                    <td width="80px" align="center">
                        <strong>State</strong>
                    </td>
                    <td width="80px" align="center">
                        <strong>City</strong>
                    </td>
                    <td width="50px" align="center" valign="top" class="rptcolor">
                        <strong>Delete</strong>
                    </td>
                </tr>
            </HeaderTemplate>
            <ItemTemplate>
                <tr align="center">
                    <td>
                        <%#DataBinder.Eval(Container.DataItem, "user_id")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"first_name")%>
                    </td>  
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"last_name")%>
                    </td> 
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"address")%>
                    </td>  
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"mobile_no")%>
                    </td>       
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"e_mail")%>
                    </td>
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"gender")%>
                    </td>
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"state")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem, "city")%>
                    </td>
                     <td width="75px" align="center" valign="middle" >
                                    <asp:Label ID="lbluser_id" runat="server" Visible="false" Text='<%# DataBinder.Eval(Container.DataItem,"user_id")%>'></asp:Label>
                                    <asp:CheckBox ID="chkdelete" Text="" runat="server" />
                     </td>
                </tr>
            </ItemTemplate>
        </asp:Repeater>
                <tr>
                      <td colspan="7" align="center" class="style1">
                                <asp:Button ID="btndelete" CssClass="input" runat="server" 
                                Text="Delete Selected" onclick="btndelete_Click" />
                       </td>    
                </tr>
</table></center>
</asp:Content>

