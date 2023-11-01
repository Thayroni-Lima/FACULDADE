<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de alunos</title>
</head>
<body>
    <!-- Faça uma aplicação Web que permita ao usuário
    - digitar o nome de um aluno
    - suas duas notas na disciplina de Programação Web
    -  Em seguida faça um script PHP que receba 
        - os dados submetidos a partir do formulário
        - calcula a média do aluno
        - exiba a seguinte mensagem: “O aluno XXXXX ficou com XX de média”. -->

        <div>
            <h1>Cálculo média</h1>
            <h3>Disciplina: Programação Web</h3>
            
            <form action="calculo_nota.php" method="post">
                <p><label for="nome_aluno">Nome do Aluno (a): </label>
                <input type="text"  id="nome_aluno" name="nome_aluno">
                </p>

                <p><label for="nota1">1ª nota do aluno(a): </label>
                <input type="number"  id="nota1" name="nota1">
                </p>

                <p><label for="nota2">2ª nota do aluno(a): </label>
                <input type="number"  id="nota2" name="nota2"></p>

                <p><input type="submit" name="Enviar"></p>
                
            </form>
        </div>
        
</body>
</html>