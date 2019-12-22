<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;My notes</strong>
                                </div>
						<!--  -->
								   
						<!--  -->
						<center class="title">
						<h1>Books List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
								<p><a href="upload1.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Upload Notes</a></p>
							
                                <html>
    <head>
        <title>Download File From MySQL Database</title>
        <meta http-equiv="Content-Type" content="text/html; 
              charset=iso-8859-1">
    </head>
    <body>
    	<h1>Download Files:</h1>
    	<table>
    	<tr><td><h1>File name</h1></td></tr>
    	
    		<tr><td></h3>
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('shop', $con);
        $query = "SELECT id, name FROM files";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($id, $name) = mysql_fetch_array($result)) {
                ?>
                <a href="download.php?id=<?php echo urlencode($id); ?>"
                   ><?php echo urlencode($name); ?></a> <br>
                <?php
            }
        }
        mysql_close();
        ?>
   </h3> </td></tr>
    </body>
</html>
           <?php
           if (isset($_GET['id'])) {
               $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
               $db = mysql_select_db('upload', $con);
               $id = $_GET['id'];
               $query = "SELECT name, type, size, content " .
                       "FROM files WHERE id = '$id'";
               $result = mysql_query($query) or die('Error, query failed');
               list($name, $type, $size, $content) = mysql_fetch_array($result);
               header("Content-length: $size");
               header("Content-type: $type");
               header("Content-Disposition: attachment; filename=$name");
               ob_clean();
               flush();
               echo $content;
               mysql_close();
               exit;
           }
           ?>								 
                                  
			
			</div>		
			</div>
		</div>
    </div>