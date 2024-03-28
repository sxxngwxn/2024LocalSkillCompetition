<?php
    include("./dbConnect.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    $captcha = $_POST["captcha"];

    // echo "".$id.$name.$pw.$captcha."";

    try {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        $result = $stmt->fetchAll();

        // echo"<br>정상적으로 값을 찾았습니다".$result."<br>";
        if (!$result) {
            if ($captcha == "L1487") {
                // echo"캡차 값이 올바릅니다";
                try {
                    $sql = "INSERT INTO users(user_idx, username, name, password, position, permission) VALUES (NULL, ?, ?, ?, '일반회원', 0)";
                    $stmt = $db->prepare($sql);
                    $stmt->execute([$id, $name, $pw]);
    
                    echo"<script>alert('관리자 승인 대기 중입니다.')</script>";
    
                } catch (PDOException $e) {
                    echo"<br>db에 값이 들어가는 중에 문제가 발생했습니다"."<br>";
                }
            } else {
                echo "캡차 값이 올바르지 않습니다.";
            }
        }
    } catch (PDOException $e) {
        echo "회원가입 도중 문제가 발생하였습니다.";
    }
?>