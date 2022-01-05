<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Usuarios</title>
</head>
<body>

  <h1 class="text-info text-center">Lista de usuários</h1>
<br>
<div class="container">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Pedido</th>
      <th scope="col">Nome/Razaosocial</th>
      <th scope="col">SOBRENOME</th>
      <th scope="col">CIDADE</th>



    </tr>
  </thead>
  <tbody>
  <?php
    $resultado = mysqli_query($conexao, "SELECT * FROM pedidos");
    while ($linha = mysqli_fetch_array($resultado)){
  ?>
    <tr>
      <td><?php echo $linha['id'];?></td>
      <td><?php echo $linha['nome'];?></td>
      <td><?php echo $linha['sobrenome'];?></td>
      <td><?php echo $linha['cidade'];?></td>
      <td><?php echo $linha['cep'];?></td>
      <td><?php echo $linha['email'];?></td>
      <td><a href="atualizar.php?id= <?php echo $linha['id'];?>"><img src="./imagem/lapis.png" alt="editar" width="25px;"></a>  <a href="?id=<?php echo $linha['id'];?>"><img src="./imagem/lixeira.png" alt="lixeira" width="40px;"></td>
    </tr>
<?php  } ?>
  </tbody>
 
</table>
</div>
  </body>
  </html>