<?php
/**
 * Template Name: Cart Page Template
 *
 */
get_header(); ?>
	<div id="primary" class="cart-page-template-content">
		<div class="container">
			<div class="row" role="main">
				<div class="col-md-12">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php echo the_content();?>
                        </div><!-- .entry-content -->
                    </article><!-- #post -->		
				</div><!-- .col-md-12 -->
			</div><!--.row -->
		</div><!-- .container-fluid -->
	</div><!-- .primary -->
	<script>
		$ = jQuery.noConflict();
		if( $( '#page' ).hasClass('cart-page') ){
			$('.step-item.step-shopping-cart').addClass('current');
		}
		$(document.body).trigger('wc_fragment_refresh');
	</script>
<?php get_footer(); ?>