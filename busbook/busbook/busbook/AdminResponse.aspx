<%@ Page language="c#" Codebehind="AdminResponse.aspx.cs" AutoEventWireup="false" Inherits="busbook.AdminResponse" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>AdminResponse</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="C#" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
	</HEAD>
	<body bgColor="#99ccff" MS_POSITIONING="GridLayout">
		<form id="Form1" method="post" runat="server">
			<asp:datagrid id="dtgrdxtra" style="Z-INDEX: 101; LEFT: 8px; POSITION: absolute; TOP: 80px" runat="server"
				BackColor="White" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px" CellPadding="4">
				<SelectedItemStyle Font-Bold="True" ForeColor="#663399" BackColor="#FFCC66"></SelectedItemStyle>
				<ItemStyle ForeColor="#330099" BackColor="White"></ItemStyle>
				<HeaderStyle Font-Bold="True" ForeColor="#FFFFCC" BackColor="#990000"></HeaderStyle>
				<FooterStyle ForeColor="#330099" BackColor="#FFFFCC"></FooterStyle>
				<Columns>
					<asp:ButtonColumn Text="Select" CommandName="Select"></asp:ButtonColumn>
					<asp:EditCommandColumn ButtonType="LinkButton" UpdateText="Update" CancelText="Cancel" EditText="Edit"></asp:EditCommandColumn>
				</Columns>
				<PagerStyle HorizontalAlign="Center" ForeColor="#330099" BackColor="#FFFFCC"></PagerStyle>
			</asp:datagrid><asp:button id="Button1" style="Z-INDEX: 102; LEFT: 16px; POSITION: absolute; TOP: 416px" runat="server"
				Text="PROCESSING THE REQUEST"></asp:button><asp:label id="lblmsg" style="Z-INDEX: 103; LEFT: 16px; POSITION: absolute; TOP: 360px" runat="server">Label</asp:label><asp:label id="lblmsg2" style="Z-INDEX: 104; LEFT: 296px; POSITION: absolute; TOP: 376px" runat="server">Label</asp:label><asp:hyperlink id="HyperLink1" style="Z-INDEX: 105; LEFT: 32px; POSITION: absolute; TOP: 480px"
				runat="server" NavigateUrl="LOGIN.aspx">Back</asp:hyperlink>
			<DIV style="Z-INDEX: 106; LEFT: 8px; WIDTH: 384px; POSITION: absolute; TOP: 8px; HEIGHT: 39px"
				ms_positioning="FlowLayout">
				<P class="MsoNormal" style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 24pt; COLOR: #ff9900; FONT-FAMILY: 'Monotype Corsiva'">EXTRA
						<SPAN style="mso-spacerun: yes">&nbsp;</SPAN>TICKET&nbsp;<SPAN style="mso-spacerun: yes">&nbsp;REQUEST</SPAN></SPAN></P>
			</DIV>
			<asp:HyperLink id="hypLnkLogout" style="Z-INDEX: 107; LEFT: 248px; POSITION: absolute; TOP: 480px"
				runat="server" NavigateUrl="LOGIN.aspx">LogOut</asp:HyperLink>
			<asp:Image id="Image1" style="Z-INDEX: 108; LEFT: 704px; POSITION: absolute; TOP: 0px" runat="server"
				ImageUrl="./volvo/ff.jpg" Width="524px" Height="512px"></asp:Image></form>
	</body>
</HTML>
