<?php

$servername = "localhost";
$username ="root";
$password ="";
$database = "taskrise";
//create a conn
$conn = mysqli_connect($servername, $username, $password,$database);
//die if not successful
if(!$conn){
    
    die("sorry failed to connect". mysqli_connect_error());
}

?>