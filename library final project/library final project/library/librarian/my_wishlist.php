<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;My Wish list</strong>
                                </div>
						<!--  -->
								    
						<!--  -->
						<center class="title">
						<h1>Books List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
								<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>						
                                <thead>
                                    <tr>
									    <th>user id</th>                                 
                                        <th>Book Title</th>                                 
                                        
										<th>Author</th>
										
										
										<th>Publisher Name</th>
										
										<th>Copyright Year</th>
										
										<th>Status</th>
										<th class="action">Action</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									$id=$_SESSION['id'];
                                  $user_query=mysql_query("select * from wishlist where user_id='$id'")or die(mysql_error());


									while($row=mysql_fetch_array($user_query)){
									$id=$row['user_id'];  
									$cat_id=$row['book_title'];
									$book_copies = $row['author'];
									$Publisher=$row['publisher_name'];
									$copy=$row['copyright_year'];
									$status=$row['avilable'];
									
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['author']; ?> </td> 
                                     <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
									<td><?php echo $row['avilable']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
											
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>