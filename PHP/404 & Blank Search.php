/* Estratto del file content-404.php contenente le modifiche per la creazione delle pagine 404 e Blank Search */
	
	<header class="entry-header">
		<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- HTML is allowed in filter here. ?>
		<h1 class="entry-title" itemprop="headline"><?php echo apply_filters( 'generate_404_title', __( 'Oops! Pagina non trovata.', 'generatepress' ) ); ?></h1>
	</header>

	<?php
	/**
	 * generate_after_entry_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_post_image - 10
	 */
	do_action( 'generate_after_entry_header' );

	$itemprop = '';

	if ( 'microdata' === generate_get_schema_type() ) {
		$itemprop = ' itemprop="text"';
	}
	?>

	<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
		<?php
		printf(
			'<p>%s</p>',
			apply_filters( 'generate_404_text', __( 'Prova a cercare qualcos\'altro', 'generatepress' ) ) // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- HTML is allowed in filter here.
		);

		get_search_form();
		?>
	</div>
	<img class="stay_wired" src="https://weirdlywired.altervista.org/wp-content/uploads/2021/01/File-NotFound.png" alt="Stay Wired Be Weird"/>
	<?php
	/**
	 * generate_after_content hook.
	 *
	 * @since 0.1
	 */
	do_action( 'generate_after_content' );
	?>

</div>

