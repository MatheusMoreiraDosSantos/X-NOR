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
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="sua_opiniao.php">Sua opnião</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="depoimentos.html">Depoimentos de Clientes</a>
            </li>
            <li class="nav-item active px-lg-4">
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
              <div class="card">
                <article class="card-body">

                  <h4 class="card-title text-center mb-4 mt-1">Entrar</h4>

                    <hr>

                    <p class="text-success text-center">Bem-Vindo</p>
                    
                    <form action="controlpannel.php" id="usuarioLogin" method="POST">
                      <div class="form-group">
                          <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input name="" class="form-control" placeholder="Email" type="email">
                          </div> <!-- input-group.// -->
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-prepend">
                             <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                          </div>
                            <input class="form-control" placeholder="******" type="password">
                        </div> <!-- input-group.// -->
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <input type="hidden" value="entrar" name="operacao"/>
                        <button type="submit" class="btn btn-primary btn-block"> Entrar  </button>
                      </div> <!-- form-group// -->
                      <!--<p class="text-center"><a href="#" class="btn">Esqueceu a senha?</a></p>-->
                    </form>

                  <p class="text-center"><button class="btn btn-primary"data-toggle="modal" data-target="#exampleModal">Cadastre-se</button></p>
                </article>
             </div> <!-- card.// -->

  
                <!-- ***********************************************************-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form onsubmit="return salvarUsuario();" id="salvarUsuario" method="POST">
                            <div class="form-group" style="padding: 30px;">
                                <div class="row">
                                    <div class="col">
                                       <input type="text" class="form-control" placeholder="Nome" name="nome" required="true" label="teste">
                                       <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email"  required="true">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="password" class="form-control" placeholder="Senha" name="senha"  required="true">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col">
                                        <input type="text" class="form-control" placeholder="Rua" name="rua"  required="true">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                       <input type="text" class="form-control" placeholder="Bairro" name="bairro"  required="true">
                                       <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                       <input type="text" class="form-control" placeholder="Cidade" name="cidade"  required="true">
                                       <br> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Número" name="numero"  required="true">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="CEP" name="cep"  required="true">
                                        <br>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Telefone" name="telefone"  required="true">
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="salvar" name="operacao"/>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </form>
                        </div> 
                      </div>
                    </div>
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

   <script>
     function salvarUsuario(){
            $.ajax({

                'url' : 'actions/UsuarioActions.php',
                'type' : 'POST',
                'data' : $("#salvarUsuario").serialize(),  
                'success' : function(data) {              
                  alert('Data: '+data);
                  var datatable = $("#data_table").DataTable(); 
                  datatable.clear();  
                  var dataSet = JSON.parse(data);   
                  console.log(dataSet); 
                  datatable.rows.add(dataSet);    
                  datatable.draw();
                  return false;
                },
                'error' : function(request,error)
                {
                    alert("Request: "+JSON.stringify(request));
                    return false;
                }
            });
            
            return false;
        }
   </script>

  </body>

</html>