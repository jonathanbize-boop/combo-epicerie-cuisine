<?php
/**
 * Gabarit de secours (requis par WordPress).
 */
get_header();
?>
<main id="main">
	<section class="section section--paper">
		<div class="container" style="max-width: 50rem;">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<article>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</article>
					<?php
				endwhile;
			else :
				?>
				<h1>Rien par ici !</h1>
				<p>La page demandée n'existe pas. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Retour à l'accueil</a>.</p>
				<?php
			endif;
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
