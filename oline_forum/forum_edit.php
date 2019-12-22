<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
width:190px;
height:100px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
	<?php include('connect.php');
$id=$_GET['iii'];?>

<form method="post" action="forum_edit1.php">

<input type="hidden" name="roomid" value="<?php echo $id; ?>">
<?php $resource3= mysql_query("SELECT * from forums where ForumID='$id'");
					while($lotus3 = mysql_fetch_array($resource3)){
						$test=$lotus3['Contents'];
						}?>
Post text here:<br />
<textarea id="text" name="text" rows="0" cols="0" required class="ed"><?php echo $test; ?></textarea>
	<br>
	<input type="submit" value="SAVE" id="button1" name="edit" class="ed">
</form>