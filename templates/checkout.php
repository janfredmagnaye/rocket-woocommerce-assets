<?php
/**
 * Template Name: Checkout Page Template
 *
 */

get_header(); ?>
	<div id="primary" class="checkout-page-template-content">
		<div class="container">
			<div class="row" role="main">
				<div class="col-md-12">
					<?php 
						while (have_posts()){ 
							the_post(); 
							get_template_part( 'content', 'page' ); 
						} 
					?>					
				</div><!-- .col-md-12 -->
			</div><!--.row -->
		</div><!-- .container-fluid -->
	</div><!-- .primary -->
    <script>
		$ = jQuery.noConflict();
		if( $( '#page' ).hasClass('checkout-page') ){
			$('.step-item.step-shopping-cart').addClass('current');
            $('.step-item.step-shopping-cart').addClass('finished');
            $('.step-item.step-billing-details').addClass('current');
            $('.woocommerce-billing-fields').addClass('visible');
		}

        // Display Shipping 
        $('#ship-to-different-address-checkbox').click(function(){
            setTimeout(function() {
                $('.woocommerce-shipping-fields').toggleClass('visible');
                $('.woocommerce-billing-fields').toggleClass('hidden');
            }, 0);
            // Toggle Cart Steps width
            if($('.step-item.step-shipping-details').hasClass('enabled')){
                $('.cart-steps-wrap').addClass('col-lg-8');
                $('.cart-steps-wrap').addClass('offset-lg-1');
                $('.cart-steps-wrap').removeClass('col-lg-10');
            } else {
                $('.cart-steps-wrap').addClass('col-lg-10');
                $('.cart-steps-wrap').removeClass('col-lg-8');
                $('.cart-steps-wrap').removeClass('offset-lg-1');
            }

            $('.step-item.step-shipping-details').toggleClass('current');
            $('.step-item.step-shipping-details').toggleClass('enabled');
            $("html, body").animate({scrollTop: 0}, 0);
            $("#primary").fadeOut(0);
            $("#primary").fadeIn(0);
        });

        // Display Checkout
        $('.checkout-action-buttons button.wc-btn.payment-details').click(function(){
            setTimeout(function() {
                $('.woocommerce-shipping-fields').toggleClass('hidden');
                $('.woocommerce-billing-fields').toggleClass('hidden');
            }, 0);
            $('.step-item.step-billing-details').toggleClass('finished');
            
            if($('.step-item.step-shipping-details').hasClass('current')){
                $('.step-item.step-shipping-details').addClass('finished');
            } else {
                $('.step-item.step-shipping-details').addClass('current');
                $('.step-item.step-shipping-details').addClass('finished');
            }
            
            // Toggle Cart Steps width
            // extend
            $('.cart-steps-wrap').addClass('col-lg-10');
            $('.cart-steps-wrap').removeClass('col-lg-8');
            $('.cart-steps-wrap').removeClass('offset-lg-1');

            $('.step-item.step-checkout').toggleClass('current');
            $('.checkout-action-buttons').fadeOut(0);
            $('.wc-column-billing').fadeOut(0);
            $("html, body").animate({scrollTop: 0}, 0);
            $("#primary").fadeOut(0);
            $("#primary").fadeIn(0);
            $('.checkout-review-form').toggleClass('visible');
        });
        
        // Return to Shipping & Billing
        $('.return-to-shipping-billing').click(function(){
            setTimeout(function() {
                $('.woocommerce-shipping-fields').toggleClass('hidden');
                $('.woocommerce-billing-fields').toggleClass('hidden');
            }, 0);
            $('.step-item.step-billing-details').removeClass('finished');
            $('.step-item.step-billing-details').removeClass('finished');
            
            if($('.step-item.step-shipping-details').hasClass('enabled')){
                $('.step-item.step-shipping-details').removeClass('finished');
                $('.cart-steps-wrap').addClass('col-lg-10');
                $('.cart-steps-wrap').removeClass('col-lg-8');
                $('.cart-steps-wrap').removeClass('offset-lg-1');
            } else {
                $('.step-item.step-shipping-details').removeClass('current');
                $('.step-item.step-shipping-details').removeClass('finished');
                $('.cart-steps-wrap').removeClass('col-lg-10');
                $('.cart-steps-wrap').addClass('col-lg-8');
                $('.cart-steps-wrap').addClass('offset-lg-1');
            }
            $('.step-item.step-checkout').toggleClass('current');
            $('.checkout-action-buttons').fadeIn(0);
            $('.wc-column-billing').fadeIn(0);
            $("html, body").animate({scrollTop: 0}, 0);
            $("#primary").fadeOut(0);
            $("#primary").fadeIn(0);
            $('.checkout-review-form').toggleClass('visible');
        });
        
        
	</script>
<?php get_footer(); ?>