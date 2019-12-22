<?php
$link=mysql_connect("localhost","root","");
$db=mysql_select_db("boutique");
$what=$HTTP_POST_VARS['h'];
if($what=='edit')
{
$nm=$HTTP_POST_VARS['inm'];
$des=$HTTP_POST_VARS['ides'];
$pic=$HTTP_POST_VARS['ipic'];
$cet=$HTTP_POST_VARS['icet'];
$pri=$HTTP_POST_VARS['ipri'];
$no=$HTTP_POST_VARS['srnum'];
$q=mysql_query("update item_detail set item_name='$nm',description='$des',picture='$pic',item_category='$cet',price=$pri where sr_no=$no");
}
if($what=='save')
{
$nm=$HTTP_POST_VARS['inm'];
$des=$HTTP_POST_VARS['ides'];
$pic=$HTTP_POST_VARS['ipic'];
$cet=$HTTP_POST_VARS['icet'];
$pri=$HTTP_POST_VARS['ipri'];
$q=mysql_query("select max(sr_no) from item_detail");
$d=mysql_fetch_array($q);
$q1=mysql_query("insert into item_detail values(($d[0]+1),'$nm','$des','$pic','$cet',$pri)");
}
header("Location:itemdata.php");
?>