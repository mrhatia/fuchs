<?php
/**
 * Template Name: Overview
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

$bst_var_trcho_background_text          = $bst_fields['bst_var_trcho_background_text'] ?? null;
$bst_var_trcho_kicker          = $bst_fields['bst_var_trcho_kicker'] ?? null;
$bst_var_trcho_text          = $bst_fields['bst_var_trcho_text'] ?? null;
$bst_var_pagetitle          = $bst_fields['bst_var_trcho_title'] ?? get_the_title();
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
							<?php if($bst_var_trcho_background_text){ ?>
								<div class="hero-split-text"><?php echo html_entity_decode($bst_var_trcho_background_text); ?></div>
							<?php } ?>
							<?php if($bst_var_trcho_kicker){ ?>
								<div class="kicker hero-reveal"><?php echo html_entity_decode($bst_var_trcho_kicker); ?></div>
							<?php } ?>
							<h1 class="heading-2 hero-reveal"><?php echo esc_html( $bst_var_pagetitle ); ?></h1>
							<div class="hero-reveal">
								<?php if($bst_var_trcho_text){ ?>
									<?php echo html_entity_decode($bst_var_trcho_text); ?>
								<?php } ?>
							</div>
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
									'post_type'     => 'overview',
									'template'      => 'archive-overview',
									'template_none' => 'none',
								)
							);
							?>
							<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</section>
		</section>
		<div class="gl-s96"></div>
		<div class="load-more d-flex justify-content-center">
			<a href="#" class="button green-button load-more">Load More</a>
		</div>
		<div class="gl-s96"></div>

			<section id="page-section" class="page-section">
			<!-- Content Start -->
				<?php
						get_template_part( 'partials/content', 'page' );
				?>
			</section>



<?php
get_footer();
