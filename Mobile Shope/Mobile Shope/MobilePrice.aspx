<%@ Page Language="C#" AutoEventWireup="true" CodeFile="MobilePrice.aspx.cs" Inherits="MobilePrice" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form id="form1" runat="server">
    <div id="wrapper">
        <div id="logo">
            <h1>
                <a href="Home.aspx">MOBILE SHOP </a>
            </h1>
            <p>
            </p>
        </div>
        <hr />
        <!-- end #logo -->
        <div id="header">
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="Home.aspx" class="first">HOME</a></li>
                    <li><a href="Product.aspx">PRODUCT</a></li>
                    <li><a href="Branch.aspx">BRANCH</a></li>
                    <li><a href="Aboutus.aspx">ABOUT US</a></li>
                    <li><a href="Award.aspx">AWARD</a></li>
                    <li><a href="Contactus.aspx">CONTACT US</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <!-- end #menu -->
            <div id="search">
            </div>
        </div>
        <!-- end #search -->
    </div>
    <!-- end #header -->
    <!-- end #header-wrapper -->
    <div id="page">
        <div id="page-bgtop">
            <div id="content">
                <table border="1" bgcolor="#FFFFCC" width="95%">
                    <asp:Repeater ID="rptid" runat="server">
                        <HeaderTemplate>
                    <tr style="border-color: #0066FF">
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
                                <%#DataBinder.Eval(Container.DataItem, "Category_id")%>
                                </td>
                                <td>
                                    <%#DataBinder.Eval(Container.DataItem,"product_name")%>
                                </td>
                                <td align="center" width="139px">
                                    <img alt="" width="139px" height="170px style="cursor: pointer;" src="<%# GetUserImage(Eval("product_img").ToString())%>" />
                                </td>
                                <td>
                                    <%#DataBinder.Eval(Container.DataItem,"product_price")%>
                                </td>
                                <td align="center">
                                    <%#DataBinder.Eval(Container.DataItem,"features")%>
                                </td>
                            </tr>
                        </ItemTemplate>
                    </asp:Repeater>
                </table>
            </div>
            <!-- end #content -->
            <div id="sidebar">
                <ul>
                    <li>
                        <h2 style="border: solid 2px; background-color: #41BAFC; color: #DF0C00;">
                            &nbsp;&nbsp; Browse By Category</h2>
                        <ul style="border: solid 1px; background-color: #9CDAFE;">
                            <li><a href="MobileCategory.aspx?mobile_cat=smart_phone">Smart Phones</a></li>
                            <li><a href="MobileCategory.aspx?mobile_cat=business_phone">Business Phones</a></li>
                            <li><a href="MobileCategory.aspx?mobile_cat=fun_phone">Fun Phones</a></li>
                            <li><a href="MobileCategory.aspx?mobile_cat=lifestyle_phone">Lifestyle Phones</a></li>
                            <li><a href="MobileCategory.aspx?mobile_cat=value_phone">Value Phones</a></li>
                            <li><a href="MobileCategory.aspx?mobile_cat=tablets">Tablets</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>
                            &nbsp;&nbsp;
                            <asp:Label ID="lblbrands" runat="server" Text="Brands"></asp:Label></h3>
                        <p>
                            <asp:DropDownList ID="ddl_brands" runat="server" AutoPostBack="True">
                            </asp:DropDownList>
                        </p>
                        <br />
                        <p>
                            <center>
                                <asp:Button ID="btnok" runat="server" Text="Ok" /></center>
                        </p>
                    </li>
                    <asp:Image ID="Image1" runat="server" Height="166px" ImageUrl="~/images1/thumb03.jpg"
                        Width="197px" />
                    <li></li>
                </ul>
                <li>
                    <asp:Image ID="Image2" runat="server" Height="108px" ImageUrl="~/images1/Touch_apps_teaser_main.jpg"
                        Width="200px" />
                </li>
                <ul>
                </ul>
            </div>
            <!-- end #sidebar -->
            <div style="clear: both;">
                &nbsp;</div>
        </div>
    </div>
    </form>
    <!-- end #page -->
    <div id="footer-bgcontent">
        <div id="footer">
            <p>
                Savaliya Tejas,Dedaniya Hiren,Harpal Harshil Design by <a href="Home.aspx">home</a>.</p>
        </div>
    </div>
    </form>
</body>
</html>
