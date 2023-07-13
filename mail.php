<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Validate form data
if (empty($name) || empty($email) || empty($message)) {
    header("Location: contact.php?status=error");
    exit;
}

// Set recipient email address
$to = "youremail@example.com";

// Set email subject
$subject = "New Message from Pink-Eye Pictures Website";

// Build email message
$body = "Name: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message\n";

// Set email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    header("Location: contact.php?status=success");
    exit;
} else {
    header("Location: contact.php?status=error");
    exit;
}
?>
