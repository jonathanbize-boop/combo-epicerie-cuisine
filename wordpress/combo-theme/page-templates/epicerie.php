<?php
/**
 * Template Name: Épicerie & Cave
 *
 * Contenus modifiables dans Apparence > Personnaliser > Page Épicerie & Cave.
 */
get_header();
$cu_url = combo_tpl_url( 'cuisine' );
$co_url = combo_tpl_url( 'contact' );
$captions = array( 'Les rayons épicerie', 'Bières & limonades artisanales', "Chocolatier d'art local", 'La cave à bières', 'Truffes & pralinés', 'Le comptoir' );
?>
<main id="main">

	<section class="page-hero">
		<?php combo_img( 'ep_hero_img', array( 'class' => 'page-hero__bg page-hero__bg--top', 'alt' => '', 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
		<div class="container">
			<nav class="breadcrumb" aria-label="Fil d'Ariane">
				<ol>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li aria-current="page"><?php the_title(); ?></li>
				</ol>
			</nav>
			<span class="hand"><?php combo_text( 'ep_hand' ); ?></span>
			<h1><?php combo_text( 'ep_title' ); ?></h1>
			<p><?php combo_text( 'ep_lead' ); ?></p>
		</div>
	</section>

	<div class="marquee" aria-hidden="true">
		<div class="marquee__track">
			<span><?php combo_text( 'ep_marquee' ); ?></span>
			<span><?php combo_text( 'ep_marquee' ); ?></span>
		</div>
	</div>

	<section class="section section--paper" aria-labelledby="intro-title">
		<div class="container split">
			<div class="reveal">
				<p class="eyebrow">Une épicerie pas comme les autres</p>
				<h2 id="intro-title"><?php combo_text( 'ep_intro_title' ); ?></h2>
				<p class="lead"><?php combo_text( 'ep_intro_lead' ); ?></p>
				<p><?php combo_text( 'ep_intro_text' ); ?></p>
			</div>
			<div class="split__media reveal reveal-delay-1">
				<?php combo_img( 'ep_intro_img', array( 'alt' => "Produits d'épicerie du monde avec ardoise explicative", 'loading' => 'lazy' ) ); ?>
				<span class="sticker"><?php combo_text( 'ep_intro_sticker' ); ?></span>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="familles-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Nos rayons</p>
				<h2 id="familles-title"><?php combo_text( 'ep_cards_title' ); ?></h2>
			</div>
			<div class="cards">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="card reveal<?php echo $i > 1 ? ' reveal-delay-' . ( $i - 1 ) : ''; ?>">
					<div class="card__img"><?php combo_img( 'ep_c' . $i . '_img', array( 'alt' => wp_strip_all_tags( combo_get( 'ep_c' . $i . '_title' ) ), 'loading' => 'lazy' ) ); ?></div>
					<div class="card__body">
						<span class="card__tag"><?php combo_text( 'ep_c' . $i . '_tag' ); ?></span>
						<h3><?php combo_text( 'ep_c' . $i . '_title' ); ?></h3>
						<p><?php combo_text( 'ep_c' . $i . '_text' ); ?></p>
					</div>
				</article>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section section--sand" aria-labelledby="galerie-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">La boutique en images</p>
				<h2 id="galerie-title"><?php combo_text( 'ep_gal_title' ); ?></h2>
			</div>
			<div class="mosaic reveal">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<figure<?php echo in_array( $i, array( 1, 4 ), true ) ? ' class="tall"' : ''; ?>>
					<?php combo_img( 'ep_g' . $i, array( 'alt' => $captions[ $i - 1 ], 'loading' => 'lazy' ) ); ?>
					<figcaption><?php echo esc_html( $captions[ $i - 1 ] ); ?></figcaption>
				</figure>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section quote-band" aria-label="Le coin cave">
		<div class="container reveal">
			<blockquote><?php combo_text( 'ep_quote' ); ?></blockquote>
			<cite>La règle de la maison — à découvrir <a href="<?php echo esc_url( $cu_url ); ?>" style="color:#fff; text-decoration:underline;">côté cantine</a></cite>
		</div>
	</section>

	<section class="section cta-final" aria-labelledby="cta-title">
		<div class="container reveal">
			<span class="hand">Pssst…</span>
			<h2 id="cta-title"><?php combo_text( 'ep_cta_title' ); ?></h2>
			<p><?php combo_text( 'ep_cta_text' ); ?></p>
			<a class="btn btn--light" href="<?php echo esc_url( $co_url ); ?>">Horaires &amp; accès <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
