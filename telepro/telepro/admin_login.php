      <html>
      <head>
      
      <style>
      #admin_login{
		margin-top:50px;
      }
      #outer_tb_admin{
      
      /*
      -moz-box-shadow: 0 0 5px #333333;
      -webkit-box-shadow: 0 0 5px #333333;
      box-shadow: 0 0 5px #333333;
      */
      padding:5px;
	  border:1px solid black;
      
      }
      #login_tb{
      font-size:18px;
	  font-family:Lucida sans;
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
	  font-weight:bold;
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
      <div id="admin_login">
      <table name="" id="outer_tb_admin">
	
	<tr>
	<td><center>
	<img src="./images/admin_logo.png" style="border:0px;"/></center>
	</td>
	<td>
	      
	      <form action='auth.php' method='POST' name='admin_fr'>
	      <table id="login_tb" cellspacing="5px;">
	      <tr>
	      <td colspan="2" style="padding-bottom:20px;"><span id="tb_caption">Login to Admin account</span> </td></tr>
	      <tr>
	      <td>Username</td><td><input type="text" maxlength="10" size="20" name="username_txt" id="username_txt"/></td>
	      </tr>
	      
	      <tr>
	      <td>Password</td><td><input type="password" maxlength="10" size="20" name="pwd_txt" id="pwd_txt"/></td>
	      </tr>
	      
	      <tr>
	      <td colspan="2"><div name="err_msg" id="err_msg"></div></td>
	      </tr>
	      <tr>
	      <td colspan="2"><input id="login_btn" name="admin_fr" type="submit" value=""/></td>
	      </tr>
		  <tr>
		  <td colspan="2">
	      <span id="pwd_err">
		  <?php 
		  if(isset($_GET['pwderr'])){
		  
		  $pwd_err=$_GET['pwderr'];
		  if($pwd_err=='1')
		  {
		  echo "Please enter username and password";
		  }
		  if($pwd_err=='0')
		  {
		  echo "Invalid username or password";
		  }
		  } 
		  ?></span>
	      </td>
		  </tr>
	      
      </table>
      
      </td>
      </table>
      </div>
      </body>
      </html>
