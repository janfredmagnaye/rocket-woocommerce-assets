<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<form class="checkout_coupon woocommerce-form-coupon" method="post">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 col-10 coupon-title-wrap">
                <p><strong>Enter Coupon Code</strong></p>
            </div>
            <div class="col-lg-4 coupon-code-wrap">
                <p>
                    <span class="coupon-code-input">
                        <input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
                    </span>	
                    
                </p>
            </div>
            <div class="col-lg-2 coupon-submit-wrap">
                <span class="coupon-code-submit">
                    <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply', 'woocommerce' ); ?></button>				
                </span>
            </div>
            <div class="col-lg-2 col-2 text-right coupon-close-wrap">
                <button class="close-checkout-coupon-modal" type="button"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
	<div class="clear"></div>
</form>
