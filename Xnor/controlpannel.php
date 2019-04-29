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
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="pedidos.html">Pedidos</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="sua_opiniao.php">Sua opnião</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="depoimentos.html">Depoimentos de Clientes</a>
            </li>
            <li class="nav-item  px-lg-4 active">
              <a class="nav-link text-uppercase text-expanded" href="controlpannel.php">Painel de Controle</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--**************************************************************************************-->



  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-description d-inline mr-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Painel de Controle</span>
            </h2>
            <button class="btn btn-primary"data-toggle="modal" data-target="#cadastro_lanche">Cadastrar Lanche</button>
            <button class="btn btn-primary"data-toggle="modal" data-target="#cadastro_bebida">Cadastrar Bebida</button>
          </div>
        </div>
      </div>
    </div>
  </section>


              <div class="modal fade" id="cadastro_lanche" tabindex="1" role="dialog" aria-labelledby="cadastro_lanche" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cadastro_lanche">Cadastre um lanche</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form onsubmit="return salvarLanche();" id="salvarLanche" method="POST">
                        <div class="form-group" style="padding: 30px;">
                          <div class="row">
                              <div class="col">
                                 <input type="text" class="form-control" placeholder="Nome" name="nome" required="true" label="teste">
                                 <br>
                              </div>
                          </div>
                          <div class="row">
                             <div class="col">
                                  <textarea type="text" class="form-control" placeholder="Descricao" name="descricao"  required="true"></textarea> 
                                  <br>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                 <input type="text" class="form-control" placeholder="Valor" name="valor"  required="true">
                                 <br>
                              </div>
                          </div>
                      </div>
                      <input type="hidden" value="salvarLanche" name="operacao"/>
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </form>
                  </div> 
                </div>
              </div>
            </div>

            <div class="modal fade" id="cadastro_bebida" tabindex="1" role="dialog" aria-labelledby="cadastro_bebida" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cadastro_bebida">Cadastre uma Bebida</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form onsubmit="return salvarBebida();" id="salvarLanche" method="POST">
                        <div class="form-group" style="padding: 30px;">
                          <div class="row">
                              <div class="col">
                                 <input type="text" class="form-control" placeholder="Nome" name="nome" required="true" label="teste">
                                 <br>
                              </div>
                          </div>
                          <div class="row">
                             <div class="col">
                                  <textarea type="text" class="form-control" placeholder="Descricao" name="descricao"  required="true"></textarea> 
                                  <br>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                 <input type="text" class="form-control" placeholder="Valor" name="valor"  required="true">
                                 <br>
                              </div>
                          </div>
                      </div>
                      <input type="hidden" value="salvarLanche" name="operacao"/>
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </form>
                  </div> 
                </div>
              </div>
            </div>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Xnorlanchonete 2018</p>
      </div>
    </footer>


    <script type="text/javascript">
      function salvarLanche(){
            $.ajax({

                'url' : 'actions/LancheActions.php',
                'type' : 'POST',
                'data' : $("#salvarLanche").serialize(),  
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

        function salvarBebida(){
            $.ajax({

                'url' : 'actions/BebidaActions.php',
                'type' : 'POST',
                'data' : $("#salvarBebida").serialize(),  
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
