<?php
$c1 = $_POST['gs1'];
$c2 = $_POST['gs2'];
$c3 = $_POST['gs3'];
$c4 = $_POST['gs4'];
$c5 = $_POST['gs5'];
$c6 = $_POST['gs6'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from collage1 where collage1.id='$c5'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {

                 $s1=$row['cs'];
                 $s2=$row['it'];
                 $s3=$row['ee'];
                 $s4=$row['ece'];
                 $s5=$row['me'];
            }
            $count=1;
            if($c3=='CSE' && $count<=$s1)
            {          $cs=$s1-$count;
               try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.cs='$cs' where collage1.cs='$s1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }

                 $collage=$c2;
                 $subject=$c3;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c3=='IT' && $count<=$s2)
            {
                 $it=$s2-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.it='$it' where collage1.it='$s2'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c3;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c3=='EE' && $count<=$s3)
            {
                 $ee=$s3-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.ee='$ee' where collage1.ee='$s3'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c3;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c3=='ECE' && $count<=$s4)
            {
                 $ece=$s4-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.ece='$ece' where collage1.ece='$s4'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c3;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c3=='ME' && $count<=$s5)
            {
                 $me=$s5-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.me='$me' where collage1.me='$s5'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c3;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
 elseif($c4=='CSE' && $count<=$s1)
            {          $cs=$s1-$count;
               try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.cs='$cs' where collage1.cs='$s1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c4=='IT' && $count<=$s2)
            {
                 $it=$s2-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.it='$it' where collage1.it='$s2'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c4=='EE' && $count<=$s3)
            {
                 $ee=$s3-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.ee='$ee' where collage1.ee='$s3'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c4=='ECE' && $count<=$s4)
            {
                 $ece=$s4-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.ece='$ece' where collage1.ece='$s4'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($c4=='ME' && $count<=$s5)
            {
                 $me=$s5-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage1 set collage1.me='$me' where collage1.me='$s5'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        //header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
   $sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$c6'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$c2;
                 $subject=$c4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("delete from ngen where ngen.rank='$c1'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:sc.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
 else
 {
     include 'n2.php';
 }




