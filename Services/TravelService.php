<?php 
require_once 'Models/TravelService.php';
require_once 'Services/DbConnect.php';

class TravelServiceService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getTravelServices() {
        $query = "SELECT * FROM travel_services";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteTravelService($id){
        $query = "DELETE FROM travel_services where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    
    function addService($user_id, $name, $tax_code, $represent, $phone, $email, $address, $website, $nnkd){
        $sql = "INSERT INTO travel_services (user_id, name, tax_code, represent, phone, email, address, website, nnkd) VALUES(?,?,?,?,?,?,?,?,?)";
        $result = $this->db->add($sql, [ $user_id, $name, $tax_code, $represent, $phone, $email, $address, $website, $nnkd]);
        return $result;
    }
    function updateUser(){
        
    }

    
}
    
    ?>

   

   