<?php
session_start();
$id=$_POST['a1'];
$name=$_POST['a2'];
$it=$_POST['a3'];
if($it!='')
{
try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.id='$id'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:institute.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
}
}
else
{
   // include'update2.php';
    }
?>

 <html>
<head>
<h2 class="ad">
<center>
<?php
echo"Welcome Admin!!!";
?>
</center>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<center>
<form name="f1" action="update2.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Id:</p>
</td>
<td>
<input type="text" name="a1" value="<?php echo$id;?>" >
</td>
</tr>
<tr>
<td>
<p class="mn">Collage_name:</p>
</td>
<td>
<input type="text" name="a2" value="<? echo$name;?>">
</td>
</tr>
<tr>
<td>
<p class="mn">EEdeptseat:</p>
</td>
<td>
<input type="text" name="a3" value="" >
</td>
</tr>
<tr><td></td><td><input type="submit" size="2" value="NEXT"></td></tr>
</table>
</form>
</center>
</html>
