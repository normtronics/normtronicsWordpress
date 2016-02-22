<?php

function normtronics_script_enqueue(){
  wp_enqueue_style(
    'font',
    get_template_directory_uri() . '/fonts/bower_components/source-code-pro/source-code-pro.css',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_style(
    'boostrap',
    get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.css',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_style(
    'customstyle',
    get_template_directory_uri() . '/css/main.css',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_script(
    'customjs',
    get_template_directory_uri() . '/js/main.js',
    array(),
    '1.0.0',
    true
  );
}

add_action(
  'wp_enqueue_scripts',
  'normtronics_script_enqueue'
);


function normtronics_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Nav');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'normtronics_theme_setup');
