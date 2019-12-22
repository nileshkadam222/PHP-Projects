<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Borrowed Books</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                                        <th>Issue ID:</th>
                                        <th>Book ID</th>                                 
                                         <th>Book Title</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Due Date</th>                                
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $id=$_SESSION['id'];
                                  $user_query=mysql_query("select * from issued where userid='$id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['issueid'];
									$book_id=$row['bookid'];
                                    $book_title=$row['booktitle'];
									$issuedate=$row['issuedate'];
									$validtill=$row['validtill'];
									
				
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['issueid']; ?></td>
                            
                                    <td><?php echo $row['bookid']; ?></td>
									<td><?php echo $row['booktitle']; ?></td> 
                                    <td><?php echo $row['issuedate']; ?> </td>
									<td><?php echo $row['validtill']; ?> </td>
									
									 
									 
                                    </tr>
									<?php  }  ?>
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