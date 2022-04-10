<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
       // print('<br>');
       // print_r($_POST['email']);
       // print('<br>');
       // print_r($_POST['telefone']);
        //print('<br>');
       // print_r($_POST['genero']);
       // print('<br>');
      //  print_r($_POST['data_nascimento']);
       // print('<br>');
       // print_r($_POST['cidade']);
       // print('<br>');
       // print_r($_POST['estado']);
       // print('<br>');
       // print_r($_POST['endereco']);

        include_once('config.php');

       $nome = $_POST['nome'];
    
       $nascimento = $_POST['nasc'];
       

        $result = mysqli_query($conexao, "INSERT INTO usuario (nome,nasc) 
        VALUES ('$nome','$nascimento' )");

        
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
    <link rel="stylesheet" href="./css/cadastro.css">

</head>
<body>

    <div class="box">

        <form action="index.php" method="POST">

            <fieldset>

                <legend><b>Formulário de Cliente</b></legend>
                <br>
            
                <div class="inputBox">

                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo </label>

                </div>

                <br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nasc" id="nasc" required>

                <br><br><br>

                <input type="submit" name="submit" id="submit"><a href="gerenciar.php">ver</a>

            </fieldset>

        </form>

    </div>


    
</body>
</html>