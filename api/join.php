<?php
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        echo "GET";    
        return;
    }
    include("./dbConnect.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    $captcha = $_POST["captcha"];

    $sql1 = "SELECT * FROM `users` WHERE username = :id";
    $stmt1 = $db->prepare($sql1);
    $stmt1->bindParam(":id", $id);
    $stmt1->execute();
    
    $result = $stmt1->fetch(PDO::FETCH_ASSOC);
    if (!isset($result['user_idx'])) {
        echo "<script>alert('사용가능한 아이디 입니다')</script>";
        if ($captcha == "L1487"){
            try {
                $sql2 = "INSERT INTO users(user_idx, username, name, password, position, permission) VALUES (NULL, ?, ?, ?,'일반회원', 0)";
                $stmt2 = $db->prepare($sql2);
                $stmt2->execute([$id, $name, $pw]);
        
                echo "new user successfully created";
            } catch (PDOException $e) {
                echo"". $e->getMessage() ."";
            }
        }
    } else {
        echo "<script>alert('이미 존재하는 아이디 입니다')</script>";
    }

?>