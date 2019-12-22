<?php
if (isset($_POST['Submit']))
    {
    include('login.php'); // Includes Login Script

    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Articles - Articles | Speed Racing - Free Website Template from Templates.com</title>
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
</head>
<body id="page3">
<div id="main">
<!-- HEADER -->
	<div id="header">
		<div class="row-1">
			<div class="fleft"><a href="index.php"><img src="images/logo.gif" alt="" /></a></div>
			<div class="fright">
				<ul>
					<li><a href="index.php"><img src="images/icon1.gif" alt="" /></a></li>
					<li><a href="contact-us.php"><img src="images/icon2.gif" alt="" /></a></li>
					<li><a href="sitemap.php"><img src="images/icon3.gif" alt="" /></a></li>
				</ul>
			</div>
		</div>
		<div class="row-2">
			<div class="left">
				<ul>
					<li><a href="index.php"><span>home</span></a></li>
					<li><a href="#"><span>Outstation</span></a></li>
					<li><a href="#" class="active"><span>Local</span></a></li>
                                        <li><a href="cata.php"><span>Special offers</span></a></li>
					<li class="last"><a href="#"><span>Easy cabs</span></a></li>
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
									<h4><b>Our</b> Articles</h4>
									<p class="p0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
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
					<h3><b>Recent</b> Articles</h3>
					<ul class="list">
						<li><img src="images/3page-img1.jpg" alt="" /><a href="article.html">Article 1</a><br/>
							Description is to be here. Since we have no idea what your article is about, we just put standard "Lorem Ipsum" text here.</li>
						<li><img src="images/3page-img2.jpg" alt="" /><a href="article.html">Article 2</a><br/>
							Description is to be here. Since we have no idea what your article is about, we just put standard "Lorem Ipsum" text here.</li>
						<li><img src="images/3page-img3.jpg" alt="" /><a href="article.html">Article 3</a><br/>
							Description is to be here. Since we have no idea what your article is about, we just put standard "Lorem Ipsum" text here.</li>
						<li><img src="images/3page-img4.jpg" alt="" /><a href="article.html">Article 4</a><br/>
							Description is to be here. Since we have no idea what your article is about, we just put standard "Lorem Ipsum" text here.</li>
					</ul>
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
									<form action="" id="login-form" method="post">
										<fieldset>
											<div id="login">
<h2>Login Form</h2>

<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value="submit">
</div>			</fieldset>
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
					<li><a href="contact-us.php">Contacts</a></li>
					<li class="last"><a href="sitemap.php">Sitemap</a></li>
				</ul>
			</div>
		</div>
		<div class="bottom">Copyright - @ CarRent@yahoo.com<br/>
			
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>