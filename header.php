<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header" style="background-image: url(<?php echo get_theme_file_uri('img/bg1.JPG'); ?>)">
      <img class="logo" src="<?php echo get_theme_file_uri('img/hongo_logo.png'); ?>">
      <h1 class="site-title">hongomc</h1>
      <?php wp_nav_menu(
        array(
          'container' => 'nav',
        )
      ); ?>
    </header>
