<%@ Page language="c#" Codebehind="TravellerDetails.aspx.cs" AutoEventWireup="false" Inherits="busbook.WebForm4" culture="en-US"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>WebForm4</title>
		<meta name="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" Content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
	</HEAD>
	<body MS_POSITIONING="GridLayout" bgColor="#ffcccc">
		<form id="Form1" method="post" runat="server">
			<asp:TextBox id="txttravname" style="Z-INDEX: 101; LEFT: 208px; POSITION: absolute; TOP: 104px"
				runat="server" MaxLength="20"></asp:TextBox>
			<asp:Label id="Label1" style="Z-INDEX: 102; LEFT: 32px; POSITION: absolute; TOP: 104px" runat="server"
				Font-Italic="True" Font-Bold="True">Enter TravellerName</asp:Label>
			<asp:Label id="Label2" style="Z-INDEX: 103; LEFT: 32px; POSITION: absolute; TOP: 168px" runat="server"
				Font-Italic="True" Font-Bold="True">Enter PhoneNumber</asp:Label>
			<asp:TextBox id="txtphno" style="Z-INDEX: 104; LEFT: 208px; POSITION: absolute; TOP: 168px" runat="server"></asp:TextBox>
			<asp:Label id="Label4" style="Z-INDEX: 105; LEFT: 48px; POSITION: absolute; TOP: 256px" runat="server"
				Font-Italic="True" Font-Bold="True"> SeatNumbers</asp:Label>
			<asp:TextBox id="txtseatno" style="Z-INDEX: 106; LEFT: 208px; POSITION: absolute; TOP: 256px"
				runat="server" ReadOnly="True"></asp:TextBox>
			<asp:Label id="Label5" style="Z-INDEX: 107; LEFT: 48px; POSITION: absolute; TOP: 312px" runat="server"
				Font-Italic="True" Font-Bold="True">TotalAmount</asp:Label>
			<asp:TextBox id="txttotamt" style="Z-INDEX: 108; LEFT: 208px; POSITION: absolute; TOP: 312px"
				runat="server" ReadOnly="True"></asp:TextBox>
			<asp:Label id="Label6" style="Z-INDEX: 109; LEFT: 56px; POSITION: absolute; TOP: 16px" runat="server"
				Font-Size="X-Large" ForeColor="DeepPink" Font-Italic="True" Font-Bold="True" Font-Overline="True"
				Font-Underline="True">Traveller Details</asp:Label>
			<asp:Button id="Button1" style="Z-INDEX: 110; LEFT: 136px; POSITION: absolute; TOP: 384px" runat="server"
				Text="SUBMIT"></asp:Button>
			<asp:Label id="lblmsg" style="Z-INDEX: 111; LEFT: 360px; POSITION: absolute; TOP: 368px" runat="server"
				Visible="False"></asp:Label>
			<asp:HyperLink id="HyperLink1" style="Z-INDEX: 112; LEFT: 280px; POSITION: absolute; TOP: 392px"
				runat="server" NavigateUrl="LOGIN.aspx">Logout</asp:HyperLink>
			<asp:RequiredFieldValidator id="txttravnameValidator" style="Z-INDEX: 113; LEFT: 208px; POSITION: absolute; TOP: 136px"
				runat="server" ErrorMessage="Enter The TravellerName" ControlToValidate="txttravname" Width="160px"></asp:RequiredFieldValidator>
			<asp:RequiredFieldValidator id="RequiredFieldValidator2" style="Z-INDEX: 114; LEFT: 216px; POSITION: absolute; TOP: 200px"
				runat="server" ErrorMessage="Enter The PhoneNo" ControlToValidate="txtphno" Width="160px"></asp:RequiredFieldValidator>
			<asp:RegularExpressionValidator id="txtphnoValidator" style="Z-INDEX: 115; LEFT: 216px; POSITION: absolute; TOP: 224px"
				runat="server" ErrorMessage="Enter Valid Nmubers" ControlToValidate="txtphno" Width="128px" ValidationExpression="[0-9]{6,11}"></asp:RegularExpressionValidator>
			<asp:Image id="Image1" style="Z-INDEX: 116; LEFT: 500px; POSITION: absolute; TOP: -16px" runat="server"
				Width="495px" ImageUrl="./volvo/volvo_bus2.gif" Height="480px"></asp:Image>
		</form>
	</body>
</HTML>
