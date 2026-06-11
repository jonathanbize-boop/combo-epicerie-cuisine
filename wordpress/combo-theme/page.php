<?php
/**
 * Gabarit des pages simples (mentions légales, etc.) :
 * le contenu est édité directement dans l'éditeur WordPress.
 */
get_header();
?>
<main id="main">
	<section class="section section--paper">
		<div class="container" style="max-width: 50rem;">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php
			endwhile;
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
