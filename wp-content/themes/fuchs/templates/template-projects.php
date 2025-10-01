<?php
/**
 * Template Name: Projects
 * Template Post Type: page
 *
 * This template is for displaying resource page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

// Include header.
get_header();

list( $bst_var_post_id, $bst_fields, $bst_option_fields ) = BaseTheme::defaults();

$bst_var_pagetitle          = $bst_fields['bst_var_pagetitle'] ?? get_the_title();
$bst_var_trcho_feature_post = $bst_fields['bst_var_trcho_feature_post'] ?? null;

?>
		<section class="ctn-full-width">
			<div class="wrapper">
				<div class="hero-project archive-hero">
					<div class="hero-slide-item">
						<div class="hero-slide-image">

							<?php
									if ( ! has_post_thumbnail( $bst_var_post_id ) ) {
										echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
									} else {
										echo get_the_post_thumbnail(
											$bst_var_post_id,
											'thumb_900',
										);
									}
									?>
						</div>
						<div class="banner-content">
							<div class="hero-split-text">SCHEDULE</div>
							<div class="kicker hero-reveal">Explore the features</div>
							<h1 class="heading-2 hero-reveal"><?php echo esc_html( $bst_var_pagetitle ); ?></h1>
							<div class="hero-reveal">
							<p>Etiam Scelerisque tortor at lectus dapibus, nec fermentum diam feugiat. Morbi rutrum
								magna et
								dui feugiat, non tristique mi convallis liquam.</p>
							</div>
							<!-- <div class="hero-buttons button-reveal">
								<a href="#" class="button orange-button">Read More</a>
								<a href="#" class="button blue-button">Contact us</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="gl-s72"></div>
		<section id="" class="page-section">
			<section id="page-section" class="page-section">
				<!-- Content Start -->
				<div class="wrapper">
					<div class="post-archive three-columns">
						<?php
							// WP_Query.
							$bst_query = BaseTheme::query(
								array(
									'post_type'     => 'project',
									'template'      => 'archive-project',
									'template_none' => 'none',
								)
							);
							?>



					</div>
				</div>
			</section>
		</section>
		<div class="gl-s96"></div>
		<div class="load-more d-flex justify-content-center">
			<a href="#" class="button green-button load-more">Load More</a>
		</div>
		<div class="gl-s96"></div>


<?php
get_footer();
