<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])){
        echo "Login successful. Welcome, " . htmlspecialchars($email);
        // You can set session here
    } else {
        echo "Invalid email or password.";
    }
}
?>