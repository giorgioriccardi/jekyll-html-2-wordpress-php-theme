<?php

/**
 * Enqueue scripts and styles.
 */
function oppositiontv_scripts(){
    wp_enqueue_style( 'oppositiontv-style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/main.css' );
    // Fonts: Fira Sans and Merriweather, https://www.google.com/fonts
      // wp_enqueue_style( 'oppositiontv-google-fonts', '//fonts.googleapis.com/css?family=Terminal+Dosis:400,300,300italic,400italic,500,500italic,600,700,700italic' );
    // wp_enqueue_style( 'oppositiontv-google-fonts', '//fonts.googleapis.com/css?family=Terminal+Dosis:600' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/all.js', $deps = array('jquery'), $ver = true, $in_footer = true );
  }
  add_action( 'wp_enqueue_scripts', 'oppositiontv_scripts' );