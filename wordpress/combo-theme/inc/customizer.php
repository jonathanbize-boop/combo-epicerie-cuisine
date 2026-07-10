<?php
/**
 * COMBO — Réglages éditables par le client (Apparence > Personnaliser).
 * Tout est natif WordPress : aucun plugin requis.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/** Valeurs par défaut : le site fonctionne tel quel dès l'activation. */
function combo_defaults() {
	return array(
		// Coordonnées
		'phone'           => '04 75 54 57 58',
		'addr_l1'         => '25 Route de la Faïencerie',
		'addr_l2'         => "L'Usine",
		'addr_city'       => '26160 Le Poët-Laval',
		'instagram'       => 'https://www.instagram.com/comboepiceriecuisine/',
		'insta_handle'    => '@comboepiceriecuisine',
		'google_url'      => 'https://share.google/jgypqonhB6zPnx7X9',
		'footer_baseline' => "L'épicerie qui cuisine !",
		'footer_desc'     => 'Épicerie fine, cave à vin et cantine fait maison en Drôme provençale, entre La Bégude-de-Mazenc et Dieulefit.',
		'maps_q'          => 'COMBO Épicerie Cuisine, 25 Route de la Faïencerie, 26160 Le Poët-Laval',
		// Horaires
		'hours_f1'        => 'Mar, mer, ven : 10h – 18h',
		'hours_f2'        => 'Jeu, sam : 10h – 15h30',
		'hours_f3'        => 'Cantine : midi, mar – sam',
		'hours_f4'        => 'Fermé dim & lun',
		'hours_f5'        => 'Été : mar – sam, 10h – 18h30',
		'h_mar'           => '10h – 18h',
		'h_mer'           => '10h – 18h',
		'h_jeu'           => '10h – 15h30',
		'h_ven'           => '10h – 18h',
		'h_sam'           => '10h – 15h30',
		'h_dim'           => 'Fermé',
		'cantine_txt'     => 'Service le midi, <strong>du mardi au samedi</strong>, de 12h à 14h.',
		'ete_title'       => 'Période estivale !',
		'ete_l1'          => '<strong>Juillet & août :</strong> épicerie ouverte tous les jours du mardi au samedi, de 10h à 18h30, avec boissons et glaces tous les après-midis.',
		'ete_l2'          => "<strong>Restauration estivale</strong> tous les midis jusqu'à 14h30, ainsi qu'en soirée les mercredis, jeudis et vendredis de 18h à 21h, du 22 juillet au 21 août — avec nos spécialités de grillades à la créole !",
		// Accueil — héro
		'home_eyebrow'    => 'Le Poët-Laval · Drôme provençale',
		'home_title'      => "L'épicerie qui cuisine, <span class=\"accent\">la cantine qui régale</span>",
		'home_lead'       => "Sous le même toit, à l'Usine : une <strong>épicerie fine et du monde</strong>, une <strong>cave à vin</strong> et une <strong>cantine 100 % fait maison</strong> qui fait voyager vos papilles, à deux pas de Dieulefit.",
		'home_btn1'       => 'Découvrir la cantine',
		'home_btn2'       => "Explorer l'épicerie",
		'home_badge'      => '100% fait maison !',
		'home_marquee'    => 'Épicerie fine • Cuisine du monde • Cave à vin • Fait maison • Bières artisanales • Produits locaux • Café & douceurs • Bonne ambiance •',
		// Accueil — deux univers
		'uni_eyebrow'     => 'Deux univers, une même gourmandise',
		'uni_title'       => 'Faites vos courses, restez déjeuner <span class="hand">(ou l\'inverse !)</span>',
		'uni1_hand'       => 'Côté boutique',
		'uni1_title'      => "L'Épicerie & la Cave",
		'uni1_text'       => "Épicerie fine, trésors du monde entier, vins de vignerons, bières artisanales et chocolats d'artisans locaux.",
		'uni1_link'       => 'Entrer dans la boutique',
		'uni2_hand'       => 'Côté fourneaux',
		'uni2_title'      => 'La Cantine',
		'uni2_text'       => 'Une cuisine du monde généreuse et 100 % fait maison, servie le midi du mardi au samedi. Un menu unique qui change tous les jours : laissez-vous surprendre !',
		'uni2_link'       => 'Voir la cantine',
		// Accueil — concept (ardoise)
		'concept_title'   => 'Ici, <span class="underline">pas de service en salle</span> — et c\'est voulu !',
		'concept_intro'   => 'Chez COMBO, on cultive la simplicité et la convivialité. Comme sur nos ardoises :',
		'c1_title'        => 'On commande au comptoir',
		'c1_text'         => "Plats, boissons, café, douceurs : tout se passe au comptoir, dans la bonne humeur. Pas de serveur, pas de chichis — juste l'essentiel.",
		'c2_title'        => "Le bar accompagne l'assiette",
		'c2_text'         => "Vins de vignerons ou bières artisanales… L'alcool se déguste ici uniquement avec quelque chose à manger. En revanche, softs en tout genre à volonté !",
		'c3_title'        => 'On prend le temps',
		'c3_text'         => "Grandes tablées, lumière dorée et discussions qui s'éternisent : COMBO est un lieu de vie où l'on vient autant pour l'ambiance que pour l'assiette.",
		// Accueil — le lieu
		'lieu_title'      => 'Une ancienne usine devenue repaire gourmand',
		'lieu_text'       => "À l'Usine, sur la route entre La Bégude-de-Mazenc et Dieulefit, COMBO a posé ses bocaux au sein d'une ancienne faïencerie devenue une véritable pépinière d'artistes et d'artisans. Venez visiter <a href=\"https://www.lusinepoetlaval.fr/\" rel=\"noopener\" target=\"_blank\">ce site exceptionnel</a> où se mêlent recycleries, magasins de producteurs, magasin d'artisans, ateliers divers et hall d'exposition. Bois clair, théières chinées, grandes tablées et rayons généreux : on s'y sent immédiatement chez soi.",
		'lieu_sticker'    => "L'adresse qui a du goût",
		'lieu_li1'        => "<strong>Épicerie-café en continu</strong> : faites vos courses, sirotez un thé ou un café accompagné d'une douceur.",
		'lieu_li2'        => '<strong>Cantine le midi</strong> du mardi au samedi, avec un menu unique fait maison qui change tous les jours.',
		'lieu_li3'        => '<strong>Des produits choisis avec soin</strong> : locaux, bio ou dénichés aux quatre coins du monde.',
		'lieu_btn'        => 'Venir nous voir',
		// Accueil — avis
		'quote_text'      => "« Un lieu unique entre épicerie du monde et cantine gourmande. On vient pour un produit introuvable ailleurs, on reste pour le plat du jour… et on repart avec une bouteille et des chocolats. »",
		'quote_cite'      => "L'esprit COMBO, résumé par nos habitués",
		// Accueil — Instagram + CTA
		'insta_title'     => 'La vie de la boutique, en images',
		'cta_hand'        => 'À très vite !',
		'cta_title'       => "Envie d'un déjeuner qui voyage ?",
		'cta_text'        => "Passez nous voir à l'Usine, appelez-nous pour connaître le plat du jour, ou suivez nos aventures gourmandes sur Instagram.",
		// Épicerie
		'ep_hand'         => 'Côté boutique',
		'ep_title'        => "L'Épicerie & la Cave",
		'ep_lead'         => "Des rayons en bois clair garnis de trésors d'ici et d'ailleurs : épicerie fine, saveurs du monde, vins de vignerons et bières artisanales.",
		'ep_marquee'      => "Épices & condiments • Vins de vignerons • Chocolats d'artisans • Vrac • Produits bio & locaux • Saveurs d'Asie, d'Orient & d'ailleurs •",
		'ep_intro_title'  => 'Le tour du monde en quelques rayons',
		'ep_intro_lead'   => "Chez COMBO, chaque produit a une histoire. Tahini libanais, sauces asiatiques introuvables ailleurs, épices qui embaument, conserves de la mer, douceurs orientales… et juste à côté, le meilleur de la Drôme : chocolats d'artisans, tisanes, miels et jus de fruits locaux.",
		'ep_intro_text'   => "Nos ardoises vous racontent chaque trouvaille : d'où elle vient, comment la cuisiner, avec quoi la marier. Et si vous hésitez, demandez-nous — on adore partager nos recettes !",
		'ep_intro_sticker' => 'Conseils inclus !',
		'ep_cards_title'  => 'Trois bonnes raisons de pousser la porte <span class="hand hand--olive">(au moins !)</span>',
		'ep_c1_tag'       => 'Épicerie fine',
		'ep_c1_title'     => "Le meilleur d'ici",
		'ep_c1_text'      => "Chocolats crus d'artisans locaux, pralinés, truffes, biscuits, confitures et pépites de producteurs drômois. Des produits choisis un par un, souvent bio, toujours gourmands.",
		'ep_c2_tag'       => 'Épicerie du monde',
		'ep_c2_title'     => "Les saveurs d'ailleurs",
		'ep_c2_text'      => "Sauces asiatiques, tahini, épices, riz parfumés, condiments d'Orient et d'Amérique latine : tout ce qu'il faut pour cuisiner le monde entier sans quitter la Drôme.",
		'ep_c3_tag'       => 'La cave',
		'ep_c3_title'     => 'Vins & bières artisanales',
		'ep_c3_text'      => 'Vins de vignerons créateurs de vins vivants, bières brassées dans la région, limonades et jus artisanaux. De quoi accompagner toutes vos tablées.',
		'ep_gal_title'    => 'Flânez dans nos rayons',
		'ep_quote'        => "« Un verre de vin sans un bon plat, c'est comme une épicerie sans épices : chez COMBO, le bar accompagne toujours l'assiette. »",
		'ep_cta_title'    => 'Une envie particulière ? Un produit introuvable ?',
		'ep_cta_text'     => "Dites-le nous : on adore partir à la chasse aux trésors pour nos clients. Appelez-nous ou passez nous voir à l'Usine.",
		// Cantine
		'cu_hand'         => 'Côté fourneaux',
		'cu_title'        => 'La Cantine',
		'cu_lead'         => 'Une cuisine du monde généreuse, 100 % fait maison, servie le midi du mardi au samedi. Ici, le menu voyage — et vous avec.',
		'cu_marquee'      => 'Fait maison • Produits frais • Le midi du mardi au samedi • Menu qui voyage • Commande au comptoir • Desserts gourmands •',
		'cu_chef_title'   => 'Une assiette qui fait le tour du monde',
		'cu_chef_lead'    => "Curry thaï un jour, tajine le lendemain, poisson laqué façon teriyaki le surlendemain… À la cantine COMBO, le menu unique fait maison change tous les jours. Laissez-vous surprendre !",
		'cu_chef_li1'     => "<strong>Tout est fait maison</strong>, des marinades aux desserts, avec les produits de l'épicerie et des producteurs voisins.",
		'cu_chef_li2'     => '<strong>Un menu court et généreux</strong> : mieux vaut un plat du jour réussi que dix plats surgelés.',
		'cu_chef_li3'     => '<strong>Des options pour tous</strong> : on compose aussi végétarien, et on adapte quand c\'est possible — demandez-nous.',
		'cu_chef_sticker' => 'Wok en main !',
		'cu_how_title'    => 'Comment ça marche ? <span class="underline">C\'est tout simple</span>',
		'cu_h1_title'     => "On choisit sur l'ardoise",
		'cu_h1_text'      => 'Le menu du jour est écrit à la craie, comme tout ce qu\'on aime ici. Plat, dessert, boissons : faites votre combo.',
		'cu_h2_title'     => 'On commande au comptoir',
		'cu_h2_text'      => "Pas de service en salle : on passe commande au comptoir, on choisit sa table, et la cuisine s'occupe du reste.",
		'cu_h3_title'     => 'On trinque… en mangeant',
		'cu_h3_text'      => "Le bar sert vins et bières artisanales uniquement en accompagnement d'un plat. Et côté softs : à volonté !",
		'cu_bar_title'    => 'Un verre, oui — mais jamais le ventre vide !',
		'cu_bar_lead'     => "Vins de vignerons et bières brassées dans la région : le bar de COMBO a tout d'un grand… à un détail près.",
		'cu_bar_text'     => "Ici, l'alcool accompagne toujours quelque chose à manger. C'est notre façon de garder une ambiance douce et familiale, où l'on vient autant pour discuter que pour se régaler. En revanche, softs en tout genre à volonté : limonades artisanales, jus locaux, thés et cafés vous attendent toute la journée !",
		'cu_bar_sticker'  => 'À la vôtre !',
		'cu_gal_title'    => 'Quelques plats passés par nos fourneaux',
		'cu_quote'        => "« Service le midi, du mardi au samedi, de 12h à 14h. Pas de réservation compliquée : on arrive, on commande, on se régale. Et l'été, la cantine joue les prolongations : tous les midis jusqu'à 14h30, et en soirée les mercredis, jeudis et vendredis de 18h à 21h, du 22 juillet au 21 août — spécialités de grillades à la créole ! »",
		'cu_cta_hand'     => 'À table !',
		'cu_cta_title'    => 'Le plat du jour vous attend',
		'cu_cta_text'     => "Rejoignez-nous à l'Usine, à 5 minutes de Dieulefit. Et pour connaître le menu avant de venir, direction Instagram.",
		// Contact
		'co_hand'         => 'On vous attend !',
		'co_title'        => 'Infos pratiques & contact',
		'co_lead'         => "À l'Usine, à 5 minutes de Dieulefit et 20 minutes de Montélimar : la Drôme provençale a son repaire gourmand.",
		'co_parking'      => 'Sur la D540, entre La Bégude-de-Mazenc et Dieulefit. Parking à proximité immédiate.',
		'co_d1_tag'       => '5 min',
		'co_d1_title'     => 'Depuis Dieulefit',
		'co_d1_text'      => "Prenez la D540 direction La Bégude-de-Mazenc : COMBO vous attend à l'Usine, sur votre droite.",
		'co_d2_tag'       => '10 min',
		'co_d2_title'     => 'Depuis La Bégude-de-Mazenc',
		'co_d2_text'      => 'Suivez la D540 direction Dieulefit : nous sommes juste après le village du Poët-Laval, côté gauche.',
		'co_d3_tag'       => '25 min',
		'co_d3_title'     => 'Depuis Montélimar',
		'co_d3_text'      => 'Sortie Montélimar-Sud puis direction Dieulefit par la D540 : une jolie route de Drôme provençale jusqu\'à nos rayons.',
		'co_cta_hand'     => 'Le four est chaud !',
		'co_cta_title'    => 'Une question avant de venir ?',
		'co_cta_text'     => 'Plat du jour, produit recherché, grande tablée : un coup de fil et on vous répond avec le sourire.',
	);
}

