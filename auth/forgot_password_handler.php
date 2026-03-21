<?php
require_once "../functions.php";

$username = clean($_POST["username"]);
$secret = $_POST["secret_code"];
$newpass = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT secret_code FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($secret, $user["secret_code"])) {
        $update = $conn->prepare("UPDATE users SET password=? WHERE username=?");
        $update->bind_param("ss", $newpass, $username);
        $update->execute();

        echo "Password updated.";
    } else {
        echo "Wrong secret code.";
    }
}