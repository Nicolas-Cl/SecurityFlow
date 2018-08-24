<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo wp_get_document_title(); ?></title>

	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

   <!-- Bootstrap -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body <?php body_class(); ?>>

    <div class="container">
    <div class="row">
      <div class="col-sm-2 col-xl-2">
        <img src="<?php echo get_template_directory_uri();?>/images/logo-secureflow.png" width="150">
      </div>
      <div class="col-sm-10 col-xl-10">
        <nav class="mt-5 navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php if ( has_nav_menu( 'flow-menu' ) ) { ?>
            <?php wp_nav_menu( array( 'theme_location' => 'flow-menu' ) ); ?>
          <?php } ?>
        </nav>
      </div>
    </div> 
  </div>



