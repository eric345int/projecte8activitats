
<?php
if (isset($_POST['ciutat'])) {
    echo "<p>Ciutat seleccionada: {$_POST['ciutat']}</p>";
}
?>
<form method="post">
    <select name="ciutat">
        <option value="Barcelona">Barcelona</option>
        <option value="Girona">Girona</option>
        <option value="Tarragona">Tarragona</option>
    </select>
    <button type="submit">Triar</button>
</form>