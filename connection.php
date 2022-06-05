<?php
$server="localhost";
$username= "root";
$password="";
$db="sports";

$conn= mysqli_connect($server, $username, $password, $db);

if(!$conn){
    die("connection failed");
}
else{
    // echo "conection success";
}

?>