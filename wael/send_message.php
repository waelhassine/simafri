<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $country = $_POST['country'];
    $registration = $_POST['registration'];
    $message = $_POST['message'];

    // Email address where you want to receive the message
    $to = "wael.hassine0@gmail.com";
    $subject = "Nouveau message de $name";
    $body = "Nom et prénom du demandeur : $name\n"
          . "Poste occupé : $position\n"
          . "Contact téléphonique : $contact\n"
          . "Adresse mail actuelle : $email\n"
          . "Nom de l'organisation bénéficiaire : $organization\n"
          . "Pays de localisation de l'ONG : $country\n"
          . "N° d'enregistrement auprès des autorisations : $registration\n"
          . "Message :\n$message";

    // Send email
    if (mail($to, $subject, $body, "From: $email")) {
        echo "<p>Message envoyé avec succès. Merci!</p>";
    } else {
        echo "<p>Désolé, une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.</p>";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: contact_form.html");
    exit;
}
?>
