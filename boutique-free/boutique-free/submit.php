<?php
session_start();
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$auid=$_POST['uid'];
$aupw=$HTTP_POST_VARS['upw'];
$afnm=$HTTP_POST_VARS['fnm'];
$alnm=$HTTP_POST_VARS['lnm'];
$add=$HTTP_POST_VARS['dd'];
$amm=$HTTP_POST_VARS['mm'];
$ayy=$HTTP_POST_VARS['yy'];
$date=$add."-".$amm."-".$ayy;
$agen=$HTTP_POST_VARS['c1'];
$auadd=$HTTP_POST_VARS['uadd'];
$auph=$HTTP_POST_VARS['uph'];
$aucity=$HTTP_POST_VARS['ucity'];
$austate=$HTTP_POST_VARS['ustate'];
$aucon=$HTTP_POST_VARS['ucon'];
$auzip=$HTTP_POST_VARS['uzip'];
$auemail=$HTTP_POST_VARS['uemail'];
$_SESSION['user']=$auid;
$q=mysql_query("select max(sr_no) from registration");
$d=mysql_fetch_array($q);
$i=($d[0]+1);
mysql_query("insert into registration values($i,'$auid','$aupw','$afnm','$alnm','$date','$agen','$auadd',$auph,'$aucity','$austate','$aucon','$auzip','$auemail')");
header("Location:main.php");
?>
