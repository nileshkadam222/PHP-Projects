<%@ Page Language="C#" MasterPageFile="~/MasterPage3.master" AutoEventWireup="true" CodeFile="Feedback.aspx.cs" Inherits="Feedback" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script language="javascript" type="text/javascript">
// <!CDATA[

function TABLE1_onclick() {

}

// ]]>
</script>

    <br />
    <br />
    <asp:LinkButton ID="LinkButton1" runat="server" BackColor="#FFFF80" BorderStyle="Outset"
        Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Medium" ForeColor="#00C000"
        Height="28px" OnClick="LinkButton1_Click" Style="z-index: 102; left: 502px; position: absolute;
        top: 191px" Width="91px">HOME</asp:LinkButton>
    <br />
    <br />
    <table style="border-right: #3399ff 1px solid; border-top: #3399ff 1px solid; background-image: none;
        border-left: #3399ff 1px solid; width: 451px; border-bottom: #3399ff 1px solid; background-color: #ffcc33; height: 394px; z-index: 100; left: 20px; position: absolute; top: 184px;" id="TABLE1" onclick="return TABLE1_onclick()" frame="void">
        <tr>
            <td align="center" colspan="3" style="color: #0033cc; background-color: #99cc00; font-weight: bold; font-size: large; font-style: italic; font-family: 'Comic Sans MS'; height: 27px; font-variant: small-caps;">
                <asp:Label ID="Label3" runat="server" Style="font-weight: bold; color: #0033ff" Text="FEEDBACK"></asp:Label></td>
        </tr>
        <tr>
            <td style="height: 26px">
                &nbsp;
                <asp:Label ID="Label1" runat="server" Text="Name" Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Medium" ForeColor="#00C000" style="z-index: 100; left: 47px; position: absolute; top: 96px"></asp:Label>
                </td>
            <td style="height: 26px">
                <asp:TextBox ID="TextBox1" runat="server" Height="26px" Style="z-index: 100; left: 208px;
                    position: absolute; top: 87px" Width="172px"></asp:TextBox>
            </td>
            <td style="height: 26px; width: 8px;">
            </td>
        </tr>
        <tr>
            <td style="height: 26px">
                </td>
            <td style="height: 26px">
                &nbsp;<br />
                <asp:TextBox ID="TextBox2" runat="server" Height="30px" Style="z-index: 100; left: 210px;
                    position: absolute; top: 144px" Width="171px"></asp:TextBox>
            </td>
            <td style="height: 26px; width: 8px;">
            </td>
        </tr>
        <tr>
            <td style="height: 52px">
                <asp:Label ID="Label5" runat="server" Style="z-index: 100; left: 49px; position: absolute;
                    top: 200px" Text="Review" Font-Bold="True" Font-Names="Comic Sans MS" ForeColor="#00C000" Width="68px"></asp:Label>
                <asp:Label ID="Label2" runat="server" Text="Branch" Width="53px" Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Medium" ForeColor="#00C000" style="z-index: 102; left: 47px; position: absolute; top: 149px"></asp:Label>
            </td>
            <td style="height: 52px">
            </td>
            <td style="width: 8px; height: 52px;">
            </td>
        </tr>
        <tr>
            <td style="height: 21px">
                <asp:Label ID="Label4" runat="server" Style="z-index: 100; left: 46px; position: absolute;
                    top: 259px" Text="Remark" Font-Bold="True" Font-Names="Comic Sans MS" Font-Size="Medium" ForeColor="#00C000" Width="71px"></asp:Label>
                <asp:TextBox ID="TextBox3" runat="server" Height="36px" Style="z-index: 102; left: 207px;
                    position: absolute; top: 247px" TextMode="MultiLine" Width="173px"></asp:TextBox>
            </td>
            <td style="height: 21px">
                <asp:DropDownList ID="DropDownList1" runat="server" Style="z-index: 100; left: 211px;
                    position: absolute; top: 201px" Height="29px" Width="172px">
                    <asp:ListItem>Good</asp:ListItem>
                    <asp:ListItem>Exelent</asp:ListItem>
                    <asp:ListItem>Poor</asp:ListItem>
                </asp:DropDownList>
            </td>
            <td style="height: 21px; width: 8px;">
            </td>
        </tr>
        <tr>
            <td style="height: 21px">
            </td>
            <td style="height: 21px">
            </td>
            <td style="height: 21px; width: 8px;">
            </td>
        </tr>
        <tr>
            <td style="height: 21px">
            </td>
            <td style="height: 21px">
                </td>
            <td style="height: 21px; width: 8px;">
            </td>
        </tr>
    </table>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <asp:Button ID="Button1" runat="server" Font-Bold="True" Font-Names="Comic Sans MS"
        Font-Size="Medium" ForeColor="#00C000" Height="38px" OnClick="Button1_Click"
        Style="z-index: 101; left: 195px; position: absolute; top: 504px" Text="SAVE"
        Width="106px" />
</asp:Content>

