<%@ Page language="c#" Codebehind="WebForm1.aspx.cs" AutoEventWireup="false" Inherits="busbook.WebForm1" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>WebForm1</title>
		<meta name="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" Content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
	</HEAD>
	<body MS_POSITIONING="GridLayout">
		<form id="Form1" method="post" runat="server">
			<asp:Label id="Label1" style="Z-INDEX: 101; LEFT: 88px; POSITION: absolute; TOP: 112px" runat="server">USER ID</asp:Label>
			<asp:TextBox id="TextBox1" style="Z-INDEX: 102; LEFT: 200px; POSITION: absolute; TOP: 112px"
				runat="server"></asp:TextBox>
			<asp:Label id="Label2" style="Z-INDEX: 103; LEFT: 72px; POSITION: absolute; TOP: 168px" runat="server">PASSWORD</asp:Label>
			<asp:TextBox id="TextBox2" style="Z-INDEX: 104; LEFT: 200px; POSITION: absolute; TOP: 168px"
				runat="server"></asp:TextBox>
			<asp:Label id="Label3" style="Z-INDEX: 105; LEFT: 112px; POSITION: absolute; TOP: 248px" runat="server">BRANCH</asp:Label>
			<asp:DropDownList id="DropDownList1" style="Z-INDEX: 106; LEFT: 208px; POSITION: absolute; TOP: 248px"
				runat="server" Width="143px"></asp:DropDownList>
			<asp:Button id="Button1" style="Z-INDEX: 107; LEFT: 208px; POSITION: absolute; TOP: 344px" runat="server"
				Text="SUBMIT"></asp:Button>
			<asp:Label id="Label4" style="Z-INDEX: 108; LEFT: 96px; POSITION: absolute; TOP: 32px" runat="server"
				Width="328px" Height="32px" Font-Bold="True" Font-Size="X-Large" ForeColor="#FF8080" Font-Underline="True">RAMINENI TRAVELS</asp:Label>
		</form>
	</body>
</HTML>
