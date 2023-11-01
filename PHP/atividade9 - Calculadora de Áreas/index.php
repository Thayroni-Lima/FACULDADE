<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Área</title>
</head>
<body>
    <h1>Cálculo de Área</h1>
    <h2>Figuras geométricas</h2>

    <form action="transfer.php" method="post">
        <label for="escolha_forma">Escolha a forma: </label>
        <select name="escolha_forma" id="escolha_forma">
            <option value="quadrado">Quadrado</option>
            <option value="trapezio">Trapézio</option>
            <option value="retangulo">Retângulo</option>
            <option value="triangulo_equilatero">Triângulo Equilátero</option>
            <option value="triangulo_qualquer">Triângulo Qualquer</option>
            <option value="paralelogramo">Paralelogramo</option>
            <option value="losangulo">Losângulo</option>
            <option value="circulo">Círculo</option>
        </select>

        <p><input type="submit" value="Ir para cálculo de área ->"></p>
    </form>

</body>
</html>