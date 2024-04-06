<?php
require_once "../dbconnect.php";
require_once "../country.php";

if ($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET['id'] ?? null;
    if (empty($id)){
        $_SESSION['warning'] = "Something went wrong";
        header("Location: ../../index.php");
        return;
    }
    $country_class = new Country($pdo);
    $country_class->delete($id);
}else{
    $_SESSION['error'] = "Unsupported method";
    header('Location: ../../index.php');
    return;
}