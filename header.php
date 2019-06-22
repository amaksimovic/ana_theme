<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title>
        <?php if( is_front_page() || is_home() ) {
            echo get_bloginfo( 'name' );
        } else {
            echo wp_title( '' );
        }?>
      </title>
      <meta name="description" content="<?php bloginfo('description'); ?>">
      <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Raleway:400,500|Source+Sans+Pro:400,400i,600&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    </head>

    <body>

      <div class="jumbotron jumbotron-fluid mb-2">

        <div class="container">

    			<a href="http://localhost/yanghaizi/"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-fluid" /></a>

        </div>

      </div>

      <nav class="navbar navbar-expand-sm sticky-top">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-content">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" alt="logo" height="25" class="navbar-nav" id="nav-icon">
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
