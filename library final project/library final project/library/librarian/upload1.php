
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('session.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/sies.png" class="img-rounded"><br><br>
						<p><a class="btn btn-info" href="mynotes.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Select your file .files name must be subject name..</strong></p>
				</div>
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="control-group">
									
									<div class="controls">
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />

									</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<input id="userfile" type="file" name="userfile" /></td>

									</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<input id="upload" type="submit" name="upload" value=" Upload " />								</div>
								</div>
								
								<?php if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)

{

$fileName = $_FILES['userfile']['name'];

$tmpName  = $_FILES['userfile']['tmp_name'];

$fileSize = $_FILES['userfile']['size'];

$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');

$content = fread($fp, filesize($tmpName));

$content = addslashes($content);

fclose($fp);

if(!get_magic_quotes_gpc())

{

$fileName = addslashes($fileName);

}

mysql_connect("localhost","root","");

mysql_select_db("shop");
$id=$_SESSION['id'];

$user_query=mysql_query("select u_fnm,type from user where u_id='$id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$firstname=$row['u_fnm'];
									$usertype=$row['type'];
                                    }
									
				
								



$query = "INSERT INTO files (user_id,name, size, type, content,upname,who ) ".

"VALUES ('$id','$fileName', '$fileSize', '$fileType', '$content','$firstname','$usertype')";

mysql_query($query) or die('Error, query failed');

echo "File $fileName uploaded";

}

?>
								
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>