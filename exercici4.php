
<?php
if (isset($_POST['enviar_email'])) {
    $email = $_POST['email'] ?? '';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email vàlid.</p>";
    } else {
        echo "<p style='color:red;'>Format de correu invàlid.</p>";
    }
}
?>
<form method="post">
    Correu: <input type="text" name="email">
    <button type="submit" name="enviar_email">Validar</button>
</form>
