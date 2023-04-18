<?php
//db is database
$dbServerName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="php_practice";

//bellow we create a connection using the function that takes 4 arguments which we created above.
$connection =mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);
//they need to be in specific order
    
?>