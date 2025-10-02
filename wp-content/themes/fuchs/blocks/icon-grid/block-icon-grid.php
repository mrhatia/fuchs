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
		$fh_var_blk_icon_columns     = $bst_block_fields['fh_var_blk_icon_columns'] ?? null;

		?>


		<?php if($fh_var_blk_icon_columns){ ?>
			<section>
				<div class="wrapper">
					<div class="icons-grid">
						<div class="four-columns">
							<?php
								foreach ( $fh_var_blk_icon_columns as $column ) {
									$column_kicker      = $column['kicker'] ?? null;
									$column_title   	= $column['title'] ?? null;
									$column_text   = $column['text'] ?? null;

									$column_icon       = $column['icon'] ?? null;

									?>
									<div class="column center-align">
										<?php if ( $column_icon ) { ?>
											<div class="icon" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
												<?php BaseTheme::the_attachment_image( $column_icon, 400 ); ?>
											</div>
										<?php } ?>

										<?php if ( $column_kicker ) {  ?>
											<div class="kicker"><?php echo html_entity_decode( $column_kicker ); ?></div>
										<?php } ?>

										<?php if ( $column_title ) {  ?>

											<h3 class="heading-4"><?php echo html_entity_decode( $column_title ); ?></h3>
										<?php } ?>

										<?php if ( $column_text ) {  ?>
											<?php echo html_entity_decode( $column_text ); ?>
										<?php } ?>
									</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php
	}
);

