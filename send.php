<?php

// kam poslať email
$to = "fidler2@ucm.sk, kasl1@ucm.sk";

// prijaté hodnoty z formulára
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// vytvorenie obsahu emailu
$body = "Meno: $name\n";
$body .= "Email: $email\n";
$body .= "Predmet: $subject\n\n";
$body .= "Správa:\n$message\n";

// hlavičky emailu
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// odoslanie emailu
mail($to, $subject, $body, $headers);

// presmerovanie späť s potvrdením
header("Location: contact.html?success=1");
exit();

?>
