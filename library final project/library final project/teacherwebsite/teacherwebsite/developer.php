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
					<div id="content">
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Developer And Management Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about developers:</font></strong><br><br>
														<U><B>Nilesh Kadam</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  09594197606</font></LI>
														<LI>Email-id.<font color="purple">  nilseh.kadam222@gmail.com</font></LI>
														</UL>
														<U><B>Vipul Patil</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="purple">  09920949967</font></LI>
														<LI>Email-id.<font color="purple">  vplpatil99@mail.com</font></LI>
														</UL>
														<U><B>Rohan Joshi</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="purple">  07038714989</font></LI>
														<LI>Email-id.<font color="purple">  rohanj208@gmail.com</font></LI>
														</UL>
														<U><B>Abhishek Kumkar</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="purple">  09702970548</font></LI>
														<LI>Email-id.<font color="purple">  abkumkar@yahoo.com</font></LI>
														</UL>
												</strong>										
											<br><br>						
												The Software used in S.I.E.S college of management studies &nbsp;:<font color="purple">PHP,MYSQL,APACHE,XAMPP.</font> 
									</td>
								</tr>
								</table>
							</div>
							
						</div>
						
					</div>
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
