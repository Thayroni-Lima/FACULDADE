<?php

$raio = $_POST["raio"];
$pi = 355/113;

echo "O Círculo tem área de ".number_format(($pi * ($raio ** 2)),2,".",","). " m²";

?>
<p><a href="/index.php">Home</a></p>