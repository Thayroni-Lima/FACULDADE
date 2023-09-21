<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO 01</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <form>
    <fieldset>
      <legend></legend>
      <p>
        <label for="name">
            Nome: <input type="text" id="name" name="user_name">
          </label>
      </p>
      <p>
        <label for="name">
            CPF: <input type="text" id="name" name="user_name">
          </label>
      </p>
      <p>
        <label for="name">
            E-mail: <input type="text" id="name" name="user_name">
          </label>
      </p>
      <p>
        <label>
            <legend><strong>Selecione uma cidade:</strong></legend>
            <select id="cars">
                <option value="volvo">João Pessoa</option>
                <option value="saab">Campina Grande</option>
                <option value="opel">Santa Luzia</option>
                <option value="audi">Campina Grande (versão com praia)</option>
        </label>
        </select>
      </p>
      <p>
        <label>
        <legend><strong>Selecione os cursos</strong></legend>
        <input type="checkbox" name="veiculo1" value="bicicleta">Android<br>
        <input type="checkbox" name="veiculo2" value="carro">Python<br>
        <input type="checkbox" name="veiculo3" value="moto">HTML/CSS<br>
        <input type="checkbox" name="veiculo4" value="moto">JavaScript<br>
        </label>
      </p>
      <p>
        <label>
        <legend><strong>Selecione a faixa etária</strong></legend>
        <input type="radio" name="idade 1" value="idade 1">18 à 25<br>
        <input type="radio" name="idade 2" value="idade 2">26 à 30<br>
        <input type="radio" name="idade 3" value="idade 3">31 à 45<br>
        <input type="radio" name="idade 4" value="idade 4">45 à 61<br>
        </label>
      </p>
      <input type="button" value="ENVIAR">
      <input type="button" value="LIMPAR">
    </fieldset>
  </form>
  
</body>
</html>