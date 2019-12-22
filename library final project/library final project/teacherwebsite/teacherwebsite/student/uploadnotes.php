

<?php session_start();?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<center>
		<div id="content">
		<div class="post">
			<h1 class="title">Upload Notes</h1>
			<div class="entry">
				
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
									<div class="controls"><br><br>
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

$num=$_SESSION['unm'];

$user_query=mysql_query("select u_id,u_fnm,type from user where u_unm='$num'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['u_id'];
									$firstname=$row['u_fnm'];
									$usertype=$row['type'];
                                    }
									
				
								



$query = "INSERT INTO files (user_id,name, size, type, content,upname,who ) ".

"VALUES ('$id','$fileName', '$fileSize', '$fileType', '$content','$firstname','$usertype')";

mysql_query($query) or die('Error, query failed');

echo "File $fileName uploaded";

}

?>
	

	<html>
    <head>
    	<br><hr><hr>
        <title>Download File From MySQL Database</title>
        <meta http-equiv="Content-Type" content="text/html; 
              charset=iso-8859-1">
    </head>
    <body>
    	<h1>Download notes</h1>
    	<table>
    	<tr><td><h1>File name</h1></td></tr>
    	
    		<tr><td></h3>
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('shop', $con);
        $query = "SELECT id, name FROM files";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($id, $name) = mysql_fetch_array($result)) {
                ?>
                <a href="uploadnotes.php?id=<?php echo urlencode($id); ?>"
                   ><?php echo urlencode($name); ?></a> <br>
                <?php
            }
        }
        mysql_close();
        ?>
   </h3> </td></tr>
    </body>
</html>
           <?php
           if (isset($_GET['id'])) {
               $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
               $db = mysql_select_db('upload', $con);
               $id = $_GET['id'];
               $query = "SELECT name, type, size, content " .
                       "FROM files WHERE id = '$id'";
               $result = mysql_query($query) or die('Error, query failed');
               list($name, $type, $size, $content) = mysql_fetch_array($result);
               header("Content-length: $size");
               header("Content-type: $type");
               header("Content-Disposition: attachment; filename=$name");
               ob_clean();
               flush();
               echo $content;
               mysql_close();
               exit;
           }
           ?>								 
        							
						</form>

<br><br><hr><hr>
					</div>
				</div>
				
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<!-- end footer -->
</body>
</html>
