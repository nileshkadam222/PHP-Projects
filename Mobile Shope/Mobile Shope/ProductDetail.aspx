<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="ProductDetail.aspx.cs"
    Inherits="productdetail" Title="Mobile Shope - Product Detail" %>

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
    <table class="style1" >
        <tr>
            <td>
                <table border="6" style="border-color:#6699FF">
                    <tr>
                        <td>                        
                   <asp:Repeater ID="rptproduct" runat="server">
                   <HeaderTemplate>
                    <tr style="border-color: #0066FF">
                        
                        <td width="100px" align="center">
                            <strong>Mobile Image & Model No</strong>
                        </td>
                        <td width="100px" align="center">
                            <strong>Features & price</strong>
                        </td>
                        
                    </tr>
                </HeaderTemplate>
                   <ItemTemplate>
                <tr valign="middle">
                    <td align="center" class="style4" style="padding-bottom:60px" width="140px" height="165">
                            <img alt="" width="139px" height="165px" style="cursor: pointer;" src="<%# GetUserImage(Eval("product_img").ToString())%>" />
                    <td style=" font-size: medium; font-weight: bold;" width="500px" valign="top">
                             <%#DataBinder.Eval(Container.DataItem, "features")%>
                     <br /><br />
                    </td>
                    </td>
                <tr>
                    <td align="center">                     
                             <%#DataBinder.Eval(Container.DataItem,"product_name")%>
                    </td>
                    <td>
                            <strong style="padding-right:10px;padding-left:20px; color: #FF0000; font-weight: bold; font-size: medium;">Price :</strong><%#DataBinder.Eval(Container.DataItem, "product_price")%>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <asp:ImageButton ID="imgbuy" runat="server" ImageUrl="images/BUY1.png"  Height="40px" Width="125"  PostBackUrl="Registration.aspx" />
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
        <tr>
            <td>
                    <asp:Button ID="btnpre" runat="server" Text="Previous" onclick="btnpre_Click" />
                    <asp:Label ID="lblpage" runat="server" ></asp:Label>
                      <asp:Button ID="btnnext" runat="server" Text="Next" onclick="btnnext_Click" />
            </td>
        </tr>
   </table>
</asp:Content>
