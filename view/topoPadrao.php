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
                        <a href="servicos.php" class="dropdown-item">Ver Serviços</a>
                        <a href="formServicos.php" class="dropdown-item">Cadastrar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Carrinho</a>
                </li>
                <?php
                    session_start();
                    if(!isset($_SESSION["login-cliente"])){
                        echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
                        echo '<li class="nav-item active"><a href="signup.php" class="nav-link">Sign up</a></li>';
                    }else{
                        echo '<li class="nav-item"><a href="dadosCliente.php" class="nav-link">Meus dados</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>
</div>