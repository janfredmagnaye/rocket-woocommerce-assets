<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<div class="row justify-content-center">
		<div class="col-lg-8 wc-column-billing">

			<?php if ( $checkout->get_checkout_fields() ) : ?>

			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <?php do_action( 'woocommerce_checkout_billing' ); ?>
                <?php do_action( 'woocommerce_checkout_shipping' ); ?>

			<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

			<?php endif; ?>

			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			<div class="checkout-action-buttons">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-4 return-to-cart-wrap">
						<a href="<?php echo wc_get_cart_url(); ?>" class="wc-btn return-to-cart"><i class="fas fa-arrow-left"></i>  <strong>Return to Cart</strong></a>
					</div>
					<div class="col-lg-4 payment-details-wrap">
						<button type="button" class="wc-btn payment-details">Payment Details</button>
					</div>
				</div>
			</div>
		</div>
		<div class="checkout-review-form">
			<div class="row justify-content-center">
				<div class="col-lg-5 wc-column-order">
					<div class="order-review-wrap">
						<h3 id="order_review_heading"><?php esc_html_e( 'Order Summary', 'woocommerce' ); ?></h3>
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
						<div id="order_review" class="woocommerce-checkout-review-order">
							<?php do_action( 'woocommerce_checkout_order_review' ); ?>
						</div>
					</div>
					<button type="button" class="wc-btn return-to-shipping-billing">Return to Shipping and Billing</button>
				</div>
				<div class="col-lg-5 offset-lg-1 wc-column-payment">
                    <div class="checkout-modal-trigger">
                        <button class="checkout-modal-button" type="button">Add Coupon Code</button>
                    </div>
					<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
				</div>
			</div>
		</div>
	</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
