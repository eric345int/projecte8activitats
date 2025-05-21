<?php
if (isset($_POST['enviar_nom'])) {
    $nom = $_POST['nom'] ?? '';
    echo "<p>Benvingut, $nom!</p>";
}
?>
<form method="post">
    Nom: <input type="text" name="nom">
    <button type="submit" name="enviar_nom">Enviar</button>
</form>

