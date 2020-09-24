<?php

$servername = "sql300.epizy.com"; 
$username = "epiz_26814600"; 
$password = "fSZjcAVD0b";
$dbname = "epiz_26814600_cms";
$connection = mysqli_connect($servername, $username, $password, $dbname);

if($connection)
{
    //echo "We are connected";
}
else
{
    die("Databse connection failed");
}

?>