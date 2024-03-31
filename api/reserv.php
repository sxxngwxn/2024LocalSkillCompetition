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
        $sql = "INSERT INTO reservation(res_idx, user_idx, name, resLeague, resDate, resTime, count, price, permission, payment) VALUES (NUll, ?, ?, ?, ?, ?, ?, ?, 0, 0)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$userId, $name, $league, $date, $time, $count, $price]);

        $result = $stmt->fetchAll();

        echo"<script>alert({$result})</script>";
    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }
?>