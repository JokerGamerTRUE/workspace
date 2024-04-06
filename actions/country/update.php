<?php
require_once "../dbconnect.php";
require_once "../country.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_GET['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $code = $_POST['code'] ?? null;
    $currency = $_POST['currency'] ?? null;
    $capital = $_POST['capital'] ?? null;
    if (empty($name) || empty($code) || empty($currency) || empty($capital) || empty($id)){
        $_SESSION['warning'] = "Please fill up the required fields";
        header("Location: ../../pages/edit.php?id$id");
        return;
    }
    if (!is_numeric($code)){
        $_SESSION['warning'] = "Country code must be a number";
        header("Location: ../../pages/edit.php?id$id");
        return;
    }
    $country_class = new Country($pdo);
    $country_class->update($id, $name, $code, $currency, $capital);
}else{
    $_SESSION['error'] = "Unsupported method";
    header("Location: ../../pages/edit.php?id$id");
    return;
}