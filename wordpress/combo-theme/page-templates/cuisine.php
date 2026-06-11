<?php
/**
 * Template Name: La Cantine
 *
 * Contenus modifiables dans Apparence > Personnaliser > Page La Cantine.
 */
get_header();
$ep_url = combo_tpl_url( 'epicerie' );
$captions = array( 'Bœuf mariné, herbes & riz safrané', 'Maquereau laqué, salsa mangue', "La pause de l'après-midi", 'Le wok en action', 'Le comptoir des commandes', 'De quoi trinquer' );
?>
<main id="main">

	<section class="page-hero">
		<img class="page-hero__bg" src="<?php echo combo_img_url( 'cu_hero_img' ); ?>" alt="" loading="eager" fetchpriority="high">
		<div class="container">
			<nav class="breadcrumb" aria-label="Fil d'Ariane">
				<ol>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li aria-current="page"><?php the_title(); ?></li>
				</ol>
			</nav>
			<span class="hand"><?php combo_text( 'cu_hand' ); ?></span>
			<h1><?php combo_text( 'cu_title' ); ?></h1>
			<p><?php combo_text( 'cu_lead' ); ?></p>
		</div>
	</section>

	<div class="marquee" aria-hidden="true">
		<div class="marquee__track">
			<span><?php combo_text( 'cu_marquee' ); ?></span>
			<span><?php combo_text( 'cu_marquee' ); ?></span>
		</div>
	</div>

	<section class="section section--paper" aria-labelledby="chef-title">
		<div class="container split">
			<div class="split__media reveal">
				<img src="<?php echo combo_img_url( 'cu_chef_img' ); ?>" alt="Le chef de COMBO en pleine préparation au wok" loading="lazy">
				<span class="sticker"><?php combo_text( 'cu_chef_sticker' ); ?></span>
			</div>
			<div class="reveal reveal-delay-1">
				<p class="eyebrow">En cuisine</p>
				<h2 id="chef-title"><?php combo_text( 'cu_chef_title' ); ?></h2>
				<p class="lead"><?php combo_text( 'cu_chef_lead' ); ?></p>
				<ul class="checklist">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<li><?php echo combo_icon( 'check' ); // phpcs:ignore ?><span><?php combo_text( 'cu_chef_li' . $i ); ?></span></li>
					<?php endfor; ?>
				</ul>
				<p>Le plat du jour est annoncé sur <a href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank">Instagram</a> et sur l'ardoise à l'entrée. Un doute ? <a href="<?php echo esc_attr( combo_phone_href() ); ?>">Appelez-nous !</a></p>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="comment-title">
		<div class="container">
			<div class="chalkboard reveal">
				<h2 id="comment-title"><?php combo_text( 'cu_how_title' ); ?></h2>
				<div class="chalk-rules">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<div class="chalk-rule">
						<span class="num"><?php echo esc_html( $i ); ?>.</span>
						<h3><?php combo_text( 'cu_h' . $i . '_title' ); ?></h3>
						<p><?php combo_text( 'cu_h' . $i . '_text' ); ?></p>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--sand" aria-labelledby="bar-title">
		<div class="container split split--reverse">
			<div class="split__media reveal">
				<img src="<?php echo combo_img_url( 'cu_bar_img' ); ?>" alt="Le bar de COMBO et son ardoise de cocktails" loading="lazy">
				<span class="sticker"><?php combo_text( 'cu_bar_sticker' ); ?></span>
			</div>
			<div class="reveal reveal-delay-1">
				<p class="eyebrow">Le bar</p>
				<h2 id="bar-title"><?php combo_text( 'cu_bar_title' ); ?></h2>
				<p class="lead"><?php combo_text( 'cu_bar_lead' ); ?></p>
				<p><?php combo_text( 'cu_bar_text' ); ?></p>
				<a class="btn btn--primary" href="<?php echo esc_url( $ep_url ); ?>">Découvrir la cave <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></a>
			</div>
		</div>
	</section>

	<section class="section section--paper" aria-labelledby="plats-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Dans l'assiette</p>
				<h2 id="plats-title"><?php combo_text( 'cu_gal_title' ); ?></h2>
			</div>
			<div class="mosaic reveal">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<figure<?php echo in_array( $i, array( 1, 4 ), true ) ? ' class="tall"' : ''; ?>>
					<img src="<?php echo combo_img_url( 'cu_g' . $i ); ?>" alt="<?php echo esc_attr( $captions[ $i - 1 ] ); ?>" loading="lazy">
					<figcaption><?php echo esc_html( $captions[ $i - 1 ] ); ?></figcaption>
				</figure>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section quote-band" aria-label="Horaires du service">
		<div class="container reveal">
			<blockquote><?php combo_text( 'cu_quote' ); ?></blockquote>
			<cite>Groupe nombreux ou question sur le menu ? <a href="<?php echo esc_attr( combo_phone_href() ); ?>" style="color:#fff; text-decoration:underline;"><?php combo_text( 'phone' ); ?></a></cite>
		</div>
	</section>

	<section class="section cta-final" aria-labelledby="cta-title">
		<div class="container reveal">
			<span class="hand"><?php combo_text( 'cu_cta_hand' ); ?></span>
			<h2 id="cta-title"><?php combo_text( 'cu_cta_title' ); ?></h2>
			<p><?php combo_text( 'cu_cta_text' ); ?></p>
			<a class="btn btn--light" href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank">
				<?php echo combo_icon( 'instagram' ); // phpcs:ignore ?> Voir le menu sur Instagram</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
