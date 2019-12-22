<%@ Page Language="C#" MasterPageFile="~/adminpanel/Adminmaster.master" AutoEventWireup="true" CodeFile="addproduct.aspx.cs" Inherits="adminpanel_addproduct" Title="Admin - Add Product" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style2
      {
          width: 118px;
      }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <center><table>
        <tr>
             <td align="left">
                    <asp:Label ID="lblcatengoryname" runat="server" Text="Category Name"></asp:Label>
             </td>
             <td> :</td>
             <td align="left">
                    <asp:DropDownList ID="ddlcategory" runat="server" Width="150px" Height="25px"></asp:DropDownList>
             </td>
                 <td align="left">        
                     <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                         ErrorMessage="Plese Select Any Product" ControlToValidate="ddlcategory" 
                         ToolTip="i.e.(Spice)" InitialValue="--Select--" ></asp:RequiredFieldValidator>
                </td>
            </tr> 
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left">
                        <asp:Label ID="lblproductname" runat="server" Text="Product Name"></asp:Label>
                </td>
                <td> : </td>
                <td align="left">
                        <asp:TextBox ID="txtproductname" runat="server" Width="180px"></asp:TextBox>
                </td>
                 <td align="left">
                         <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                         ErrorMessage="Plese Enter Product Name" ControlToValidate="txtproductname" 
                         ToolTip="i.e.(N72)"></asp:RequiredFieldValidator>
                
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr>
                <td align="left">
                        <asp:Label ID="lblimage" runat="server" Text="Image"></asp:Label>
                </td>
                <td>: </td>
                <td align="left">
                        <asp:FileUpload ID="updimage" runat="server" Width="193px" />
                </td>
                 <td align="left" style="padding-left:30px">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                         ErrorMessage="Plese Open Any Image" ControlToValidate="updimage"></asp:RequiredFieldValidator>
                </td>
            </tr>
             <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr >
                <td align="left">
                        <asp:Label ID="lblprocudtprice" runat="server" Text="Product Price"></asp:Label>
                </td>
                <td> : </td>
                <td align="left">
                       <asp:TextBox ID="txtproductprice" runat="server" Width="180px"></asp:TextBox>
                </td>
                 <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
                         ErrorMessage="Plese Enter Product Price" 
                         ControlToValidate="txtproductprice" ToolTip="i.e(32000)" Display="Dynamic"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
             <tr>
                <td align="left" valign="top" >
                        <asp:Label ID="lblfeatures" runat="server" Text="Features" ></asp:Label>
                </td>
                <td valign="top"> :</td>
                <td align="left">
                         <asp:TextBox ID="txtfeatures" runat="server" Width="180px" TextMode="MultiLine" 
                        Rows="5"></asp:TextBox>
                </td>
                 <td align="left" style="padding-bottom:50px">
                         <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
                         ErrorMessage="Plese Enter Fetures" ControlToValidate="txtfeatures" 
                         ToolTip="i.e(Blutooth,3MP Cemara)"></asp:RequiredFieldValidator>
                </td>
            </tr>
             <tr>
                <td colspan="4"><p></p></td>
            </tr>
             <tr >
                <td align="left">
                        <asp:Label ID="lblstatus" runat="server" Text="Status"></asp:Label>
                </td>
                <td>  :</td>
                <td align="left">
                        <asp:DropDownList ID="ddlstatus" runat="server" Width="160px" Height="25px">
                        <asp:ListItem Selected="True">Active</asp:ListItem>
                        <asp:ListItem>InActive</asp:ListItem>
                        </asp:DropDownList>
                </td> 
                <td align="left">
                    &nbsp;</td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td  align="left">
                        <asp:Label ID="lblrank" runat="server" Text="Rank"></asp:Label>
                </td>
                <td> :</td>
                <td align="left">
                        <asp:TextBox ID="txtrank" runat="server" Width="180px"></asp:TextBox>
                </td>
                 <td align="left">
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" 
                         ControlToValidate="txtrank" Display="Dynamic" ErrorMessage="Plese Enter Rank"></asp:RequiredFieldValidator>
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
            </td>
            </tr>
            <tr>
                <td colspan="4"><p></p></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                        <asp:Button ID="btnsubmit" runat="server" Text="Submit" Width="63px" 
                        OnClick="btnsubmit_Click" style="height: 26px" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <asp:Button ID="btnclear" runat="server" Text="Clear" Width="63px" 
                        onclick="btnclear_Click" />
                </td>
            </tr>
 </table></center>
</asp:Content>

