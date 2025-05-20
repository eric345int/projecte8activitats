<?php
$nom = "Anna";
$data = date("d/m/Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Targeta Personal</title>
</head>
<body>
    <div style="border: 1px solid black; padding: 20px; width: 300px;">
        <h2>Benvingut/da!</h2>
        <p>Nom: <?php echo $nom; ?></p>
        <p>Data: <?php echo $data; ?></p>
        <img src="https://via.placeholder.com/150" alt="Foto">
        <p>És un plaer tenir-te aquí.</p>
    </div>
</body>
</html>
