<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="admin_Default" Title="Untitled Page" %>

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
        <td class="style2" >
            <asp:Image ID="img1" runat="server" ImageUrl="~/images/systemadmin.png" 
                Height="382px" Width="351px" />
        </td>
        <td colspan="2" width="15%" align="center">
&nbsp;&nbsp;
<asp:GridView ID="grdshow" runat="server"  
            DataKeyNames="lid" 
            AutoGenerateColumns="false"  
            HeaderStyle-CssClass="header" 
            RowStyle-CssClass="item" 
            AlternatingRowStyle-CssClass="alter" 
            EmptyDataText="Not Any question"
            AllowPaging="true"
            PageSize="25" onpageindexchanging="grdshow_PageIndexChanging" 
            
            
            >
                <Columns>
                
                    <asp:BoundField DataField="sname" HeaderText="Student Name" />
                    <asp:BoundField DataField="email" HeaderText="E-Mail" />
                    <asp:BoundField DataField="subname" HeaderText="subject" />
                    <asp:BoundField DataField="in_date" HeaderText="Logint Time" />
                                    
                    
                    
                </Columns>  
            </asp:GridView>
        </td>
    </tr>
   </table>

</asp:Content>

