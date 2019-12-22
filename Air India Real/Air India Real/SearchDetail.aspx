<%@ Page Language="C#" MasterPageFile="~/User_Masterpage.master" AutoEventWireup="true" CodeFile="SearchDetail.aspx.cs" Inherits="SearchDetail" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
          
          <table >
          <tr>
          <td bgcolor="Black"><asp:Label ID="Label2" runat="server" Font-Bold="True" ForeColor="White" 
                    Text="Route From"></asp:Label>
&nbsp;<asp:Label ID="lblSource" runat="server" Font-Size="14pt" ForeColor="White"></asp:Label>
                <asp:Label ID="Label3" runat="server" Font-Bold="True" ForeColor="White" 
                    Text="To"></asp:Label>
                <asp:Label ID="lblDestination" runat="server" Font-Size="14pt" 
                    ForeColor="White"></asp:Label>
                <asp:Label ID="Label4" runat="server" Font-Bold="True" ForeColor="White" 
                    Text="On"></asp:Label>
&nbsp;<asp:Label ID="lblDate" runat="server" Font-Size="14pt" ForeColor="White"></asp:Label>&nbsp;</td>
          </tr>
          <tr>
          <td><asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="4" DataKeyNames="Sch_Id" 
                    DataSourceID="SqlDataSource_flight" AllowPaging="True" 
                    onrowcommand="GridView1_RowCommand" 
                    onselectedindexchanged="GridView1_SelectedIndexChanged" 
                  ForeColor="#333333" GridLines="None">
                    <FooterStyle BackColor="#5D7B9D" ForeColor="White" Font-Bold="True" />
                    <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
                    <Columns>
                        <asp:BoundField DataField="Flight_Name" HeaderText="Flight" 
                            SortExpression="Flight_Name" />
                        <asp:BoundField DataField="Depart_Time" HeaderText="Depart. Time" 
                            SortExpression="Depart_Time" />
                        <asp:BoundField DataField="Arr_Time" HeaderText="Arri. Time" 
                            SortExpression="Arr_Time" />
                        <asp:BoundField DataField="Route_Rate" HeaderText="Fare" 
                            SortExpression="Route_Rate" />
                        <asp:BoundField DataField="Flight_totalseats" HeaderText="Capacity" 
                            SortExpression="Flight_totalseats" />
                        <asp:TemplateField>
                            <ItemTemplate>
                                <asp:LinkButton ID="LinkButton1" runat="server" 
                                    CommandArgument='<%# Eval("Sch_Id")+"-"+Eval("Flight_totalseats")+"-"+Eval("Route_Rate") %>'>Booked</asp:LinkButton>
                            </ItemTemplate>
                        </asp:TemplateField>
                    </Columns>
                    <PagerStyle ForeColor="White" HorizontalAlign="Center" BackColor="#284775" />
                    <SelectedRowStyle BackColor="#E2DED6" Font-Bold="True" ForeColor="#333333" />
                    <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
                    <EditRowStyle BackColor="#999999" />
                    <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
                </asp:GridView></td>
          </tr>
          </table>     
               
                
  
                <asp:SqlDataSource ID="SqlDataSource_flight" runat="server" 
                    ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
                    SelectCommand=" SELECT Route_Master.Route_Source, 

Route_Master.Route_Destination, 

Flight_Master.Flight_Name, 

Schedule_Master.Depart_Time, 

Schedule_Master.Arr_Time, Schedule_Master.Route_Rate, 

Flight_Master.Flight_totalseats, 

Schedule_Master.Sch_Id FROM Schedule_Master INNER 

JOIN Flight_Master ON Schedule_Master.Flight_Id = 

Flight_Master.Flight_Id INNER JOIN Route_Master ON 

Schedule_Master.Route_Id = Route_Master.Route_Id 

WHERE (Route_Master.Route_Source = @src) AND 

(Route_Master.Route_Destination = @dest) ORDER BY 

Schedule_Master.Depart_Time, 

Schedule_Master.Arr_Time, Flight_Master.Flight_Name">
                    <SelectParameters>
                        <asp:SessionParameter Name="src" SessionField="scode" />
                        <asp:SessionParameter Name="dest" SessionField="dcode" />
                    </SelectParameters>
                </asp:SqlDataSource>
                            
  
</asp:Content>

