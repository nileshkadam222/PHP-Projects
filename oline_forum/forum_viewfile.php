<link rel="shortcut icon" href="images/iconNHP.png" media="screen" type="image/png" title="NHP" />
<title>NHP| View file</title>
<a href="forum.php" style=" font-family:Arial">Back to forum page</a><body>


<?php
require "connect.php";
if(isset($_GET['name'])){$n=$_GET['name'];
	$h=mysql_query("Select count(ForumID) as 'v' from forums where Files like '%.pdf' and Files ='$n'");
							while($hq=mysql_fetch_array($h)){
								$rt=$hq['v'];
								}
								if($rt!=0){?>
<object data="<?php echo 'forum_folder/'.$n;?>" type="application/pdf" width="100%"  height="100%"><p>Unable to load file</p></object>
<?php									}
								else{?>
								   <OBJECT width="100%" height="100%"><PARAM name="movie" value="<?php echo 'forum_folder/'.$n;?>"> 
                                          <PARAM name="wmode" value="transparent"> 
                                          <PARAM name="quality" value="high"> 
                    <EMBED width="100%" height="100%" src="<?php echo 'forum_folder/'.$n;?>" type="application/x-shockwave-flash" wmode="transparent" quality="HIGH" "=""></object>	
							<?php		
									}
}?>
</body>