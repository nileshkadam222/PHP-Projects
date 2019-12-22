<%@ Page Language="C#" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="true" CodeFile="reg_master.aspx.cs" Inherits="admin_reg_master" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   <script type="text/javascript" language="javascript">
            function confirmation()
            {
                if(confirm("Are you sure to delete ? "))
                    return true;
               else
                    return false;
            }
            
    
    </script>

<table >
<tr>
    <td>
        
    </td>
</tr>
    <tr>
        <td class="lbl1" >
            
            Student:<asp:Label ID="lblname" runat="server" CssClass="lbl"></asp:Label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            E:mail:<asp:Label ID="lblemail" runat="server" CssClass="lbl"></asp:Label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Qualification:<asp:Label ID="lblqualification" runat="server" CssClass="lbl"></asp:Label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <asp:CheckBox ID="chkadmin" runat="server"  Text="Admin :" 
                TextAlign="Left"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <asp:CheckBox ID="chkactive" runat="server"  Text="Active :" TextAlign="Left"/>
            
            
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
                    <asp:ImageButton ID="btnsubmit" runat="server" ImageUrl="~/images/update.jpg" 
                         Height="24px" Width="77px" 
                onclick="btnsubmit_Click"                        /> 
                    
            
        </td>
    </tr>
    <tr>
        <td>
            <asp:GridView ID="grdshow" runat="server"  DataKeyNames="sid" 
                AllowPaging="true"
                PageSize="10"  AutoGenerateColumns="false" Width="1200px" 
                HeaderStyle-CssClass="header" RowStyle-CssClass="item" 
                AlternatingRowStyle-CssClass="alter" 
                EmptyDataText="Not Any Record" 
                onpageindexchanging="grdshow_PageIndexChanging"  
                 >
                <Columns>
                
                    <asp:BoundField DataField="sname" HeaderText="Student Name"   />
                    <asp:BoundField DataField="email" HeaderText="E Mail" />
                    <asp:BoundField DataField="address" HeaderText="Address"  />
                    <asp:BoundField DataField="city" HeaderText="City"  />
                    <asp:BoundField DataField="state" HeaderText="State" />
                    <asp:BoundField DataField="mobile" HeaderText="Mobile"  />
                    <asp:BoundField DataField="qualification" HeaderText="Qualification"  />
                    <asp:BoundField DataField="subject" HeaderText="Subject" />
                    <asp:BoundField DataField="r_date" HeaderText="Entry Date" DataFormatString="{0:dd/MM/yyyy}"  />
                    <asp:TemplateField HeaderText="Activation Status">
                            <ItemTemplate>
                            <asp:CheckBox ID="chkuser" runat="server"  Text="Activation :"  TextAlign="Left" Checked='<% # Eval("a_status") %>'/>
                            <asp:CheckBox ID="Chkadmin" runat="server"  Text="Admin :" TextAlign="Left"  Checked='<% # Eval("admin_status") %>'/>
                            </ItemTemplate>
                    </asp:TemplateField>
                    <asp:TemplateField HeaderText="Action">
                            <ItemTemplate>
                            <%--<asp:Image ID="status_img" runat="server" ImageAlign="Right" ImageUrl='<%# get_status_img_url(Convert.ToString(Eval("a_status")))%>' 
                                    Height="20" Width="20"   />
                            --%>    <asp:ImageButton ID="imgupdate" runat="server" ImageUrl="~/images/edit.jpeg" Height="34px" Width="36px"  OnClick="updatedata"   CommandArgument='<% # Eval("sid") %>'   />
                                <asp:ImageButton ID="Image1" runat="server" ImageUrl="~/images/delete (3).png" Height="34px" Width="36px" OnClick="deletedata" OnClientClick="Javascript:return confirmation();"  CommandArgument='<% # Eval("sid") %>'  />
                            </ItemTemplate>
                        </asp:TemplateField>
                </Columns>
            </asp:GridView>
            
            
        </td>
    </tr>
</table>
</asp:Content>

