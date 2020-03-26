<?php 
require_once 'Models/TourDetail.php';
require_once 'Services/DbConnect.php';

class TourDetailService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getTourDetail() {
        $query = "SELECT * FROM tour_details";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteTourDetail($id){
        $query = "DELETE FROM tour_details where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addTourDetail($tour_id, $user_id, $count_adult, $count_child, $price, $date_book){
        $sql = "INSERT INTO tours (tour_id,user_id,count_adult,count_child,price,date_book) VALUES(?,?,?,?,?,?)";
        $result = $this->db->add($sql, [$tour_id, $user_id, $count_adult, $count_child, $price, $date_book]);
        return $result;
    }
    function updateTourDetail($id, $tour_id, $user_id, $count_adult, $count_child, $price, $date_book){
        $sql = "UPDATE users SET tour_id=?, user_id=?, count_adult=?, count_child=?, price=?, date_book=?  WHERE id=$id";
        $result = $this->db->update($sql, [$tour_id, $user_id, $count_adult, $count_child, $price, $date_book]);
        return $result;
        
    }

    
}
    
    ?>

   

   