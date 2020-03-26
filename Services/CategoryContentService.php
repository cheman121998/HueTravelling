<?php 
require_once 'Models/CategoryContent.php';
require_once 'Services/DbConnect.php';

class CategoryContentService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getCategoryContent() {
        $query = "SELECT * FROM category_contents";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteCategoryContent($id){
        $query = "DELETE FROM category_contents where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addCategoryContent($name){
        $sql = "INSERT INTO category_contents (name) VALUES(?)";
        $result = $this->db->add($sql, [$name]);
        return $result;
    }
    function updateCategoryContent(){
        
    }

    
}
    
?>

   

   