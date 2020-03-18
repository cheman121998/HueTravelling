<?php
class User
{
    function checkLogin($username, $password){
        $user = null;
        $conn = DBConnect::getConnect();
        $sql = "SELECT id, username FROM users WHERE username ='".$username."' AND pass ='".$password."'";
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $user = new EUser($row["id"], $row["username"]);
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $user;
    }

    
    function getProfileUser($username){
        $user = null;
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        
        $sql = sprintf("SELECT * FROM users WHERE username='%s'", mysqli_real_escape_string($conn, $username));
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $acc = new EAccountDetail($row["id"], $row["Username"], $row["Name"], $row["Address"], $row["PhoneNumber"], $row["Email"] );
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $acc;
    }
}