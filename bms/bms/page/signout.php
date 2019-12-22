<?php
session_start();
if(isset($_SESSION["auth"]))
{   
    unset($_SESSION['auth']);
    session_destroy();
    header('Location: index.php');
}
    header('Location: index.php');
?>