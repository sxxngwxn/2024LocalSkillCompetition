<?php
    include("./dbConnect.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    $position = $_POST["position"];

    // echo "".$id.$name.$pw.$position."";

    try {
        $sql = "SELECT * FROM users WHERE username = ? AND name = ? AND password = ? AND position = ? AND permission = 1";
        $stmt = $db ->prepare($sql);
        $stmt->execute([$id, $name, $pw, $position]);

        echo "".$id."님 성공적으로 로그인 되었습니다.";
    } catch (PDOException $e) {
        echo "로그인 과정에서 문제가 있었습니다.";
    }
?>