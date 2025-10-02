<?php
/**
 * Block Name: Icon Grid
 *
 * The template for displaying the custom gutenberg block named Icon Grid.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Base Theme Package
 * @since 1.0.0
*/

BaseTheme::block(
	$block,
	function ( $bst_block_id, $bst_block_name, $bst_block_fields, $bst_option_fields ) {

		// Block variables.
		$fh_var_blk_tst_slider_variation     = $bst_block_fields['fh_var_blk_tst_slider_variation'] ?? null;
		$fh_var_blk_tst_testimonials     = $bst_block_fields['fh_var_blk_tst_testimonials'] ?? null;
		?>

		<?php if($fh_var_blk_tst_testimonials && 'hslider' === $fh_var_blk_tst_slider_variation){ ?>
			<section>
				<div class="wrapper">
					<div class="testimonial-slider">
						<?php foreach ( $fh_var_blk_tst_testimonials as $column ) {
								$column_kicker      = $column['kicker'] ?? null;
								$column_title   	= $column['title'] ?? null;
								$column_text   = $column['text'] ?? null;
								$column_icon       = $column['icon'] ?? null;
								?>

								<div class="testimonial-item">
									<?php if ( $column_icon ) { ?>
										<div class="testimonial-item-image image-cover">
											<?php BaseTheme::the_attachment_image( $column_icon, 500 ); ?>
										</div>
									<?php } ?>
									<div class="testimonial-item-content">
										<?php if ( $column_kicker ) {  ?>
											<div class="small-text"><?php echo html_entity_decode( $column_kicker ); ?></div>
										<?php } ?>

										<?php if ( $title ) {  ?>
											<h2 class="heading-3"><?php echo html_entity_decode( $title ); ?></h2>
										<?php } ?>

										<?php if ( $column_text ) {  ?>
											<?php echo html_entity_decode( $column_text ); ?>
										<?php } ?>
									</div>
								</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php } else { ?>
			<section>
				<div class="wrapper">
					<div class="swiper testimonial-variation">
						<div class="swiper-wrapper">
							<?php foreach ( $fh_var_blk_tst_testimonials as $column ) {
								$column_kicker      = $column['kicker'] ?? null;
								$column_title   	= $column['title'] ?? null;
								$column_text   = $column['text'] ?? null;
								$column_icon       = $column['icon'] ?? null;
								?>
									<div class="swiper-slide testimonial-single">
										<div class="testimonial-single-image image-cover  mobile-hide">
										</div>
										<div class="testimonial-single-content">
											<?php if ( $column_text ) {  ?>
												<div class="testimonial-text">
													<?php echo html_entity_decode( $column_text ); ?>
												</div>
											<?php } ?>
											<div class="testimonial-meta">
												<?php if ( $column_kicker ) {  ?>
													<span class="testimonial-role"><?php echo html_entity_decode( $column_kicker ); ?></span>
												<?php } ?>
												<?php if ( $title ) {  ?>
													<h4 class="testimonial-name"><?php echo html_entity_decode( $title ); ?></h4>
												<?php } ?>
											</div>
										</div>
									</div>
							<?php } ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>

		<?php } ?>

		<?php
	}
);
