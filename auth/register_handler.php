<?php
require_once "../functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = clean($_POST["username"]);
    $email = clean($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $secret = password_hash($_POST["secret_code"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, secret_code) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $secret);

    if ($stmt->execute()) {
        redirect("../login.php");
    } else {
        echo "Error: Username or Email already exists.";
    }
}