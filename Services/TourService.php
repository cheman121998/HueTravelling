<?php 
require_once 'Models/Tour.php';
require_once 'Services/DbConnect.php';

class TourService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getTour() {
        $query = "SELECT * FROM tours";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteTour($id){
        $query = "DELETE FROM tours where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addTour($category_tour_id, $name, $policy, $schedule, $date_start, $destination, $departure_place){
        $sql = "INSERT INTO tours (category_tour_id,name,policy,schedule,date_start,destination,departure_place) VALUES(?,?,?,?,?,?,?)";
        $result = $this->db->add($sql, [$category_tour_id, $name, $policy, $schedule, $date_start, $destination, $departure_place]);
        return $result;
    }
    function updateTour(){
        
    }

    
}
    
    ?>

   

   