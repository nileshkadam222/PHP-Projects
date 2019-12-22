<?php
if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	if (get_magic_quotes_gpc() )
		$postedValue = stripslashes( $value ) ;

	else
		$postedValue =  $value  ;
}
?>

<?php 
$Post_path="../";
$Post_path.=$_REQUEST['file_name'];
$Post_path.=".php";
file_put_contents($Post_path,$postedValue);

?>

<html>
<head>
<script type="text/javascript">
		window.location= "index.php?_Pt=Success";
</script>
</head>
<body>
</body>

</html>
