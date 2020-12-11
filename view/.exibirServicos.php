<?php
      function formatarData($data){
        return date('d/m/Y',$data);
      }
      
      session_start();
      $servicos = $_SESSION['servicos'];
?>
<HTML>

<HEAD>
    <TITLE>Exibição de Serviços</TITLE>
</HEAD>

<BODY>

<center>

    <h1>Serviços cadastrados</h1>

<p>

  <font face="Tahoma">

  <table border="1" cellspacing="2" cellpadding="1" width="50%">

  <tr>

            

  
  <th> Nome </th>
  
  <th> Valor</th>
  
  <th> Operação</th>

</tr>


<?php

foreach($servicos as $servico) {

  echo "<tr align='center'>";

  echo "<td>".$servico->nome."</td>";

  echo "<td>".$servico->valor."</td>";

  echo "<td>".$servico->descricao."</td>";
  
  echo "<td>".$servico->idTipo."</td>";





  echo "<td><a href='../controller/controllerServico.php?opcao=3&id=".$servico->id_servico."'> Alterar</a>&nbsp;";

  echo "<a href='../controller/controllerServico.php?opcao=4&id=".$servico->id_servico."'> Excluir</a></td></tr>";

}

?>


  </font>

  </table>

  </center>

  </BODY>

</HTML>