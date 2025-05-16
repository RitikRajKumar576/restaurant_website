<?php

if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){

$conn= new mysqli('localhost', 'root','','the-hungry-heaven');
}

 // isset........ is used to check http_host is active or not
 // localhost ....hostname
 // root .........username
 // "" ........... here we can add password
 // projecttesting......... database name

if($conn->connect_errno){
    echo "connection failed!";
}


date_default_timezone_set('Asia/kolkata');


?>


