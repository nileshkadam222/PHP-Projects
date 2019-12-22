<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="Home.aspx.cs" Inherits="Home" Title="Untitled Page" %>
<%@ Register assembly="FlashControl" namespace="Bewise.Web.UI.WebControls" tagprefix="Bewise" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>

<%--//////////////////////////////--%>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
    <table align="left" width="630" bgcolor="Black"  >
    
    <tr>
    <td align="center" colspan ="2" width ="630" height="40">
        <br />
        <asp:Label ID="Label7" runat="server" Font-Bold="True" 
            Font-Names="Comic Sans MS" Font-Size="X-Large" ForeColor="White" 
            Text="Welcome, In the World of VIP Airlines"></asp:Label>
        </td>
        
        
    </tr>
    
    <tr>
    <td align="center" colspan ="2" width ="630" height="40">
        <asp:Label ID="Label8" runat="server" Font-Bold="True" Font-Names="Ajile" 
            Font-Size="Large" ForeColor="Silver" Text="More than just flying"></asp:Label>
        <br />
        <asp:Label ID="Label9" runat="server" Font-Bold="True" Font-Size="Large" 
            ForeColor="White" 
            Text="------------------------------------------------------------------------------------------"></asp:Label>
        <br />
       
        </td>
    </tr>
    
    <tr>
    <td width ="450" height="210">
        <asp:Label ID="Label10" runat="server" Font-Bold="True" ForeColor="White" Text ="With over 65 destinations, we connect a place every 5 minutes.<br/><br/>

VIP Airlines has come a long way since its first flight in 2001. It's one of the fastest growing airlines in the world, and now it's all set to change the way <br/>you fly - for the better!

<br/><br/>VIP Airlines operates flights to 20 international destinations, offering you a better choice in the skies.<br/><br/>We fly to the following international destinations. "></asp:Label>
        </td>
        
        <td width ="180" height="210">
            <asp:Image ID="Image2" runat="server" 
                ImageUrl="~/Latest Image/Awards_195x150.jpg" />
        </td>
    </tr>
    
    <tr>
    <td colspan ="2" width="630" height="500">
        <Bewise:FlashControl ID="FlashControl2" runat="server" Height="500px" 
            MovieUrl="~/flash new/13032 intro preview - Google Chrome.swf" Width="630px" />
        </td>
    </tr>
    
    </table>
  
    
  
    
    
</asp:Content>
    
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
    
    <table bgcolor="Black" >
     <tr>
    <td align="left">
        <asp:Label ID="Label4" runat="server" Text="Client Account" Font-Bold="True" 
            Font-Names="Courier New" Font-Size="Large" ForeColor="White"></asp:Label>
        </td>
    </tr>
    </table>
    
    
    <table width="155" align="center" bgcolor="Black">
    
   
    
    <tr>
    <td>&nbsp;</td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label5" runat="server" Text="Client Id" Font-Bold="True" 
            Font-Names="Constantia" Font-Size="Medium" ForeColor="Gray"></asp:Label>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:TextBox ID="TextBox1" runat="server" Width="145px"></asp:TextBox>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Label ID="Label6" runat="server" Text="Password" Font-Bold="True" 
            Font-Names="Constantia" Font-Size="Medium" ForeColor="Gray"></asp:Label>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:TextBox ID="TextBox2" runat="server" TextMode="Password" Width="145px" 
            ForeColor="Gray"></asp:TextBox>
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:Button ID="Button1" runat="server" Text="Login" />
        </td>
    </tr>
    
    <tr>
    <td>
        <asp:HyperLink ID="HyperLink3" runat="server" ForeColor="White" 
            Font-Bold="True">Sign Up</asp:HyperLink>
        <br />
        <asp:HyperLink ID="HyperLink2" runat="server" ForeColor="White" Font-Bold="True">Forgot 
        Password?</asp:HyperLink>
        </td>
    </tr>
    
    
    </table>
    <br />
        <br />
    
<table bgcolor="Black" >
     <tr>
    <td align="left">
        
        <asp:Label ID="Label1" runat="server" Text="Recent Updates" Font-Bold="True" 
            Font-Names="Courier New" Font-Size="Large" ForeColor="White"></asp:Label>
        </td>
    </tr>
    </table>
    
    
    <table width="155" align="center" bgcolor="Black">
    
    <tr>
    <td>&nbsp;</td>
    </tr>
    
    <tr>
    <td></td>
    </tr>
    
    </table>
    
    
    
    
    
</asp:Content>

