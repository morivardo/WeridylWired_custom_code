/* Codice aggiunto seguendo le istruzioni proposte da Yoast SEO */

add_action( 'generate_before_content', function() {
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class="grid-container grid-parent"><p id="breadcrumbs">','</p></div>' );
    }
} );
