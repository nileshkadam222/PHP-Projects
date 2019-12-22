<%@ Page Language="C#" AutoEventWireup="true" CodeFile="results.aspx.cs" MasterPageFile="~/MasterPage3.master"Inherits="results" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
        <table width="560" align="center">
            <tr>
                <td width="100%" align="right">
                    <asp:LoginName ID="LoginName1" runat="server" CssClass="boldtext" FormatString="Currently logged in as: {0}" />
                </td>
            </tr>
        </table>     
        <table width="560" align="center" style="height: 682px">
            <tr>
                <td>
                    <asp:Image ID="imgResults" SkinID="results" runat="server" /></td>
            </tr>
            <tr>
                <td>&nbsp;<asp:Label ID="errorLabel" runat="server" CssClass="errormessage"></asp:Label></td>
            </tr>
            <tr>
                <td>
                    <asp:GridView ID="resultGrid" runat="server" DataKeyNames="QuestionID" SelectedIndex="0" 
                    AutoGenerateColumns="False" CellPadding="3" AutoGenerateSelectButton="True" OnSelectedIndexChanged="resultGrid_SelectedIndexChanged" Width="555px" BackColor="White" BorderColor="#CCCCCC" BorderStyle="None" BorderWidth="1px" Font-Bold="True" Font-Names="Arial">
                        <FooterStyle BackColor="White" ForeColor="#000066" />
                        <RowStyle ForeColor="#000066" CssClass="generaltext" HorizontalAlign="Center" />
                        <Columns>
                            <asp:BoundField DataField="QuestionID" HeaderText="Question" />
                            <asp:BoundField DataField="CorrectAnswer" HeaderText="Correct Answer" />
                            <asp:BoundField DataField="UserAnswer" HeaderText="Your Answer" />
                            <asp:BoundField DataField="Result" HeaderText="Result" />
                        </Columns>
                        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
                        <SelectedRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
                        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" CssClass="boldtext" />
                    </asp:GridView>

                    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>"
                        SelectCommand="SELECT [Title], [Answer1], [Answer2], [Answer3], [QuestionID], [QuestionOrder], [Answer4], [CorrectAnswer], [AnswerExplanation], [QuizID] FROM [Question] WHERE ([QuizID] = @QuizID) ORDER BY [QuestionOrder]">
                        <SelectParameters>
                            <asp:SessionParameter Name="QuizID" SessionField="QuizID" Type="Int32" />
                        </SelectParameters>
                    </asp:SqlDataSource>                
                </td>
            </tr>
            <tr>
                <td style="height: 283px">
                    <asp:DetailsView ID="answerDetails" runat="server" CellPadding="3" Height="45px" Width="552px" DataSourceID="SqlDataSource1" AutoGenerateRows="False" BackColor="White" BorderColor="#CCCCCC" BorderStyle="None" BorderWidth="1px" Font-Bold="True" Font-Names="Arial" >
                        <FooterStyle BackColor="White" ForeColor="#000066" />
                        <RowStyle ForeColor="#000066" CssClass="generaltext" />
                        <FieldHeaderStyle CssClass="boldtext" Width="100px" />
                        <PagerStyle BackColor="White" ForeColor="#000066" HorizontalAlign="Left" />
                        <HeaderStyle BackColor="#006699" Font-Bold="True" ForeColor="White" />
                        <EditRowStyle BackColor="#669999" Font-Bold="True" ForeColor="White" />
                        <Fields>
                            <asp:BoundField DataField="QuestionOrder" HeaderText="Question No.:" />
                            <asp:BoundField DataField="Title" HeaderText="Question:" />
                            <asp:BoundField DataField="Answer1" HeaderText="Answer 1:" />
                            <asp:BoundField DataField="Answer2" HeaderText="Answer 2:" />
                            <asp:BoundField DataField="Answer3" HeaderText="Answer 3:" />
                            <asp:BoundField DataField="Answer4" HeaderText="Answer 4:" />
                            <asp:TemplateField></asp:TemplateField>
                            <asp:BoundField DataField="CorrectAnswer" HeaderText="Correct Answer:" />
                            <asp:BoundField DataField="AnswerExplanation" HeaderText="Explanation:" />
                        </Fields>
                    </asp:DetailsView>                
                </td>
            </tr>
            <tr>
                <td style="height: 40px"><a href="default.aspx">Return to Main Menu </a></td>
            </tr>                                    
        </table>

</asp:Content>