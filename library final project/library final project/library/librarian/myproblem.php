<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_user.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<p><a href="viewmyproblem.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;View problem</a></p>
							
												</li>
										</ul>
										
										 
     <!-- Modal add user -->
	
										
			</div>
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Enter Your Problem hear</strong>
                                </div>
                                <thead>
                                    
                                </thead>
                                <tbody>
								 
                                
                                  <form action="process_contacts.php"  method="POST">

												

											<tr><th><br>Name :<br></th>
												<th><input type='text' name='nm' size=35></th></tr>
												
												
												<tr><th>E-mail ID:</th>
												<th><input type='text' name='email' size=35></th></tr>
												
												
												<tr><th>Query:</th>
												<th><textarea cols="40" rows="10" name='query' ></textarea></th></tr>
												

												<center><tr><th><input onclick="myFunction()" type='submit' name='btn' value='   OK   '  ></th></tr></center>

												
										</form>
									

                                    <td width="100">
                            		</tr>
									
                           
                                </tbody>
                            </table>
                          



<p id="demo"></p>

<script>
function myFunction() {
    var txt;
    var r = confirm("confirm your Problem");
    if (r == true) {
        txt = "success OK!";
    } else {
        txt = "unsuccess Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>


							
<script type="text/javascript">
/*         $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Data?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_user.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        }); */
    </script>

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>