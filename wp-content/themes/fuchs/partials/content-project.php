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
	<!-- Tabbed content -->


	<section>
		<div class="wrapper">
			<div class="tabbed-content-main tabbed-map-items">
				<div class="tabbed-map-nav">
					<ul role="list">
						<li class="dropdown-list-title">
							<a href="#tab-01" class="active">Marketing</a>
						</li>
						<li class="dropdown-list-title">
							<a href="#tab-02" class="">Design</a>
						</li>
						<li class="dropdown-list-title">
							<a href="#tab-03" class="">Branding</a>
						</li>
					</ul>
				</div>
				<div class="tabbed-map-content-inner">
					<div id="tab-01" class="tabbed-content-single tabbed-id-item active" style="">
						<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla
							ut metus varius laoreet.
							Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
							ultricies nisi. Nam eget dui.
							Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
							sit amet adipiscing sem neque
							sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
							nec odio.</p>
					</div>
					<div id="tab-02" class="tabbed-content-single tabbed-id-item" style="display: none;">
						<p>Content nulla nibh amet a adipiscing fringilla. Amet amet ac faucibus metus at
							nullam. In sit quisque amet morbi</p>
					</div>
					<div id="tab-03" class="tabbed-content-single tabbed-id-item" style="display: none;">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id accusantium, sint enim ex,
							eveniet consequatur blanditiis omnis consectetur dolores quaerat suscipit sed nemo
							sapiente. Minima dolore eum sint maxime dignissimos.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="gl-s96"></div>

	<!-- Image with text -->
	<section>
		<div class="wrapper">
			<div class="image-alongside-text image-at-left d-flex justify-content-between flex-wrap align-items-center">
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
	<!-- Offering secttion -->
	<section>
		<div class="wrapper">
			<div class="offering-block">
				<div class="offering-block-left">
					<div class="offering-block-image image-cover">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/offering-image.jpg" alt="">
					</div>
					<div class="author-tag kicker">
						architect
					</div>
					<h2 class="heading-3 author-name">
						philip larson
					</h2>

				</div>
				<div class="offering-block-content">
					<div class="kicker">
						Explore the Features
					</div>
					<h2 class="heading-2">
						Offering complete integrated package
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis
						Theme natoque penatibus et magnis dis parturient montes, nascetur.

					</p>
					<a href="mailto:matthias.haemmer@fuchs-projektentwicklung.de" class="link email">
						matthias.haemmer@fuchs-projektentwicklung.de
					</a>
					<a href="tel:+4991299030" class="link phone">
						+49 (0) 9129 903-0
					</a>

					<div class="offering-button">
						<a href="#" class="button orange-button">
							read more
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="gl-s96"></div>
	<!-- Testimonial Section -->
	<section>
		<div class="wrapper">
			<div class="swiper testimonial-variation">
				<div class="swiper-wrapper">
					<div class="swiper-slide testimonial-single">
						<div class="testimonial-single-image image-cover">
						</div>
						<div class="testimonial-single-content">
							<p class="testimonial-text">
								Venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus im
								tincidunt.
								Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis eo magna. Sed
								consequat, leo
								eget
								bibendum sodales, augue velit. Aliquam lorem.
							</p>
							<div class="testimonial-meta">
								<span class="testimonial-role">ARCHITECT</span>
								<h4 class="testimonial-name">Philip Larson</h4>
							</div>
						</div>
					</div>
					<div class="swiper-slide testimonial-single">
						<div class="testimonial-single-image image-cover">
						</div>
						<div class="testimonial-single-content">
							<p class="testimonial-text">
								Venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus im
								tincidunt.
								Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis eo magna. Sed
								consequat, leo
								eget
								bibendum sodales, augue velit. Aliquam lorem.
							</p>
							<div class="testimonial-meta">
								<span class="testimonial-role">ARCHITECT</span>
								<h4 class="testimonial-name">Philip Larson</h4>
							</div>
						</div>
					</div>


				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const swiper = new Swiper('.testimonial-variation', {
				direction: 'vertical',
				slidesPerView: 1,
				loop: true,
				speed: 800,
				spaceBetween: 0,
				autoHeight: true,
				autoplay: {
					delay: 3000,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				mousewheel: true,
				keyboard: {
					enabled: true,
					onlyInViewport: true,
				},
			});
		});
	</script>
	<div class="gl-s96"></div>

	<!-- Faqs -->
	<section>
		<div class="wrapper">
			<div class="faq-with-image faq-block">
				<div class="faq-image image-cover">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/faq-image.jpg" alt="">
				</div>
				<div class="faq-items">
					<div class="faq">
						<div class="faq-head">
							<h3 class="heading-5">Project Planning</h3>
							<span class="faq-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
									fill="none">
									<rect x="9" width="1" height="19" fill="#151515" />
									<path d="M0 10L1.19248e-08 9L19 9V10L0 10Z" fill="#151515" />
								</svg>
							</span>
						</div>
						<div class="faq-content">
							<p>Lorem ipsum dolor sit amet messa consectetuer adipiscing elit. Aenean commodo ligula
								eget dolor.
							</p>
						</div>
					</div>
					<div class="faq">
						<div class="faq-head">
							<h3 class="heading-5">Refurbishment</h3>
							<span class="faq-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
									fill="none">
									<rect x="9" width="1" height="19" fill="#151515" />
									<path d="M0 10L1.19248e-08 9L19 9V10L0 10Z" fill="#151515" />
								</svg>
							</span>
						</div>
						<div class="faq-content">
							<p>Accessible Gates: All entrances are ADA accessible.
							</p>
							<ul>
								<li>
									Lorem ipsum dolor sit
								</li>
								<li>
									Lorem ipsum dolor sit
								</li>
								<li>
									Lorem ipsum dolor sit
								</li>
							</ul>
						</div>
					</div>
					<div class="faq">
						<div class="faq-head">
							<h3 class="heading-5">General Contracting</h3>
							<span class="faq-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
									fill="none">
									<rect x="9" width="1" height="19" fill="#151515" />
									<path d="M0 10L1.19248e-08 9L19 9V10L0 10Z" fill="#151515" />
								</svg>
							</span>
						</div>
						<div class="faq-content">

							<img src="../assets/src/images/uploads/post-01.webp" alt="">
						</div>
					</div>
					<div class="faq">
						<div class="faq-head">
							<h3 class="heading-5">Interior design</h3>
							<span class="faq-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
									fill="none">
									<rect x="9" width="1" height="19" fill="#151515" />
									<path d="M0 10L1.19248e-08 9L19 9V10L0 10Z" fill="#151515" />
								</svg>
							</span>
						</div>
						<div class="faq-content">

							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi minus vel
							officiis alias sunt doloremque at asperiores provident, quae, numquam quaerat
							nam earum facere odit quam officia blanditiis consequatur esse.
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<div class="gl-s96"></div>

	<!-- Media With Text -->
	<section class="ctn-full-width">
		<div class="wrapper">
			<div class="media-with-text variation">
				<div class="media-with-text-image image-cover">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/our-services-title-img.jpg" alt="">
				</div>
				<div class="media-with-text-content-box">
					<div class="kicker">
						Explore the Features
					</div>
					<h2 class="heading-2">
						Full project management
					</h2>
					<p>
						Lorem ipsum dolor sit amet, quam felis adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean
						massa. Cum sociis Theme
						mus.
					</p>
					<div class="media-with-text-button">
						<a href="#" class="button">
							Read more
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="gl-s96"></div>
	<!-- Media with text Variation -->
	<section class="ctn-full-width">
		<div class="wrapper">
			<div class="media-with-text">
				<div class="media-with-text-image image-cover">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/our-services-title-img.jpg" alt="">
				</div>
				<div class="media-with-text-content-box">
					<div class="kicker">
						Explore the Features
					</div>
					<h2 class="heading-2">
						Full project management
					</h2>
					<p>
						Lorem ipsum dolor sit amet, quam felis adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean
						massa. Cum sociis Theme
						mus.
					</p>
					<div class="media-with-text-button">
						<a href="#" class="button">
							Read more
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="gl-s96"></div>
	<!-- Logo Grid -->
	<section>
		<div class="wrapper">
			<div class="logo-grid">
				<div class="single-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/logo-01.png" alt="">
				</div>
				<div class="single-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/logo-02.png" alt="">
				</div>
				<div class="single-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/logo-03.png" alt="">
				</div>
				<div class="single-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/logo-04.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<div class="gl-s96"></div>

	<div class="page-section">
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
	</div>
	<div class="gl-s96"></div>

</div>
