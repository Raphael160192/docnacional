<?php
session_start();
include('connect.php');

if(empty($_POST['nomeRazao'])){
    header('Location: index.php');
    exit();
}

$nomeRazao = mysqli_real_escape_string($conexao, $_POST['nomeRazao']);
$cpfCnpj = mysqli_real_escape_string($conexao , $_POST['cpfCnpj']);
$rua = mysqli_real_escape_string($conexao , $_POST['rua']);
$numero = mysqli_real_escape_string($conexao , $_POST['numero']);
$complemento = mysqli_real_escape_string($conexao , $_POST['complemento']);
$uf = mysqli_real_escape_string($conexao , $_POST['uf']);
$municipio = mysqli_real_escape_string($conexao , $_POST['municipio']);
$cep = mysqli_real_escape_string($conexao , $_POST['cep']);
$servico = mysqli_real_escape_string($conexao , $_POST['servico']);

date_default_timezone_set('America/Sao_Paulo');
$dataHora = date('Y-m-d H:i:s');
//$query = "SELECT id_usuario, usuario from Usuario_Login where usuario = '{$usuario}' and senha = md5('{$senha}')"; createdAt, updatedAt

$query = "insert into pedidos(nome_razaosocial, cpf_cnpj, rua, numero, complemento, uf, municipio, cep, servico, createdAt, updatedAt) values( '$nomeRazao' , '$cpfCnpj' , '$rua', '$numero', '$complemento', '$uf' , '$municipio', '$cep', '$servico', '$dataHora', '$dataHora')";

$enviaPedido = mysqli_query($conexao, $query);

if($enviaPedido){
   echo "<script>
   alert('deu certo')
   </script>";
}

/*
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
*/

