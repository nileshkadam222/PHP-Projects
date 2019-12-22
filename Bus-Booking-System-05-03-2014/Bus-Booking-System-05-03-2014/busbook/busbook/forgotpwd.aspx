<%@ Page language="c#" Codebehind="forgotpwd.aspx.cs" AutoEventWireup="false" Inherits="busbook.forgotpwd" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>forgotpwd</title>
		<meta name="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" Content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
	</HEAD>
	<body MS_POSITIONING="GridLayout" bgColor="#666666" background="./Blue hills.jpg">
		<form id="Form1" method="post" runat="server">
			<asp:Label id="Label1" style="Z-INDEX: 101; LEFT: 32px; POSITION: absolute; TOP: 40px" runat="server"
				Font-Bold="True" Font-Italic="True" BackColor="DimGray">USERID</asp:Label>
			<asp:TextBox id="txtuid" style="Z-INDEX: 102; LEFT: 136px; POSITION: absolute; TOP: 40px" runat="server"
				BackColor="White" MaxLength="5"></asp:TextBox>
			<asp:Label id="lblforgot" style="Z-INDEX: 103; LEFT: 104px; POSITION: absolute; TOP: 232px"
				runat="server" Enabled="False"></asp:Label>
			<asp:Button id="Button1" style="Z-INDEX: 104; LEFT: 184px; POSITION: absolute; TOP: 152px" runat="server"
				Text="OK" Width="56px"></asp:Button>
			<asp:HyperLink id="HyperLink1" style="Z-INDEX: 105; LEFT: 64px; POSITION: absolute; TOP: 384px"
				runat="server" NavigateUrl="LOGIN.aspx">Back</asp:HyperLink>
			<asp:RequiredFieldValidator id="txtuidValidator" style="Z-INDEX: 106; LEFT: 160px; POSITION: absolute; TOP: 88px"
				runat="server" ErrorMessage="Enter The User Id" ControlToValidate="txtuid"></asp:RequiredFieldValidator>
			<asp:Image id="Image1" style="Z-INDEX: 107; LEFT: 390px; POSITION: absolute; TOP: -16px" runat="server"
				Width="737px" ImageUrl=".\volvo\v11.jpg" Height="696px"></asp:Image>
		</form>
	</body>
</HTML>
