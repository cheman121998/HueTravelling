<?php   
    require_once 'Services/DbConnect.php';
    require_once 'Services/UserService.php';
    //$db = new DbConnect();
    //$db->query();
    $userService = new UserService();
    $userService->getUsers();
    // $userService->updateUser($user);
    $result = $userService->delete(1);
    echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello world!</h1>

    
</body>
</html>
