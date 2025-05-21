
<?php
if (isset($_POST['aficions'])) {
    echo "<p>Aficions escollides:</p><ul>";
    foreach ($_POST['aficions'] as $aficio) {
        echo "<li>$aficio</li>";
    }
    echo "</ul>";
}
?>
<form method="post">
    <p>Aficions:</p>
    <label><input type="checkbox" name="aficions[]" value="Esport"> Esport</label>
    <label><input type="checkbox" name="aficions[]" value="Lectura"> Lectura</label>
    <label><input type="checkbox" name="aficions[]" value="Música"> Música</label><br>
    <button type="submit">Enviar</button>
</form>