<?php

$full_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO contacts (full_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $full_name, $email, $phone, $subject, $message);

if ($stmt->execute()) {

    echo "<script>alert('Message sent successfully.'); window.location.href='./contact.php';</script>";
     header("Location: ./contact.php");
} else {
    echo "<script>alert('Message not sent! Try again.'); window.location.href='./contact.php';</script>";
    header("Location: ./contact.php");
}

?>