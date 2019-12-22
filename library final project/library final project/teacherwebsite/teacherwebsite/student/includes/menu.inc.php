<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li class="last"><a href="my_profile.php">my profile</a></li>
			<li><a href="uploadnotes.php">upload notes</a></li>
			
			
			<li class="last"><a href="contact.php">Problem</a></li>
			
			
			

<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
						
</ul>