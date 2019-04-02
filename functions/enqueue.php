<?php

function mytheme_enqueue_scripts() {

  // Only use this method is we"re not in wp-admin
  if ( ! is_admin() ) {

    /**
     * Development styles and scripts
     * Use when in development mode (using `yarn start`)
     * Comment out when in production mode
     */
    wp_enqueue_script( "theme-bundle-js", get_template_directory_uri() . "/assets/app.bundle.js", array( "jquery" ), "", true );
    wp_enqueue_style( "theme-bundle-css", get_template_directory_uri() . "/assets/app.bundle.css", array(), "", "all" );

    /**
     * Production styles and scripts
     * Use when in production mode (after using `yarn build`)
     * Comment out when in development mode
     */
    //wp_enqueue_script( "theme-bundle-js", get_template_directory_uri() . "/assets/app.bundle.min.js", array( "jquery" ), "", true );
    //wp_enqueue_style( "theme-bundle-css", get_template_directory_uri() . "/assets/app.bundle.min.css", array(), "", "all" );
  }
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_scripts", 999);