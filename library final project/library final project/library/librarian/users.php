<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_user.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>My Profile</strong></a>
											</li>
										</ul>
										
										 
     <!-- Modal add user -->
	
										
			</div>
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                     <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
                                <thead>
                                    
                                </thead>
                                <tbody>
								 
                                  <?php 
                                  $id=$_SESSION['id'];
                                  $user_query=mysql_query("select * from user where u_id='$id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['u_id']; ?>
									 
                                   <tr> <th>Name:</th><th><?php echo $row['u_fnm']; ?></th>
                                        <th><img src="image/upload.gif"</img></th></tr>
                                   </tr>
                                    <tr><th>Roll NO:</th><th><?php echo $row['roll_no']; ?></th>
                                    <th>Libary card number:</th><th><?php echo $row['u_id']; ?></th></tr>
                                    
                                    <tr><th>Class:</th><th><?php echo $row['std']; ?></th>
                                    <th>User name:</th><th><?php echo $row['u_unm']; ?></th></tr>
                                    
                                    <tr><th>Date of Birth:</th><th><?php echo $row['dob']; ?></th>
                                    <th>Gender:</th><th><?php echo $row['u_gender']; ?></th></tr>

                                    <tr><th>Email address:</th><th><?php echo $row['u_email']; ?></th>
                                    <th>Contact Number:</th><th><?php echo $row['u_contact']; ?></th></tr>

                                    <tr><th>Address:</th><th><?php echo $row['u_address']; ?></th>
                                    <th>City:</th><th><?php echo $row['u_city']; ?></th></tr>

                                    <tr><th>Issue date:</th><th><?php echo $row['issue_date']; ?></th>
                                    <th>Valid Till:</th><th><?php echo $row['valid_till']; ?></th></tr>

                                    <td width="100">
                            		<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_user.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
<script type="text/javascript">
/*         $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Data?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_user.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        }); */
    </script>

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>