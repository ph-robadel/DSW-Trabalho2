<?php 
 session_start();
?>

<!--Topo-->
<div>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark py-3">
        <!--Logo-->
        <a href="../view/index.php" class="navbar-brand">WorldServices.Tech</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Navegação-->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="../view/index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../view/sobre.php" class="nav-link" >Sobre</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Serviços</a>
                
                    <div class="dropdown-menu">
                        <a href="servicos.php" class="dropdown-item">Ver serviços</a>
                        <?php
                            if(!isset($_SESSION["login-cliente"])){
                                echo '<a href="login.php" class="dropdown-item">Cadastrar novo serviço</a>';
                            }else{
                                echo '<a href="formServicos.php" class="dropdown-item">Cadastrar</a>';
                                echo '<a href="formServicos.php" class="dropdown-item">Meus serviços</a>';
                            }
                        ?>
                    </div>

                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Carrinho</a>
                </li>
                <?php
                    if(!isset($_SESSION["login-cliente"])){
                        echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
                        echo '<li class="nav-item"><a href="signup.php" class="nav-link">Sign up</a></li>';
                    }else{
                        echo '<li class="nav-item"><a href="dadosCliente.php" class="nav-link">Meus dados</a></li>';
                        echo '<li class="nav-item"><a href="../controller/controllerCliente.php?opcao=6" class="nav-link">Sair</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>
</div>