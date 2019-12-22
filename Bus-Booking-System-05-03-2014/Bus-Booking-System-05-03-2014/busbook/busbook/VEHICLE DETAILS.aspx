<%@ Page language="c#" Codebehind="VEHICLE DETAILS.aspx.cs" AutoEventWireup="false" Inherits="busbook.WebForm2" debug="False" enableViewStateMac="False"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>WebForm2</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="C#" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
	</HEAD>
	<body bgColor="#ffffcc" MS_POSITIONING="GridLayout">
		<form id="Form1" method="post" runat="server">
			<asp:datagrid id="datagrd" style="Z-INDEX: 101; LEFT: 24px; POSITION: absolute; TOP: 160px" runat="server"
				Font-Size="X-Small" BackColor="White" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px"
				CellPadding="4">
				<SelectedItemStyle Font-Bold="True" ForeColor="#663399" BackColor="#FFCC66"></SelectedItemStyle>
				<ItemStyle ForeColor="#330099" BorderColor="Red" BackColor="White"></ItemStyle>
				<HeaderStyle Font-Bold="True" ForeColor="#FFFFCC" BorderColor="#FF8000" BackColor="#990000"></HeaderStyle>
				<FooterStyle ForeColor="#330099" BackColor="#FFFFCC"></FooterStyle>
				<PagerStyle HorizontalAlign="Center" ForeColor="#330099" BackColor="#FFFFCC"></PagerStyle>
			</asp:datagrid><asp:hyperlink id="hypLnkNewboking" style="Z-INDEX: 102; LEFT: 24px; POSITION: absolute; TOP: 440px"
				runat="server" NavigateUrl="./NEW BOOKING.aspx" Width="144px" Height="32px">NEW BOOKING</asp:hyperlink><asp:hyperlink id="hypLnkXtraTkts" style="Z-INDEX: 103; LEFT: 200px; POSITION: absolute; TOP: 440px"
				runat="server" NavigateUrl="./ExtraTickets.aspx">EXTRA TICKETS</asp:hyperlink>
			<asp:Label id="Label2" style="Z-INDEX: 104; LEFT: 104px; POSITION: absolute; TOP: 16px" runat="server">DATE</asp:Label>
			<asp:DropDownList id="ddldate" style="Z-INDEX: 105; LEFT: 192px; POSITION: absolute; TOP: 16px" runat="server"
				AutoPostBack="True"></asp:DropDownList>
			<asp:HyperLink id="hypLnkBack" style="Z-INDEX: 106; LEFT: 408px; POSITION: absolute; TOP: 440px"
				runat="server" NavigateUrl="LOGIN.aspx">Back</asp:HyperLink>
			<asp:RequiredFieldValidator id="ddldateValidator" style="Z-INDEX: 107; LEFT: 304px; POSITION: absolute; TOP: 16px"
				runat="server" ErrorMessage="Select Any Date" ControlToValidate="ddldate"></asp:RequiredFieldValidator>
			<asp:Image id="Image1" style="Z-INDEX: 108; LEFT: 648px; POSITION: absolute; TOP: 0px" runat="server"
				Height="480px" Width="417px" ImageUrl=".\volvo\v2.jpg"></asp:Image>
			<asp:Label id="Label1" style="Z-INDEX: 109; LEFT: 80px; POSITION: absolute; TOP: 72px" runat="server">
				<font size="40">VehicleDetails</font></asp:Label></form>
	</body>
</HTML>
