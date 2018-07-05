<?php

function connection(){
	$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = ''; 
$dbname = 'ucapan'; 

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
}
	
?>