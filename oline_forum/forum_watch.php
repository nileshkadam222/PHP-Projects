<link rel="shortcut icon" href="images/iconNHP.png" media="screen" type="image/png" title="NHP" />
<title>NHP| View file</title>
<a href="javascript:history.back();" style=" font-family:Arial">Back to forum page</a><body>


<?php
require "connect.php";
if(isset($_GET['name'])){$n=$_GET['name'];
	$h=mysql_query("Select count(ForumID) as 'v' from forums where Files like '%.mp3' and Files ='$n'");
							while($hq=mysql_fetch_array($h)){
								$rt=$hq['v'];
								}
								if($rt!=0){ echo $n;?>
                                
<audio src="forum_folder/<?php echo $n?>" controls="controls"></audio>
<?php									}
								else{?>
						<video src="forum_folder/<?php echo $n?>" controls="controls" width="720" height="320" autoplay="true"></video>
							<?php		
									}
}?>
</body>