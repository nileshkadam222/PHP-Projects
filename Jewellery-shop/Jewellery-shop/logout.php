<? 
session_start();
$_SESSION["id"]="";
$_SESSION["name"]="";
unset($_SESSION);
$_SESSION[]=array();
session_destroy();
$G="";
if($_REQUEST['PType']!="")
{ 
$G="PType=".$_REQUEST['PType']."&"; 
}
if($_REQUEST['cat']!="")
{ 
$G=$G."cat=".$_REQUEST['cat']."&"; 
}
if($_REQUEST['scat']!="")
{ 
$G=$G."scat=".$_REQUEST['scat']; 
}

header("Location:index.php?".$G);
exit();
?>