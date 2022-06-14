<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="2backpagepro";

//Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){

    die("Connection failed" . mysqli_connection_error());
}


?>