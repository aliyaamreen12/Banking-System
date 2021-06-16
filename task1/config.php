<?php

$user = "root";
$password="";
$conn = "sparks_bank";


$conn = mysqli_connect('localhost',$user,$password,$conn);

if(!$conn){
	die("could not connect to the database due to the following error-->".mysqli_connect_error());
}



?>