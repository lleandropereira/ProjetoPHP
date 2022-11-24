<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="2">
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<?php
 $idProjeto     = trim($conexao->escape_string($_POST['id-projeto']));
 $orcamento     = trim($conexao->escape_string($_POST['orcamento']));
 $dataInicio     = trim($conexao->escape_string($_POST['data-inicio']));
 $horaExecucao     = trim($conexao->escape_string($_POST['hora-execucao']));

 $sql = "INSERT $nomeDaTabela1 VALUES(
                '$idProjeto', 
                $orcamento,
                '$dataInicio',
                $horaExecucao)";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do projeto cadastrados com sucesso no banco de dados. </p>";


