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