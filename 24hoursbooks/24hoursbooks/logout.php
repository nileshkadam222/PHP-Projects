<?php
session_start();
unset($_SESSION['loggedUserEmail']); //destroys the current session 
unset($_SESSION['loggedUserName']);
unset($_SESSION['loggedUserType']);
unset($_SESSION['cart']);
//unset($_SESSION['billingAdd']);
//unset($_SESSION['shippingAdd']);
?>
<meta http-equiv="refresh" content = "1; URL = index.php">