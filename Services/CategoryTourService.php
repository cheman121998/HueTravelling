<?php 
require_once 'Models/CategoryTour.php';
require_once 'Services/DbConnect.php';

class CategoryTourService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getCategoryTour() {
        $query = "SELECT * FROM category_tours";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteCategoryTour($id){
        $query = "DELETE FROM category_tours where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addCategoryTour($name){
        $sql = "INSERT INTO category_tours (name) VALUES(?)";
        $result = $this->db->add($sql, [$name]);
        return $result;
    }
    function updateCategoryTour(){
        
    }

    
}
    
?>

   

   