<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
<form class="row g-3" action="insert.php" method="post">
    <div class="col-md-6">
        <label for="inputNome4" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="inputNome4" placeholder="Maria Oliveira Santos">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="mariaoliveirs@gmail.com">
    </div>
    <div class="col-md-6">
      <label for="inputSenha4" class="form-label">Senha</label>
      <input type="password" name="senha" class="form-control" id="inputSenha4" placeholder="********">
    </div>
    <div class="col-12">
      <label for="inputEndereco" class="form-label">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="inputEndereco" placeholder="Rua Ubatuba, n°889">
    </div>
    <div class="col-2">
        <label for="inputCEP" class="form-label">CEP</label>
        <input type="text" name="cep" class="form-control" id="inputCEP" placeholder="00000-000">
    </div>
    <div class="col-12">
      <label for="inputComplento2" class="form-label">Complemento</label>
      <input type="text" name="complemento" class="form-control" id="inputComplemento2" placeholder="Proximidade, bloco, ...">
    </div>
    <div class="col-md-6">
      <label for="inputCidade" class="form-label">Cidade</label>
      <input type="text" name="cidade" class="form-control" id="inputCidade" placeholder="Ex: Mongaguá">
    </div>
    <div class="col-md-4">
      <label for="inputEstado" class="form-label">Estado</label>
      <input type="text" name="estado" id="inputEstado" class="form-select">                          
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Concordo com os termos de uso
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
</body>
</html>