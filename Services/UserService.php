<?php 
require_once 'Models/User.php';
require_once 'Services/connect.php';
    class UserService(){   
        function addUser(User){
           
            $query = ("INSERT INTO users (`name`, username, `password`, email, `address`, birthday, phone) VALUES ('{$name}', '{$username}', '{$password}', '{$email}', '{$address}', '{$birthday}', '{$phone}','{$role_id}')");
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn, $query);
            if(!$result)
                return die("Query FAILED" . mysqli_error($conn));
            return $result;
        }

        function editUser(User){
           
            $query = ("UPDATE users SET `name` = '{$name}', username = '{$username}', `password` = '{$password}', email = '{$email}', `address` = '{$address}', birthday = '{$birthday}', phone = '{$phone}', role_id = '{$role_id}' WHERE id = '{$id})'");
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn, $query);
            if(!$result)
            return die("Query FAILED" . mysqli_error($conn));
            return $result;
        }

        function deleteUser($id){
           
            $query = ("DELETE FROM users  WHERE id = '{$id})'");s
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn, $query);
            if(!$result)
                return die("Query FAILED" . mysqli_error($conn));
            return 'Success';
        }
    
    }
?>

   

   