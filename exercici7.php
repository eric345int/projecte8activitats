<?php
if (isset($_POST['genere'])) {
    echo "<p>Gènere seleccionat: {$_POST['genere']}</p>";
}
?>
<form method="post">
    <label><input type="radio" name="genere" value="Home"> Home</label>
    <label><input type="radio" name="genere" value="Dona"> Dona</label>
    <label><input type="radio" name="genere" value="Altres"> Altres</label>
    <button type="submit">Enviar</button>
</form>

