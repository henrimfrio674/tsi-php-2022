<?php
require_once 'BancoDeDados/conecta.php';
$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');

$saida = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<pre>';

echo '<tables border="1">
        <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Turno</td>
        <td>Inicio</td>
        </tr>
';
while($saida = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo '
        <tr>
            <td>'.
                $saida['id'].'

            </td>
            <td>'.
                $saida['nome'].'
            </td>'.
                $saida['turno'].'

            </td>
            <td>'.
                $saida['inicio'].'
            </td>
        </tr>
    ';
};
echo '</tables>';
