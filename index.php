<?php
require_once "functions.php";

if (!isLoggedIn()) {
    redirect("login.php");
}
?>

<h1>Welcome to IRIS</h1>
<a href="auth/logout.php">Logout</a>