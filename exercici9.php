<?php
if (isset($_POST['comentari'])) {
    $comentari = htmlspecialchars($_POST['comentari']);
    echo "<p>Comentari rebut: $comentari</p>";
}
?>
<form method="post">
    Comentari: <textarea name="comentari"></textarea>
    <button type="submit">Enviar</button>
</form>