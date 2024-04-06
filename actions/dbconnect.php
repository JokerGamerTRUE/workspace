<?php
$username = "root";
$password = "";
$database = 'beginner';
$host = 'localhost';
$port = '3306';

$pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);