<?php
 $pesquisarProjeto  = trim($conexao->escape_string($_POST['data-limite']));
 
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela1 WHERE data_inicio >= '$pesquisarProjeto'";
 $resultado = $conexao->query($sql) or die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();
 $quantos = $vetorRegistro[0];


 if($quantos == 0)
 {
   echo "<p> Caro usuário, não há nenhum projeto cadastrado a partir da data <span> $pesquisarProjeto </span>. </p>";
 }
 else
 {
   echo "<p> Caro usuário, a partir da data <span> $pesquisarProjeto </span> foram encontrados <span> $quantos </span> projetos. </p>";
 }