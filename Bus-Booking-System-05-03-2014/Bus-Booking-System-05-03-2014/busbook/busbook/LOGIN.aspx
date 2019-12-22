<%@ Page language="c#" Codebehind="LOGIN.aspx.cs" AutoEventWireup="false" Inherits="busbook.LOGIN" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>LOGIN</title>
		<meta name="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" Content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
	</HEAD>
	<body MS_POSITIONING="GridLayout" bgColor="#000000">
		<form id="Form1" method="post" runat="server">
			<asp:Label id="Label2" style="Z-INDEX: 101; LEFT: 128px; POSITION: absolute; TOP: 64px" runat="server"
				ForeColor="Yellow">STAFF ID</asp:Label>
			<asp:TextBox id="txtuserid" style="Z-INDEX: 102; LEFT: 232px; POSITION: absolute; TOP: 64px"
				runat="server" MaxLength="5" tabIndex="1" AutoPostBack="True"></asp:TextBox>
			<asp:Label id="Label3" style="Z-INDEX: 103; LEFT: 120px; POSITION: absolute; TOP: 176px" runat="server"
				ForeColor="Yellow">PASSWORD</asp:Label>
			<asp:TextBox id="txtpwd" style="Z-INDEX: 104; LEFT: 240px; POSITION: absolute; TOP: 168px" runat="server"
				TextMode="Password" MaxLength="5" tabIndex="2"></asp:TextBox>
			<asp:Button id="btnsubmit" style="Z-INDEX: 105; LEFT: 144px; POSITION: absolute; TOP: 368px"
				runat="server" Text="SUBMIT" tabIndex="4"></asp:Button>
			<asp:RequiredFieldValidator id="txtueridReqFieldValidator" style="Z-INDEX: 106; LEFT: 232px; POSITION: absolute; TOP: 120px"
				runat="server" ErrorMessage="ENTER A VALID USER ID" ControlToValidate="txtuserid" ForeColor="White"></asp:RequiredFieldValidator>
			<asp:Label id="lblmsg" style="Z-INDEX: 107; LEFT: 256px; POSITION: absolute; TOP: 320px" runat="server"
				BackColor="Firebrick" BorderColor="Black" Visible="False"></asp:Label>
			<asp:Button id="btnreset" style="Z-INDEX: 108; LEFT: 368px; POSITION: absolute; TOP: 368px"
				runat="server" Text="RESET" CausesValidation="False" tabIndex="5"></asp:Button>
			<asp:HyperLink id="HyperLink1" style="Z-INDEX: 109; LEFT: 240px; POSITION: absolute; TOP: 416px"
				runat="server" NavigateUrl="forgotpwd.aspx" ForeColor="Red">forgotpassword</asp:HyperLink>
			<asp:RequiredFieldValidator id="txtpwdReqFieldValidator" style="Z-INDEX: 110; LEFT: 248px; POSITION: absolute; TOP: 224px"
				runat="server" ControlToValidate="txtpwd" ErrorMessage="Enter The PassWord" ForeColor="WhiteSmoke"></asp:RequiredFieldValidator>
			<asp:DropDownList id="ddlBranch" style="Z-INDEX: 111; LEFT: 264px; POSITION: absolute; TOP: 272px"
				tabIndex="3" runat="server"></asp:DropDownList>
			<asp:Label id="Label1" style="Z-INDEX: 112; LEFT: 136px; POSITION: absolute; TOP: 280px" runat="server"
				ForeColor="Yellow">BRANCH</asp:Label>
			<asp:Image id="Image1" style="Z-INDEX: 113; LEFT: 464px; POSITION: absolute; TOP: 8px" runat="server"
				ImageUrl=".\volvo\hh.jpg" Width="497px" Height="464px"></asp:Image>
		</form>
	</body>
</HTML>
