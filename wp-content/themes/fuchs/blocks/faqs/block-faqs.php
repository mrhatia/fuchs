<?php
/**
 * Block Name: Faq
 *
 * The template for displaying the custom gutenberg block named Faq.
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
		$bst_var_faq_image     = $bst_block_fields['bst_var_faq_image'] ?? null;
		$bst_var_faq_faqs     = $bst_block_fields['bst_var_faq_faqs'] ?? null;
		?>

			<section>
				<div class="wrapper">
					<div class="faq-with-image faq-block">
						<?php if($bst_var_faq_image){ ?>
							<div class="faq-image image-cover">
								<?php BaseTheme::the_attachment_image( $bst_var_faq_image, 1200 ); ?>
							</div>
						<?php } ?>
						<?php if($bst_var_faq_faqs){ ?>

							<div class="faq-items">
								<?php foreach ( $bst_var_faq_faqs as $faq ) {
									$faq_question      = $faq['question'] ?? null;
									$faq_answer      = $faq['answer'] ?? null;

									?>
									<div class="faq">
										<div class="faq-head">
											<?php if ( $faq_question ) {  ?>
												<h3 class="heading-5"><?php echo html_entity_decode( $faq_question ); ?></h3>
											<?php } ?>
											<span class="faq-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
													fill="none">
													<rect x="9" width="1" height="19" fill="#151515" />
													<path d="M0 10L1.19248e-08 9L19 9V10L0 10Z" fill="#151515" />
												</svg>
											</span>
										</div>
										<div class="faq-content">
											<?php if ( $faq_answer ) {  ?>
												<?php echo html_entity_decode( $faq_answer ); ?>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

		<?php
	}
);

