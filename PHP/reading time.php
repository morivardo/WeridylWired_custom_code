/* Estratto dal file function.php contenente il codice per lo stamp del tempo di lettura */

add_action( 'generate_after_entry_title', function() {
	$post = get_post();
    $content = $post->post_content;
    $wpm = 280; // How many words per minute.

    $clean_content = strip_shortcodes( $content );
    $clean_content = strip_tags( $clean_content );
    $word_count = str_word_count( $clean_content );
    $time = ceil( $word_count / $wpm );
    
    	if ($time == 1) {
        echo "<span class='r-time'>Tempo di lettura: {$time} minuto</span>";
    } else {
        echo "<span class='r-time'>Tempo di lettura: {$time} minuti</span>";
    }
});
