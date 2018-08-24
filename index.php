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



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carrusel-400">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/bg-slider1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/bg-slider2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/bg-slider3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/bg-slider4.jpg" alt="Fourth slide">
      </div>    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  <div class="bg-white">
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="mb-4 yellow">Nuestra Empresa</h4>
          
          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9">
              <h5><a href="#">Misión</a></h5>
              <p class="txt-small text-justify">Ser una consultora lider en la asesoria integral en Prevención de Riesgos y medio ambiente, apoyando de forma permanente la producción, el servicio y crecimiento de sus clientes sea cual sea su actividad economica</p>
              </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9 txt-small">
              <h5><a href="#">Visión</a></h5>
              <p>Ser reconocidos por nuestra excelencia, profesionalismo y calidad de servicio, además de contribuir de manera activa e innovadora, al logro de los objetivos estrategicos de nuestros clientes a nivel nacional</p>
              </div>
          </div>

        </div>
   
         <div class="col-sm-6">
          <h4 class="mb-4 yellow">Noticias destacadas</h4>
          
          <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
       the_content(); 
                     //
            } // end while
          } // end if
          ?>

          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9">
              <h5><a href="#">Reconocimientos a empresas asesoradas por SecurityFlow </a></h5>
              <p class="txt-small text-justify">Empresas comprometidas con la seguridad, siendo asesoradas directamente por nosotros, fueron premiadas la jornada del dia 15 de Agosto, en dependencias del organismo administrador ACHS. El reconocimiento recibido es debido a la certificación de comites paritarios, ademas de la participación activa de estos en materias de seguridad y salud ocupacional.</p>
              </div>
          </div>
            } // end while
          } // end if
          ?>

          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9 txt-small">
              <h5><a href="#">Empresas comprometidas en campaña </a></h5>
              <p>Durante este segundo semestre nuestras empresas se inscriben de manera voluntaria en nuestra campaña "cuida tus ojos". las cuales deben.</p>
              </div>
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
  </body>
</html>