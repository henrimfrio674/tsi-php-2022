<?php

//vetor

$diaSemana = [ 0=> 'domingo' , 1=> 'segunda' , 2=> 'terca' ,3=> 'quarta' , 4=> 'quinta' , 5=> 'sexta' , 6=> 'sabado'];
 
//echo "<pre>";

//var_dump($diaSemana);

$hoje = date('w');



echo "hoje é {$diaSemana[$hoje]} <br><br>"; // interpolaçao com vetor precisa das {}


$aluno = [ 0 => [ 'matricula' => 634545, 'nome' => 'joao' , 'semestre' =>2],
                    1 =>['matricula' => 8548,'nome' => 'paulo', 'semestre' =>3],
                    2 => ['matricula' => 65422, 'nome'=> 'Maria', 'semestre' =>1]];

echo '<table border = "1">
        <tr>
        <td> Matricula</td>
        <td>Nome</td>
        <td>Semestre</td>
        </tr>';

for( $i = 0; $i < count($aluno) ; $i++){

echo "<tr>
            <td>{$aluno[$i]['matricula']}</td>
            <td>{$aluno[$i]['nome']}</td>
            <td>{$aluno[$i]['semestre']}</td>
        </tr>";


}       


foreach($aluno as $ind => $val){

        echo "<tr>
        <td>{$val['matricula']}</td>
        <td>{$val['nome']}</td>
        <td>{$val['semestre']}</td>
    </tr>";
}


echo '<table>';


?>
