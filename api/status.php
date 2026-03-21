<?php
require_once "../functions.php";

header("Content-Type: application/json");

// ADD STATUS
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    $content = $data["content"];
    $lat = $data["lat"];
    $lng = $data["lng"];
    $user_id = $_SESSION["user_id"];

    $stmt = $conn->prepare("INSERT INTO statuses (user_id, content, latitude, longitude) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isdd", $user_id, $content, $lat, $lng);
    $stmt->execute();

    echo json_encode(["success" => true]);
}

// GET STATUS
if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $result = $conn->query("SELECT * FROM statuses");

    $statuses = [];

    while ($row = $result->fetch_assoc()) {
        $statuses[] = $row;
    }

    echo json_encode($statuses);
}