/** Images par défaut (fichiers du thème) pour chaque emplacement modifiable. */
function combo_default_images() {
	return array(
		'home_img1' => 'chef-combo-wok-cuisine-maison.jpg',
		'home_img2' => 'plat-fait-maison-cuisine-du-monde.jpg',
		'home_img3' => 'cave-vin-naturel-drome.jpg',
		'uni1_img'  => 'rayons-epicerie-fine-poet-laval.jpg',
		'uni2_img'  => 'plat-poisson-teriyaki-cantine.jpg',
		'lieu_img'  => 'bar-comptoir-convivial-combo.jpg',
		'insta_img1' => 'chocolats-pralines-epicerie-fine.jpg',
		'insta_img2' => 'plat-fait-maison-cuisine-du-monde.jpg',
		'insta_img3' => 'bieres-limonades-artisanales.jpg',
		'insta_img4' => 'cafe-pause-gourmande-combo.jpg',
		'insta_img5' => 'tahini-epicerie-du-monde.jpg',
		'insta_img6' => 'epicerie-comptoir-ambiance-combo.jpg',
		'ep_hero_img'  => 'rayons-epicerie-fine-poet-laval.jpg',
		'ep_intro_img' => 'tahini-epicerie-du-monde.jpg',
		'ep_c1_img'    => 'chocolats-pralines-epicerie-fine.jpg',
		'ep_c2_img'    => 'sauce-huitre-epicerie-asiatique.jpg',
		'ep_c3_img'    => 'cave-vin-naturel-drome.jpg',
		'ep_g1' => 'rayons-epicerie-fine-poet-laval.jpg',
		'ep_g2' => 'bieres-limonades-artisanales.jpg',
		'ep_g3' => 'chocolat-cru-sauvage-local.jpg',
		'ep_g4' => 'cave-bieres-artisanales-locales.jpg',
		'ep_g5' => 'truffes-chocolat-artisanal.jpg',
		'ep_g6' => 'epicerie-comptoir-ambiance-combo.jpg',
		'cu_hero_img' => 'plat-fait-maison-cuisine-du-monde.jpg',
		'cu_chef_img' => 'chef-combo-wok-cuisine-maison.jpg',
		'cu_bar_img'  => 'bar-comptoir-convivial-combo.jpg',
		'cu_g1' => 'plat-fait-maison-cuisine-du-monde.jpg',
		'cu_g2' => 'plat-poisson-teriyaki-cantine.jpg',
		'cu_g3' => 'cafe-pause-gourmande-combo.jpg',
		'cu_g4' => 'chef-combo-wok-cuisine-maison.jpg',
		'cu_g5' => 'epicerie-comptoir-ambiance-combo.jpg',
		'cu_g6' => 'bieres-limonades-artisanales.jpg',
		'co_hero_img' => 'epicerie-comptoir-ambiance-combo.jpg',
	);
}

