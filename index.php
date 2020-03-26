
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello world! </h1>
<?php   
    require_once 'Services/DbConnect.php';
    require_once 'Services/UserService.php';
    //$db = new DbConnect();
    //$db->query();
    $userService = new UserService();
    $users = $userService->getUsers();
    echo "<br>=========Before========<br>";
    //var_dump($users);
    // $userService->updateUser($user);
    $newId =  $userService->addUser("Man123456","manman","123456","man@gmail.com");
    echo "<br>User add them: ".$newId;
    // $userService->deleteUser(1);
    // echo $result;

    $users = $userService->getUsers();
    echo "<br>=========After========<br>";
    //var_dump($users);
?>


    
</body>
</html>
