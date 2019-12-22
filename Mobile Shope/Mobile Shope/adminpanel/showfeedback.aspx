<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="showfeedback.aspx.cs" Inherits="adminpanel_showfeedback" Title="Show Feedback" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            height: 42px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
 <center><table border="1" align="center">
        <asp:Repeater ID="rptid" runat="server">
            <HeaderTemplate>
                <tr>
                    <td width="50px" align="center">
                        <strong>Feedback ID</strong>
                    </td> 
                    <td width="200px" align="center">
                        <strong>Name</strong>
                    </td>                 
                    <td width="200px" align="center">
                        <strong>E-mail ID</strong>
                    </td>
                    <td width="100px" align="center">
                        <strong>Mobile No</strong>
                    </td>
                    <td width="200px" align="center">
                        <strong>Feedback</strong>
                    </td>
                    <td width="50px" align="center">
                        <strong>Feedback Date</strong>
                    </td>
                    <td width="50px" align="center" valign="top" class="rptcolor">
                        <strong>Delete</strong>
                    </td>
                </tr>
            </HeaderTemplate>
            <ItemTemplate>
                <tr align="center">
                    <td>
                        <%#DataBinder.Eval(Container.DataItem, "feedback_id")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"name")%>
                    </td>           
                    <td>
                        <%#DataBinder.Eval(Container.DataItem,"email")%>
                    </td>
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"mobile_no")%>
                    </td>
                     <td>
                        <%#DataBinder.Eval(Container.DataItem,"feedback")%>
                    </td>
                    <td>
                        <%#DataBinder.Eval(Container.DataItem, "feedback_date")%>
                    </td>
                     <td width="75px" align="center" valign="middle" >
                                    <asp:Label ID="lblfeedback_id" runat="server" Visible="false" Text='<%# DataBinder.Eval(Container.DataItem,"feedback_id")%>'></asp:Label>
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

