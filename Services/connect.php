<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "huetravel";  
$charset = "utf8mb4";

try {
    $conn = new PDO("mysql:host=$servername;dbname=huetravel", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>

