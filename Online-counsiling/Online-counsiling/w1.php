
<?php include'header.php';?>
<html>
<link rel="stylesheet" href="st7.css">
<?php
$rol=$_POST['s1'];
$ps=$_POST['s2'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$rol' and student2.password='$ps'");
            $stm->execute();
            $result1=$stm->fetchAll();

                  ?>
                  <?php foreach($result1 as $row)
                  { ?>
                 <center> <p class="vw1">TOTAL DETAILS SUBMITIED</p>
                  <table align= center border=1 class="vw">
        <tr><td><b>NAME</b></td>
        <td><b><?php echo $row['name']; ?></b></td></tr>
        <tr><td><b>ROLLNO</b></td><td><b><?php echo $row['rollno']; ?></b></td></tr>
        <tr><td><b>RANK</b></td><td><b><?php echo $row['rank']; ?></b></td></tr>
        <tr><td><b>ADRESS</b></td><td><b><?php echo $row['address']; ?></b></td></tr>
        <tr><td><b>D.O.B</b></td><td><b><?php echo $row['dob']; ?></b></td></tr>
        <tr><td><b>SEX</b></td><td><b><?php echo $row['sex']; ?></b></td></tr>
        <tr><td><b>CATEGORI</b></td><td><b><?php echo $row['catagore']; ?></b></td></tr>
        <tr><td><b>AGE</b></td><td><b><?php echo $row['age']; ?></b></td></tr>
        <tr><td><b>EMAILID</b></td><td><b><?php echo $row['email']; ?></b></td></tr>
        <tr><td><b>CONTACTNO</b></td><td><b><?php echo $row['cno']; ?></b></td></tr>
        <tr><td><b>STATE</b></td><td><b><?php echo $row['state']; ?></b></td></tr>
        <tr><td><b>H.S%</b></td><td><b><?php echo $row['hs']; ?></b></td></tr>
        <tr><td><b>YEAROFPASSING</b></td><td><b><?php echo $row['hsy']; ?></b></td></tr>
        <tr><td><b>COLLAGE NAME(first choice)</b></td><td><b><?php echo $row['f1collage'];?></b></td></tr>
        <tr><td><b>STREAM1</b></td><td><b><?php echo $row['f1s1']; ?></b></td></tr>
        <tr><td><b>STREAM2</b></td><td><b><?php echo $row['f1s2']; ?></b></td></tr>
        <tr><td><b>COLLAGE NAME(second choice)</b></td><td><b><?php echo $row['f2collage'];?></b></td></tr>
        <tr><td><b>Stream1</b></td><td><b><?php echo $row['f2s1']; ?></b></td></tr>
        <tr><td><b>Stream2</b></td> <td><b><?php echo $row['f2s2']; ?></b></td></tr>
        <tr><td><b>COLLEGE NAME(third chice)</b></td> <td><b><?php echo $row['f3collage'];?></b></td></tr>
        <tr><td><b>STREAM1</b></td><td><b><?php echo $row['f3s1']; ?></b></td></tr>
        <tr><td><b>STREAM2</b></td><td><b><?php echo $row['f3s2']; ?></b></td></tr>
        <tr><td><b>PASSWOD</b></td><td><b><?php echo $row['password']; ?></b></td></tr>
        <tr><td></td>
        <td>
        <input type="button" value="logout" onclick="document.location='H.php';"></td></tr>
                  <?php } ?>

        </table></center></html>
<?php include'footer.php'?>


