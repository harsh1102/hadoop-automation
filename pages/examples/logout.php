<?php
session_start();
echo $_SESSION['user_email'];
if(isset($_SESSION['user_email']))
{
    session_unset();
    session_destroy();
    echo "<script type='text/javascript'>";
    echo "alert('Logout Successfully.');";
    echo "window.location.href = '/pages/examples/login.php';";
    echo "</script>";
    }
?>