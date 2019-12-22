<?php
session_start();
?>
<?php
$_SESSION["aurl"]=$_SERVER['PHP_SELF'];
if ($_SESSION["admin"] == "")
{
header('Location: ragistration.php');
}

?>

<?php
 
// set up DB
include '../page/config.php';


// set your db encoding -- for ascent chars (if required)
mysql_query("SET NAMES 'utf8'");

// include and create object
include("grid/inc/jqgrid_dist.php");
$g = new jqgrid();

// set few params
$grid["caption"] = "Admin Profile";
$grid["multiselect"] = true;
$g->set_options($grid);

// set database table for CRUD operations
//$g->table = "adminlogin";

// subqueries are also supported now (v1.2)
$ad=$_SESSION['admin'];
 $g->select_command = "select * from adminlogin where UserName= '$ad'";
			
// render grid
$out = $g->render("list1");
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" media="screen" href="grid/js/themes/redmond/jquery-ui.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="grid/js/jqgrid/css/ui.jqgrid.css"></link>	
	
	<script src="grid/js/jquery.min.js" type="text/javascript"></script>
	<script src="grid/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="grid/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="grid/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
        
        
</head>
<body>
    
   <center><div class="dock" id="dock">
  <div class="dock-container">
 
  <a class="dock-item" href="admin.php"><img src="images/home.png" alt="home" /><span>Home</span></a> 
  <a class="dock-item" href="adminprofile.php"><img src="images/ap.png" alt="Admin Profile" /><span>Admin Profile</span></a> 
  
  <?php
                if(isset($_SESSION['admin'])){
                echo '<a class="dock-item" href="logout.php"><img src="images/logout1.png" alt="Log Out" /><span>Log Out</span></a>';
                echo '<li><a href="#">';
                echo '<a class="dock-item" href="#"><img src="images/adm1.png" alt="Welcome:"  '.@$_SESSION['admin'].'  /><span>Welcome:  '.@$_SESSION['admin'].' </span></a>';
                
                }
                else{
                echo '<a class="dock-item" href="ragistration.php"><img src="images/login1.png" alt="Login" /><span>Login</span></a> ';
                }
                ?>  
</div>
</div>

</center>
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 10,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 100,
					proximity: 120,
					halign : 'center'
				}
			);
		}
	);

</script>
    
    
    
    
    
    
	<div style="margin-top: 150px; margin-left: 300px; " >
	<?php echo $out?>
	</div>
</body>
</html>

 
