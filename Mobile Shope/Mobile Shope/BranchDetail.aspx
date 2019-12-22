<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="BranchDetail.aspx.cs" Inherits="BranchDetail" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center><table border="1" align="center"  style="background-image: url('images1/BRACH111.JPG'); font-size: large; font-weight: bold; color: #FF0000;" width="100%">
    <asp:Repeater ID="rptbranchcity" runat="server">
      <HeaderTemplate>
      <tr style="color: #333333; background-color: #41BAFC" align="center">
                    <td>
                       Branch 
                    </td>
                    <td>
                       PhNo.
                    </td>
                    <td>
                        Address
                    </td>
                    <td>
                       City
                    </td>                 
                </tr>
      </HeaderTemplate>
        <ItemTemplate>
                <tr align="center">
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
                </tr>
                
            </ItemTemplate>
        </asp:Repeater>    
</table>
</center>
</asp:Content>

