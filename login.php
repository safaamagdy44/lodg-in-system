
<!-- echo "<a href='logout.php' >log out</a>";
echo "<a href='deleteaccount.php'>delete account</a>"; -->


<!DOCTYPE html>
<html lang="en">
<head>






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body class="bg-light" >
    <header class="container m-5 p-5 ">
        <h1>log in</h1>
<?php

session_start();



$db=mysqli_connect("localhost","root","","fs8");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$querry="SELECT `id` FROM `users` WHERE username='$username' AND  password='$password' AND email='$email'";

$saf=mysqli_query($db,$querry);
while($s=mysqli_fetch_assoc($saf)){
    $_SESSION['ar'] = $s;
    // انا عايزه حد واحد لو عايزه array []كنت هحط
}
echo "<pre>";
print_r($_SESSION['ar']);

?>




        <form >
        
       <a class="btn btn-primary p-2 m-2" href="logout.php">log out</a>
       <a class="btn btn-primary p-2 m-2" href="deleteaccount.php">delete account</a>
    </form>
    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


