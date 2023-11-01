<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO 05</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<h1>Formulário de inscrição</h1>
<h3>Preencha seus dados</h3>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Digite seu E-mail">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" class="form-control" id="DDD" placeholder="DDD">
    <input type="text" class="form-control" id="telefone" placeholder = "Telefone">
  </div>

  <h3>Endereço</h3>
  <div class="form-group">
    <label for="exampleInputPassword1">Rua/Av.</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Endereço">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Bairro</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Endereço">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Endereço">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Estado</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Endereço">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">CEP</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Endereço">
  </div>

  <h3>Descrição</h3>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrição do problema</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite aqui">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Link do vídeo</label>
    <input type="link" class="form-control" id="exampleInputPassword1" placeholder="URL">
  </div>


  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="submit" class="btn btn-secondary">Limpar</button>
</form>
</body>
</html>