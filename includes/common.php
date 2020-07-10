<?sphp
$con = mysqli_connect("localhost", "root", "", "ecommerce")or die($mysqli_error($con));
if (!isset($_SESSION['email'])) 
{  
session_start();
}
//session_start();
?>
<!--<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce")or die($mysqli_error($con));
session_start();
?>-->