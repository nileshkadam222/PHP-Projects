<%@ Page Language="C#" MasterPageFile="~/students/MasterPage.master" AutoEventWireup="true" CodeFile="examconfig.aspx.cs" Inherits="students_examconfig" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%">
    <tr>
        <td width="25%" rowspan="3">
            <asp:Image ID="img1" runat="server" ImageUrl="~/images/Subject.png" Height="211px" 
                Width="222px" />
        </td>
        <td class="lbl">
            Subject: <asp:Label ID="ddlsub" runat="server" CssClass="menu"></asp:Label>
        </td>
    </tr>
    <tr>
        <td class="lbl" style="padding-left:40px">
            Total Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <asp:Label ID="lbltmark" runat="server"></asp:Label><br />
            Per Question Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <asp:Label ID="lblpqm" runat="server"></asp:Label><br />
            Negetive Mark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <asp:Label ID="lblneg" runat="server"></asp:Label><br />
            No Of Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <asp:Label ID="lblnoq" runat="server"></asp:Label><br />
            Exam Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <asp:Label ID="lbletime" runat="server"></asp:Label>
            
        </td>
    </tr>
    <tr>
        <td>
            <asp:ImageButton ID="ImageButton1" runat="server" 
                            ImageUrl="~/images/StartTest.png" Width="96px" 
                onclick="ImageButton1_Click" />&nbsp;
        </td>
    </tr>
</table>
</asp:Content>

