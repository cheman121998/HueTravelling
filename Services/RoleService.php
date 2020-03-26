<?php 
require_once 'Models/Role.php';
require_once 'Services/DbConnect.php';

class RoleService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getRole() {
        $query = "SELECT * FROM roles";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteRole($id){
        $query = "DELETE FROM roles where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addRole($name){
        $sql = "INSERT INTO roles (name) VALUES(?)";
        $result = $this->db->add($sql, [$name]);
        return $result;
    }
    function updateRole(){
        
    }

    
}
    
    ?>

   

   