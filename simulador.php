<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SecurityFlow - Empresa de Asesorias en Prevención de Riesgos. </title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-xl-2">
        <img src="images/logo-secureflow.png" width="150">
      </div>
      <div class="col-sm-10 col-xl-10">
        <nav class="mt-5 navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php include('_menu.php');?>
        </nav>
      </div>
    </div> 
  </div>

  <div class="bg-bar">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="mt-5"> Simulador de Multas </h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid pt-5 pb-5 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-6 text-justify">
          
          <div class="bd-example">
            <form>

              <div class="form-group">
                <label for="exampleFormControlSelect1">¿La Obra cuenta con cantidad suficiente de Baños?</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="">Seleccione Opción</option>
                  <option value="1">Si</option>
                  <option value="2" rel="100">No</option>
                  <option value="3">No Aplica</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">¿Existe comedor habilitado en obra?</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option value="">Seleccione Opción</option>
                  <option value="1">Si</option>
                  <option value="2" rel="150">No</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect3">¿Existe Vigilancia Médica para personal expuesto a ruido?</label>
                <select class="form-control" id="exampleFormControlSelect3">
                  <option value="">Seleccione Opción</option>
                  <option value="1">Si</option>
                  <option value="2" rel="80">No</option>
                  <option value="3">No Aplica</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect4">¿Se encuentra implementado el Programa PsicoSocial?</label>
                <select class="form-control" id="exampleFormControlSelect4">
                  <option value="">Seleccione Opción</option>
                  <option value="1">Si</option>
                  <option value="2" rel="200">No</option>
                  <option value="3">No Aplica</option>
                </select>
              </div>

              <button type="button" class="btn btn-flow">Evaluar</button>


            </form>
          </div>

        </div>

        <div class="offset-2 col-4">
          <div class="oculto">
            <h3 clasS="mb-4 red">Resultado Evaluación</h3>
            <p class="txt-small">
              Estimado usuario<br><br>
              Ud tiene <code id="nVeces"></code> faltas.<br>
              El Valor de la UTM es : <code id="vUTM"></code><br>
              La Cantidad de UTM de su multa serían <code id="vTotalUTM"></code><br><br>
              
              El Valor total de sus multa sería  <code id="vTotal"></code><br>
            </p>

          </div>
        </div>
     
      </div>
    </div>
  </div>


    <footer class="footer bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <a href="#"><i class="fab fa-facebook ml-2"></i></a>
            <a href="#"><i class="fab fa-instagram ml-2"></i></a>
            <a href="#"><i class="fab fa-twitter ml-2"></i></a>
          </div>
          <div class="col-9 text-right txt-small">
            Todos los derechos reservados - Nicolas de Flow Chile S.A.

          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bootstrap-growl.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
