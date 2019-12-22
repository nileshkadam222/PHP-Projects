<%@ Page Language="C#" MasterPageFile="~/Admin/Admin_masterpage.master" AutoEventWireup="true" CodeFile="ShowRequest_1.aspx.cs" Inherits="Admin_ShowRequest_1" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
    
    <asp:GridView ID="GridView1" runat="server" AllowPaging="True" 
        AutoGenerateColumns="False" DataKeyNames="Req_Id" 
        DataSourceID="SqlDataSource1" AllowSorting="True" CellPadding="4" 
        ForeColor="#333333" GridLines="None">
        <FooterStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <RowStyle BackColor="#F7F6F3" ForeColor="#333333" />
        <Columns>
            <asp:CommandField ShowEditButton="True" />
            <asp:BoundField DataField="Req_Id" HeaderText="Req_Id" ReadOnly="True" 
                SortExpression="Req_Id" />
            <asp:BoundField ConvertEmptyStringToNull="False" DataField="First_Name" 
                HeaderText="First_Name" ReadOnly="True" SortExpression="First_Name" />
            <asp:BoundField DataField="Last_Name" HeaderText="Last_Name" 
                SortExpression="Last_Name" ReadOnly="True" />
            <asp:BoundField DataField="Address" HeaderText="Address" ReadOnly="True" 
                SortExpression="Address" />
            <asp:BoundField DataField="City" HeaderText="City" ReadOnly="True" 
                SortExpression="City" />
            <asp:BoundField DataField="State" HeaderText="State" ReadOnly="True" 
                SortExpression="State" />
            <asp:BoundField DataField="Country" HeaderText="Country" ReadOnly="True" 
                SortExpression="Country" />
            <asp:BoundField DataField="Phone" HeaderText="Phone" ReadOnly="True" 
                SortExpression="Phone" />
            <asp:BoundField DataField="Email" HeaderText="Email" ReadOnly="True" 
                SortExpression="Email" />
            <asp:TemplateField ConvertEmptyStringToNull="False" HeaderText="Status">
                <EditItemTemplate>
                    <asp:RadioButtonList ID="RadioButtonList1" runat="server" 
                        RepeatDirection="Horizontal" SelectedValue='<%# Bind("Status") %>'>
                        <asp:ListItem>Y</asp:ListItem>
                        <asp:ListItem>N</asp:ListItem>
                    </asp:RadioButtonList>
                </EditItemTemplate>
                <ItemTemplate>
                    &nbsp;
                    <asp:Label ID="Label1" runat="server" Text='<%# Eval("Status") %>'></asp:Label>
                </ItemTemplate>
                <FooterTemplate>
                    &nbsp;
                </FooterTemplate>
            </asp:TemplateField>
        </Columns>
        <PagerStyle BackColor="#284775" ForeColor="White" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#E2DED6" Font-Bold="True" ForeColor="#333333" />
        <HeaderStyle BackColor="#5D7B9D" Font-Bold="True" ForeColor="White" />
        <EditRowStyle BackColor="#999999" />
        <AlternatingRowStyle BackColor="White" ForeColor="#284775" />
    </asp:GridView>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConflictDetection="CompareAllValues" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        DeleteCommand="DELETE FROM [Request_Master] WHERE [Req_Id] = @original_Req_Id AND [First_Name] = @original_First_Name AND [Last_Name] = @original_Last_Name AND [Status] = @original_Status AND [Address] = @original_Address AND [City] = @original_City AND [State] = @original_State AND [Country] = @original_Country AND [Phone] = @original_Phone AND [Email] = @original_Email" 
        InsertCommand="INSERT INTO [Request_Master] ([Req_Id], [First_Name], [Last_Name], [Status], [Address], [City], [State], [Country], [Phone], [Email]) VALUES (@Req_Id, @First_Name, @Last_Name, @Status, @Address, @City, @State, @Country, @Phone, @Email)" 
        OldValuesParameterFormatString="original_{0}" 
        SelectCommand="SELECT [Req_Id], [First_Name], [Last_Name], [Status], [Address], [City], [State], [Country], [Phone], [Email] FROM [Request_Master] WHERE ([Status] = @Status)" 
        
        UpdateCommand="UPDATE [Request_Master] SET [First_Name] = @First_Name, [Last_Name] = @Last_Name, [Status] = @Status, [Address] = @Address, [City] = @City, [State] = @State, [Country] = @Country, [Phone] = @Phone, [Email] = @Email WHERE [Req_Id] = @original_Req_Id AND [First_Name] = @original_First_Name AND [Last_Name] = @original_Last_Name AND [Status] = @original_Status AND [Address] = @original_Address AND [City] = @original_City AND [State] = @original_State AND [Country] = @original_Country AND [Phone] = @original_Phone AND [Email] = @original_Email">
        <SelectParameters>
            <asp:Parameter DefaultValue="Y" Name="Status" Type="String" />
        </SelectParameters>
        <DeleteParameters>
            <asp:Parameter Name="original_Req_Id" Type="Decimal" />
            <asp:Parameter Name="original_First_Name" Type="String" />
            <asp:Parameter Name="original_Last_Name" Type="String" />
            <asp:Parameter Name="original_Status" Type="String" />
            <asp:Parameter Name="original_Address" Type="String" />
            <asp:Parameter Name="original_City" Type="String" />
            <asp:Parameter Name="original_State" Type="String" />
            <asp:Parameter Name="original_Country" Type="String" />
            <asp:Parameter Name="original_Phone" Type="String" />
            <asp:Parameter Name="original_Email" Type="String" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="First_Name" Type="String" />
            <asp:Parameter Name="Last_Name" Type="String" />
            <asp:Parameter Name="Status" Type="String" />
            <asp:Parameter Name="Address" Type="String" />
            <asp:Parameter Name="City" Type="String" />
            <asp:Parameter Name="State" Type="String" />
            <asp:Parameter Name="Country" Type="String" />
            <asp:Parameter Name="Phone" Type="String" />
            <asp:Parameter Name="Email" Type="String" />
            <asp:Parameter Name="original_Req_Id" Type="Decimal" />
            <asp:Parameter Name="original_First_Name" Type="String" />
            <asp:Parameter Name="original_Last_Name" Type="String" />
            <asp:Parameter Name="original_Status" Type="String" />
            <asp:Parameter Name="original_Address" Type="String" />
            <asp:Parameter Name="original_City" Type="String" />
            <asp:Parameter Name="original_State" Type="String" />
            <asp:Parameter Name="original_Country" Type="String" />
            <asp:Parameter Name="original_Phone" Type="String" />
            <asp:Parameter Name="original_Email" Type="String" />
        </UpdateParameters>
        <InsertParameters>
            <asp:Parameter Name="Req_Id" Type="Decimal" />
            <asp:Parameter Name="First_Name" Type="String" />
            <asp:Parameter Name="Last_Name" Type="String" />
            <asp:Parameter Name="Status" Type="String" />
            <asp:Parameter Name="Address" Type="String" />
            <asp:Parameter Name="City" Type="String" />
            <asp:Parameter Name="State" Type="String" />
            <asp:Parameter Name="Country" Type="String" />
            <asp:Parameter Name="Phone" Type="String" />
            <asp:Parameter Name="Email" Type="String" />
        </InsertParameters>
    </asp:SqlDataSource>
    
    
</asp:Content>

