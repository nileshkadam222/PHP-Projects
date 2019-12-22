<%@ Page Language="C#" MasterPageFile="~/students/MasterPage.master" AutoEventWireup="true" CodeFile="fullresult.aspx.cs" Inherits="students_fullresult" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table>
    <tr>
        <td>
            Subject: <asp:Label ID="lblsub" runat="server" CssClass="menu"></asp:Label>
            
        
        </td>
    </tr>
    
    <tr>
        <td class="lbl" style="padding-left:40px">
            Total Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <asp:Label ID="lbltmark" runat="server"></asp:Label><br />
            Per Question Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <asp:Label ID="lblpqm" runat="server"></asp:Label><br />
            Negetive Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <asp:Label ID="lblneg" runat="server"></asp:Label><br />
            No Of Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <asp:Label ID="lblnoq" runat="server"></asp:Label><br />
            Exam Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <asp:Label ID="lbletime" runat="server"></asp:Label><br />
            Currect Ans:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <asp:Label ID="lblca" runat="server"></asp:Label><br />
            Obtain Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <asp:Label ID="lblomark" runat="server"></asp:Label><br />
             Obtain Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <asp:Label ID="lblotime" runat="server"></asp:Label><br />
        </td>
    </tr>
    <tr>
        <td>
                <asp:GridView ID="grdshow" runat="server"  
            DataKeyNames="qid" 
            AutoGenerateColumns="false"  
            HeaderStyle-CssClass="header" 
            RowStyle-CssClass="item" 
            AlternatingRowStyle-CssClass="alter" 
            EmptyDataText="Not Any question"
            
             
            
            
            >
                <Columns>
                
                    <asp:BoundField DataField="qname" HeaderText="Question" />
                    <asp:BoundField DataField="A" HeaderText="Option A" />
                    <asp:BoundField DataField="B"  HeaderText="Option B" />
                    <asp:BoundField DataField="C" HeaderText="Option C" />
                    <asp:BoundField DataField="D"  HeaderText="Option D"/>
                    <asp:BoundField DataField="ans" HeaderText="Answer" />
                    <asp:BoundField DataField="yans" HeaderText="Your Ans" />
                </Columns>  
            </asp:GridView>
        </td>
    </tr>
</table>
</asp:Content>

