<?php
 echo "logout";

 session_start();


session_destroy();
header("LOCATION:login.html");