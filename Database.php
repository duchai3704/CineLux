<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "cinelux";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>