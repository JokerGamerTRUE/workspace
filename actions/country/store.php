<?php
require_once "../dbconnect.php";
require_once "../country.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'] ?? null;
    $code = $_POST['code'] ?? null;
    $currency = $_POST['currency'] ?? null;
    $capital = $_POST['capital'] ?? null;
    if (empty($name) || empty($code) || empty($currency) || empty($capital)){
        $_SESSION['warning'] = "Please fill up the required fields";
        header("Location: ../../pages/create.php");
        return;
    }
    if (!is_numeric($code)){
        $_SESSION['warning'] = "Country code must be a number";
        header("Location: ../../pages/create.php");
        return;
    }
    $country_class = new Country($pdo);
    $country_class->store($name, $code, $currency, $capital);
}else{
    $_SESSION['error'] = "Unsupported method";
    header('Location: ../../pages/create.php');
    return;
}