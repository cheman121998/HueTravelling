<?php
class DbConnect{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "huetravel";
    private $charset = "utf8mb4";

    public function connect() {
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            $conn = null;
            echo $e->getMessage();
        }
        return $conn;
    }

    public function query(string $sql){
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            //return $conn;
            //excute
            $conn->query($sql);

            //close


        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }    
    }
}


?>