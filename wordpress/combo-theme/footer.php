<?php
/**
 * Pied de page commun : logo, navigation, horaires, contact.
 */
$mentions = get_page_by_path( 'mentions-legales' );
?>
<footer class="site-footer">
	<div class="footer-illustration"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/illustration-wok-epicerie.png" alt="" loading="lazy" width="1920" height="743"></div>
	<div class="container">
		<div class="footer-grid">
			<div class="footer-logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-combo-epicerie-cuisine.png" alt="COMBO Épicerie Cuisine" width="190" height="62">
				<p class="footer-baseline"><?php combo_text( 'footer_baseline' ); ?></p>
				<p><?php combo_text( 'footer_desc' ); ?></p>
			</div>
			<div>
				<h3>Explorer</h3>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'epicerie' ) ); ?>">L'Épicerie &amp; la Cave</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'cuisine' ) ); ?>">La Cantine</a></li>
					<li><a href="<?php echo esc_url( combo_tpl_url( 'contact' ) ); ?>">Infos &amp; Contact</a></li>
				</ul>
			</div>
			<div>
				<h3>Horaires</h3>
				<ul>
					<li><?php combo_text( 'hours_f1' ); ?></li>
					<li><?php combo_text( 'hours_f2' ); ?></li>
					<li><?php combo_text( 'hours_f3' ); ?></li>
					<li><?php combo_text( 'hours_f4' ); ?></li>
					<li><?php combo_text( 'hours_f5' ); ?></li>
				</ul>
			</div>
			<div>
				<h3>Contact</h3>
				<ul>
					<li><?php combo_text( 'addr_l1' ); ?><br><?php combo_text( 'addr_city' ); ?></li>
					<li><a href="<?php echo esc_attr( combo_phone_href() ); ?>"><?php combo_text( 'phone' ); ?></a></li>
					<li><a class="insta-link" href="<?php echo esc_url( combo_get( 'instagram' ) ); ?>" rel="noopener" target="_blank">
						<?php echo combo_icon( 'instagram' ); // phpcs:ignore ?>
						<?php combo_text( 'insta_handle' ); ?></a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> COMBO Épicerie - Cuisine · Le Poët-Laval</p>
			<p><?php if ( $mentions ) : ?><a href="<?php echo esc_url( get_permalink( $mentions ) ); ?>">Mentions légales</a> · <?php endif; ?>L'abus d'alcool est dangereux pour la santé, à consommer avec modération.</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
