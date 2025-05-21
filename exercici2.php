<?php
if (isset($_GET['enviar_get'])) {
    echo "<p>Nom: {$_GET['nom']} - Edat: {$_GET['edat']}</p>";
}
?>
<form method="get">
    Nom: <input type="text" name="nom">
    Edat: <input type="number" name="edat">
    <button type="submit" name="enviar_get">Enviar</button>
</form>

