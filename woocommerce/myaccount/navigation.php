<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );

?>
<div class="row">
	<div class="col-md-3 woocommerce-My-Account-navigation-wrap">
		<a class="woocommerce-mobile-navigation-dropdown text-white mx-0" href="#">My Account <i class="fas fa-bars float-right pt-1"></i></a>
		<nav class="woocommerce-My-Account-navigation">
			<ul>
				<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
					<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
						<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><span class="nav-link-name"><?php echo esc_html( $label ); ?></span><span class="fas"></span></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</div>
<?php do_action( 'woocommerce_after_account_navigation' ); ?>
