<?php
    include("../dbConnect.php");

    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // current_timestamp()
    // $sql = "INSERT INTO `users` (`user_idx`, `username`, `name`, `password`, `position`, `login_data`) VALUES ('', :username, :name, :password, '일반회원', now());";
    // $sql = "INSERT INTO users (user_idx, username, name, password, position, login_data) VALUES ('', ?, ?, ?, '일반회원', now());";
    $sql = 'INSERT INTO users (user_idx, username, name, password, position, login_data) VALUES (NULL, :username, :name, :password, "일반회원", NULL)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
?>