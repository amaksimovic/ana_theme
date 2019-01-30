<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
      <meta name="discription" content="<?php bloginfo('discription'); ?>">
      <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Raleway:400,500|Source+Sans+Pro:400,400i,600&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    </head>

    <?php

      $ana_classes = array( 'ana-class', 'my-class' );

    ?>

    <body <?php body_class( $ana_classes ); ?>>

      <div class="jumbotron jumbotron-fluid mb-0">

        <div class="container">

    			<a href="http://localhost/yanghaizi/"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-fluid" /></a>

        </div>
        
      </div>

      <nav class="navbar navbar-expand-sm sticky-top">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-content">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', // Defined when registering the menu
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav mx-auto',
                'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
            ) );
            ?>
        </div>

      </nav>
