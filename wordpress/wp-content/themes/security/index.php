<?php get_header() ?>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carrusel-400">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/images/bg-slider1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/images/bg-slider2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/images/bg-slider3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/images/bg-slider4.jpg" alt="Fourth slide">
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
          <h4 class="mb-4 yellow">Últimas Noticias</h4>
          
          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9">
              <h5><a href="#">Titulo Noticia </a></h5>
              <p class="txt-small text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque unde ut voluptatibus nostrum modi! Vel unde aliquam eius ex, quidem. Quae, officia quia ut in nostrum, sed porro placeat commodi.</p>
              </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3"><img src="https://via.placeholder.com/100x100"></div>
            <div class="col-sm-9 txt-small">
              <h5><a href="#">Titulo Noticia </a></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque unde ut voluptatibus nostrum modi! Vel unde aliquam eius ex, quidem. Quae, officia quia ut in nostrum, sed porro placeat commodi.</p>
              </div>
          </div>
        
        </div>

          <?php 
          $args = array(
            'post_type' => 'post',
            'cat'    => 4,


          );
          
          $query = new WP_Query( $args );

          ?>
          
         <div class="col-sm-6">
          <h4 class="mb-4 yellow">Últimas Noticias</h4>

          <?php
          // The Loop
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <img src="https://via.placeholder.com/100x100">
                </div>

                <div class="col-sm-9">
                  <h5><a href="#"><?php the_title(); ?> </a></h5>
                  <p class="txt-small text-justify"><?php the_excerpt(); ?></p>
                </div>
              </div>

              <?php 
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          } else {
          // no posts found
          }
          ?>       

        </div>    
      </div>
    </div>
  </div>  

  <footer class="footer bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <a href="#"><i class="fa fa-facebook ml-2"></i></a>
          <a href="#"><i class="fa fa-instagram ml-2"></i></a>
          <a href="#"><i class="fa fa-twitter ml-2"></i></a>
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

<?php get_footer() ?>