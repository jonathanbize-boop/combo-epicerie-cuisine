<?php
/**
 * Template Name: Infos & Contact
 *
 * Contenus modifiables dans Apparence > Personnaliser > Page Infos & Contact.
 */
get_header();
$maps_q = rawurlencode( combo_get( 'maps_q' ) );
?>
<main id="main">

	<section class="page-hero">
		<img class="page-hero__bg page-hero__bg--faces" src="<?php echo combo_img_url( 'co_hero_img' ); ?>" alt="" loading="eager" fetchpriority="high">
		<div class="container">
			<nav class="breadcrumb" aria-label="Fil d'Ariane">
				<ol>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li aria-current="page"><?php the_title(); ?></li>
				</ol>
			</nav>
			<span class="hand"><?php combo_text( 'co_hand' ); ?></span>
			<h1><?php combo_text( 'co_title' ); ?></h1>
			<p><?php combo_text( 'co_lead' ); ?></p>
		</div>
	</section>

	<section class="section section--paper" aria-labelledby="coord-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Toutes les infos</p>
				<h2 id="coord-title">Venir chez COMBO <span class="hand hand--olive">c'est facile</span></h2>
			</div>
			<div class="info-grid">
				<div class="info-card reveal">
					<h3><?php echo combo_icon( 'pin' ); // phpcs:ignore ?>Adresse</h3>
					<p><strong>COMBO Épicerie - Cuisine</strong><br>
					<?php combo_text( 'addr_l1' ); ?><br>
					<?php combo_text( 'addr_l2' ); ?><br>
					<?php combo_text( 'addr_city' ); ?></p>
					<p><?php combo_text( 'co_parking' ); ?></p>
				</div>
				<div class="info-card reveal reveal-delay-1">
					<h3><?php echo combo_icon( 'clock' ); // phpcs:ignore ?>Horaires hors période estivale</h3>
					<ul>
						<li><span>Mardi</span><span><?php combo_text( 'h_mar' ); ?></span></li>
						<li><span>Mercredi</span><span><?php combo_text( 'h_mer' ); ?></span></li>
						<li><span>Jeudi</span><span><?php combo_text( 'h_jeu' ); ?></span></li>
						<li><span>Vendredi</span><span><?php combo_text( 'h_ven' ); ?></span></li>
						<li><span>Samedi</span><span><?php combo_text( 'h_sam' ); ?></span></li>
						<li><span>Dim &amp; lundi</span><span><?php combo_text( 'h_dim' ); ?></span></li>
					</ul>
					<p style="margin-top:1rem;"><strong>Cantine :</strong> <?php combo_text( 'cantine_txt' ); ?></p>
				</div>
				<div class="info-card reveal reveal-delay-2">
					<h3><?php echo combo_icon( 'phone' ); // phpcs:ignore ?>Nous joindre</h3>
					<p>Une question, un groupe, une envie particulière ?</p>
					<p><a href="<?php echo esc_attr( combo_phone_href() ); ?>"><strong><?php combo_text( 'phone' ); ?></strong></a></p>
					<p><a class="insta-link" href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank">
						<?php echo combo_icon( 'instagram' ); // phpcs:ignore ?>
						<?php combo_text( 'insta_handle' ); ?></a></p>
					<p><a href="<?php echo esc_url( combo_get( 'google_url' ) ); ?>" rel="noopener" target="_blank">Voir notre fiche Google</a></p>
				</div>
				<div class="info-card info-card--ete reveal">
					<h3><?php echo combo_icon( 'clock' ); // phpcs:ignore ?><?php combo_text( 'ete_title' ); ?></h3>
					<p><?php combo_text( 'ete_l1' ); ?></p>
					<p><?php combo_text( 'ete_l2' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="map-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Plan d'accès</p>
				<h2 id="map-title">Nous trouver sur la carte</h2>
			</div>
			<div class="map-wrap reveal">
				<iframe
					src="https://www.google.com/maps?q=<?php echo $maps_q; // phpcs:ignore ?>&amp;output=embed&amp;hl=fr"
					title="Carte Google Maps : COMBO Épicerie Cuisine"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
					allowfullscreen></iframe>
			</div>
			<p class="reveal" style="margin-top:1.5rem;">
				<a class="btn btn--primary" href="https://www.google.com/maps/dir/?api=1&amp;destination=<?php echo $maps_q; // phpcs:ignore ?>" rel="noopener" target="_blank">
					Lancer l'itinéraire <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></a>
			</p>
		</div>
	</section>

	<section class="section section--sand" aria-labelledby="acces-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Temps de trajet</p>
				<h2 id="acces-title">À deux pas de chez vous</h2>
			</div>
			<div class="cards">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="card reveal<?php echo $i > 1 ? ' reveal-delay-' . ( $i - 1 ) : ''; ?>"><div class="card__body">
					<span class="card__tag"><?php combo_text( 'co_d' . $i . '_tag' ); ?></span>
					<h3><?php combo_text( 'co_d' . $i . '_title' ); ?></h3>
					<p><?php combo_text( 'co_d' . $i . '_text' ); ?></p>
				</div></article>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section cta-final" aria-labelledby="cta-title">
		<div class="container reveal">
			<span class="hand"><?php combo_text( 'co_cta_hand' ); ?></span>
			<h2 id="cta-title"><?php combo_text( 'co_cta_title' ); ?></h2>
			<p><?php combo_text( 'co_cta_text' ); ?></p>
			<a class="btn btn--light" href="<?php echo esc_attr( combo_phone_href() ); ?>"><?php echo combo_icon( 'phone' ); // phpcs:ignore ?> <?php combo_text( 'phone' ); ?></a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
