<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Normtronics</title>
    <?php wp_head(); ?>
  </head>

  <body  <?php body_class(); ?>>

    <header class="main container">
      <div class="row">
        <div class="col-lg-12">
          <h1>NORMTRONICS</h1>
        </div>
      </div>

      <?php
        wp_nav_menu(array(
            'theme_location'=>'primary',
            'container' => 'nav',
            'menu_class' => 'row'
          ));
      ?>
    </header>
