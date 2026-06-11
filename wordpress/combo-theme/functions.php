<?php
/**
 * COMBO Épicerie Cuisine — fonctions du thème.
 * Thème 100 % natif : aucun plugin requis.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

require get_template_directory() . '/inc/customizer.php';

/* ---------- Réglages de base ---------- */
function combo_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'combo_setup' );

/* ---------- Styles & scripts ---------- */
function combo_assets() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'combo-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_script( 'combo-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'combo_assets' );

/* ---------- URL d'une page selon son modèle ---------- */
function combo_tpl_url( $template ) {
	$pages = get_pages( array(
		'meta_key'   => '_wp_page_template',
		'meta_value' => 'page-templates/' . $template . '.php',
		'number'     => 1,
	) );
	return $pages ? get_permalink( $pages[0]->ID ) : home_url( '/' );
}

/* ---------- Création automatique des pages à l'activation ---------- */
function combo_create_pages() {
	$pages = array(
		array( 'title' => "L'Épicerie & la Cave", 'slug' => 'epicerie', 'template' => 'page-templates/epicerie.php' ),
		array( 'title' => 'La Cantine', 'slug' => 'cuisine', 'template' => 'page-templates/cuisine.php' ),
		array( 'title' => 'Infos & Contact', 'slug' => 'contact', 'template' => 'page-templates/contact.php' ),
		array( 'title' => 'Mentions légales', 'slug' => 'mentions-legales', 'template' => '' ),
	);

	foreach ( $pages as $page ) {
		if ( get_page_by_path( $page['slug'] ) ) {
			continue;
		}
		$content = '';
		if ( 'mentions-legales' === $page['slug'] ) {
			$content = "<!-- wp:heading --><h2>Éditeur du site</h2><!-- /wp:heading -->"
				. "<!-- wp:paragraph --><p>COMBO Épicerie - Cuisine<br>25 Route de la Faïencerie, hameau de l'Usine, 26160 Le Poët-Laval<br>Téléphone : 04 75 54 57 58<br><em>[À compléter : forme juridique, SIRET, TVA, directeur de la publication]</em></p><!-- /wp:paragraph -->"
				. "<!-- wp:heading --><h2>Hébergement</h2><!-- /wp:heading -->"
				. "<!-- wp:paragraph --><p><em>[À compléter : nom, adresse et téléphone de l'hébergeur]</em></p><!-- /wp:paragraph -->"
				. "<!-- wp:heading --><h2>Propriété intellectuelle</h2><!-- /wp:heading -->"
				. "<!-- wp:paragraph --><p>L'ensemble des contenus de ce site (textes, photographies, logo, illustrations) est la propriété de COMBO Épicerie - Cuisine, sauf mention contraire. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p><!-- /wp:paragraph -->"
				. "<!-- wp:heading --><h2>Consommation d'alcool</h2><!-- /wp:heading -->"
				. "<!-- wp:paragraph --><p>L'abus d'alcool est dangereux pour la santé, à consommer avec modération. La vente d'alcool est interdite aux mineurs.</p><!-- /wp:paragraph -->";
		}
		wp_insert_post( array(
			'post_title'   => $page['title'],
			'post_name'    => $page['slug'],
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => $content,
			'page_template' => $page['template'],
		) );
	}
}
add_action( 'after_switch_theme', 'combo_create_pages' );

/* ---------- SEO : meta description par page ---------- */
function combo_meta_description() {
	$desc = '';
	if ( is_front_page() ) {
		$desc = "COMBO, c'est une épicerie fine et du monde, une cave à vin et une cantine fait maison réunies sous le même toit au Poët-Laval, près de Dieulefit en Drôme provençale. Cuisine du monde le midi, commande au comptoir, bonne ambiance garantie.";
	} elseif ( is_page_template( 'page-templates/epicerie.php' ) ) {
		$desc = "L'épicerie COMBO au Poët-Laval, près de Dieulefit : produits fins et locaux, trésors d'épicerie du monde, vrac, cave à vin de vignerons, bières artisanales et chocolats d'artisans.";
	} elseif ( is_page_template( 'page-templates/cuisine.php' ) ) {
		$desc = "La cantine COMBO au Poët-Laval, près de Dieulefit : cuisine du monde 100 % fait maison servie le midi du mardi au samedi. Commande au comptoir, bar convivial, bonne ambiance.";
	} elseif ( is_page_template( 'page-templates/contact.php' ) ) {
		$desc = "Retrouvez COMBO au 25 Route de la Faïencerie, hameau de l'Usine, 26160 Le Poët-Laval, à 5 minutes de Dieulefit. Horaires, téléphone 04 75 54 57 58 et plan d'accès.";
	}
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'combo_meta_description', 1 );

/* ---------- SEO : données structurées (page d'accueil) ---------- */
function combo_json_ld() {
	if ( ! is_front_page() ) {
		return;
	}
	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => array( 'Restaurant', 'GroceryStore' ),
		'name'        => 'COMBO Épicerie - Cuisine',
		'description' => "Épicerie fine et du monde, cave à vin et cantine fait maison au Poët-Laval, près de Dieulefit, en Drôme provençale.",
		'url'         => home_url( '/' ),
		'telephone'   => '+' . preg_replace( '/\D/', '', '33' . substr( preg_replace( '/\D/', '', combo_get( 'phone' ) ), 1 ) ),
		'image'       => combo_img_url( 'home_img1' ),
		'servesCuisine' => array( 'Cuisine du monde', 'Fait maison' ),
		'priceRange'  => '€€',
		'address'     => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => combo_get( 'addr_l1' ) . ', ' . combo_get( 'addr_l2' ),
			'addressLocality' => 'Le Poët-Laval',
			'postalCode'      => '26160',
			'addressRegion'   => 'Drôme',
			'addressCountry'  => 'FR',
		),
		'sameAs'      => array( combo_get( 'instagram' ) ),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'combo_json_ld' );

/* ---------- Icônes SVG réutilisables ---------- */
function combo_icon( $name ) {
	$icons = array(
		'phone'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
		'arrow'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>',
		'check'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>',
		'pin'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
		'clock'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
		'table'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M6 11v9m12-9v9M4 20h16"/></svg>',
		'instagram' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>',
	);
	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}
