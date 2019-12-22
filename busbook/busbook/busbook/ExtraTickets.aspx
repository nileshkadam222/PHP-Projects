<%@ Page language="c#" Codebehind="ExtraTickets.aspx.cs" AutoEventWireup="false" Inherits="busbook.WebForm5" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>WebForm5</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="C#" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
	</HEAD>
	<body bgColor="#000000" MS_POSITIONING="GridLayout">
		<form id="Form1" method="post" runat="server">
			<asp:label id="Label1" style="Z-INDEX: 101; LEFT: 40px; POSITION: absolute; TOP: 88px" runat="server"
				ForeColor="#FF8000">Date</asp:label><asp:label id="Label3" style="Z-INDEX: 102; LEFT: 24px; POSITION: absolute; TOP: 152px" runat="server"
				ForeColor="#FF8000">RouteName</asp:label><asp:label id="Label4" style="Z-INDEX: 103; LEFT: 8px; POSITION: absolute; TOP: 272px" runat="server"
				ForeColor="#FF8000">RequiredSeats</asp:label><asp:textbox id="txtreqseats" style="Z-INDEX: 104; LEFT: 120px; POSITION: absolute; TOP: 272px"
				runat="server" MaxLength="2"></asp:textbox><asp:button id="btnsubmit" style="Z-INDEX: 105; LEFT: 48px; POSITION: absolute; TOP: 440px"
				runat="server" Text="submit"></asp:button><asp:label id="Label5" style="Z-INDEX: 106; LEFT: 16px; POSITION: absolute; TOP: 16px" runat="server"
				ForeColor="#C00000" Width="368px" Font-Size="X-Large">Request for Extra Tickets</asp:label><asp:label id="lblmsg" style="Z-INDEX: 107; LEFT: 272px; POSITION: absolute; TOP: 432px" runat="server"
				ForeColor="#FF8000">Label</asp:label><asp:dropdownlist id="ddlrname" style="Z-INDEX: 108; LEFT: 136px; POSITION: absolute; TOP: 144px"
				runat="server"></asp:dropdownlist><asp:dropdownlist id="ddldate" style="Z-INDEX: 109; LEFT: 136px; POSITION: absolute; TOP: 88px" runat="server"></asp:dropdownlist><asp:label id="Label6" style="Z-INDEX: 110; LEFT: 8px; POSITION: absolute; TOP: 360px" runat="server"
				ForeColor="#FF8000">BranchName</asp:label><asp:textbox id="txtbrname" style="Z-INDEX: 111; LEFT: 120px; POSITION: absolute; TOP: 344px"
				runat="server" ReadOnly="True"></asp:textbox><asp:hyperlink id="HyperLink1" style="Z-INDEX: 112; LEFT: 192px; POSITION: absolute; TOP: 440px"
				runat="server" ForeColor="White" NavigateUrl="VEHICLE DETAILS.aspx">Back</asp:hyperlink><asp:requiredfieldvalidator id="ddldateReqFieldValidator" style="Z-INDEX: 113; LEFT: 128px; POSITION: absolute; TOP: 120px"
				runat="server" ControlToValidate="ddldate" ErrorMessage="Select The Date"></asp:requiredfieldvalidator><asp:requiredfieldvalidator id="ddlrnameReqFieldValidator" style="Z-INDEX: 114; LEFT: 112px; POSITION: absolute; TOP: 176px"
				runat="server" ControlToValidate="ddlrname" ErrorMessage="Select the Route Name"></asp:requiredfieldvalidator><asp:requiredfieldvalidator id="txtreqseatsReqFieldValidator" style="Z-INDEX: 115; LEFT: 120px; POSITION: absolute; TOP: 312px"
				runat="server" ControlToValidate="txtreqseats" ErrorMessage="Enter The Required Seats"></asp:requiredfieldvalidator><asp:regularexpressionvalidator id="txtreqseatsRegExpValidator" style="Z-INDEX: 116; LEFT: 120px; POSITION: absolute; TOP: 376px"
				runat="server" ControlToValidate="txtreqseats" ErrorMessage="Enter the Valid No of Seats" ValidationExpression="[0-9]"></asp:regularexpressionvalidator>
			<asp:Image id="Image1" style="Z-INDEX: 117; LEFT: 352px; POSITION: absolute; TOP: -16px" runat="server"
				Width="515px" ImageUrl=".\volvo\uu.jpg" Height="536px"></asp:Image>
			<asp:Label id="Label2" style="Z-INDEX: 118; LEFT: 24px; POSITION: absolute; TOP: 216px" runat="server"
				ForeColor="#FF8000" BackColor="Black">Vehicle no</asp:Label>
			<asp:DropDownList id="ddlvehno" style="Z-INDEX: 119; LEFT: 136px; POSITION: absolute; TOP: 216px"
				runat="server"></asp:DropDownList></form>
	</body>
</HTML>
