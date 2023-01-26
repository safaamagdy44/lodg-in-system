<?php
 session_start();

$s=$_SESSION['ar'];

$db=mysqli_connect("localhost","root","","fs8");

$sa= (int)implode($s);

$qu="DELETE FROM `users` WHERE id=$sa";

$mo=mysqli_query($db,$qu);

if ($mo){

    echo "your account is deleted successfully";

}