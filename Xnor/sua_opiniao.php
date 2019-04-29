<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Maikon, Matheus, Nicole">

    <title>X-nor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3 ">O seu gosto é mais gostoso</span>
      <span class="site-heading-lower font-weight-bold ">X-nor Lanchonete</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">X-nor Lanchonete</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="pedidos.html">Pedidos</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="sua_opiniao.php">Sua opnião</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="depoimentos.html">Depoimentos de Clientes</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="entrar.php">Entrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>      
<!--Inicio do formulario de contato para opniões-->
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
                <?php
                    if(!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        echo ('<div class="alert alert-success">
                             <p><h4>'.$message.'</h4></p>
                             </div>');
                    }
                ?>
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">O que achou?</span>
              </h2>     
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">


            <form method="post" action="php/email.php">
               <div class="row">
                    <div class="col">
                    <p><h4>Nome</h4></p>
                      <input type="text" name="contato[0]" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                    <p><h4>Sobrenome</h4></p>
                      <input type="text" class="form-control" name="contato[1]" placeholder="Sobrenome">
                    </div>
                  </div>
						<div class="col-md-6">
              <p><h4>Telefone</h4></p>
              <input type="text" class="form-control" name="contato[2]" placeholder="(**)*********">
            </div>
                <div class="form-group">
                  <p><h4>E-mail</h4></p>
                       <input type="email" name="contato[3]" class="form-control" id="exampleFormControlInput1" placeholder="Nome@exemplo.com">
                </div>

                    <div class="form-group">
                      <p><h4>Sua opinião</h4></p>
                      <textarea class="form-control" name="contato[4]" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                   <div id="actions" class="row">
    <div class="form_group">
      <button type="submit" class="btn btn-primary">Enviar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Xnorlanchonete 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
