<?php
$errors = [];
$nom = $_POST['contacte_nom'] ?? '';
$email = $_POST['contacte_email'] ?? '';
$assumpte = $_POST['contacte_assumpte'] ?? '';
$missatge = $_POST['contacte_missatge'] ?? '';

if (isset($_POST['enviar_contacte'])) {
    if (!$nom || !$email || !$assumpte || !$missatge) {
        $errors[] = "Tots els camps són obligatoris.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correu electrònic no és vàlid.";
    }
    if (empty($errors)) {
        echo "<p style='color:green;'>Formulari enviat correctament!</p>";
    }
}
?>
<form method="post">
    Nom: <input type="text" name="contacte_nom" value="<?= htmlspecialchars($nom) ?>"><br>
    Email: <input type="text" name="contacte_email" value="<?= htmlspecialchars($email) ?>"><br>
    Assumpte: <input type="text" name="contacte_assumpte" value="<?= htmlspecialchars($assumpte) ?>"><br>
    Missatge: <textarea name="contacte_missatge"><?= htmlspecialchars($missatge) ?></textarea><br>
    <button type="submit" name="enviar_contacte">Enviar</button>
</form>
<?php
if (!empty($errors)) {
    echo "<ul style='color:red;'>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
?>