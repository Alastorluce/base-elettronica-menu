<?php
// ✅ Sicurezza base contro header injection
function clean_input($data) {
    return trim(stripslashes(htmlspecialchars($data)));
}

// ✅ Verifica che il form sia stato inviato via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 🔐 Pulizia dei dati in ingresso
    $name = clean_input($_POST["name"] ?? '');
    $email = clean_input($_POST["email"] ?? '');
    $message = clean_input($_POST["message"] ?? '');

    // 📬 Impostazioni email
    $to = "acusonica@gmail.com";
    $subject = "Nuova richiesta dal sito Base Elettronica Service";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 📄 Corpo del messaggio
    $body = "Hai ricevuto un nuovo messaggio dal sito:\n\n";
    $body .= "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Messaggio:\n$message\n";

    // 📤 Invio email
    if (mail($to, $subject, $body, $headers)) {
        echo "successo";
    } else {
        echo "errore";
    }
} else {
    echo "accesso non consentito";
}
?>
