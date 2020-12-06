<?php
    function formatarData($data){
        return date('d/m/Y',$data);
    }
      
    session_start();
    $clientes = $_SESSION['clientes'];

?>
<html>
<head>
    <TITLE>Exibição de Clientes</TITLE>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>

  <div align="center">
    <h1>Clientes cadastrados</h1>
    <p>
    <font face="Tahoma">
    
    <table border="1" cellspacing="2" cellpadding="1" width="50%">
    <tr>
      <th> Nome </th>
      <th> Endereço</th>
      <th> Telefone</th>
      <th> Cpf</th>
      <th> Data Nascimento</th>
      <th> E-mail</th>
      <th> Senha</th>
      <th> Operação</th>
    </tr>

  <?php

    foreach($clientes as $cliente) {
      echo "<tr align='center'>";
      echo "<td>".$cliente->Nome."</td>";
      echo "<td>".$cliente->Endereco."</td>";
      echo "<td>".$cliente->Telefone."</td>";
      echo "<td>".$cliente->CPF."</td>";
      echo "<td>".formatarData(strtotime($cliente->DtNascimento))."</td>";
      echo "<td>".$cliente->Email."</td>";
      echo "<td>".$cliente->Senha."</td>";

      echo "<td><a href='../controller/controllerCliente.php?opcao=3&id=".$cliente->CodCli."'> Alterar</a>&nbsp;";
      echo "<a href='../controller/controllerCliente.php?opcao=4&id=".$cliente->CodCli."'> Excluir</a></td></tr>";
    }

  ?>
  </font>
  </table>
</body>
</html>