<?php
$servername="localhost";
$username="root";
$password="";
$dbname="librarydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connetion failed");
 }
 
?>