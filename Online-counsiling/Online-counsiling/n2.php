<?php
//$co = $_POST['h1'];

          // $sql=new PDO('mysql:host=localhost;dbname=test','root','');
           // $stm=$sql->prepare("select * from ngen where ngen.rank='$co'");
           // $stm->execute();
           // $result1=$stm->fetchAll();
           // foreach($result1 as $row)
           // {

                ?>
 <html>
<head>
       <title></title>
<center><h3><b>THIRD CHOICE FILD BY STUDENT</b></h3></center></head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<form name="pp1" action="md1.php"  method="POST" >
<center><table width="200px" height="50px">
<tr>
<td><p><b>Rank:</b></p>
</td>
<td><input type="number" name="gs1" value=""placeholder=" Enter Rank" required><?php echo"!!please enter the rank"?>
</td></tr>
<tr><td><p><b>COLLAGE NAME(2schoice)</b></p></td>
            <td><select name="gs2"><option>
           </option></select> </td></tr>
            <tr><td><p><b>stream1</b></p></td>
            <td><input type="text" name="gs3" value="">
            </td></tr>
            <tr><td><p><b>stream2</b></p></td>
            <td><input type="text" name="gs4" value="">
            </td></tr><tr><td><p><b>CollageID:</b></p></td><td>
            <input type="text" name="gs5" value=""></td></tr>
            <tr>
<td><p><b>Rollno:</b></p>
</td>
<td><input type="number" name="gs6" value="">
</td></tr>
            <tr><td></td><td><input type="submit" value="GENARATE">
            </tr>

<?php
//}
?></table></center></body></html>
