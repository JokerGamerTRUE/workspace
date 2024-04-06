<?php
require_once "dbconnect.php";
session_start();

Class Country{
    public $pdo; // local

    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function index(){
        $search = $_GET['search'] ?? null;
        $sort = empty($_GET['sort']) ? ['id', 'desc']:explode('|', $_GET['sort']);
        $sorter_column = $sort[0] ?? 'id';
        $arrange = $sort[1] ?? 'desc';
        $page = $_GET['page'] ?? 1;
        $limit = 25;
        $offset_end = $page * $limit;
        $offset_start = $offset_end - $limit;

        $query = "
        SELECT countries.*, count(*) as count_states FROM states
        INNER JOIN countries
        ON countries.id = states.country_id
        GROUP BY states.country_id
        HAVING `name` LIKE '%$search%'
        ORDER BY `$sorter_column` $arrange
        LIMIT $limit OFFSET $offset_start
        ";
        $stmt = $this->pdo->query($query);
        $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $countries;
    }

    public function store($name, $code, $currency, $capital): void{
        $query = "INSERT INTO countries (name, phonecode, currency, capital) VALUES(:a, :b, :c, :d)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':a', $name);
        $stmt->bindParam(':b', $code);
        $stmt->bindParam(':c', $currency);
        $stmt->bindParam(':d', $capital);
        $stmt->execute();
        $_SESSION['success'] = "A new country has added successfully";
        header('Location: ../../pages/create.php');
    }

    public function delete($id): void{
        $query = "DELETE FROM countries WHERE `id` = '$id'";
        $this->pdo->query($query);
        $_SESSION['success'] = "Country has removed successfully";
        header('Location: ../../index.php');
    }

    public function edit($id){
        $query = "SELECT * FROM countries WHERE `id` = '$id'";
        $stmt = $this->pdo->query($query);
        $country = $stmt->fetch(PDO::FETCH_ASSOC);
        if (empty($country)){
            $_SESSION['error'] = "Not found country";
            header('Location: ../../index.php');
        }
        return $country;
    }

    public function update($id, $name, $code, $currency, $capital): void{
        $query = "UPDATE countries SET name = :a, phonecode = :b, currency = :c, capital = :d WHERE id = :id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':a', $name);
        $stmt->bindParam(':b', $code);
        $stmt->bindParam(':c', $currency);
        $stmt->bindParam(':d', $capital);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $_SESSION['success'] = "Country has updated successfully";
        header("Location: ../../pages/edit.php?id=$id");
    }
}

$country_class = new Country($pdo);
$countries = $country_class->index();
