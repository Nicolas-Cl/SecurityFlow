<?php
function register_my_menu() {
  register_nav_menu('flow-menu',__( 'Menu Principal' ));
}

add_action( 'init', 'register_my_menu' );
?>