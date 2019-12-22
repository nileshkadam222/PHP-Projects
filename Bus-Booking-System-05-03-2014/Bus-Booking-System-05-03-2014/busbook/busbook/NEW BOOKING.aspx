<%@ Page language="c#" Codebehind="NEW BOOKING.aspx.cs" AutoEventWireup="false" Inherits="busbook.WebForm3" EnableSessionState="True" enableViewState="True" enableViewStateMac="True"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>WebForm3</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="C#" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
	</HEAD>
	<body bgColor="#99ccff" MS_POSITIONING="GridLayout">
		<form id="Form1" method="post" runat="server">
			<asp:label id="Label1" style="Z-INDEX: 101; LEFT: 32px; POSITION: absolute; TOP: 96px" runat="server">ROUTE NAME</asp:label><asp:label id="Label2" style="Z-INDEX: 102; LEFT: 56px; POSITION: absolute; TOP: 144px" runat="server">DATE</asp:label><asp:label id="Label3" style="Z-INDEX: 103; LEFT: 32px; POSITION: absolute; TOP: 208px" runat="server">START TIME</asp:label><asp:textbox id="txtstarttime" style="Z-INDEX: 104; LEFT: 168px; POSITION: absolute; TOP: 200px"
				runat="server" ReadOnly="True"></asp:textbox><asp:label id="Label4" style="Z-INDEX: 105; LEFT: 24px; POSITION: absolute; TOP: 248px" runat="server">VEHICLE NO</asp:label><asp:textbox id="txtvehno" style="Z-INDEX: 106; LEFT: 168px; POSITION: absolute; TOP: 248px"
				runat="server" ReadOnly="True"></asp:textbox><asp:label id="Label5" style="Z-INDEX: 107; LEFT: 40px; POSITION: absolute; TOP: 304px" runat="server">FARE</asp:label><asp:textbox id="txtfare" style="Z-INDEX: 108; LEFT: 168px; POSITION: absolute; TOP: 296px" runat="server"
				ReadOnly="True"></asp:textbox><asp:label id="Label6" style="Z-INDEX: 109; LEFT: 32px; POSITION: absolute; TOP: 368px" runat="server">SERVICE NO</asp:label><asp:textbox id="txtserno" style="Z-INDEX: 110; LEFT: 168px; POSITION: absolute; TOP: 360px"
				runat="server" ReadOnly="True"></asp:textbox><asp:label id="Label7" style="Z-INDEX: 111; LEFT: 24px; POSITION: absolute; TOP: 432px" runat="server">SEATS ALLOTED</asp:label><asp:textbox id="txtseatsallot" style="Z-INDEX: 112; LEFT: 168px; POSITION: absolute; TOP: 432px"
				runat="server" ReadOnly="True"></asp:textbox><asp:label id="Label8" style="Z-INDEX: 113; LEFT: 24px; POSITION: absolute; TOP: 488px" runat="server">SEATS AVAILABLE</asp:label><asp:textbox id="txtseatavlb" style="Z-INDEX: 114; LEFT: 176px; POSITION: absolute; TOP: 488px"
				runat="server" ReadOnly="True"></asp:textbox><asp:label id="Label9" style="Z-INDEX: 115; LEFT: 16px; POSITION: absolute; TOP: 16px" runat="server"
				ForeColor="Purple" Font-Size="X-Large" Height="24px" Width="512px">NEW BOOKING DETAILS</asp:label><asp:button id="btnsubmit" style="Z-INDEX: 116; LEFT: 96px; POSITION: absolute; TOP: 592px"
				runat="server" Text="SUBMIT"></asp:button><asp:dropdownlist id="ddlrname" style="Z-INDEX: 117; LEFT: 176px; POSITION: absolute; TOP: 96px" runat="server"
				Width="128px" AutoPostBack="True"></asp:dropdownlist><asp:label id="Label10" style="Z-INDEX: 118; LEFT: 40px; POSITION: absolute; TOP: 536px" runat="server">SEATSRESERVED</asp:label><asp:textbox id="txtresv" style="Z-INDEX: 119; LEFT: 176px; POSITION: absolute; TOP: 536px" runat="server"
				MaxLength="2"></asp:textbox><asp:label id="lblmsg" style="Z-INDEX: 120; LEFT: 384px; POSITION: absolute; TOP: 440px" runat="server"
				Enabled="False"></asp:label><asp:button id="btnreset" style="Z-INDEX: 121; LEFT: 232px; POSITION: absolute; TOP: 592px"
				runat="server" Text="Reset"></asp:button><asp:label id="lblmsg2" style="Z-INDEX: 122; LEFT: 384px; POSITION: absolute; TOP: 488px" runat="server"></asp:label><asp:label id="lblmsg3" style="Z-INDEX: 123; LEFT: 376px; POSITION: absolute; TOP: 368px" runat="server"></asp:label><asp:hyperlink id="HypLnkBack" style="Z-INDEX: 124; LEFT: 392px; POSITION: absolute; TOP: 584px"
				runat="server" NavigateUrl="VEHICLE DETAILS.aspx">Back</asp:hyperlink><asp:requiredfieldvalidator id="ddlrnameValidator" style="Z-INDEX: 125; LEFT: 336px; POSITION: absolute; TOP: 96px"
				runat="server" ControlToValidate="ddlrname" ErrorMessage="Select Any RouteName"></asp:requiredfieldvalidator><asp:requiredfieldvalidator id="txtresvValidator" style="Z-INDEX: 126; LEFT: 376px; POSITION: absolute; TOP: 528px"
				runat="server" Width="170px" ControlToValidate="txtresv" ErrorMessage="Enter seats to be reserved"></asp:requiredfieldvalidator><asp:regularexpressionvalidator id="txtresvRegExpValidator" style="Z-INDEX: 127; LEFT: 376px; POSITION: absolute; TOP: 552px"
				runat="server" ControlToValidate="txtresv" ErrorMessage="Enter Only Numbers" ValidationExpression="[0-9]"></asp:regularexpressionvalidator>
			<asp:Image id="Image1" style="Z-INDEX: 128; LEFT: 536px; POSITION: absolute; TOP: -8px" runat="server"
				Height="648px" Width="630px" ImageUrl="./volvo/oo.jpg"></asp:Image>
			<asp:DropDownList id="ddlDate" style="Z-INDEX: 129; LEFT: 184px; POSITION: absolute; TOP: 136px" runat="server"
				AutoPostBack="True"></asp:DropDownList></form>
	</body>
</HTML>