/** Lecture d'un réglage texte (avec repli sur la valeur par défaut). */
function combo_get( $key ) {
	$defaults = combo_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( 'combo_' . $key, $default );
}

/** Affichage d'un réglage texte (HTML simple autorisé : gras, liens, spans…). */
function combo_text( $key ) {
	echo wp_kses_post( combo_get( $key ) );
}

/** URL d'une image modifiable (repli sur l'image du thème). */
function combo_img_url( $key ) {
	$url = get_theme_mod( 'combo_' . $key, '' );
	if ( ! $url ) {
		$imgs = combo_default_images();
		$file = isset( $imgs[ $key ] ) ? $imgs[ $key ] : 'logo-combo-epicerie-cuisine.png';
		$url  = get_template_directory_uri() . '/assets/img/' . $file;
	}
	return esc_url( $url );
}

/** Téléphone au format lien tel: (+33…). */
function combo_phone_href() {
	$digits = preg_replace( '/\D/', '', combo_get( 'phone' ) );
	if ( 0 === strpos( $digits, '0' ) ) {
		$digits = '33' . substr( $digits, 1 );
	}
	return 'tel:+' . $digits;
}

/** Déclaration de tous les panneaux, sections et champs. */
function combo_customizer_structure() {
	return array(
		'combo_global' => array(
			'title'    => '☎ Coordonnées & horaires',
			'sections' => array(
				'coord' => array( 'title' => 'Coordonnées', 'fields' => array(
					array( 'phone', 'Téléphone', 'text' ),
					array( 'addr_l1', 'Adresse — ligne 1', 'text' ),
					array( 'addr_l2', 'Adresse — ligne 2', 'text' ),
					array( 'addr_city', 'Code postal & ville', 'text' ),
					array( 'instagram', 'Lien Instagram', 'url' ),
					array( 'insta_handle', 'Nom du compte Instagram', 'text' ),
					array( 'google_url', 'Lien fiche Google', 'url' ),
					array( 'maps_q', 'Adresse pour la carte Google Maps', 'text' ),
					array( 'footer_baseline', 'Slogan du pied de page', 'text' ),
					array( 'footer_desc', 'Description du pied de page', 'textarea' ),
				) ),
				'hours' => array( 'title' => 'Horaires', 'fields' => array(
					array( 'hours_f1', 'Résumé — ligne 1', 'text' ),
					array( 'hours_f2', 'Résumé — ligne 2', 'text' ),
					array( 'hours_f3', 'Résumé — ligne 3', 'text' ),
					array( 'hours_f4', 'Résumé — ligne 4', 'text' ),
					array( 'hours_f5', 'Résumé — ligne 5 (été)', 'text' ),
					array( 'h_mar', 'Mardi', 'text' ),
					array( 'h_mer', 'Mercredi', 'text' ),
					array( 'h_jeu', 'Jeudi', 'text' ),
					array( 'h_ven', 'Vendredi', 'text' ),
					array( 'h_sam', 'Samedi', 'text' ),
					array( 'h_dim', 'Dimanche & lundi', 'text' ),
					array( 'cantine_txt', 'Phrase horaires cantine', 'textarea' ),
					array( 'ete_title', 'Période estivale — titre', 'text' ),
					array( 'ete_l1', 'Période estivale — paragraphe 1', 'textarea' ),
					array( 'ete_l2', 'Période estivale — paragraphe 2', 'textarea' ),
				) ),
			),
		),
		'combo_home' => array(
			'title'    => '🏠 Page d\'accueil',
			'sections' => array(
				'home_hero' => array( 'title' => 'Grand bandeau (héro)', 'fields' => array(
					array( 'home_eyebrow', 'Sur-titre', 'text' ),
					array( 'home_title', 'Titre principal', 'textarea' ),
					array( 'home_lead', 'Paragraphe d\'introduction', 'textarea' ),
					array( 'home_btn1', 'Bouton 1', 'text' ),
					array( 'home_btn2', 'Bouton 2', 'text' ),
					array( 'home_badge', 'Pastille verte', 'text' ),
					array( 'home_img1', 'Photo 1 (grande, verticale)', 'image' ),
					array( 'home_img2', 'Photo 2 (carrée)', 'image' ),
					array( 'home_img3', 'Photo 3 (horizontale)', 'image' ),
					array( 'home_marquee', 'Bandeau défilant', 'textarea' ),
				) ),
				'home_univers' => array( 'title' => 'Les deux univers', 'fields' => array(
					array( 'uni_eyebrow', 'Sur-titre', 'text' ),
					array( 'uni_title', 'Titre de section', 'textarea' ),
					array( 'uni1_hand', 'Carte 1 — mention manuscrite', 'text' ),
					array( 'uni1_title', 'Carte 1 — titre', 'text' ),
					array( 'uni1_text', 'Carte 1 — texte', 'textarea' ),
					array( 'uni1_link', 'Carte 1 — texte du lien', 'text' ),
					array( 'uni1_img', 'Carte 1 — photo', 'image' ),
					array( 'uni2_hand', 'Carte 2 — mention manuscrite', 'text' ),
					array( 'uni2_title', 'Carte 2 — titre', 'text' ),
					array( 'uni2_text', 'Carte 2 — texte', 'textarea' ),
					array( 'uni2_link', 'Carte 2 — texte du lien', 'text' ),
					array( 'uni2_img', 'Carte 2 — photo', 'image' ),
				) ),
				'home_concept' => array( 'title' => 'L\'ardoise (concept)', 'fields' => array(
					array( 'concept_title', 'Titre de l\'ardoise', 'textarea' ),
					array( 'concept_intro', 'Phrase d\'introduction', 'text' ),
					array( 'c1_title', 'Règle 1 — titre', 'text' ),
					array( 'c1_text', 'Règle 1 — texte', 'textarea' ),
					array( 'c2_title', 'Règle 2 — titre', 'text' ),
					array( 'c2_text', 'Règle 2 — texte', 'textarea' ),
					array( 'c3_title', 'Règle 3 — titre', 'text' ),
					array( 'c3_text', 'Règle 3 — texte', 'textarea' ),
				) ),
				'home_lieu' => array( 'title' => 'Le lieu', 'fields' => array(
					array( 'lieu_title', 'Titre', 'text' ),
					array( 'lieu_text', 'Paragraphe', 'textarea' ),
					array( 'lieu_sticker', 'Pastille sur la photo', 'text' ),
					array( 'lieu_img', 'Photo', 'image' ),
					array( 'lieu_li1', 'Point fort 1', 'textarea' ),
					array( 'lieu_li2', 'Point fort 2', 'textarea' ),
					array( 'lieu_li3', 'Point fort 3', 'textarea' ),
					array( 'lieu_btn', 'Texte du bouton', 'text' ),
				) ),
				'home_avis' => array( 'title' => 'Citation / avis', 'fields' => array(
					array( 'quote_text', 'Citation', 'textarea' ),
					array( 'quote_cite', 'Signature', 'text' ),
				) ),
				'home_insta' => array( 'title' => 'Bande Instagram', 'fields' => array(
					array( 'insta_title', 'Titre de section', 'text' ),
					array( 'insta_img1', 'Photo 1', 'image' ),
					array( 'insta_img2', 'Photo 2', 'image' ),
					array( 'insta_img3', 'Photo 3', 'image' ),
					array( 'insta_img4', 'Photo 4', 'image' ),
					array( 'insta_img5', 'Photo 5', 'image' ),
					array( 'insta_img6', 'Photo 6', 'image' ),
				) ),
				'home_cta' => array( 'title' => 'Bloc final (orange)', 'fields' => array(
					array( 'cta_hand', 'Mention manuscrite', 'text' ),
					array( 'cta_title', 'Titre', 'text' ),
					array( 'cta_text', 'Texte', 'textarea' ),
				) ),
			),
		),
		'combo_ep' => array(
			'title'    => '🫙 Page Épicerie & Cave',
			'sections' => array(
				'ep_hero' => array( 'title' => 'Haut de page', 'fields' => array(
					array( 'ep_hand', 'Mention manuscrite', 'text' ),
					array( 'ep_title', 'Titre', 'text' ),
					array( 'ep_lead', 'Texte d\'introduction', 'textarea' ),
					array( 'ep_hero_img', 'Photo de fond', 'image' ),
					array( 'ep_marquee', 'Bandeau défilant', 'textarea' ),
				) ),
				'ep_intro' => array( 'title' => 'Présentation', 'fields' => array(
					array( 'ep_intro_title', 'Titre', 'text' ),
					array( 'ep_intro_lead', 'Paragraphe principal', 'textarea' ),
					array( 'ep_intro_text', 'Paragraphe secondaire', 'textarea' ),
					array( 'ep_intro_img', 'Photo', 'image' ),
					array( 'ep_intro_sticker', 'Pastille sur la photo', 'text' ),
				) ),
				'ep_cards' => array( 'title' => 'Les trois rayons', 'fields' => array(
					array( 'ep_cards_title', 'Titre de section', 'textarea' ),
					array( 'ep_c1_tag', 'Rayon 1 — étiquette', 'text' ),
					array( 'ep_c1_title', 'Rayon 1 — titre', 'text' ),
					array( 'ep_c1_text', 'Rayon 1 — texte', 'textarea' ),
					array( 'ep_c1_img', 'Rayon 1 — photo', 'image' ),
					array( 'ep_c2_tag', 'Rayon 2 — étiquette', 'text' ),
					array( 'ep_c2_title', 'Rayon 2 — titre', 'text' ),
					array( 'ep_c2_text', 'Rayon 2 — texte', 'textarea' ),
					array( 'ep_c2_img', 'Rayon 2 — photo', 'image' ),
					array( 'ep_c3_tag', 'Rayon 3 — étiquette', 'text' ),
					array( 'ep_c3_title', 'Rayon 3 — titre', 'text' ),
					array( 'ep_c3_text', 'Rayon 3 — texte', 'textarea' ),
					array( 'ep_c3_img', 'Rayon 3 — photo', 'image' ),
				) ),
				'ep_gal' => array( 'title' => 'Galerie photos', 'fields' => array(
					array( 'ep_gal_title', 'Titre de section', 'text' ),
					array( 'ep_g1', 'Photo 1 (grande)', 'image' ),
					array( 'ep_g2', 'Photo 2', 'image' ),
					array( 'ep_g3', 'Photo 3', 'image' ),
					array( 'ep_g4', 'Photo 4 (grande)', 'image' ),
					array( 'ep_g5', 'Photo 5', 'image' ),
					array( 'ep_g6', 'Photo 6', 'image' ),
				) ),
				'ep_bas' => array( 'title' => 'Citation & bloc final', 'fields' => array(
					array( 'ep_quote', 'Citation (bandeau olive)', 'textarea' ),
					array( 'ep_cta_title', 'Bloc final — titre', 'text' ),
					array( 'ep_cta_text', 'Bloc final — texte', 'textarea' ),
				) ),
			),
		),
		'combo_cu' => array(
			'title'    => '🍽 Page La Cantine',
			'sections' => array(
				'cu_hero' => array( 'title' => 'Haut de page', 'fields' => array(
					array( 'cu_hand', 'Mention manuscrite', 'text' ),
					array( 'cu_title', 'Titre', 'text' ),
					array( 'cu_lead', 'Texte d\'introduction', 'textarea' ),
					array( 'cu_hero_img', 'Photo de fond', 'image' ),
					array( 'cu_marquee', 'Bandeau défilant', 'textarea' ),
				) ),
				'cu_chef' => array( 'title' => 'En cuisine (le chef)', 'fields' => array(
					array( 'cu_chef_title', 'Titre', 'text' ),
					array( 'cu_chef_lead', 'Paragraphe principal', 'textarea' ),
					array( 'cu_chef_li1', 'Point fort 1', 'textarea' ),
					array( 'cu_chef_li2', 'Point fort 2', 'textarea' ),
					array( 'cu_chef_li3', 'Point fort 3', 'textarea' ),
					array( 'cu_chef_img', 'Photo', 'image' ),
					array( 'cu_chef_sticker', 'Pastille sur la photo', 'text' ),
				) ),
				'cu_how' => array( 'title' => 'L\'ardoise (comment ça marche)', 'fields' => array(
					array( 'cu_how_title', 'Titre de l\'ardoise', 'textarea' ),
					array( 'cu_h1_title', 'Étape 1 — titre', 'text' ),
					array( 'cu_h1_text', 'Étape 1 — texte', 'textarea' ),
					array( 'cu_h2_title', 'Étape 2 — titre', 'text' ),
					array( 'cu_h2_text', 'Étape 2 — texte', 'textarea' ),
					array( 'cu_h3_title', 'Étape 3 — titre', 'text' ),
					array( 'cu_h3_text', 'Étape 3 — texte', 'textarea' ),
				) ),
				'cu_bar' => array( 'title' => 'Le bar', 'fields' => array(
					array( 'cu_bar_title', 'Titre', 'text' ),
					array( 'cu_bar_lead', 'Paragraphe principal', 'textarea' ),
					array( 'cu_bar_text', 'Paragraphe secondaire', 'textarea' ),
					array( 'cu_bar_img', 'Photo', 'image' ),
					array( 'cu_bar_sticker', 'Pastille sur la photo', 'text' ),
				) ),
				'cu_gal' => array( 'title' => 'Galerie photos', 'fields' => array(
					array( 'cu_gal_title', 'Titre de section', 'text' ),
					array( 'cu_g1', 'Photo 1 (grande)', 'image' ),
					array( 'cu_g2', 'Photo 2', 'image' ),
					array( 'cu_g3', 'Photo 3', 'image' ),
					array( 'cu_g4', 'Photo 4 (grande)', 'image' ),
					array( 'cu_g5', 'Photo 5', 'image' ),
					array( 'cu_g6', 'Photo 6', 'image' ),
				) ),
				'cu_bas' => array( 'title' => 'Citation & bloc final', 'fields' => array(
					array( 'cu_quote', 'Citation (bandeau olive)', 'textarea' ),
					array( 'cu_cta_hand', 'Bloc final — mention manuscrite', 'text' ),
					array( 'cu_cta_title', 'Bloc final — titre', 'text' ),
					array( 'cu_cta_text', 'Bloc final — texte', 'textarea' ),
				) ),
			),
		),
		'combo_co' => array(
			'title'    => '📍 Page Infos & Contact',
			'sections' => array(
				'co_hero' => array( 'title' => 'Haut de page', 'fields' => array(
					array( 'co_hand', 'Mention manuscrite', 'text' ),
					array( 'co_title', 'Titre', 'text' ),
					array( 'co_lead', 'Texte d\'introduction', 'textarea' ),
					array( 'co_hero_img', 'Photo de fond', 'image' ),
					array( 'co_parking', 'Précision accès / parking', 'textarea' ),
				) ),
				'co_trajets' => array( 'title' => 'Temps de trajet', 'fields' => array(
					array( 'co_d1_tag', 'Trajet 1 — durée', 'text' ),
					array( 'co_d1_title', 'Trajet 1 — titre', 'text' ),
					array( 'co_d1_text', 'Trajet 1 — texte', 'textarea' ),
					array( 'co_d2_tag', 'Trajet 2 — durée', 'text' ),
					array( 'co_d2_title', 'Trajet 2 — titre', 'text' ),
					array( 'co_d2_text', 'Trajet 2 — texte', 'textarea' ),
					array( 'co_d3_tag', 'Trajet 3 — durée', 'text' ),
					array( 'co_d3_title', 'Trajet 3 — titre', 'text' ),
					array( 'co_d3_text', 'Trajet 3 — texte', 'textarea' ),
				) ),
				'co_bas' => array( 'title' => 'Bloc final', 'fields' => array(
					array( 'co_cta_hand', 'Mention manuscrite', 'text' ),
					array( 'co_cta_title', 'Titre', 'text' ),
					array( 'co_cta_text', 'Texte', 'textarea' ),
				) ),
			),
		),
	);
}

