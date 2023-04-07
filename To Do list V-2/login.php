<?php
$servername="localhost";
$username="root";
$password="";
$database="data";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Connection not Successful ".mysqli_connect_error());
}




?>