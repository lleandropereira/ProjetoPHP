<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP </h1>

 <form action="matriz.php" method="post">
 
 <!--Primeiro medicamento--> 
 <fieldset>
   <legend> Registro de medicamentos - CTDS - PRW </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nome-medicamento1" autofocus> <br>

   <label class="alinha"> Código do medicamento: </label>
   <input type="text" name="codigo-medicamento1"> <br>

   <label class="alinha"> Preço de venda: </label>
   <input type="number" name="preco-medicamento1" step="0.01"> <br>
  </fieldset>

  <!--Segundo medicamento--> 
 <fieldset>
   <legend> Registro de medicamentos - CTDS - PRW </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nome-medicamento2"> <br>

   <label class="alinha"> Código do medicamento: </label>
   <input type="text" name="codigo-medicamento2"> <br>

   <label class="alinha"> Preço de venda: </label>
   <input type="number" name="preco-medicamento2" step="0.01"> <br>
  </fieldset>

  <!--Terceiro medicamento--> 
 <fieldset>
   <legend> Registro de medicamentos - CTDS - PRW </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nome-medicamento3"> <br>

   <label class="alinha"> Código do medicamento: </label>
   <input type="text" name="codigo-medicamento3"> <br>

   <label class="alinha"> Preço de venda: </label>
   <input type="number" name="preco-medicamento3" step="0.01"> <br>
  </fieldset>

   <fieldset>
    <legend> Módulo de pesquisa de medicamento </legend>

    <label class="alinha"> Forneça o código do medicamento para pesquisa: </label>
    <input type="text" name="pesquisa-medicamento">
   </fieldset>
   
   <button name="enviar-dados"> Consultar </button>
  </fieldset>
 </form>


 <?php
   if(isset($_POST['enviar-dados']))
   {
   $nomeMedicamento1 = $_POST['nome-medicamento1'];
   $nomeMedicamento2 = $_POST['nome-medicamento2'];
   $nomeMedicamento3 = $_POST['nome-medicamento3'];

   $codigoMedicamento1 = $_POST["codigo-medicamento1"];
   $codigoMedicamento2 = $_POST["codigo-medicamento2"];
   $codigoMedicamento3 = $_POST["codigo-medicamento3"];

   $PrecoMedicamento1 = $_POST["preco-medicamento1"];
   $PrecoMedicamento2 = $_POST["preco-medicamento2"];
   $PrecoMedicamento3 = $_POST["preco-medicamento3"];


   $matrizMedicamento = [$codigoMedicamento1 => [$nomeMedicamento1, $PrecoMedicamento1],
                         $codigoMedicamento2 => [$nomeMedicamento2, $PrecoMedicamento2],
                         $codigoMedicamento3 => [$nomeMedicamento3, $PrecoMedicamento3]];

   $codigoPesquisado = $_POST['pesquisa-medicamento'];

   $encontrouCodigo = array_key_exists($codigoPesquisado, $matrizMedicamento);


    if(!$encontrouCodigo)
     {
     echo "<p> O código pesquisado, <span> $codigoPesquisado </span>, não está cadastrado na matriz. </p>";
     }
    else
     {
     $precoMedicamentoPesquisado = $matrizMedicamento[$codigoPesquisado][1];
     $nomeMedicamentoPesquisadoo = $matrizMedicamento[$codigoPesquisado][0];

     echo "<p> Dados do medicamento pesquisado: <br>
               Nome = <span> $nomeMedicamentoPesquisadoo </span> <br>
               Código = <span> $codigoPesquisado </span> <br>
               Preço = <span> $precoMedicamentoPesquisado </span> </p>";
     }

//=====================================================================

foreach($matrizMedicamento as $codigo => $vetorInterno)
{
  $vetorNomeMedicamento[$codigo] = $vetorInterno[0];
}

asort($vetorNomeMedicamento);

echo "<table>
         <caption> Relação dos medicamentos cadastrados </caption>
         <tr>
          <th> Código </th>
          <th> Nome </th>
          <th> Preço </th>
         </tr>";

          foreach($vetorNomeMedicamento as $codigo => $nome)
{
  $preco = $matrizMedicamento[$codigo][1];
  echo "<tr>
          <td> $codigo </td>
          <td> $nome </td>
          <td> $preco </td>
        </tr>";
}
echo "</table>";

foreach($matrizMedicamento as $codigo => $vetorInterno)
     {
      $vetorTemporario[$codigo] = $vetorInterno[1];
     }

     $maisBarato = min($vetorTemporario);
     $codMedicamentoBarato = array_search($maisBarato, $vetorTemporario);
     $nomeMedicmentoBarato = $matrizMedicamento[$codMedicamentoBarato][0];
  
     echo "<p> Dados do remédio mais barato: <br>
           Código = <span> $codMedicamentoBarato </span> <br>
           Nome = <span> $nomeMedicmentoBarato </span> <br>
           Preço = <span> $maisBarato </span></p>";   
  }
 ?>
 
</body> 
</html> 