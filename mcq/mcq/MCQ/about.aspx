<%@ Page Language="C#" MasterPageFile="~/local.master" AutoEventWireup="true" CodeFile="about.aspx.cs" Inherits="about" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table width="100%" cellspacing="5" cellpadding="0"   >
    <tr>
        <td width="10%" rowspan="6"></td>
        
         
        
        <td colspan="2" width="55%">
         <fieldset>
           <legend  ><asp:Image ID="imd" runat ="server" ImageUrl="~/images/User_48x48.png"
                   style="margin-right: 0px" Width="43px" />
                   Aboute US
                   </legend>
                   <p class="detail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You are answering an MCQ exam which has 20 questions. You answer 11 questions 
                and leave the 9 you&#39;re not sure of. You can now only achieve a maximum score of 
                70%. However, you only get 80% of the 20 questions you answered correct. That 
                gives you 56 out of 70, but with negative marking you loose one mark for every 
                question you get wrong, so that&#39;s 14 marks deducted from your score of 56 - 
                leaving you with a less-than-impressive 42.</p>
                <p class="detail"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; What would have happened if you&#39;d 
                made an educated guess for the 30 questions you weren&#39;t sure about? You decide 
                to take a chance with the 30 tricky questions, and using a process of educated 
                guessing, deduction and blind faith you answer all 30. Luck is with you and you 
                get half the questions correct - that&#39;s 15 out of 30. However, with negative 
                marking that gives you a net score of 0 for these 30 questions. Your overall 
                score for the test is still 42.</p>
         </fieldset>    
                    </td>
         <td width="60%" rowspan="6">
            <asp:Image ID="Image1" runat="server" ImageUrl="~/images/faculty.png" 
                    Height="306px" Width="330px" />
        </td>
        
    </tr>
   </table>

</asp:Content>

