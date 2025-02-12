<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];

    try{
        require_once "db.php";

        $query = "INSERT INTO account_table (username, pwd, fullname, email) VALUES (?,?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $password, $fullname, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: Login.php");

        die();
    }catch(PDOException $e){
        die("Query Failed " . $e->getMessage());
    }
} else {
    header("Location: Login.php");
}