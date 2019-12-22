

<!--<noscript>
<meta http-equiv="refresh" content="1; url=javascriptnotsupported.php">
</noscript>-->
<link rel="stylesheet" type="text/css" href="css/alertbox_css.css" />    
<script type="text/javascript" src="js/alertbox_js.js"></script>

<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'forum_database'; 

/* End config */


	$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");






?>
  