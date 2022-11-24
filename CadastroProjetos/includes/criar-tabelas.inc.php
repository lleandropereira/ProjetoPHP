<?php
 //aqui, vamos criar as duas tabelas usadas no modelo
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
            id VARCHAR(20) PRIMARY KEY,
            orcamento FLOAT,
            data_inicio DATE,
            horas INT) ENGINE=innoDB";

 $conexao->query($sql) or die($conexao->error);

