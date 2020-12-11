<?php
      function formatarData($data){
        return date('d/m/Y',$data);
      }
      
      session_start();

      $tipos = $_SESSION['tipos'];

?>
<HTML>

<HEAD>
    <TITLE>Exibição dos Tipos</TITLE>
</HEAD>

<BODY>

<center>

    <h1>Tipos cadastrados</h1>

<p>

  <font face="Tahoma">

  <table border="1" cellspacing="2" cellpadding="1" width="50%">

  <tr>

            

  
  <th> Nome </th>
  
  <th>Valor</th>

  <th> Operação</th>

</tr>


<?php

foreach($tipos as $tipo) {

  echo "<tr align='center'>";

  echo "<td>".$tipo->nome."</td>";

  echo "<td>".$tipo->valor."</td>";

 


  echo "<td><a href='../controller/controllerCliente.php?opcao=3&id=".$tipo->idTipo."'> Alterar</a>&nbsp;";

  echo "<a href='../controller/controllerCliente.php?opcao=4&id=".$tipo->idTipo."'> Excluir</a></td></tr>";

}

?>


  </font>

  </table>

  </center>

  </BODY>

</HTML>