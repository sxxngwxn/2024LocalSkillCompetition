<?php
    include("./dbConnect.php");

    session_start();
    $id = $_POST["id"];
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    $position = $_POST["position"];

    // echo "".$id.$name.$pw.$position."";

    try {
        $sql = "SELECT * FROM users WHERE username = ? AND name = ? AND password = ? AND position = ? AND permission = 1";
        $stmt = $db ->prepare($sql);
        $stmt->execute([$id, $name, $pw, $position]);

        // echo"".$id.$name.$pw.$positon."";

        $result = $stmt->fetchAll();

        if (!$result) {
            echo "<script>alert('다시 시도 해주세요')</script>";
            echo"<script>location.replace('/')</script>";
        } else {
            echo "<script>alert('성공적으로 로그인되었습니다.')</script>";
    
            $_SESSION["id"] = $id;
            $_SESSION["name"] = $name;

            echo"".$sessionId.$sessionName."";

            echo"<script>location.replace('/')</script>";
        }
    } catch (PDOException $e) {
        echo "로그인 과정에서 문제가 있었습니다.";
    }
?>