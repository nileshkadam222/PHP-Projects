      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li class="active"><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;My Profile</a></li>
					<li><a href="view_borrow.php"><i class="icon-reorder icon-large"></i>&nbsp;Borrowed Books</a></li>
					<li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
					<li><a href="myproblem.php"><i class="icon-group icon-large"></i>&nbsp;My Problem</a></li>
					<li><a href="myfine.php"><i class="icon-list-alt icon-large"></i>&nbsp;My Fine</a></li>
                    <li><a href="mynotes.php"><i class="icon-list-alt icon-large"></i>&nbsp;My Notes</a></li>
					
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
					

					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: <?php $id=$_SESSION['id']; echo $id;?></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php include('search_form.php'); ?>
 
