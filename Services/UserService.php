<?php 
require_once 'Models/User.php';
require_once 'Services/DbConnect.php';

class UserService {    
    private $db; // biết vì răng a tách ra k?

    function __construct(){
       $this->db = new DbConnect();
    }

    function getUsers() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteUser($id){
        $query = "DELETE FROM users where id=".$id;
        $result = $this->db->execute($query);
        return $result;
    }

    //A ví dụ hàm trước, rồi a chuyển về đối tượng sau
    function addUser($name, $username, $pass, $email, $adress, $birthday, $phone, $role=1){
        $sql = "INSERT INTO users (name,username,password,email,role_id) VALUES(?,?,?,?,?,?,?,?)";
        $result = $this->db->add($sql, [$name,$username,$pass,$email,$role]);
        return $result;
    }
    function updateUser(){
        
    }

    
}
    
    ?>

   

   