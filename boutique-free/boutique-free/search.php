<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$s=$HTTP_GET_VARS['search'];
switch($s)
{
	case "Traditional Sari":
	case "traditionalsari":
	case "traditional sari":
	case "traditional Sari":
	case "traditional":
		header("Location:traditional.php");
		break;
	case "Bollywood Sari":
	case "bollywoodsari":
	case "bollywood sari":
	case "bollywood Sari":
	case "bollywood":
		header("Location:bollywood.php");
		break;
	case "Fancy Sari":
	case "fancysari":
	case "fancy sari":
	case "fancy Sari":
	case "fancy":
		header("Location:fancy.php");
		break;
	case "Wedding Sari":
	case "weddingsari":
	case "wedding sari":
	case "wedding Sari":
	case "wedding":
		header("Location:wedding.php");
		break;
	case "Designer Sari":
	case "designersari":
	case "designer sari":
	case "designer Sari":
	case "designer":
		header("Location:designer.php");
		break;
	case "Silk Sari":
	case "silksari":
	case "silk sari":
	case "silk Sari":
	case "silk":
		header("Location:silk.php");
		break;
	case "Dress":
	case "dress":
	case "dresses";
		header("Location:dress.php");
		break;
	case "Choli":
	case "choli":
	case "cholies":
		header("Location:choli.php");
		break;
	case "Jewelry":
	case "jewelary":
	case "jewelry":
		header("Location:jewelary.php");
		break;
	case "sari":
		header("Location:saries.php");
		break;
	case "product":
	case "products":
		header("Location:product.php");		
		break;
	default:
		header("Location:main.php");
}
?>