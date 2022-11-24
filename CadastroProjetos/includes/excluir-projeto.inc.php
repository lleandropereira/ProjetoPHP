<?php
$horaMinima = trim($conexao->escape_string($_POST['hora-minima']));
$orcamentoMinimo = trim($conexao->escape_string($_POST['orcamento-minimo']));

//DELETE FROM `projeto` WHERE horas <= 100 AND orcamento <=1000


$sql = "DELETE FROM $nomeDaTabela1 WHERE horas <= '$horaMinima' AND orcamento <= '$orcamentoMinimo'";
$resultado = $conexao->query($sql) or die($conexao->error);

if($conexao->affected_rows == 0)
 {
 echo "<p> Caro usuário, nenhum projeto foi excluído do banco de dados, pois todos os projetos cadastrados têm hora e orçamento maior ao horário e orçamento mínimo fornecido. </p>";
 }
else
 {
 echo "<p> Caro usuário, de acordo com os dados fornecidos, o banco de dados excluiu um total de <span> $conexao->affected_rows </span> projetos que continham hora e orçamento abaixo do valor mínimo, que é de hora:<span> $horaMinima </span> e orçamento: <span> $orcamentoMinimo </span>. </p>";
 }
