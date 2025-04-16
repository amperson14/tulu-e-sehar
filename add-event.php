<?php
include_once 'database.php';

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$start = $data->start;
$end = $data->end;
$description = $data->description;

$sql = "INSERT INTO events (title, start, end, description) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $title, $start, $end, $description);

if ($stmt->execute()) {
  echo json_encode(['success' => true, 'id' => $conn->insert_id]);
} else {
  echo json_encode(['success' => false]);
}
?>
