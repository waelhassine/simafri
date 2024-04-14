<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email address where you want to receive the message
    $to = "allo@solunixgroups.africa";
    $subject = "message Contact $name";
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Message sent successfully. Thank you!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: contact_form.html");
    exit;
}
?>
