<?php
    echo "seja bem vindo" . $_POST['nomeUsuario'] . "!";

    echo "voce tem {$_POST['idadeUsuario']}, cpf: $_POST[cpfUsuario]<br>";

    echo "e o periodo escolhido foi o {$_POST['periodoUsuario']}";

    $nome = $_POST['nomeUsuario'];
    $idade = $_POST['idadeUsuario'];
    $periodo = $_POST['periodoUsuario'];

    $arquivo = fopen('alunos.csv' , 'a');//abro o arquivo para append
    fwrite($arquivo, "$nome,$idade,$cpf,$periodo\r\n");
    fclose($arquivo);
    ?>