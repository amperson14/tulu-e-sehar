<?php
include 'database.php';

$events = [];

$sql = "SELECT title, event_date, description FROM events";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $events[] = [
        'title' => $row['title'],
        'start' => $row['event_date'], // FullCalendar uses 'start'
        'description' => $row['description'] // optional
    ];
}

header('Content-Type: application/json');
echo json_encode($events);
?>
