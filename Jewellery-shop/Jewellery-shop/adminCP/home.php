<?php
include("../fckeditor/fckeditor.php") ;
$Post_path="../";
$Post_path.=$_REQUEST['_Pt'];
$Post_path.=".php";
?>
<form action="homeposteddata.php" method="post">
		<input type="hidden" name="file_name" value="<?php echo $_REQUEST['_Pt']; ?>" />
	<?php
	$sBasePath = $_SERVER['PHP_SELF'] ;
	$sBasePath = "../fckeditor/" ;
	$oFCKeditor = new FCKeditor('FCKeditor1') ;
	$oFCKeditor->BasePath	= $sBasePath ;
	$oFCKeditor->Value= file_get_contents($Post_path);; 
	$oFCKeditor->Create() ;

?>
<br>
<input type="submit" value="Submit">
</form>
	