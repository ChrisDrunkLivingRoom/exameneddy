<input type="checkbox" id="chkBoutonBurger"/>
<label for="chkBoutonBurger" class="boutonBurger"></label>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
//////////////////  front-page.php //////////////
?>
<section id="primary" class="content-area">
<main id="main" class="site-main">

	<?php
		$args = array( 'post_type' => 'page',
		'posts_per_page' => 1  );
		$query = new WP_Query ( $args );
		/*$id = 1; // add the ID of the page where the zero is
		$p = get_page($id);
		$t = $p->post_title;
		echo '<h3>'.apply_filters('post_title', $t).'</h3>'; // the title is here wrapped with h3
		echo apply_filters('the_content', $p->post_content);*/

		/* Start the Loop  La première boucle */
		while ( $query->have_posts() ) :
			$query->the_post();
			get_template_part( 'template-parts/content/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile; // End of the loop.

		?>

<!--  /////////////////////////////////// La deuxième boucle pour les articles de catégorie Nouvelle -->
	<?php
		$args = array( 'post_type' => 'post',
					   'category_name' => 'nouvelle',
					   'posts_per_page' => 4);

		$query = new WP_Query ( $args );
	
		if ($query->have_posts() ) {
	?>

<article  class="page type-page status-publish has-post-thumbnail hentry entry">
	<div class="entry-content">
		<div class="wp-block-columns has-4-columns">
		<?php while ( $query->have_posts()) {
				$query->the_post();
				$leTitre = 'Nouvelles';
				include(locate_template( 'template-parts/content/frontpage-quatre-images.php' ));
			}			 
	 wp_reset_postdata();
	}
?>
		</div>	


<!--  ////////////////////// La troisième boucle pour les articles de catégorie  événement  -->

<?php
		$args = array( 'post_type' => 'post',
					   'category_name' => 'evenement',
					   'posts_per_page' => 4
					);

		$query = new WP_Query ( $args );
	
		if ($query->have_posts() ) {
	?>

		<?php while ( $query->have_posts()) {
				$query->the_post();
				include(locate_template( 'template-parts/content/frontpage-une-image.php' ));
			}			 

	 wp_reset_postdata();
	}
?>
	</div>	
</article>	
<!--  ///////////////////////////////////////////////////////////////////////// -->

	</main><!-- #main -->
</section><!-- #primary -->

<script>
		/*
		Contrôler l'aspect de la case à cocher au clic sur les boutons
		*/
		
		(function() { //IIFE
			var leCheckBox = document.querySelector("input");
			var lesBoutons = document.querySelectorAll(".site-navigation");
			var leMenu = document.querySelectorAll("nav");
			console.log(lesBoutons);
			var nbBoutons = lesBoutons.length;		
			for (var i = 0; i < nbBoutons; i++) {
				lesBoutons[i].addEventListener("click", function() {
					console.log(leCheckBox.checked);
					document.getElementById(".site-navigation").style.transform = "translateX(100%)";
					leCheckBox.checked = false;
				}, false);
			}


		})(); //Fin IIFE

		/* style.transform = "rotate(20deg)" */
</script>



<?php
get_footer();
?>