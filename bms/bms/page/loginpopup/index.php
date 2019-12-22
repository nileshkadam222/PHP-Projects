<html>
<head>

<!-- Required header files -->
<link href="../loginpopup/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../loginpopup/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../loginpopup/js/vpb_script.js"></script>

</head>
<body>
<br clear="all">

<!-- Sign-up and Login Links Starts Here -->
<center>
<div style="width:400px; margin-top:50px;" align="center">
<a href="javascript:void(0);" class="vpb_general_button" onClick="vpb_show_login_box();">Show Login Box</a>
</div>
</center>

<!--  Login Links Ends Here -->

<!-- Code Begins -->

<div id="vpb_pop_up_background"></div><!-- General Pop-up Background -->

<!-- Login Box Starts Here -->
<div id="vpb_login_pop_up_box" class="vpb_signup_pop_up_box">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;">Users Login Box</div><br clear="all">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:11px;">To exit this login box, click on the cancel button or outside this box..</div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Your Username:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="usernames" name="usernames" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Your Password:</div>
<div style="width:300px;float:left;" align="left"><input type="password" id="passs" name="passs" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">

<a href="javascript:void(0);" class="vpb_general_button" onClick="alert('Hello There!\n\n There is no functionality associated with the button you have just clicked. \n\nThis is just a demonstration of Pop-up Boxes and that\'s all.\n\nThanks.');">Login</a>

<a href="javascript:void(0);" class="vpb_general_button" onClick="vpb_hide_popup_boxes();">Cancel</a>
</div>

<br clear="all"><br clear="all">
</div>
<!-- Login Box Ends Here -->

</body>
</html>

<a href="" class="vpb_general_button">Login</a>