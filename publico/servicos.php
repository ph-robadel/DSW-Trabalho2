<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ServicesWorld - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     

</head>
<body style="width: auto;" class="bg-light">
    <!--Topo-->
    <div>
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark py-3">
            <!--Logo-->
            <a href="" class="navbar-brand">WorldServices.Tech</a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Navegação-->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="sobre.html" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item dropdown  active">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Serviços</a>
                    
                        <div class="dropdown-menu">
                            <a href="servicos.php" class="dropdown-item">Ver Serviços</a>
                            <a href="" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Carrinho</a>
                    </li>
                    <li class="nav-item"><a href="../restrito/login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="../restrito/formUsuario" class="nav-link">Sign up</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <!--Banner-->
    <div id="banner" class="mt-5">
        <img src="../img/photo-1-serv.jpg" style="width: 100%;" alt="">
    </div> 

    <!--Conteudo entra aqui-->
    <div class="container pt-2" >

        <h2 class="display-4 pt-4">Confira abaixo</h2><br>

        <!--GET aqui-->
        <div id="servicos" class="row">
            
        </div>
    </div>

    <!--Rodape-->
    <div id="rodape" class="footer">
        <div>
            <br>
            <p class="footer">Trabalho II de Desenvolvimento Web - Universidade Federal do Espírito Santo</p>
            <p id="rdpAut">Desenvolvido por Maycon, Pedro Henrique e Valquiria</p>
        </div>
    </div>
</body>    

    <!--Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>