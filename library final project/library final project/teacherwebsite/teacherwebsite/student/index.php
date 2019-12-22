<?php session_start();?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<center>
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Teacher panel';
								}
							?>
							</h1>
							

								<div class="entry">
								<br>
								<p>
								<b><i><big>This website Design by <a href="developer.php">S.I.E.S college of management studies.</a>.The teacher can upload files,notes and other important document's with students through this website.</big></i></b>

									
								
								</p>
								<br>		
								
								<object width="550" height="300">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								<p>
									
								</p>
							</div>
							
							
						</div>
						
					</div></center>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
