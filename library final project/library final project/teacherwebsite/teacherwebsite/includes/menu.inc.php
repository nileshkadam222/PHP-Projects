<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
								?>
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="developer.php">About Us</a></li>
		
			
</ul>