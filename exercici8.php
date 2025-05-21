<?php
$reomplir_nom = $_POST['reomplir_nom'] ?? '';
$reomplir_email = $_POST['reomplir_email'] ?? '';
$reomplir_msg = $_POST['reomplir_msg'] ?? '';
if (isset($_POST['enviar_reomplir']) && (!$reomplir_nom || !$reomplir_email || !$reomplir_msg)) {
    echo "<p style='color:red;'>Tots els camps són obligatoris.</p>";
}
?>
<form method="post">
    Nom: <input type="text" name="reomplir_nom" value="<?= htmlspecialchars($reomplir_nom) ?>"><br>
    Email: <input type="text" name="reomplir_email" value="<?= htmlspecialchars($reomplir_email) ?>"><br>
    Missatge: <textarea name="reomplir_msg"><?= htmlspecialchars($reomplir_msg) ?></textarea><br>
    <button type="submit" name="enviar_reomplir">Enviar</button>
</form>