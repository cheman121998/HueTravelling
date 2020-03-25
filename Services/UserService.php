<?php 
require_once 'Models/User.php';
require_once 'Services/DbConnect.php';

class UserService {    

    function getUsers() {
        $db = new DbConnect();
        $query = "SELECT * FROM users";
        $con = $db->connect();
        $result = $con->query($query);
        //handle 
        foreach ($result as $row) {
            echo $row['name'].$row['phone'];            
        }
        $con = null;
    }

    // function addUser(User $user){
    //     //validate data
    //     try {            
    //         $stmt = $conn->prepare("INSERT INTO users (`name`, username, `password`, email, `address`, birthday, phone) VALUES (:`name`, :username, :`password`, :email, :`address`, :birthday, :phone,:role_id)");
    //         // use exec() because no results are returned
    //         $stmt->exec($sql);
    //         echo "New record created successfully";
    //         }
    //     catch(PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //     }
        
    //     $conn = null;
    // }


    function delete($id) {
        try {
            $params['id'] = $id;
            $db = new DbConnect();
            $con = $db->connect();
            $result = $con->prepare("DELETE FROM users WHERE id= :id")->execute($params)->rowCount();
            if($result > 0) return "true";
        } catch(PDOException $e) {
            $e->getMessage();
        }
        $con = null;
        return "false";
    }

}
    // class UserService {   
    //     function addUser(User $user){
           
    //         $query = "INSERT INTO users (`name`, username, `password`, email, `address`, birthday, phone) VALUES ('{$name}', '{$username}', '{$password}', '{$email}', '{$address}', '{$birthday}', '{$phone}','{$role_id}')";
    //         mysqli_set_charset($conn,"utf8");
    //         $result = mysqli_query($conn, $query);
    //         if(!$result)
    //         return die("Query FAILED" . mysqli_error($conn)); 
    //         return $result;
    //     }

    //     function editUser(User $user){          
    //         $query = "UPDATE users SET `name` = '{$name}', username = '{$username}', `password` = '{$password}', email = '{$email}', `address` = '{$address}', birthday = '{$birthday}', phone = '{$phone}', role_id = '{$role_id}' WHERE id = '{$id})'";
    //         mysqli_set_charset($conn,"utf8");
    //         $result = mysqli_query($conn, $query);
    //         if(!$result)
    //         return die("Query FAILED" . mysqli_error($conn));
    //         return $result;
    //     }

    //     function deleteUser(User $id){
           
    //         $query = "DELETE FROM users  WHERE id = '{$id})'";
    //         mysqli_set_charset($conn,"utf8");
    //         $result = mysqli_query($conn, $query);
    //         if(!$result)
    //             return die("Query FAILED" . mysqli_error($conn));
    //         return 'Success';
    //     }
    
    // }
    ?>

   

   