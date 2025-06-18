<?php
$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'] ?? 'No name';
$email = $data['email'] ?? 'No email';
$phone = $data['phone'] ?? 'No phone';
$issue = $data['issue'] ?? 'No issue provided';

$to = "techlend@deets.technology";
$subject = "Techlend Support Request from $name";
$message = "Name: $name\nEmail: $email\nPhone: $phone\n\nIssue:\n$issue";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
  echo json_encode(['status' => 'success']);
} else {
  echo json_encode(['status' => 'fail']);
}
?>
