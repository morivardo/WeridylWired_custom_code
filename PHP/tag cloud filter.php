/* Filtro per limitare il ridimensionamento della dimensione del font all'interno della tag cloud */

add_filter( 'widget_tag_cloud_args', 'all_tag_cloud_widget_parameters' );
function all_tag_cloud_widget_parameters() {
    $args = array(
        'smallest' => 10, 
        'largest' => 19, 
        'unit' => 'pt',
    );
    return $args;
}
