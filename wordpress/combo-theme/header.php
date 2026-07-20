<?php
/**
 * En-tête commun : logo, navigation, bouton téléphone.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.png">
	<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/karla-400-normal-latin.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/boogaloo-400-normal-latin.woff2" crossorigin>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Aller au contenu principal', 'combo' ); ?></a>

<header class="site-header">
	<div class="container">
		<nav class="nav" aria-label="Navigation principale">
			<a class="nav__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="COMBO Épicerie Cuisine — Accueil">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-combo-epicerie-cuisine.png" alt="Logo COMBO Épicerie Cuisine" width="190" height="62">
			</a>
			<button class="nav__burger" aria-expanded="false" aria-controls="menu" aria-label="Ouvrir le menu">
				<span></span><span></span><span></span>
			</button>
			<div class="nav__menu" id="menu">
				<ul class="nav__links">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_front_page() ) { echo 'aria-current="page"'; } ?>>Accueil</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'epicerie' ) ); ?>" <?php if ( is_page_template( 'page-templates/epicerie.php' ) ) { echo 'aria-current="page"'; } ?>>L'Épicerie &amp; la Cave</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'cuisine' ) ); ?>" <?php if ( is_page_template( 'page-templates/cuisine.php' ) ) { echo 'aria-current="page"'; } ?>>La Cantine</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'contact' ) ); ?>" <?php if ( is_page_template( 'page-templates/contact.php' ) ) { echo 'aria-current="page"'; } ?>>Infos &amp; Contact</a></li>
					<li><a class="btn btn--primary nav__cta" href="<?php echo esc_attr( combo_phone_href() ); ?>">
						<?php echo combo_icon( 'phone' ); // phpcs:ignore ?>
						<?php combo_text( 'phone' ); ?></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
