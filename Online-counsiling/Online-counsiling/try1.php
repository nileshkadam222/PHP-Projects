
<?php
include'header.php';
?>
<?php
$type = $_POST['f01'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from rank where rank.roll='$type'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            { ?>
            <html>
<head>
       <title>Title here!</title>
      <center> <h3 class="suck">Student Registratio Form</h3></center>
</head>
<body>
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="st5.css">
<form name="f1" action="regf.php"  method="POST" >
<table class="reg">
<tr>
<td class="reg1">
<p>Rollno:</p>
</td>
<td><input type="text" name="f01" value="<?php echo $row['roll']; ?>" placeholder="Roll no required" required>
</td>
<td class="reg1"><p>Rank:</p>
</td>
<td><input type="number" name="f02" value="<?php echo $row['rank']; ?>">
<?php
}?></td>
</tr><tr><td></td><td></td><td></td></tr>
<tr><td class="reg1"><p>H.S%:</p></td><td><input type="number" name="f03" value=""></td>
<td class="reg1"><p>Year of passing</p></td><td>
<select name="f04">
<option value="">YYYY</option>
<option select>
<?php for($y=1980;$y<=2014;$y++)
{ ?>

 <option value="<?php echo$y;?>">
 <?php echo$y;?> </option>
 <?php
}
?>
</select>
</td></tr>
<tr><td class="reg1"><p width="60px" font-style="bold">Choice filling</p></td></tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="t"><b>AvilableSheats</b></td>
</tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="search"><p>EnterCollageID:</p>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="serach"><input type="text" name="se1" value=""></td>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px">
<input type="submit" value="SEARCH">
</td>
</tr></table>

<table  class="searche"><?php
$type = $_POST['se1'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from collage where collage.id='$type'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            { ?>
           <tr> <td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>ID</b></td><td class="search"><b><?php echo $row['id']; ?></b></td></tr>
        <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search" ><b>COLLAGE NAME</b></td><td class="search"><b><?php echo $row['name']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(cs)</b></td><td class="search"><b><?php echo $row['cs']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(it)</b></td><td class="search"><b><?php echo $row['it']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(ee)</b></td><td class="search"><b><?php echo $row['ee']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td></td><td class="search"><b>NOofSEAT(ece)</b></td><td class="search"><b><?php echo $row['ece']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(me)</b></td><td class="search"><?php echo $row['me']; ?></td></tr>
 <?php }
                  ?> </tr></table>

<table class="reg">
<tr><td class="reg1"><p width="30px" font-style="bold">1.First choice</p></td><td></td>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f05">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option >
<?php $b2=array('ID:101.jailpaiguri Goverment collage',
'ID:114:ST.THOMAS COLLEGE OF ENGINEER',
'ID:102:kalyani goverment engineering collage',
'ID:103:Haldia institue of technology',
'ID:104:Institue of engineering&management',
'ID:105:BANKURA UNNAYANI INSTITUE OF ENGINEERING',
'ID:106:MURSHIBAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'ID:107:COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ID:108:ASANSOL ENGINEERING COLLAGE',
'ID:109:NETAJI SUBHASH ENGINEERING COLLAGE',
'ID:110:GOVT.COLLAGE OF ENGINEERING AND TEXTIL TECHNOLOGY,BERHAMPORE',
'ID:111:GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,SHERAMPOER',
'ID:112:GOVERMENT COLLAGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'ID:113:GOVERMENT COLLAGE OF ENGINEERING&CERAMICTECHNOLOGY',
'ID:115:B.P.PODDAR INTITUTE OF MANAGEMENT&TECHNOLOGY',
'ID:116:MCKV INSTITUTE OF ENGINEERING',
'ID:117:RCC INSTITUE OF INFORMATION TECHNOLOGY',
'ID:118:BIRBHUM INSTITUTE OF ENGINEERING&TECHNOLOGY',
'ID:119:SILIGURI INSTITUTOF TECHNOLOGY',
'ID:120:DR.B.C.ROY ENGINEERING COLLEGE',
'ID:121:BENGAL INSTITU OF TECHNOLOGY');


foreach($b2 as $d2)
{ ?>
   <option value="<?php echo$d2;?>">
   <?php echo $d2;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f06">
<option value="">stream</option>
<option >
<?php $b1=array('CSE','IT','ME','EE','ECE');

foreach($b1 as $d1)
{ ?>
   <option value="<?php echo$d1;?>">
   <?php echo $d1;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f07">
<option value="">stream</option>
<option >
<?php $b11=array('CSE','IT','ME','EE','ECE');

foreach($b11 as $d11)
{ ?>
   <option value="<?php echo$d11;?>">
   <?php echo $d11;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <tr>
 <td class="reg1"><p width="30px" font-style="bold">2.Second choice</p></td></tr>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f08">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option>
<?php $b22=array('ID:101.jailpaiguri Goverment collage',
'ID:114:ST.THOMAS COLLEGE OF ENGINEER',
'ID:102:kalyani goverment engineering collage',
'ID:103:Haldia institue of technology',
'ID:104:Institue of engineering&management',
'ID:105:BANKURA UNNAYANI INSTITUE OF ENGINEERING',
'ID:106:MURSHIBAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'ID:107:COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ID:108:ASANSOL ENGINEERING COLLAGE',
'ID:109:NETAJI SUBHASH ENGINEERING COLLAGE',
'ID:110:GOVT.COLLAGE OF ENGINEERING AND TEXTIL TECHNOLOGY,BERHAMPORE',
'ID:111:GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,SHERAMPOER',
'ID:112:GOVERMENT COLLAGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'ID:113:GOVERMENT COLLAGE OF ENGINEERING&CERAMICTECHNOLOGY',
'ID:115:B.P.PODDAR INTITUTE OF MANAGEMENT&TECHNOLOGY',
'ID:116:MCKV INSTITUTE OF ENGINEERING',
'ID:117:RCC INSTITUE OF INFORMATION TECHNOLOGY',
'ID:118:BIRBHUM INSTITUTE OF ENGINEERING&TECHNOLOGY',
'ID:119:SILIGURI INSTITUTOF TECHNOLOGY',
'ID:120:DR.B.C.ROY ENGINEERING COLLEGE',
'ID:121:BENGAL INSTITU OF TECHNOLOGY');

foreach($b22 as $d22)
{ ?>
   <option value="<?php echo$d22;?>">
   <?php echo $d22;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f09">
<option value="">stream</option>
<option >
<?php $b13=array('CSE','IT','ME','EE','ECE');

foreach($b13 as $d13)
{ ?>
   <option value="<?php echo$d13;?>">
   <?php echo $d13;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f10">
<option value="">stream</option>
<option >
<?php $b14=array('CSE','IT','ME','EE','ECE');

foreach($b14 as $d14)
{ ?>
   <option value="<?php echo$d14;?>">
   <?php echo $d14;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <tr>
 <tr><td class="reg1"><p width="30px" font-style="bold">3.Third choice</p></td></tr>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f11">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option >
<?php $b25=array('ID:101.jailpaiguri Goverment collage',
'ID:114:ST.THOMAS COLLEGE OF ENGINEER',
'ID:102:kalyani goverment engineering collage',
'ID:103:Haldia institue of technology',
'ID:104:Institue of engineering&management',
'ID:105:BANKURA UNNAYANI INSTITUE OF ENGINEERING',
'ID:106:MURSHIBAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'ID:107:COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ID:108:ASANSOL ENGINEERING COLLAGE',
'ID:109:NETAJI SUBHASH ENGINEERING COLLAGE',
'ID:110:GOVT.COLLAGE OF ENGINEERING AND TEXTIL TECHNOLOGY,BERHAMPORE',
'ID:111:GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,SHERAMPOER',
'ID:112:GOVERMENT COLLAGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'ID:113:GOVERMENT COLLAGE OF ENGINEERING&CERAMICTECHNOLOGY',
'ID:115:B.P.PODDAR INTITUTE OF MANAGEMENT&TECHNOLOGY',
'ID:116:MCKV INSTITUTE OF ENGINEERING',
'ID:117:RCC INSTITUE OF INFORMATION TECHNOLOGY',
'ID:118:BIRBHUM INSTITUTE OF ENGINEERING&TECHNOLOGY',
'ID:119:SILIGURI INSTITUTOF TECHNOLOGY',
'ID:120:DR.B.C.ROY ENGINEERING COLLEGE',
'ID:121:BENGAL INSTITU OF TECHNOLOGY');

foreach($b25 as $d25)
{ ?>
   <option value="<?php echo$d25;?>">
   <?php echo $d25;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f12">
<option value="">stream</option>
<option >
<?php $b18=array('CSE','IT','ME','EE','ECE');

foreach($b18 as $d18)
{ ?>
   <option value="<?php echo$d18;?>">
   <?php echo $d18;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f13">
<option value="">stream</option>
<option >
<?php $b19=array('CSE','IT','ME','EE','ECE');

foreach($b19 as $d19)
{ ?>
   <option value="<?php echo$d19;?>">
   <?php echo $d19;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <?php
 //$pass = $_POST['f10'];
 ?>
 <tr><td class="reg1"><p>password:</p></td>
<td><input type="password" name="f14" value=""></td></tr>
 <tr><td><input type="submit" name="ee" size="4"  value="submit">
</td>
<td><input type="reset" name="ee" size="4"  value="reset">
</td></tr>
</table>
</form>
</body>
</html>
<?php include'footer.php'
?>
