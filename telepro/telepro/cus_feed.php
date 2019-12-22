            <html>
            
            <title>
            CPTL Admin
            </title>
            <link rel="stylesheet" type="text/css" href="main_div.css">
            <link rel="stylesheet" type="text/css" href="middle_tb.css">
            <link rel="stylesheet" type="text/css" href="body.css">
            <style>
                
                #feedback_tb{
                width: 100%;
                border-collapse: collapse;
                }
                #feedback_tb td,#td_head
                {
                border-bottom:1px solid #545C64;
                font-size:14px;
                font-family: Lucida sans;
                padding:8px;
                }
                #feedback_tb #tb_head{
                font-weight:bold;
                background-color: #545C64;
                color:white;
                }
                #action{
                    color: blue;
                    font-size:14px;
                    
                }
                #feedback{
                background-color:#ADD6FF;
                height:400px;
                overflow:scroll;
                }
                #tid{
                    border-right:1px solid black;
                }
                #del_msg{
                font-size:16px;
                font-family: Lucida sans;
                color: red;
                    
                }
                #querytd{
                    word-wrap:break-word;
                    width: 300px;
                }
                #cusfeed{
                font-size:25px;
                font-family: Lucida sans;
                                     
                }
                #admin_link{
                 float:right;
                    color:blue;
                    }
                
             </style>
             
            
            <body>
            <center>
            
            <div id="main_div" name="main_div">
            <table>
            <tr>
            <td><?php include('banner.php') ?></td>
            <tr>
            <tr>
            <td><?php include('admin_nav.php') ?></td>
            </tr>
            <tr>
            <td>
            <!-- ########-->
            <table id="middle_tb" name="middle_tb" style="">
            <tr>
            <td>
            <a id='admin_link' href='Welcome_admin.php'>Back to Admin Panel</a>
            <h1 id='cusfeed'>Customer Feedback</h1>
            <?php
            if(isset($_SESSION['username']))
             {
            $del_msg="";
            include('my_con.php');
            $result = mysqli_query($conn,"SELECT f_id,ca_number,contact,email,query,f_date FROM feedback WHERE f_date!='0000-00-00'");
            echo "<div id='feedback'><table id='feedback_tb'>
            <tr id='tb_head'>
            <td id='tid'>ID</td>
            <td>CA Number</td>
            <td>Contact</td>
            <td>Email</td>
            <td>Query</td>
            <td>Date</td>
            <td>Status</td>
            </tr>
            
            ";
            while($row = mysqli_fetch_array($result))
              {
              echo "<tr>";
              echo "<td>" . $row['f_id'] . "</td>";
              echo "<td>" . $row['ca_number'] . "</td>";
              echo "<td>" . $row['contact'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td ><div id='querytd'>" . $row['query'] . "</div></td>";
              echo "<td>" . $row['f_date'] . "</td>";
              echo "<td ><a id='action' href='cus_feed.php?check=".$row['f_id']."'>Delete</a></td>";
              echo "</tr>";
              }
            
              
            
            if(isset($_GET['check'])){
            
            $check=$_GET['check'];
            $result=mysqli_query($conn,"UPDATE feedback set f_date = '0000-00-00' where f_id=$check") or mysqli_error();
            $num=mysqli_affected_rows($conn);
            if($num==1)
            {
            $del_msg="Record Deleted refresh page to view changes"; 
            }
            }
            
              
              
              
              
              
              
            echo "</table></div>";
            echo "<br><span id='del_msg'>".$del_msg."</span>";
             }
             else{
                
                 include('unauth.php'); 
             }
            ?>
            
            
              
                
                
            </td>
            </tr>
            </table>
            <!-- ########-->
            </td>
            </tr>
            <tr>
            <td></td>
            </tr>
            </table>
            <div>
            </body>
            </html>