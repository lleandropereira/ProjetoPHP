<?php
$sql = "SELECT id, orcamento FROM $nomeDaTabela1";
$resultado = $conexao->query($sql) or die($conexao->error);

echo "<table>
       <caption> Relação dos projetos cadastradas </caption>
       
       <tr>
           <th> Id </th>
           <th> Orçamento</th>
       </tr>";

while($vetorRegistro = $resultado->fetch_array())
{
   $idProjeto = htmlentities($vetorRegistro[0], ENT_QUOTES, "utf-8");
   $orcamento = htmlentities($vetorRegistro[1], ENT_QUOTES, "utf-8");

   echo"<tr>
           <td> $idProjeto </td>
           <td> $orcamento </td>
        </tr>";
}

echo"</table>";
