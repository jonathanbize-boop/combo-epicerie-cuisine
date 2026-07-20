<?php
/**
 * Page d'accueil — tous les contenus sont modifiables dans
 * Apparence > Personnaliser > Page d'accueil.
 */
get_header();
$ep_url = combo_tpl_url( 'epicerie' );
$cu_url = combo_tpl_url( 'cuisine' );
$co_url = combo_tpl_url( 'contact' );
?>
<main id="main">

	<section class="hero" aria-labelledby="hero-title">
		<div class="container hero__grid">
			<div class="reveal">
				<p class="eyebrow"><?php combo_text( 'home_eyebrow' ); ?></p>
				<h1 id="hero-title"><?php combo_text( 'home_title' ); ?></h1>
				<p class="lead"><?php combo_text( 'home_lead' ); ?></p>
				<div class="hero__actions">
					<a class="btn btn--primary" href="<?php echo esc_url( $cu_url ); ?>"><?php combo_text( 'home_btn1' ); ?> <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></a>
					<a class="btn btn--ghost" href="<?php echo esc_url( $ep_url ); ?>"><?php combo_text( 'home_btn2' ); ?></a>
				</div>
			</div>
			<div class="hero__collage reveal reveal-delay-1">
				<figure class="collage--1"><?php combo_img( 'home_img1', array( 'alt' => "Le chef de COMBO souriant, wok en main, devant le comptoir de l'épicerie", 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?></figure>
				<figure class="collage--2"><?php combo_img( 'home_img2', array( 'alt' => 'Plat fait maison servi à la cantine COMBO', 'loading' => 'lazy' ) ); ?></figure>
				<figure class="collage--3"><?php combo_img( 'home_img3', array( 'alt' => 'Bouteilles de vin naturel de la cave COMBO', 'loading' => 'lazy' ) ); ?></figure>
				<p class="hero__badge"><?php combo_text( 'home_badge' ); ?></p>
			</div>
		</div>
	</section>

	<div class="marquee" aria-hidden="true">
		<div class="marquee__track">
			<span><?php combo_text( 'home_marquee' ); ?></span>
			<span><?php combo_text( 'home_marquee' ); ?></span>
		</div>
	</div>

	<section class="section section--paper" aria-labelledby="univers-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow"><?php combo_text( 'uni_eyebrow' ); ?></p>
				<h2 id="univers-title"><?php combo_text( 'uni_title' ); ?></h2>
			</div>
			<div class="universes">
				<a class="universe reveal" href="<?php echo esc_url( $ep_url ); ?>">
					<?php combo_img( 'uni1_img', array( 'class' => 'universe__bg', 'alt' => "Rayons de l'épicerie COMBO", 'loading' => 'lazy' ) ); ?>
					<div class="universe__body">
						<span class="hand"><?php combo_text( 'uni1_hand' ); ?></span>
						<h3><?php combo_text( 'uni1_title' ); ?></h3>
						<p><?php combo_text( 'uni1_text' ); ?></p>
						<span class="universe__link"><?php combo_text( 'uni1_link' ); ?> <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></span>
					</div>
				</a>
				<a class="universe reveal reveal-delay-1" href="<?php echo esc_url( $cu_url ); ?>">
					<?php combo_img( 'uni2_img', array( 'class' => 'universe__bg', 'alt' => 'Plats préparés à la cantine COMBO', 'loading' => 'lazy' ) ); ?>
					<div class="universe__body">
						<span class="hand"><?php combo_text( 'uni2_hand' ); ?></span>
						<h3><?php combo_text( 'uni2_title' ); ?></h3>
						<p><?php combo_text( 'uni2_text' ); ?></p>
						<span class="universe__link"><?php combo_text( 'uni2_link' ); ?> <?php echo combo_icon( 'arrow' ); // phpcs:ignore ?></span>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="concept-title">
		<div class="container">
			<div class="chalkboard reveal">
				<h2 id="concept-title"><?php combo_text( 'concept_title' ); ?></h2>
				<p><?php combo_text( 'concept_intro' ); ?></p>
				<div class="chalk-rules">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<div class="chalk-rule">
						<span class="num"><?php echo esc_html( $i ); ?>.</span>
						<h3><?php combo_text( 'c' . $i . '_title' ); ?></h3>
						<p><?php combo_text( 'c' . $i . '_text' ); ?></p>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--sand" aria-labelledby="lieu-title">
		<div class="container split">
			<div class="split__media reveal">
				<?php combo_img( 'lieu_img', array( 'alt' => 'Ambiance chaleureuse au comptoir de COMBO', 'loading' => 'lazy' ) ); ?>
				<span class="sticker"><?php combo_text( 'lieu_sticker' ); ?></span>
			</div>
			<div class="reveal reveal-delay-1">
				<p class="eyebrow">Le lieu</p>
				<h2 id="lieu-title"><?php combo_text( 'lieu_title' ); ?></h2>
				<p><?php combo_text( 'lieu_text' ); ?></p>
				<ul class="checklist">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<li><?php echo combo_icon( 'check' ); // phpcs:ignore ?><span><?php combo_text( 'lieu_li' . $i ); ?></span></li>
					<?php endfor; ?>
				</ul>
				<a class="btn btn--primary" href="<?php echo esc_url( $co_url ); ?>"><?php combo_text( 'lieu_btn' ); ?> <?php echo combo_icon( 'pin' ); // phpcs:ignore ?></a>
			</div>
		</div>
	</section>

	<section class="section quote-band" aria-label="Avis de clients">
		<div class="container reveal">
			<span class="stars" aria-label="5 étoiles sur 5">★★★★★</span>
			<blockquote><?php combo_text( 'quote_text' ); ?></blockquote>
			<cite><?php combo_text( 'quote_cite' ); ?> — <a href="<?php echo esc_url( combo_get( 'google_url' ) ); ?>" rel="noopener" target="_blank" style="color:#fff; text-decoration:underline;">voir les avis Google</a></cite>
		</div>
	</section>

	<section class="section section--paper" aria-labelledby="infos-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">Infos pratiques</p>
				<h2 id="infos-title">On vous attend <span class="hand hand--olive">quand ça vous chante</span></h2>
			</div>
			<div class="info-grid">
				<div class="info-card reveal">
					<h3><?php echo combo_icon( 'clock' ); // phpcs:ignore ?>Horaires hors période estivale</h3>
					<ul>
						<li><span>Mardi, mercredi, vendredi</span><span><?php combo_text( 'h_mar' ); ?></span></li>
						<li><span>Jeudi, samedi</span><span><?php combo_text( 'h_jeu' ); ?></span></li>
						<li><span>Dimanche &amp; lundi</span><span><?php combo_text( 'h_dim' ); ?></span></li>
					</ul>
				</div>
				<div class="info-card reveal reveal-delay-1">
					<h3><?php echo combo_icon( 'table' ); // phpcs:ignore ?>La cantine</h3>
					<p><?php combo_text( 'cantine_txt' ); ?></p>
					<p>Menu unique fait maison qui change tous les jours. Laissez-vous surprendre&nbsp;!</p>
				</div>
				<div class="info-card reveal reveal-delay-2">
					<h3><?php echo combo_icon( 'pin' ); // phpcs:ignore ?>Nous trouver</h3>
					<p><?php combo_text( 'addr_l1' ); ?><br><?php combo_text( 'addr_l2' ); ?><br><?php combo_text( 'addr_city' ); ?></p>
					<p><a href="<?php echo esc_attr( combo_phone_href() ); ?>"><?php combo_text( 'phone' ); ?></a></p>
				</div>
				<div class="info-card info-card--ete reveal">
					<h3><?php echo combo_icon( 'clock' ); // phpcs:ignore ?><?php combo_text( 'ete_title' ); ?></h3>
					<p><?php combo_text( 'ete_l1' ); ?></p>
					<p><?php combo_text( 'ete_l2' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="insta-title">
		<div class="container">
			<div class="section__head reveal">
				<p class="eyebrow">En ce moment chez COMBO</p>
				<h2 id="insta-title"><?php combo_text( 'insta_title' ); ?></h2>
				<p>Nouveautés, événements et coups de cœur : tout se passe sur <a class="insta-link" href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank"><?php combo_text( 'insta_handle' ); ?></a></p>
			</div>
			<div class="insta-strip reveal">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<a href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank" aria-label="Voir cette photo sur Instagram"><?php combo_img( 'insta_img' . $i, array( 'alt' => 'Photo de la vie de la boutique COMBO', 'loading' => 'lazy' ) ); ?></a>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section cta-final" aria-labelledby="cta-title">
		<div class="container reveal">
			<span class="hand"><?php combo_text( 'cta_hand' ); ?></span>
			<h2 id="cta-title"><?php combo_text( 'cta_title' ); ?></h2>
			<p><?php combo_text( 'cta_text' ); ?></p>
			<a class="btn btn--light" href="<?php echo esc_attr( combo_phone_href() ); ?>"><?php echo combo_icon( 'phone' ); // phpcs:ignore ?> <?php combo_text( 'phone' ); ?></a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
