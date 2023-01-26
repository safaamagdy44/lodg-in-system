<?php


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

if($password==$repassword){
     $db=mysqli_connect("localhost","root","","fs8");
    $qu="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    
   
    $q= mysqli_query($db,$qu);
    if($q==1){
        header("LOCATION:success.html");
    }else{
        header("LOCATION:fail.html");
        
    }
}
else
{
    header("LOCATION:fail.html");
}

 


