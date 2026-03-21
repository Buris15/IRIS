<?php
require_once "functions.php";

if (!isLoggedIn()) {
    redirect("login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>IRIS Map</title>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/map.css">
</head>
<body>

<h2>IRIS Map</h2>

<!-- STATUS FORM -->
<input type="text" id="statusInput" placeholder="What's on your mind?">
<button onclick="postStatus()">Post</button>

<!-- MAP -->
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="js/map.js"></script>

</body>
</html>