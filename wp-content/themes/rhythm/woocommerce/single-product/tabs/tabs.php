<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
	
	<!-- Nav tabs -->
	<ul class="nav nav-tabs tpl-tabs animate">
		<?php 
		$i = 0;
		foreach ( $tabs as $key => $tab ) : ?>
			<li class="<?php echo sanitize_html_class($key); ?>_tab <?php echo ($i == 0 ? 'active' : '' ) ?>">
				<a href="#tab-<?php echo esc_attr($key); ?>" data-toggle="tab"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
			</li>
			<?php 
			$i ++;
		endforeach; ?>
	</ul>
	<!-- End Nav tabs -->

	 <!-- Tab panes -->
	<div class="tab-content tpl-tabs-cont">
		<?php 
		$i = 0;
		foreach ( $tabs as $key => $tab ) : ?>
			<div class="tab-pane fade in <?php echo ($i == 0 ? 'active' : '' ) ?>" id="tab-<?php echo esc_attr($key); ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ) ?>
			</div>
			<?php 
			$i ++;
		endforeach; ?>
	</div>
<?php endif; ?>
