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
    function addUser($name, $username, $pass, $email, $address, $birthday, $phone, $role=1){
        $sql = "INSERT INTO users (name,username,password,email,address, birthday, phone, role_id) VALUES(?,?,?,?,?,?,?,?)";
        $result = $this->db->add($sql, [$name,$username,$pass,$email,$address, $birthday, $phone, $role]);
        return $result;
    }
    
    //Start Function Update 
    function updateUser($id, $role=1, $name, $username, $pass, $email, $address, $birthday, $phone){
        $sql = "UPDATE users SET role_id=?, name=?, username=?, password=?, email=?, address=?, birthday=?, phone=?  WHERE id=$id";
        $result = $this->db->update($sql, [$role, $name,$username,$pass,$email,$address, $birthday, $phone]);
        return $result;
        
    }
}
?>

   

   