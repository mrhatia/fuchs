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

<div class="page-section">

	<?php get_template_part( 'partials/content' ); ?>
	<div class="gl-s96"></div>
	<section>
		<div class="wrapper">
			<div class="icons-grid">
				<div class="four-columns">
					<div class="column center-align">
						<div class="icon">
							<img src="https://wilmer.qodeinteractive.com/wp-content/uploads/2019/02/h5-icon-img-01.png"
								alt="">
						</div>
						<div class="kicker">
							Explore the features
						</div>
						<h3 class="heading-4">Efficient Building</h3>
						<p>Lorem ipsum dolor sit ameet. Don nisi ligula eget dolor quam et.</p>
					</div>
					<div class="column center-align">
						<div class="icon">
							<img src="https://wilmer.qodeinteractive.com/wp-content/uploads/2019/02/h5-icon-img-02.png"
								alt="">
						</div>
						<div class="kicker">
							Explore the Features
						</div>
						<h3 class="heading-4">Financial Results</h3>
						<p>Lorem ipsum dolor sit ameet. Don nisi ligula eget dolor quam et.
						</p>
					</div>
					<div class="column center-align">
						<div class="icon">
							<img src="https://wilmer.qodeinteractive.com/wp-content/uploads/2019/02/h5-icon-img-04.png"
								alt="">
						</div>
						<div class="kicker">
							Explore the Features
						</div>
						<h3 class="heading-4">General Contracting</h3>
						<p>Lorem ipsum dolor sit ameet. Don nisi ligula eget dolor quam et.
						</p>
					</div>
					<div class="column center-align">
						<div class="icon">
							<img src="https://wilmer.qodeinteractive.com/wp-content/uploads/2019/02/h5-icon-img-05.png"
								alt="">
						</div>
						<div class="kicker">
							Explore the features
						</div>
						<h3 class="heading-4">Interior Design</h3>
						<p>Lorem ipsum dolor sit ameet. Don nisi ligula eget dolor quam et.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Image with text -->
	<div class="gl-s96"></div>


	<section>
		<div class="wrapper">
			<div
				class="image-alongside-text image-at-right d-flex justify-content-between flex-wrap align-items-center">
				<div class="iat-content column">
					<div class="kicker">Explore the features</div>
					<h2 class="heading-">We are delivering high quality projects</h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident in hic ipsam
						pariatur et facere id animi ullam perferendis.</p>
					<a href="#" class="button">Read More</a>
				</div>
				<div class="iat-image column">
					<img src="https://wilmer.qodeinteractive.com/wp-content/uploads/2018/12/h5-blog-img-01.jpg"
						alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials -->
	<div class="gl-s96"></div>
	<section>
		<div class="wrapper">
			<div class="testimonial-slider">
				<div class="testimonial-item">
					<div class="testimonial-item-image image-cover">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/author-image-01.webp" alt="">
					</div>
					<div class="testimonial-item-content">
						<div class="small-text">
							Engineering Manager
						</div>
						<h2 class="heading-3">
							Alice Howard
						</h2>
						<p>
							Ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget rhoncus, amet
							sem vel quam nunc semper libero,
							sit amet sem neque sed ipsum. Namet quam nunc. Lorem ipsum sit.
						</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="testimonial-item-image image-cover">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/author-image-02.webp" alt="">
					</div>
					<div class="testimonial-item-content">
						<div class="small-text">
							Architect
						</div>
						<h2 class="heading-3">
							Henry Sanchez
						</h2>
						<p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra
							deo nulla ut metus varius qui
							laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="testimonial-item-image image-cover">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/author-image-01.webp" alt="">
					</div>
					<div class="testimonial-item-content">
						<div class="small-text">
							Engineering Manager
						</div>
						<h2 class="heading-3">
							Alice Howard
						</h2>
						<p>
							Ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget rhoncus, amet
							sem vel quam nunc semper libero,
							sit amet sem neque sed ipsum. Namet quam nunc. Lorem ipsum sit.
						</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="testimonial-item-image image-cover">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/author-image-02.webp" alt="">
					</div>
					<div class="testimonial-item-content">
						<div class="small-text">
							Architect
						</div>
						<h2 class="heading-3">
							Henry Sanchez
						</h2>
						<p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra
							deo nulla ut metus varius qui
							laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="gl-s96"></div>

	<!-- full width image  -->
	<section class="ctn-full-width">
		<div class="wrapper">
			<div class="hero-inner-slider full-width-image">
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
						<div class="hero-split-text">LATEST</div>
						<h1 class="heading-2">PROJECT</h1>
						<p>Etiam Scelerisque tortor at lectus dapibus, nec fermentum diam feugiat. Morbi rutrum
							magna et dui feugiat, non tristique mi convallis liquam.</p>
						<div class="hero-buttons">
							<a href="#" class="button orange-button">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="gl-s96"></div>

	<section>
		<div class="wrapper">
			<div class="post-archive three-columns">
				<article class="post-archive-box column">
					<div class="post-archive-box-img post-image">
						<a href="#"> <img
								src="https://wilmer.qodeinteractive.com/wp-content/uploads/2018/12/h5-blog-img-01.jpg">
						</a>
					</div>
					<div class="post-content">
						<div class="post-box-meta d-flex justify-content-between">
							<div class="ac-post-cat">
								<a href="http://basethemedevcause.local/category/cat-a/">11. December. 2018</a>
							</div>
						</div>
						<div class="post-archive-box-title post-title">
							<h4><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h4>
						</div>
						<div class="bottom-section-button">
							<a href="#">
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
				<article class="post-archive-box column">
					<div class="post-archive-box-img post-image">
						<a href="#"> <img
								src="https://wilmer.qodeinteractive.com/wp-content/uploads/2018/12/h5-blog-img-01.jpg">
						</a>
					</div>
					<div class="post-content">
						<div class="post-box-meta d-flex justify-content-between">
							<div class="ac-post-cat">
								<a href="http://basethemedevcause.local/category/cat-a/">11. December. 2018</a>
							</div>
						</div>
						<div class="post-archive-box-title post-title">
							<h4><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h4>
						</div>
						<div class="bottom-section-button">
							<a href="#">
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
				<article class="post-archive-box column">
					<div class="post-archive-box-img post-image">
						<a href="#"> <img
								src="https://wilmer.qodeinteractive.com/wp-content/uploads/2018/12/h5-blog-img-01.jpg">
						</a>
					</div>
					<div class="post-content">
						<div class="post-box-meta d-flex justify-content-between">
							<div class="ac-post-cat">
								<a href="http://basethemedevcause.local/category/cat-a/">11. December. 2018</a>
							</div>
						</div>
						<div class="post-archive-box-title post-title">
							<h4><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h4>
						</div>
						<div class="bottom-section-button">
							<a href="#">
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

			</div>
		</div>
	</section>
	<div class="gl-s96"></div>

</div>
