<?php
// Estilos y scripts
function lader_enqueue_scripts() {
    // Encolar el estilo principal
    wp_enqueue_style( 'lader-style', get_stylesheet_uri() );

    // Encolar un archivo JavaScript (ajusta la ruta según sea necesario)
    wp_enqueue_script(
        'carousel-js', // Handle del script
        get_template_directory_uri() . '/js/carousel.js', // Ruta del archivo JavaScript
        array(), // Dependencias, si las hay
        null, // Número de versión (null para no versionar)
        true // Cargar en el pie de página
    );
}
add_action( 'wp_enqueue_scripts', 'lader_enqueue_scripts' );

// Soporte para miniaturas
add_theme_support( 'post-thumbnails' );
