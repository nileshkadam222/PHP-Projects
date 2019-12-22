<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="MobileCategory.aspx.cs"
    Inherits="MobileCategory" Title="Mobile Shope - Mobile Category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
    <style type="text/css">
        .style1
        {
            width: 100%;
            margin-right: 0px;
        }
        .style4
        {
            width: 143px;
        }
        </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
<table >
        <tr>
            <td>
              <table border="6" style="border-color:#6699FF">
                    <tr>
                       <td>
                       <asp:Repeater ID="rptid" runat="server">
                            <HeaderTemplate>
                    <tr style="border-color: #0066FF">
                        <td width="100px" align="center">
                            <strong>Company Name</strong>
                        </td>
                        <td width="100px" align="center">
                            <strong>Mobile Name</strong>
                        </td>
                        <td width="100px" align="center">
                            <strong>Mobile Image</strong>
                        </td>
                        <td width="100px" align="center">
                            <strong>Price</strong>
                        </td>
                        <td width="100px" align="center">
                            <strong>Features</strong>
                        </td>
                    </tr>
                </HeaderTemplate>
                <ItemTemplate>
                    <tr>
                        <td align="center">
                            <%#DataBinder.Eval(Container.DataItem, "category_name")%>
                        </td>
                        <td>
                            <%#DataBinder.Eval(Container.DataItem,"product_name")%>
                        </td>
                        <td align="center" width="145px">
                            <img alt="" width="130px" height="150px" style="cursor: pointer;" src="<%# GetUserImage(Eval("product_img").ToString())%>" />
                        </td>
                        <td>
                            <%#DataBinder.Eval(Container.DataItem,"product_price")%>
                        </td>
                        <td align="center" width="200px">
                            <%#DataBinder.Eval(Container.DataItem,"features")%>
                        </td>
                    </tr>
                    </tr>
                </ItemTemplate>
            </asp:Repeater>
                </td>
                    </tr>
                  </table> 
            </td>
        </tr>   
   </table> 
</asp:Content>
