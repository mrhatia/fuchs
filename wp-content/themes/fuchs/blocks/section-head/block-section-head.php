<?php
/**
 * Block Name: Section Head
 *
 * The template for displaying the custom gutenberg block named Section Head.
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
		$fh_var_blk_subheadline     = $bst_block_fields['fh_var_blk_subheadline'] ?? null;
		$fh_var_blk_headline     = $bst_block_fields['fh_var_blk_headline'] ?? null;


		?>
		<section class="ctn-1100">
			<div class="wrapper">
				<div class="section-head">
					<?php if ( $fh_var_blk_subheadline ) {  ?>
						<div class="hero-split-text"><?php echo html_entity_decode( $fh_var_blk_subheadline ); ?></div>
					<?php } ?>
					<?php if ( $fh_var_blk_headline ) {  ?>
						<h1 class="heading-2"><?php echo html_entity_decode( $fh_var_blk_headline ); ?></h1>
					<?php } ?>
				</div>
			</div>
		</section>
		<?php
	}
);

