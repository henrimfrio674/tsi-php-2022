<?php

//BUSCANDO O COD DA CONEXAO COM O BANCO DE DADOS

require_once 'BancoDeDados/conecta.php';
//include(); incluir 
//include_once(); nao gera erro fatal se nao existir

// DADOS DO HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>listar</title>
</head>
<body>
    <div class="container">
    <a href="formincluir.php"><button class='bnt'> NOVO ALUNO </button></a>

    <?php
    if (isset($gravou)){
        if(!$gravou){
                echo ' <div class="alert-danger" role="alert">
                Erro ao tentar gravar
                </div>;
                '

        }
    }
    ?>

   <table border="1">
        <tr>
        <td>id</td>
        <td>nome</td>
        <td>turno</td>  
        <td>inicio</td>
        <td>Açoes</td>
    </tr>
    </div>
    <?php
    
    foreach($alunos as $aluno){
        echo "  <tr>
                    <td>{$aluno['id']}</td>
                    <td>{$aluno['nome']}</td>
                    <td>{$aluno['turno']}</td>
                    <td>{$aluno['inicio']}</td>
                    <td></td>
        </tr>";
    }
    ?>
</body>
</html>
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = $bd->prepare('INSERT INTO alunos
                        (nome, turno, inicio)
                        VALUES 
                        (:nome ,:turno, :inicio)');
/*
o objstmt esta retornando um array que contem um
 pre consulta no banco de dados (sem os dados do usuario)
 ----
 A funcao $bd->prepare() retorna
 outra variavel (objeto), essa outra 
 variavel consegue juntar os dados 
 do usuario com consulta SQL
*/

$consulta->bindParam('nome', $nome);
$consulta->bindParam('turno', $turno);
$consulta->bindParam('inicio', $inicio);

/*

'procurar', $substituirPor

A funcao $consulta->bindParam() substitui
os rotulos (ex.: ":nome") pelos dados inseguros
 */

 if( $consulta->execute()){

    echo "Gravado com sucesso!";

 }else{

    echo "ERRO ao gravar no banco de dados";

 }

 //Consulta no banco de dados