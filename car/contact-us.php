<?PHP
if (isset($_POST['Submit1'])) {
$user_name = "root";
$password = "";
$database = "car";
$server = "127.0.0.1";
$y_name=$_post["name"];
$y_email=$_post["email"];
$y_website=$_post["website"];
$y_msg=$_post["msg"];
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL = "INSERT INTO `contact form`(`your_name`, `your_email`, `your_website`, `your_msg') VALUES ($y_name,$y_email,$y_website,$y_msg)";

$result = mysql_query($SQL);

mysql_close($db_handle);

print "Records added to the database";

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Us - Contact Us | Speed Racing - Free Website Template from Templates.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_600.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_Dm_BT_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, .extra img, #search-form a, #search-form a em, #login-form .field1 a, #login-form .field1 a em, #login-form .field1 a b');
	</script>
	<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page5">
<div id="main">
<!-- HEADER -->
	<div id="header">
		<div class="row-1">
			<div class="fleft"><a href="index.php"><img src="images/logo.gif" alt="" /></a></div>
			<div class="fright">
				<ul>
					<li><a href="index.php"><img src="images/icon1.gif" alt="" /></a></li>
					<li><a href="contact-us.php"><img src="images/icon2-act.gif" alt="" /></a></li>
					<li><a href="sitemap.php"><img src="images/icon3.gif" alt="" /></a></li>
				</ul>
			</div>
		</div>
		<div class="row-2">
			<div class="left">
				<ul>
					<li><a href="index.php"><span>home</span></a></li>
					<li><a href="about-us.php"><span>about</span></a></li>
					<li><a href="articles.php"><span>car</span></a></li>
					<li><a href="contact-us.php" class="active"><span>contact</span></a></li>
					<li class="last"><a href="sitemap.php"><span>site map</span></a></li>
				</ul>
			</div>
		</div>
		<div class="row-3">
			<div class="inside">
				<h2>Speed is the Source <b>of Emotions</b></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit volutem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
				<form action="" id="search-form">
					<fieldset><label>Search:</label><input type="text" /><a href="#" onclick="document.getElementById('search-form').submit()" class="link1"><em><b>Go!</b></em></a></fieldset>
				</form>
			</div>
		</div>
		<div class="extra"><img src="images/header-img.png" alt="" /></div>
	</div>
<!-- CONTENT -->
	<div id="content">
		<div class="box">
			<div class="border-bot">
				<div class="right-bot-corner">
					<div class="left-bot-corner">
						<div class="inner">
							<div class="box1 alt">
								<div class="inner">
									<h4><b>Our</b> Contacts</h4>
									<div class="address"><b>Zip Code:</b>50122<br/>
										<b>Country:</b>USA<br/>
										<b>Telephone:</b>+354 5635600<br/>
										<b>Fax:</b>+354 5635610</div>
									<p class="p0 extra-wrap"><b>Miscellaneous info:</b><br/>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="indent">
			<div class="wrapper">
				<div class="col-1">
					<h3><b>Contact</b> Form</h3>
                                        <form id="contacts-form" action="" method="post">
						<fieldset>
						<div class="field">
							<label>Your Name:</label>
							<input type="text" value="" name="name"/>
						</div>
						<div class="field">
							<label>Your E-mail:</label>
							<input type="text" value="" name="email"/>
						</div>
						<div class="field">
							<label>Your Website:</label>
							<input type="text" value="" name="website"/>
						</div>
						<div class="field">
							<label>Your Message:</label>
							<textarea cols="1" rows="1" value="" name="msg"></textarea>
						</div>
						<div class="wrapper"><input type="submit" name="submit1" value="submit1"class="link1">></div>
						</fieldset>
					</form>
				</div>
				<div class="col-2">
					<div class="box2">
						<div class="border-top">
							<div class="left-top-corner">
								<div class="right-top-corner">
									<div class="inner">
										<h4><b>Latest</b> News</h4>
										<ul class="news">
											<li><a href="#">May 21, 2010</a><p>Lorem ipsum dolor sit amet, coisectur adipisicing elit, sed doeiusmo.</p></li>
											<li><a href="#">May 12, 2010</a><p>Ut enim ad minim veniam, qnostrud exercitation ullamco.</p></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box3">
						<div class="right-bot-corner">
							<div class="left-bot-corner">
								<div class="inner">
									<h4><b>Login</b> Form</h4>
									<form action="" id="login-form">
										<fieldset>
											<div class="field"><label>Username:</label><input type="text" /></div>
											<div class="field"><label>Password:</label><input type="password" /></div>
											<div class="field1"><label class="extra">Remember Me:</label><input type="checkbox" class="extra" /><a href="#" onclick="document.getElementById('login-form').submit()"><em><b>Log In<span>Log In</span></b></em></a></div>
											<ul><li><a href="#">Forgot your password?</a></li><li class="last"><a href="#">Register</a></li></ul>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FOOTER -->
	<div id="footer">
		<div class="footer-nav">
			<div class="left">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About</a></li>
					<li><a href="articles.php">Articles</a></li>
					<li><a href="contacts-us.php">Contacts</a></li>
					<li class="last"><a href="sitemap.php">Sitemap</a></li>
				</ul>
			</div>
		</div>
		<div class="bottom">Copyright - Type in your name here<br/>
			Speed Racing
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>