/** Enregistrement dans le Customizer. */
function combo_customize_register( $wp_customize ) {
	$defaults = combo_defaults();
	$priority = 10;

	foreach ( combo_customizer_structure() as $panel_id => $panel ) {
		$wp_customize->add_panel( $panel_id, array(
			'title'    => $panel['title'],
			'priority' => $priority++,
		) );

		foreach ( $panel['sections'] as $section_id => $section ) {
			$sid = $panel_id . '_' . $section_id;
			$wp_customize->add_section( $sid, array(
				'title' => $section['title'],
				'panel' => $panel_id,
			) );

			foreach ( $section['fields'] as $field ) {
				list( $id, $label, $type ) = $field;
				$setting_id = 'combo_' . $id;

				if ( 'image' === $type ) {
					$wp_customize->add_setting( $setting_id, array(
						'default'           => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $setting_id, array(
						'label'   => $label,
						'section' => $sid,
					) ) );
				} else {
					$sanitize = ( 'url' === $type ) ? 'esc_url_raw' : 'wp_kses_post';
					$wp_customize->add_setting( $setting_id, array(
						'default'           => isset( $defaults[ $id ] ) ? $defaults[ $id ] : '',
						'sanitize_callback' => $sanitize,
					) );
					$wp_customize->add_control( $setting_id, array(
						'label'   => $label,
						'section' => $sid,
						'type'    => ( 'textarea' === $type ) ? 'textarea' : ( 'url' === $type ? 'url' : 'text' ),
					) );
				}
			}
		}
	}
}
add_action( 'customize_register', 'combo_customize_register' );
