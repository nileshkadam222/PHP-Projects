<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="NewSchedule.aspx.cs" Inherits="Admin_Schedule" Title="Untitled Page" %>

<%@ Register assembly="AjaxControlToolkit" namespace="AjaxControlToolkit" tagprefix="cc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   <table style="font-weight: bold; width: 472px;" align="center" bgcolor="#CCFFFF">
                    <tr>
                        <td align="center" colspan="3" style="height: 22px; background-color: #000000" 
                            bgcolor="Black">
                            <asp:Label ID="Label1" runat="server" ForeColor="White" 
                                Text="New Schedule Detail"></asp:Label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <asp:Label ID="Label2" runat="server" Text="Schedule Id"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:TextBox ID="txtSId" runat="server" Width="59px" MaxLength="3" Enabled="False"></asp:TextBox>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <asp:Label ID="Label3" runat="server" Text="Route"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:DropDownList ID="ddlRoute" runat="server" DataSourceID="SqlDataSource1" 
                                DataTextField="Route" DataValueField="Route_Id">
                            </asp:DropDownList>
                            <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                                ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
                                SelectCommand="SELECT Route_Master.Route_Id, City_Master_1.City_Name+'-'+City_Master.City_Name AS Route FROM Route_Master INNER JOIN City_Master AS City_Master_1 ON Route_Master.Route_Source = City_Master_1.City_Id INNER JOIN City_Master ON Route_Master.Route_Destination = City_Master.City_Id where Route_Master.Route_Status='Y' Order by City_Master_1.City_Name">
                            </asp:SqlDataSource>
                            <asp:RequiredFieldValidator ID="rfvroute" runat="server" ControlToValidate="ddlRoute"
                                Display="Dynamic" ErrorMessage="select Route " Width="16px">*</asp:RequiredFieldValidator>&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <asp:Label ID="Label4" runat="server" Text="Flight Name"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:DropDownList ID="ddlFlight" runat="server" DataSourceID="SqlDataSource2" 
                                DataTextField="Flight_Name" DataValueField="Flight_Id">
                            </asp:DropDownList>
                            <asp:SqlDataSource ID="SqlDataSource2" runat="server" 
                                ConflictDetection="CompareAllValues" 
                                ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
                                DeleteCommand="DELETE FROM [Flight_Master] WHERE [Flight_Id] = @original_Flight_Id AND [Flight_Name] = @original_Flight_Name AND [Flight_status] = @original_Flight_status" 
                                InsertCommand="INSERT INTO [Flight_Master] ([Flight_Id], [Flight_Name], [Flight_status]) VALUES (@Flight_Id, @Flight_Name, @Flight_status)" 
                                OldValuesParameterFormatString="original_{0}" 
                                SelectCommand="SELECT [Flight_Id], [Flight_Name], [Flight_status] FROM [Flight_Master] WHERE ([Flight_status] = @Flight_status) ORDER BY [Flight_Name]" 
                                UpdateCommand="UPDATE [Flight_Master] SET [Flight_Name] = @Flight_Name, [Flight_status] = @Flight_status WHERE [Flight_Id] = @original_Flight_Id AND [Flight_Name] = @original_Flight_Name AND [Flight_status] = @original_Flight_status">
                                <SelectParameters>
                                    <asp:Parameter DefaultValue="Y" Name="Flight_status" Type="String" />
                                </SelectParameters>
                                <DeleteParameters>
                                    <asp:Parameter Name="original_Flight_Id" Type="Decimal" />
                                    <asp:Parameter Name="original_Flight_Name" Type="String" />
                                    <asp:Parameter Name="original_Flight_status" Type="String" />
                                </DeleteParameters>
                                <UpdateParameters>
                                    <asp:Parameter Name="Flight_Name" Type="String" />
                                    <asp:Parameter Name="Flight_status" Type="String" />
                                    <asp:Parameter Name="original_Flight_Id" Type="Decimal" />
                                    <asp:Parameter Name="original_Flight_Name" Type="String" />
                                    <asp:Parameter Name="original_Flight_status" Type="String" />
                                </UpdateParameters>
                                <InsertParameters>
                                    <asp:Parameter Name="Flight_Id" Type="Decimal" />
                                    <asp:Parameter Name="Flight_Name" Type="String" />
                                    <asp:Parameter Name="Flight_status" Type="String" />
                                </InsertParameters>
                            </asp:SqlDataSource>
                            <asp:RequiredFieldValidator ID="rfvflight_nm" runat="server" ControlToValidate="ddlFlight"
                                Display="Dynamic" ErrorMessage="select Flight Name " Width="16px">*</asp:RequiredFieldValidator></td>
                    </tr>
                    
                <tr>
                <td>
                    <asp:Label ID="lblrate" runat="server" Text="Rate"></asp:Label>
                </td>
                <td>:</td>
                <td>
                    <asp:TextBox ID="txtERate" runat="server" style="text-align: right" 
                        MaxLength="6" Width="150px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="txtERate"
                        Display="Dynamic" ErrorMessage="Economic Required" SetFocusOnError="True">*</asp:RequiredFieldValidator>
                 </td>
                 </tr>
                  
                  <tr>
                        <td>
                            <asp:Label ID="Label5" runat="server" Text="Departure Time"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:DropDownList ID="ddlDHH" runat="server" Width="42px">
                                <asp:ListItem>HH</asp:ListItem>
                                <asp:ListItem>00</asp:ListItem>
                                <asp:ListItem>01</asp:ListItem>
                                <asp:ListItem>02</asp:ListItem>
                                <asp:ListItem>03</asp:ListItem>
                                <asp:ListItem>04</asp:ListItem>
                                <asp:ListItem>05</asp:ListItem>
                                <asp:ListItem>06</asp:ListItem>
                                <asp:ListItem>07</asp:ListItem>
                                <asp:ListItem>08</asp:ListItem>
                                <asp:ListItem>09</asp:ListItem>
                                <asp:ListItem>10</asp:ListItem>
                                <asp:ListItem>11</asp:ListItem>
                                <asp:ListItem>12</asp:ListItem>
                            </asp:DropDownList><asp:DropDownList ID="ddlDMM" runat="server" Width="47px">
                                <asp:ListItem>MM</asp:ListItem>
                                <asp:ListItem>00</asp:ListItem>
                                <asp:ListItem>05</asp:ListItem>
                                <asp:ListItem>10</asp:ListItem>
                                <asp:ListItem>15</asp:ListItem>
                                <asp:ListItem>20</asp:ListItem>
                                <asp:ListItem>25</asp:ListItem>
                                <asp:ListItem>30</asp:ListItem>
                                <asp:ListItem>35</asp:ListItem>
                                <asp:ListItem>40</asp:ListItem>
                                <asp:ListItem>45</asp:ListItem>
                                <asp:ListItem>50</asp:ListItem>
                                <asp:ListItem>55</asp:ListItem>
                            </asp:DropDownList><asp:DropDownList ID="ddlDAMPM" runat="server" Width="46px">
                                <asp:ListItem>AM</asp:ListItem>
                                <asp:ListItem>PM</asp:ListItem>
                            </asp:DropDownList></td>
                    </tr>
                    <tr>
                        <td>
                            <asp:Label ID="Label6" runat="server" Text="Arrival Time"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:DropDownList ID="ddlAHH" runat="server" Width="42px">
                                <asp:ListItem>HH</asp:ListItem>
                                <asp:ListItem>00</asp:ListItem>
                                <asp:ListItem>01</asp:ListItem>
                                <asp:ListItem>02</asp:ListItem>
                                <asp:ListItem>03</asp:ListItem>
                                <asp:ListItem>04</asp:ListItem>
                                <asp:ListItem>05</asp:ListItem>
                                <asp:ListItem>06</asp:ListItem>
                                <asp:ListItem>07</asp:ListItem>
                                <asp:ListItem>08</asp:ListItem>
                                <asp:ListItem>09</asp:ListItem>
                                <asp:ListItem>10</asp:ListItem>
                                <asp:ListItem>11</asp:ListItem>
                                <asp:ListItem>12</asp:ListItem>
                            </asp:DropDownList><asp:DropDownList ID="ddlAMM" runat="server" Width="46px">
                                <asp:ListItem>MM</asp:ListItem>
                                <asp:ListItem>00</asp:ListItem>
                                <asp:ListItem>05</asp:ListItem>
                                <asp:ListItem>10</asp:ListItem>
                                <asp:ListItem>15</asp:ListItem>
                                <asp:ListItem>20</asp:ListItem>
                                <asp:ListItem>25</asp:ListItem>
                                <asp:ListItem>30</asp:ListItem>
                                <asp:ListItem>35</asp:ListItem>
                                <asp:ListItem>40</asp:ListItem>
                                <asp:ListItem>45</asp:ListItem>
                                <asp:ListItem>50</asp:ListItem>
                                <asp:ListItem>55</asp:ListItem>
                            </asp:DropDownList><asp:DropDownList ID="ddlAAMPM" runat="server" Width="46px">
                                <asp:ListItem>AM</asp:ListItem>
                                <asp:ListItem>PM</asp:ListItem>
                            </asp:DropDownList></td>
                    </tr>
                    <tr>
                        <td>
                            <asp:Label ID="Label7" runat="server" Text="Status Type"></asp:Label>
                        </td>
                        <td>
                            :</td>
                        <td>
                            <asp:RadioButtonList ID="optType" runat="server" RepeatDirection="Horizontal" RepeatLayout="Flow">
                                <asp:ListItem Selected="True" Value="D">Daily</asp:ListItem>
                                <asp:ListItem Value="W">Weekly</asp:ListItem>
                            </asp:RadioButtonList></td>
                    </tr>
                    <tr id=weekly style="display:none">
                        <td colspan="3">
                            <asp:CheckBoxList ID="chkSDetail" runat="server" RepeatDirection="Horizontal" RepeatColumns="4">
                                <asp:ListItem Value="Sun">Sunday</asp:ListItem>
                                <asp:ListItem Value="Mon">Monday</asp:ListItem>
                                <asp:ListItem Value="Tue">Tuesday</asp:ListItem>
                                <asp:ListItem Value="Wed">Wednesday</asp:ListItem>
                                <asp:ListItem Value="Thu">Thursday</asp:ListItem>
                                <asp:ListItem Value="Fri">Friday</asp:ListItem>
                                <asp:ListItem Value="Sat">Saturday</asp:ListItem>
                            </asp:CheckBoxList></td>
                    </tr>
                    
                    <tr>
                        <td align="center" colspan="3" style="background-color: #000000" 
                            bgcolor="#ffccff">
                            <asp:Button ID="btnsubmit" runat="server" Font-Bold="False" ForeColor="Black" Text="Submit"
                                Width="91px" OnClick="btnsubmit_Click" />
                            <asp:Button ID="btnback" runat="server" Font-Bold="False" ForeColor="Black" Text="Back"
                                Width="91px" onclick="btnback_Click" /></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            &nbsp;<asp:Label ID="lblDuplicate" runat="server" ForeColor="Red"></asp:Label>
                            <asp:ScriptManager ID="ScriptManager1" runat="server">
                            </asp:ScriptManager>
                <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender2" runat="server" 
                    TargetControlID="txtERate" ValidChars="0123456789.">
                </cc1:FilteredTextBoxExtender>
                <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender3" runat="server" 
                    TargetControlID="txtERate" ValidChars="0123456789.">
                </cc1:FilteredTextBoxExtender>
                            <cc1:FilteredTextBoxExtender ID="FilteredTextBoxExtender1" runat="server" 
                    TargetControlID="txtERate" ValidChars="0123456789.">
                </cc1:FilteredTextBoxExtender><br />
                        </td>
                    </tr>
                </table>
</asp:Content>

