<?php 
session_start()
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
        .borda{
            border: 1px solid red;
        }
        .borda2{
            border:1px blue solid 
        }
        .apresentacao{
            background-color:  #22425c;
        }
        .login{
            background-color:#e6e7e4;
            box-shadow: -1px 5px 10px black;
        
        }
        .formulario{
            background-color: #cccfc9;
            border-radius: 7px;
        }

        
    </style>

    
</head>
<body>



    
        <div class=" apresentacao row justify-content-end vh-100">
  
                <div class="col-4  login">

                
                    <div class=" row justify-content-center align-items-center vh-100 ms-2 me-2">

                    
                        <form class="formulario " action="login.php" method="POST">

                        <?php
    if(isset($_SESSION['nao_autenticado'])):
    ?>
        <div class="alert alert-danger" role="alert">
            Senha ou Usuario incorreto. Por favor, verifique os dados e tente novamente.
        </div>
<?php
    endif;
    unset($_SESSION['nao_autenticado']);
?>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input name="usuario" type="text" class="form-control" placeholder="Fernando@hotmail.com">
                            </div>
                                <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control"  placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                   </div>
                </div>

             
        </div>
    
    
</body>
</html>