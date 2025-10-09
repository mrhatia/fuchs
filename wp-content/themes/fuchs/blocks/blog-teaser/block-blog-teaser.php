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

		?>
			<section class="ctn-blue">
			<div class="wrapper">
				<div class="blog-teaser-slider">

					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
					<div class="blog-teaser-item">
						<div class="testimonial-image-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/building-img.jpg" alt="">
						</div>
						<div class="testimonial-content-item">
							<h2 class="heading-3">
								Alice Howard
							</h2>
							<p>Facilisis a vero eros et accou qui blandit praesent luptatum zzril delenit augue duis
								autem vel eum iriure dolor in
								hendrerit.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<?php
	}
);
