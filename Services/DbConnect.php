<?php
class DbConnect{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "huetravel";
    private $charset = "utf8mb4";

    public function query($sql){
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //excute
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            //close
            $conn = null;
            return $result;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
            return null;
        }    
    }

    public function execute($sql){
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
            // execute the query
            $stmt = $conn->prepare($sql);
            $stmt->execute();
         
            //close
            $conn = null;
            return $stmt;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
            return null;
        }    
    }
    public function add($sql, $params){
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
            // execute the query
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);       
            $id = $conn->lastInsertId();
         
            //close
            $conn = null;

            return $id;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
            return null;
        }    
        
    }

    // public function update($sql, $params){

    //     try {
    //         $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    //         // execute the query
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute($params);       
    //         $id = $conn->lastInsertId();
         
    //         //close
    //         $conn = null;

    //         return $id;
    //     } catch(PDOException $e) {
    //         echo "<br>" . $e->getMessage();
    //         return null;
    //     }  

    // }
}

?>