<?php
if (isset($_POST['enviar_validacio'])) {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $missatge = $_POST['missatge'] ?? '';
    if ($nom && $email && $missatge) {
        echo "<p>Nom: $nom<br>Email: $email<br>Missatge: $missatge</p>";
    } else {
        echo "<p style='color:red;'>Tots els camps són obligatoris.</p>";
    }
}
?>
<form method="post">
    Nom: <input type="text" name="nom"><br>
    Correu electrònic: <input type="email" name="email"><br>
    Missatge: <textarea name="missatge"></textarea><br>
    <button type="submit" name="enviar_validacio">Enviar</button>
</form>
