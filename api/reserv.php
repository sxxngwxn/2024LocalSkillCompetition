<?php
    include("./dbConnect.php");
    session_start();

    $userId = $_SESSION["id"];
    $name = $_SESSION["name"];

    $date = $_POST["resDay"];
    $league = $_POST["resLeague"];
    $time = $_POST["resTime"];
    $count = $_POST["peopleCount"];
    $price = $_POST["totalPrice"];

    // echo"".$_POST["totalPrice"]."";
    
    try {
        $checkSql = "SELECT * FROM reservation WHERE resDate = ? AND resLeague = ? AND resTime = ?";
        $statement = $db->prepare($checkSql);
        $statement -> execute([$date, $league, $time]);

        $result = $statement -> fetchAll();

        if (!$result) {
            try {
                $sql = "INSERT INTO reservation(res_idx, user_idx, name, resLeague, resDate, resTime, count, price, possible, payment, permission) VALUES (NUll, ?, ?, ?, ?, ?, ?, ?, 1, 0, 0)";
                $stmt = $db->prepare($sql);
                $stmt->execute([$userId, $name, $league, $date, $time, $count, $price]);
        
                $result = $stmt->fetchAll();
        
                echo"<script>alert('예약 승인 대기중 입니다.')</script>";
                echo"<script>location.replace('/')</script>";
            } catch (PDOException $e) {
                echo "". $e->getMessage();
            }
        } else {
            try {
                $sql = "INSERT INTO reservation(res_idx, user_idx, name, resLeague, resDate, resTime, count, price, possible, payment, permission) VALUES (NUll, ?, ?, ?, ?, ?, ?, ?, 0, 0, 0)";
                $stmt = $db->prepare($sql);
                $stmt->execute([$userId, $name, $league, $date, $time, $count, $price]);
        
                $result = $stmt->fetchAll();
        
                echo"<script>alert('예약 승인 대기중 입니다.')</script>";
                echo"<script>location.replace('/')</script>";
            } catch (PDOException $e) {
                echo "". $e->getMessage();
            }
            echo"<script>location.replace('/')</script>";
        }

    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }
    
?>