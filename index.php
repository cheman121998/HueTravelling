
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
    require_once 'Services/TravelService.php';
    
    //$db = new DbConnect();
    //$db->query();

    //$userService = new UserService();
    //$users = $userService->getUsers();
    //var_dump($users);
    // $userService->updateUser($user);
    //$newId =  $userService->addUser("Man123456","manman","123456","man@gmail.com");
    //echo "<br>User add them: ".$newId;
    // $userService->deleteUser(1);
    // echo $result;
    //$users = $userService->getUsers();


    $travelService = new TravelServiceService();
    $service = $travelService->getTravelServices();
    echo "<br>=========Before========<br>";
    var_dump($service);
    //$newService = $travelService->addService(3,"abc3", "12dfs", "ad", "qqq","qe4","qgt", "qg", "qhe");
    $newService = $travelService->deleteTravelService(19);
    //echo "<br> Service add them: $newService";
    $service = $travelService->getTravelServices();
    echo "<br>=========After========<br>";
    var_dump($service);
?>
</body>
</html>
