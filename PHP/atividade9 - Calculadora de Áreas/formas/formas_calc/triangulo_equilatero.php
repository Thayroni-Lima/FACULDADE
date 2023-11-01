<?php

$lado = $_POST["lado"];
$k = (3 ** (1/2));
$area = ((($lado ** 2) * $k) / 4);

echo "O Triângulo Equilátero tem área de ".number_format($area,2,',',"."). " m²";

?>
<p><a href="/index.php">Home</a></p>