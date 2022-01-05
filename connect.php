<?php
define('HOST', '127.0.0.1:3306');
define('USUARIO', 'u198519414_rgundim');
define('SENHA' , 'Julia@123');
define('DB' , 'u198519414_docnacional');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

