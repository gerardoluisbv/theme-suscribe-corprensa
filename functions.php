<?php


function cps_assets(){

    wp_register_style("google-icon","https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0",array(),false,'all');
    wp_register_style("google-font-1","https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap",array(),false,'all');
    wp_register_style("google-font-2","https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,300;6..72,400;6..72,600;6..72,700&display=swap",array(),false,'all');
    wp_register_style("google-font-3","https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap",array(),false,'all');
    
    wp_register_style("glider","https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.css",array(),false,'all');

    wp_enqueue_style("normalize", get_template_directory_uri()."/styles/normalize.css",array(),false,'all');
    wp_enqueue_style("estilos-perfil", get_template_directory_uri()."/styles/profile.css",array(),false,'all');
    wp_enqueue_style("estilos", get_template_directory_uri()."/styles/style.css",array("google-icon","google-font-1","google-font-2","google-font-3","glider"));

    
    // wp_enqueue_script("suscribete-js",get_template_directory_uri()."/js/index.js");
    wp_enqueue_script("glider-js","https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js");
    wp_enqueue_script("suscribete-js",get_template_directory_uri()."/assets/js/script.js");

}

add_action("wp_enqueue_scripts","cps_assets");








function cps_analytics(){
    // codigo sobre el body
  }

add_action("wp_body_open", "cps_analytics");

function cps_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo',
    array(
        "width" => 150,
        "height" => 40,
        "flex-width" => true,
        "flex-height" => true,
    )
);

}

add_action("after_setup_theme","cps_theme_supports");


/* MENU */
/* MENU REGISTRADO EN WORDPRESS - POR AHORA SE MANEJARÁ POR */ 
register_nav_menus( array(
    'menu' => 'Menu'
));



/* PARA PODER VER ARCHIVOS SVG - config.php TAMBIEN FUE CONFIGURADO */ 

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');