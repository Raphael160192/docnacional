<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .logout{
            text-decoration:none;
        }
        .nav1{
            background-color:#22425c;
        }
        body{
            background-color: #bfbfbf
        }
        .color{
            background-color: white
        }
        .borda{
            border: 1px solid red;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light nav1">
  <div class="container-fluid">
    <a class="navbar-brand" href="painel.php">DocNacional</a>
    <ul class="navbar-nav">
        <li class="nav-item navbar-text"><p class="text-white"><?php echo $_SESSION['usuario']?></p></li>
        <li class="nav-item"><a class="nav-link logout" href="logout.php">Sair</a></li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="painel.php">Início</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="painel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pedidos.php">Pedidos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container vh-100 color ">
<div>
<form class="row g-3 justify-content-center pt-5" action="envia_pedidos.php" method="POST">

<div class="col-md-4">
    <label for="nomeRazao" class="form-label">Nome Completo/Razão Social</label>
    <input type="text" name="nomeRazao" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="cpfCnpj" class="form-label">CPF/CNPJ</label>
    <input type="number" name="cpfCnpj" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="rua" class="form-label">Rua</label>
    <input type="text" name="rua" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2">
    <label for="numero" class="form-label">Número</label>
    <input type="number" name="numero" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-8">
    <label for="complemento" class="form-label">Complemento</label>
    <input type="text" name="complemento" class="form-control" id="inputPassword4">
  </div>

  <div class="container row g-3  justify-content-center ">
      
  <div class="col-md-1">
    <label for="uf" class="form-label">UF</label>
    <select name="uf" id="inputState" class="form-select">
      <option>SP</option>
      <option>RJ</option>
    </select>
  </div>
  <div class="col-md-5">
    <label for="municipio" class="form-label">Município</label>
    <input type="text" name="municipio" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2">
    <label for="cep" class="form-label">CEP</label>
    <input type="number" name="cep" class="form-control" id="inputEmail4">
  </div>

  <div class="col-md-8">
    <label for="servico" class="form-label">Serviço</label>
    <select id="inputState" name="servico" class="form-select">
      <option>Certidão de Matricula</option>
      <option>Pesquisa de Bens</option>

    </select>
  </div>

  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>




</div>
    
</body>
</html>