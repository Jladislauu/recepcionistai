<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validação básica
    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, preencha todos os campos corretamente.";
        exit;
    }

    // Destinatário
    $to = "recepcionistaistartup@gmail.com";

    // Conteúdo do e-mail
    $email_subject = "Nova mensagem do site: $subject";
    $email_body = "Você recebeu uma nova mensagem do formulário do site:\n\n";
    $email_body .= "Nome: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Mensagem:\n$message\n";

    // Cabeçalhos
    $headers = "From: $name <$email>";

    // Envio
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente.";
    }
} else {
    // Se o acesso não for via POST
    echo "Acesso inválido.";
}
?>
