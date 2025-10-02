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
		$fh_var_blk_logos     = $bst_block_fields['fh_var_blk_logos'] ?? null;
		?>

		<?php if($fh_var_blk_logos){ ?>
			<section>
				<div class="wrapper">
					<div class="logo-grid">
						<?php foreach ( $fh_var_blk_logos as $logo ) {
							$column_logo       = $logo['logo'] ?? null;
							?>
							<?php if ( $column_logo ) { ?>
								<div class="single-logo">
									<?php BaseTheme::the_attachment_image( $column_logo, 500 ); ?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php
	}
);
