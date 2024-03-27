<?php
$DB_HOST = "127.0.0.1";
$DB_ID = 'root';
$DB_PW = '';
$DB_PORT = '3306';
$DB_NAME = '2024local';
$DB_LINK = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME}";

try {
    $db = new PDO($DB_LINK, $DB_ID, $DB_PW);
    echo "<script>alert('db연결에 성공')</script>";
} catch (PDOException $e) {
    echo "<script>alert('db연결에 실패')</script>";
}
?>