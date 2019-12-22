<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="Editproduct.aspx.cs" Inherits="adminpanel_Editproduct" Title="Admin - Edit Product" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br /><br /><br />
    <center>
        <table class="style4">
            <tr>
                <td align="left" class="style5">
                        <asp:Label ID="lblcatengoryname" runat="server" Text="Category Name"></asp:Label>
                </td>
                <td class="style6"> : </td>
                <td align="left" class="style7" >
                        <asp:DropDownList ID="ddlcategory" runat="server" Width="160px" Height="25px"></asp:DropDownList>
                </td>
                <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ErrorMessage="Plese Select Any Category Name" 
                        ControlToValidate="ddlcategory"></asp:RequiredFieldValidator>
                </td>
            </tr> 
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left" class="style5">
                        <asp:Label ID="lblproductname" runat="server" Text="Product Name"></asp:Label>
                </td>
                <td class="style6"> : </td>
                <td align="left" class="style7">
                        <asp:TextBox ID="txtproductname" runat="server" Width="180px"></asp:TextBox>
                </td>
                <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                         ErrorMessage="Plese Enter Product Name" ControlToValidate="txtproductname" 
                         ToolTip="i.e.(N72)"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p> </td>
            </tr>
            <tr>
                <td align="left" class="style5">
                        <asp:Label ID="lblimage" runat="server" Text="Image"></asp:Label>
                </td>
                <td class="style6">:</td>
                <td align="left" class="style7">
                        <asp:FileUpload ID="updimage" runat="server" Width="218px" />
                </td>
                <td  align="left" style="padding-left:30px">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                         ErrorMessage="Plese Browse Any Image" ControlToValidate="updimage"></asp:RequiredFieldValidator>
                </td>
            </tr>
             <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left" class="style5">
                        <asp:Label ID="lblprocudtprice" runat="server" Text="Product Price"></asp:Label>
                </td>
                <td class="style6">:</td>
                <td align="left" class="style7">
                        <asp:TextBox ID="txtproductprice" runat="server" Width="180px"></asp:TextBox>
                </td>
                 <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
                         ControlToValidate="txtproductprice" ErrorMessage="Plese Enter Price" 
                         ToolTip="i.e.(32000)"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr>
                <td align="left" valign="top" class="style5" >
                        <asp:Label ID="lblfeatures" runat="server" Text="Features" ></asp:Label>
                </td>
                <td valign="top" class="style6"> :</td>
                <td align="left" class="style7">
                        <asp:TextBox ID="txtfeatures" runat="server" Width="180px" TextMode="MultiLine" 
                        Rows="4"></asp:TextBox>
                </td>
                 <td align="left" style="padding-bottom:40px">
                         <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
                         ErrorMessage="Plese Enter Features" ControlToValidate="txtfeatures"></asp:RequiredFieldValidator>
                 </td>
            </tr>
             <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left" class="style5">
                        <asp:Label ID="lblstatus" runat="server" Text="Status"></asp:Label>
                </td>
                <td class="style6"> :</td>
                <td align="left" class="style7">
                         <asp:DropDownList ID="ddlstatus" runat="server" Width="160px" Height="25px">
                                <asp:ListItem Selected="True">Active</asp:ListItem>
                                <asp:ListItem>InActive</asp:ListItem>
                    </asp:DropDownList>
                </td>
                 <td></td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
             <tr>
                <td  align="left" class="style5">
                            <asp:Label ID="lblrank" runat="server" Text="Rank"></asp:Label>
                </td>
                <td class="style6">:</td>
                <td align="left" class="style7">
                            <asp:TextBox ID="txtrank" runat="server" Width="180px" ></asp:TextBox>
                </td>
                 <td align="left">
                            <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" 
                            ControlToValidate="txtrank" Display="Dynamic" ErrorMessage="Plese Enter Rank" 
                            ToolTip="i.e.(6)"></asp:RequiredFieldValidator>
                </td>
            </tr>
             <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr>
                <td colspan="3"> 
     <table>
        <tr align="left">
            <td class="style2" >
                        <asp:CheckBox id="chksmart_phone" runat="server" Text="Smart Phone" />
            </td>
            <td >
                         <asp:CheckBox id="chkbusiness_phone" runat="server" Text="Business" />
            </td>
         </tr>
         <tr align="left">
            <td class="style2" >
                        <asp:CheckBox id="chkfun_phone" runat="server" Text="Fun Phone" />
            </td>
            <td >
                        <asp:CheckBox id="chklifestyle_phone" runat="server" Text="Lifestyle Phone" />
            </td>
        </tr>
        <tr align="left">
            <td class="style2" >
                        <asp:CheckBox id="chkvalue_phone" runat="server" Text="Value Phone" />
            </td>
            <td >
                        <asp:CheckBox id="chkteblets" runat="server" Text="Teblets" />
            </td>
        </tr>
       </table>    
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr>
                <td colspan="3" class="style3">
                         <asp:Button ID="btnupdate" runat="server" Text="Update" Width="63px" 
                            style="height: 26px" onclick="btnupdate_Click"/>
                </td>
            </tr>
 </table></center>
</asp:Content>

