<%@ Page Language="C#" MasterPageFile="~/MasterPage3.master" AutoEventWireup="true" CodeFile="questions11.aspx.cs" Inherits="questions"  %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

        <table width="560" align="center">
            <tr>
                <td width="100%" align="right" style="height: 21px">
                    <asp:LoginName ID="LoginName1" runat="server" CssClass="boldtext" FormatString="Currently logged in as: {0}" Font-Bold="True" Font-Names="Comic Sans MS" ForeColor="#FFFF80" Height="41px" Width="245px" />
                </td>
            </tr>
        </table>     
        <table width="560" align="center">
            <tr>
                <td style="height: 32px">
                    <asp:Image ID="imgQuiz" SkinID="quiz" runat="server" Height="110px" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="h1">Current Test:&nbsp;
                    <asp:Label ID="currentTestLabel" runat="server"></asp:Label></td>
            </tr>
            <tr>
                <td><asp:Image ID="imgLine1" SkinID="line" runat="server" Height="114px" /></td>
            </tr>                        
            <tr>
                <td>
                    <asp:DetailsView ID="questionDetails" runat="server" Height="50px" Width="550px" AutoGenerateRows="False" CellPadding="3" DataSourceID="SqlDataSource1" BackColor="White" BorderColor="#CCCCCC" BorderStyle="None" BorderWidth="1px">
                        <FooterStyle BackColor="White" ForeColor="#000066" />
                        <RowStyle ForeColor="#000066" CssClass="generaltext" />
                        <FieldHeaderStyle CssClass="boldtext" Width="80px" />
                        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
                        <Fields>
                            <asp:BoundField DataField="Title" HeaderText="Question:" SortExpression="Title" />
                            <asp:BoundField DataField="Answer1" HeaderText="Answer 1:" SortExpression="Answer1" />
                            <asp:BoundField DataField="Answer2" HeaderText="Answer 2:" SortExpression="Answer2" />
                            <asp:BoundField DataField="Answer3" HeaderText="Answer 3:" SortExpression="Answer3" />
                            <asp:BoundField DataField="Answer4" HeaderText="Answer 4:" SortExpression="Answer4" />
                        </Fields>
                        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
                        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
                        <AlternatingRowStyle CssClass="generaltext" />
                    </asp:DetailsView>
                    &nbsp;
                    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [QuestionID], [Title], [Answer1], [Answer2], [Answer3], [Answer4], [CorrectAnswer], [QuestionOrder] FROM [Question] WHERE ([QuizID] = @QuizID) ORDER BY [QuestionOrder]">
                        <SelectParameters>
                            <asp:SessionParameter SessionField="QuizID" Type="Int32" Name="QuizID" DefaultValue="0" />
                        </SelectParameters>
                    </asp:SqlDataSource>
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                </td>
            </tr>
            <tr>
                <td class="boldtext" style="height: 16px">
                    Your Answer:&nbsp;
                <asp:DropDownList ID="answerDropDownList" runat="server" OnSelectedIndexChanged="answerDropDownList_SelectedIndexChanged" AutoPostBack="True" AppendDataBoundItems="True" Height="34px" Width="134px">
                            <asp:ListItem Value="1">Answer 1</asp:ListItem>
                            <asp:ListItem Value="2">Answer 2</asp:ListItem>
                            <asp:ListItem Value="3">Answer 3</asp:ListItem>
                            <asp:ListItem Value="4">Answer 4</asp:ListItem>
                        </asp:DropDownList>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <asp:Button ID="Button1" runat="server" BackColor="Yellow" Font-Bold="True" Font-Names="Comic Sans MS"
                        Font-Size="Medium" ForeColor="#00C000" Height="45px" OnClick="Button1_Click"
                        Style="z-index: 100; left: 341px; position: absolute; top: 686px" Text="NEXT"
                        Width="104px" />
                    &nbsp;
                </td>
            </tr>                                    
        </table>
 
</asp:Content>