<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>You have to pay Fine</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Book ID</th>                                 
                                         <th>Book Title</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Last Date</th>                                
                                        <th>Fine</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $id=$_SESSION['id'];
                                  $user_query=mysql_query("select * from myfine where user_id='$id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['user_id'];
									$book_id=$row['book_id'];
                                    $book_title=$row['book_title'];
									$issuedate=$row['issue_date'];
									$validtill=$row['last_date'];									
									$fine=$row['fine'];										
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
            						<td><?php echo $row['user_id']; ?></td>
                            
                                    <td><?php echo $row['book_id']; ?></td>
									<td><?php echo $row['book_title']; ?></td> 
                                    <td><?php echo $row['issue_date']; ?> </td>
									<td><?php echo $row['last_date']; ?> </td>
									<td><?php echo $row['fine']; ?> </td>
									 
									<?php }
									
                                   	$user_query=mysql_query("select * from user where u_id='$id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									 $total1=$row['fine'];	
									
									echo 'You have to pay total Fine:'.$total1;
							

									
									
								 }?>
								
                                </tbody>
                            </table>
							
						
			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>