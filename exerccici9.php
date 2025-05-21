<?php
$notes = [5, 8, 7, 4];
$mitjana = array_sum($notes) / count($notes);
echo "9. Nota mitjana: $mitjana ";
echo $mitjana >= 5 ? "(Aprovat)" : "(Suspès)";
echo "<br><br>";