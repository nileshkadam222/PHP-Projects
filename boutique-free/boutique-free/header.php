<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>
Fairy Boutique
</title>
<?php include"validation.php"?>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>

<body>

<div id="container">

	<!-- Start of Page Header -->

	<div id="page_header">

		<div id="page_heading">
		<h1><span>Fairy Boutique</span></h1>
		<h2><span>A Fasion Way</span></h2>
	  </div>
		<div id="page_headersearch">
			<h3>Search:</h3>

			<form action="search.php" method="GET">
			<div>
				<input type="text" name='search'/>
				<input type="image" src="images/b-go.gif" class="button" />
				<div class="clearthis">&nbsp;</div>
			</div>
			</form>

		</div>
		<div class="clearthis">&nbsp;</div>
	</div>
	
	<!-- End of Page Header -->


	<!-- Start of Page Menu -->

	<div id="page_menu">
		<ul>
		<li><a href="/fairyboutique/main.php">Home</a></li>
		<li><a href="/fairyboutique/aboutus.php">About us</a></li>
		<li><a href="/fairyboutique/product.php">Products</a></li>
		<li><a href="/fairyboutique/faq.php">FAQ</a></li>
		<li><a href="/fairyboutique/registration.php">Log In</a></li>
		<li class="last"><a href="cart.php">Shopping Cart</a></li>
		</ul>
		<div>
			<img src="images/dashline.jpg" width="1000" alt="Saris" />
		</div>
  </div>
	<!-- End of Page Menu -->


	<!-- Start of Left Sidebar -->

	<div id="left_sidebar">


		<!-- Start of Newsletter Signup Form -->

		<div id="newsletter">
			<h2>Want to Signup!</h2>

			<form action="login.php" method=POST>
			<div>
				<font face="sans-serif" size=2>Your Id:
				<input type="text" name='uid'/><br /><br />
				Password:<br />
				<input type="password" name='ups'/><br /><br />
                <input type="image" src="images/b-ok.jpg" class="button" />				
                <div class="clearthis">&nbsp;</div>

			</div>
			</form>

			<div id="link_cancel">
			<a href="new_user.php">Create New Id</a>
			</div>
		</div>

		<!-- End of Newsletter Signup Form -->


		<!-- Start of Categories Box -->

		<div id="categories">
			<div id="categories_header">
			<h2>Categories</h2>
			</div>

			<ul>
			<li><a href="/fairyboutique/saries.php"><b> * Saries</b></a></li>
			<li><a href="/fairyboutique/bollywood.php">Bollywood Sari</a></li>
			<li><a href="/fairyboutique/wedding.php">Wedding Sari</a></li>
			<li><a href="/fairyboutique/fancy.php">Fancy Sari</a></li>
			<li><a href="/fairyboutique/designer.php">Designer Sari</a></li>
			<li><a href="/fairyboutique/traditional.php">Traditional Sari</a></li>
			<li><a href="/fairyboutique/silk.php">Silk Sari</a></li>
			<li><a href="/fairyboutique/dress.php"><b> * Dress</b></a></li>
			<li><a href="/fairyboutique/choli.php"><b> * Choli</b></a></li>
			<li class="last"><a href="/fairyboutique/jewelary.php"><b> * Jewelry</b></a></li>
			</ul>

			<div class="clearthis">&nbsp;</div>
		</div>

		<!-- End of Categories Box -->

	</div>
	
	<!-- End of Left Sidebar -->
	<!-- Start of Main Content Area -->

	<div id="main_content">
