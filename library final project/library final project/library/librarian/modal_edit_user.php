	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Name</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['u_id']; ?>" required>
				<input type="text" id="inputEmail" name="username" value="<?php echo $row['u_fnm']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Email Address</label>
				<div class="controls">
				<input type="text" name="emailaddress" id="inputPassword" value="<?php echo $row['u_email']; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Contact No:</label>
				<div class="controls">
	
				<input type="text" id="inputEmail" name="contactno" value="<?php echo $row['u_contact']; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Address:</label>
				<div class="controls">

				<input type="text" id="inputEmail" name="addres" value="<?php echo $row['u_address']; ?>" required>
				</div>
			</div>
			
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$user_id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['emailaddress'];
	$contact=$_POST['contactno'];
	$addre=$_POST['addres'];

	
	mysql_query("UPDATE user SET u_fnm='$username', u_email='$email' , u_contact = '$contact' , u_address='$addre'   WHERE u_id='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="users.php";
	</script>
	<?php
	}
	?>