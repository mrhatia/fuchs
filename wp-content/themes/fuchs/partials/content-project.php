<?php
/**
 * Template part for displaying single Project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

list( $bst_var_post_id, $bst_fields, $bst_option_fields ) = BaseTheme::defaults();
// Post Tags & Categories.
$bst_var_post_tags       = get_the_tags( $bst_var_post_id );
$bst_var_post_categories = get_categories( $bst_var_post_id );


$bst_var_post_title = $bst_fields['bst_var_post_title'] ?? get_the_title();

?>

<div class="">

	<?php get_template_part( 'partials/content' ); ?>

	<div class="gl-s96"></div>

	<div class="page-section">
		<section>
			<div class="wrapper">
				<h3 class="">WEITERE AKTUELLE PROJEKTE</h3>
				<div class="post-archive three-columns">
					<?php
						$args = array(
							'post_type'      => 'project',
							'posts_per_page' => 3,
							'orderby'        => 'date',
							'order'          => 'DESC',
						);

						$bst_query = new WP_Query( $args );

						if ( $bst_query->have_posts() ) :
							while ( $bst_query->have_posts() ) : $bst_query->the_post();
							list( $bst_var_post_id, $bst_fields, $bst_option_fields ) = BaseTheme::defaults();
							?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-archive-box column' ); ?>>
									<div class="post-archive-box-img post-image">
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( ! has_post_thumbnail( $bst_var_post_id ) ) {
													echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
												} else {
													echo get_the_post_thumbnail(
														$bst_var_post_id,
														'thumb_1000',
													);
												}
											?>
										</a>
									</div>
									<div class="post-content">
										<div class="post-box-meta d-flex justify-content-between">
											<div class="ac-post-cat">
												<?php echo get_the_date( 'F j, Y' ); ?>
											</div>
										</div>
										<div class="post-archive-box-title post-title">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
										</div>
										<div class="bottom-section-button">
											<a href="<?php the_permalink(); ?>">
												<span>
													Read More
												</span>
												<div class="plus-button">
													+
												</div>
											</a>
										</div>
									</div>
								</article>

							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>No projects found.</p>';
						endif;
						?>



				</div>
			</div>
		</section>
	</div>
	<div class="gl-s30"></div>

</div>
