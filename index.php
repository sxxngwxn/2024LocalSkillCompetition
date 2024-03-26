<?php
$uri = $_SERVER['REQUEST_URI'];
// // URI 불러오기
// echo($uri);

$resource = explode("?", $uri);
echo "<br> $resource[0] <br>";
echo "<br> $resource[1] <br>";
echo "<br> $resource[2] <br>";

// $path = explode("/", $uri);
// // $path[0]은 localhost
// echo "<br> $path[1] <br>"; // localhost/path[1]
// echo "<br> $path[2] <br>"; // localhost/path[1]/path[2]
// echo "<br> $path[3] <br>"; // localhost/path[1]/path[2]/path[3]
?>