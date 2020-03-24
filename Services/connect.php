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

    $sql = "INSERT INTO users(`name`, username, `password`, email, `address`, phone, role_id) VALUES ('Man', 'manman', 123456, 'ctmman@gmail.com', 'Hue', '01231313', 1)";

    $conn->exec($sql);

    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>

