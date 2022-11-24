<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1>Integrando PHP com MySQL</h1>

  <form action="exercicio6.php" method="post">
   <fieldset>
    <legend>Módulo 1 - cadastrar projeto</legend>

    <label class="alinha">ID projeto:</label>
    <input type="text" name="id-projeto"> <br>

    <label class="alinha">Orçamento:</label>
    <input type="number" name="orcamento" min="0" step="0.01"> <br>

    
    <label class="alinha">Data de início:</label>
    <input type="date" name="data-inicio"> <br>

    <label class="alinha">Horas da execução:</label>
    <input type="number" name="hora-execucao" min="0"> <br>

    <button name="cadastrar">Cadastrar projeto</button>
    <button name="listar">Listar projetos</button>
   </fieldset>

   <fieldset>
    <legend>Módulo 2 - pesquisar quantidade por data</legend>

    <label class="alinha">Data limite:</label>
    <input type="date" name="data-limite"> <br>

    <button name="pesquisar">Pesquisar</button>
   </fieldset>

   <fieldset>
    <legend>Módulo 3 - excluir projeto</legend>

    <label class="alinha">Hora mínima:</label>
    <input type="number" name="hora-minima"> <br>
    
    <label class="alinha">Orçamento mínima:</label>
    <input type="number" name="orcamento-minimo"> <br>

    <button name="excluir">Excluir</button>
   </fieldset>
  </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastrar'])){
    require "../includes/cadastrar-projeto.inc.php";
    }

    if(isset($_POST['listar'])) {
      require "../includes/listar-projeto.inc.php";
    }
    
    if(isset($_POST["pesquisar"]))
    {
    require "../includes/pesquisar-projeto.inc.php";
    }

    if(isset($_POST['excluir'])) {
      require "../includes/excluir-projeto.inc.php";
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 