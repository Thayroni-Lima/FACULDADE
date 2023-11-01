<?php

$base_menor = $_POST["base_menor"];
$base_maior = $_POST["base_maior"];
$altura = $_POST["altura"];

echo "O trapézio tem área de ".((($base_maior + $base_menor) * $altura) / 2). " m²";

?>
<p><a href="/index.php">Home</a></p>