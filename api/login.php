<?php
    include("./dbConnect.php");

    session_start();
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $position = $_POST["position"];

    // echo "".$id.$name.$pw.$position."";

    try {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND position = ? AND permission = 1";
        $stmt = $db ->prepare($sql);
        $stmt->execute([$id, $pw, $position]);

        // echo"".$id.$name.$pw.$positon."";

        $result = $stmt->fetch();

        // print_r($result["loginDate"]);
        if (!$result) {
            echo "<script>alert('다시 시도 해주세요')</script>";
            echo"<script>location.replace('/')</script>";
        } else {
            $updataSql = "UPDATE users SET loginDate = NOW() WHERE username = ?";
            $statement = $db -> prepare($updataSql);
            $statement->execute([$id]);

            $_SESSION["id"] = $result["user_idx"];
            $_SESSION["username"] = $id;
            $_SESSION["name"] = $result["name"];
            $_SESSION["date"] = $result["loginDate"];

            // echo "<script>alert('이전 로그인 일자 및 시간 : {$_SESSION["id"]}')</script>";
            echo "<script>alert('이전 로그인 일자 및 시간 : {$_SESSION["date"]}')</script>";
            echo"<script>location.replace('/')</script>";
        }
    } catch (PDOException $e) {
        echo "회원구분, 아이디 또는 비밀번호를 확인해주세요.";
    }
?>