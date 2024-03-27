<?php
$uri = $_SERVER['REQUEST_URI'];
// // URI 불러오기
// echo($uri);

$resource = explode("?", $uri);
// echo "<br> resource[0] : $resource[0] <br>";
// echo "<br> resource[1] : $resource[1] <br>";
// echo "<br> resource[2] : $resource[2] <br>";

$resource0 = isset($resource[0]) ? $resource[0] : null;

$path = explode("/", $resource0);
// // $path[0]은 localhost
// echo "<br> path[1] : $path[1] <br>"; // localhost/path[1]
// echo "<br> path[2] : $path[2] <br>"; // localhost/path[1]/path[2]
// echo "<br> path[3] : $path[3] <br>"; // localhost/path[1]/path[2]/path[3]

$page = "";
switch ($path[1]) {
    case '':
        $page = "./pages/main.php";
        break;
    case 'information':
    case 'statistics':
    case 'reservation':
    case 'goods':
        $page = "./pages/" . $path[1] . ".php";
        break;
    
    case 'join':
        $page = "./pages/join.php";
        break;
    
    default:
        $page = "./pages/NotFound.php";
        break;
}


if ($path[1] == "join") {
    include($page);
} else{
    include("./pages/header.php");
    include($page);
    include("./pages/footer.php");
}
?>