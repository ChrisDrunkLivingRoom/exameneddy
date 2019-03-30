<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<nav class="menu">
		<?php /*the_title( sprintf( '
				<h2 class="entry-title">
					<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
				</h2>
			');*/ ?>
		</nav>
	</header><!-- .entry-header -->
</article><!-- #post-${ID} -->
