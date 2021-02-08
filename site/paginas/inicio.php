<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Rachel´s Design</title>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container-fluid">
           
            <!--banner-->
            <div class="row">
                <img src="assets/img/rd1.jpg" alt="" />
            </div>

             <!--navegação-->         
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?pg=inicio">Inicio</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=sobre">Sobre</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=servicos">serviços</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos">Produtos</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato">Contato</a> </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Área Administrativa</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?pg=login">Login</a>
                                    <a class="dropdown-item" href="?pg=login2">Login2</a>
                                    <a class="dropdown-item" href="?pg=login3">Login3</a>
                                    <a class="dropdown-item" href="?pg=login4">Login4</a>
                                    <!--manusouza-->   
                                </div>
                            </li>
                        </ul>
                </div>
            </nav>
            <!--fim da navegação-->

            <!--container principal-->
            <div class="container-fluid mt-5">

                <h1 class="text-center">Contato</h1>
                <form action="">
                    <div class="row">
                        <div class="col">                       
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Telefone: </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email: </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensagem: </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">                            
                                <button class="btn-danger btn-block btn-lg"> Cadastrar</button>
                            </div>
                        </div>
                        <div class="col">                    
                            <img class="img-fluid" src="https://placehold.it/630x430" alt="" />
                        </div>
                    </div>
                </form>
            </div>
            <!--fim da container contato-->

        </div>
    </body>
</html>