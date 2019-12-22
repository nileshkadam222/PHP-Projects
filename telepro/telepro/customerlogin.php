      <html>
      <head>
      
      <style>
      #cus_login{
		  margin-top:50px;
      }
      #outer_tb{
      
      /*
      -moz-box-shadow: 0 0 5px #333333;
      -webkit-box-shadow: 0 0 5px #333333;
      box-shadow: 0 0 5px #333333;
      */
      padding:5px;
      
      }
      #login_tb{
      font-size:16px;
      border-left:1px dashed black;
      padding:5px 20px 20px 10px;
      
      }
      #login_btn{
	      border:0;
	      background-image: url("./images/login_btn.png");
	      width:93px;
	      height:32px;
	      cursor:pointer;
	      }
      #tb_caption{
      font-size:20px;
      }
	  #pwd_err{
	  color:red;
	  font-size:16px;
	  }
      </style>
      </head>
      <body>
      <center>
	  <?php $pwd_err=""; ?>
      <div id="cus_login">
      <table name="" id="outer_tb">
	
	<tr>
	<td><center>
	<img src="./images/security.png" style="border:0px;"/></br>
	 <img src="./images/Auth.png" style="border:0px;"/></center>
	</td>
	<td>
	      
	      <form action="auth.php" method="POST" name="customer_fr">
	      <table id="login_tb" cellspacing="5px;">
	      <tr>
	      <td colspan="2" style="padding-bottom:20px;"><span id="tb_caption">Login to you account</span> </td></tr>
	      <tr>
	      <td>CA Number</td><td><input type="text" size="20" maxlength="4" name="ca_txt" id="ca_txt"/></td>
	      </tr>
	      
	      <tr>
	      <td>Password</td><td><input type="password" size="20"  maxlength="10" name="cpwd_txt" id="cpwd_txt"/></td>
	      </tr>
	      
	      <tr>
		  <td colspan="2">
	      <span id="pwd_err">
		  <?php 
		  if(isset($_GET['pwderr'])){
		  
		  $pwd_err=$_GET['pwderr'];
		  if($pwd_err=='1')
		  {
		  echo "Please enter CA Number and password";
		  }
		  if($pwd_err=='0')
		  {
		  echo "Invalid username or password";
		  }
		  } 
		  ?></span>
	      </td>
		  </tr>
	      <tr>
	      <td ><input id="login_btn" name="customer_fr" type="submit" value=""/></td>
	      <td>
	      <span id="signup_link" >Not registered yet?? <a style='color:green;font-size: 16px;' href="signup.php"> Register Now</a></span>
	      </td>
	      </tr>
	      <tr>
		<td colspan=2><a style='color:blue;font-size: 15px;' href='passrecover.php'>Forgot password ??</a></td>
	      </tr>
		  
	      
      </table>
	     
      
      </td>
      </table>
      </div>
      </body>
      </html>
