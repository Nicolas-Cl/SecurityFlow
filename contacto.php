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
          <h1 class="mt-5"> Contacto </h1>
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
                <label for="exampleFormControlInput1">Nombre</label>
                <input class="form-control" id="exampleFormControlInput3" placeholder="Escribe tu nombre" type="text">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="nombre@dominio.cl" type="email">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Servicio a Cotizar</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Opción 1</option>
                  <option>Opción 2</option>
                  <option>Opción 3</option>
                  <option>Opción 4</option>
                  <option>Opción 5</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>

        <div class="col-6 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.8369686706687!2d-70.73515358454392!3d-33.45355378077307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c39b8bb03461%3A0xcd991fac41819f5e!2sB%C3%BAfalo+115%2C+Lo+Prado%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1535092334042" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          <p class="mt-2">
            <span class="red">Pasaje Bufalo #115</span><br>
            Lo Prado - Santiago de Chile<br>
            +56 9 9129 1245</p>
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
  </body>
</html>
