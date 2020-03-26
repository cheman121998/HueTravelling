<?php 
require_once 'Models/Content.php';
require_once 'Services/DbConnect.php';

class ContentService {    
    private $db; 

    function __construct(){
       $this->db = new DbConnect();
    }

    function getContent() {
        $query = "SELECT * FROM contents";
        $result = $this->db->query($query);
        return $result;
    }

    function deleteContent($id){
        $query = "DELETE FROM contents where id=$id";
        $result = $this->db->execute($query);
        return $result;
    }

    function addContent($user_id, $category_content_id, $title, $content, $images){
        $sql = "INSERT INTO contents (user_id,category_content_id,title,content,images) VALUES(?,?,?,?,?)";
        $result = $this->db->add($sql, [$user_id, $category_content_id, $title, $content, $images]);
        return $result;
    }
    function updateContent($id, $user_id, $category_content_id, $title, $content, $images){
        $sql = "UPDATE users SET user_id=?, category_content_id=?, title=?, content=?, images=? WHERE id=$id";
        $result = $this->db->update($sql, [$user_id, $category_content_id, $title, $content, $images]);
        return $result;
        
    }

    
}
    
    ?>

   

   