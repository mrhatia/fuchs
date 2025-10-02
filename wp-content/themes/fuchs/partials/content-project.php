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
	<div class="gl-s128"></div>

	<section class="ctn-1100">
		<div class="wrapper">
			<div class="section-head">
				<div class="hero-split-text">1 RAUM</div>
				<h1 class="heading-2">VIELE GRÜNDE</h1>
			</div>
		</div>
	</section>
	<div class="gl-s48"></div>
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
					<h2 class="heading-">Wohnen im Zentrum von Nürnberg</h2>
					<p>Glockenhof ist ein lebendiger Stadtteil, welcher direkt südlich an die Nürnberger Altstadt angrenzt. Aufgrund dieser Lage ist Glockenhof vor allem wohnwirtschaftlich geprägt.
					In diesem Umfeld haben sich über viele Jahre hinweg Restaurants, medizinische Versorgung, Einkaufsmöglichkeiten etc. angesiedelt und sorgen für eine <strong>hohe Freizeit- und Lebensqualität.</strong>
					<br>
					Hier vereinen sich <strong>historische Wurzeln</strong> mit <strong>urbanem Leben</strong>. Die Mischung aus Innenstadtnähe, guter Infrastruktur und der guten Anbindung an die öffentlichen Verkehrsmittel machen den
					<br>
					Stadtteil zu einem attraktiven Wohnort für Berufspendler, Senioren und Studenten.
					Die Wohnbebauung in Verbindung des gewachsenen Umfelds ist ein Garant für permanente Wohnraumnachfrage.
</p>
				</div>
				<div class="iat-image column">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/Bildschirmfoto 2025-08-16 um 18.10.52 Kopie.png"
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
							<a href="#tab-01" class="active">Grundrisse</a>
						</li>
						<li class="dropdown-list-title">
							<a href="#tab-02" class="">Objekt</a>
						</li>
						<li class="dropdown-list-title">
							<a href="#tab-03" class="">Details</a>
						</li>
						<li class="dropdown-list-title">
							<a href="#tab-04" class="">Lage</a>
						</li>
					</ul>
				</div>
				<div class="tabbed-map-content-inner">
					<div id="tab-01" class="tabbed-content-single tabbed-id-item active" style="">
						<div class="gl-s48"></div>
						<div class="two-columns">
							<div class="column">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/design-1.png" alt="">
							</div>
							<div class="column">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/design-2.png" alt="">
							</div>
							<div class="column">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/design-3.png" alt="">
							</div>
							<div class="column">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/design-4.png" alt="">
							</div>
						</div>
					</div>

					<div class="gl-s48"></div>

					<div id="tab-02" class="tabbed-content-single tabbed-id-item tabbed-text-columns" style="display: none;">
						<div class="two-columns">
							<div class="column">
								<p>Baubeginn Herbst 2025 <br> Fertigstellung Frühjahr 2027</p>
								<br><br>
								<p>Zentrumsnähe und Wohnkomfort <br> freie Nutzung, kein Betreiberkonzept</p>
									<div class="gl-s48"></div>

								<div class="tabbed-image ">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/tabbed-column-one-image.png" alt="">
									<div class="gl-s12"></div>

									<div class="center-align"><strong>Ansicht Hofseite</strong></div>
								</div>
							</div>
							<div class="column">
								<p>Baubeginn Herbst 2025 <br> Fertigstellung Frühjahr 2027</p>
								<br><br>
								<p>Zentrumsnähe und Wohnkomfort <br> freie Nutzung, kein Betreiberkonzept</p>
									<div class="gl-s48"></div>

								<div class="tabbed-image ">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/tabbed-column-one-image.png" alt="">
									<div class="gl-s12"></div>

									<div class="center-align"><strong>Ansicht Hofseite</strong></div>
								</div>
							</div>
						</div>
					</div>
					<div id="tab-03" class="tabbed-content-single tabbed-id-item" style="display: none;">
						<h3>Maximale Wohnqualität auf effizientem Raum</h3>
						<h4 class="heading-5">IRAUM Glockenhof</h4>
						<p>Appartement- Wohnungen erfüllen die Anforderungen moderner Lebensstile- kompakt, durch- dacht und wirtschaftlich. Gerade in zentralen Lagen sind sie eine attraktive Wohnform: Die laufenden Kosten sind überschaubar, der Bedarf an Wohnfläche ist angepasst an eine breite Zielgruppe. Für Menschen, die bewusst kompakt und effizient wohnen möchten- ob Studie- rende, Pendler, Senioren oder Singles .</p>
						<p>Unser Projekt steht dabei für ein bewusstes Gegenmodell zu anonymen Großanlagen . Ein kleines, energieeffizientes Mehrfamilienhaus schafft ein persönliches Wohnumfeld, das Nähe und Übersichtlichkeit vereint. Gleichzeitig bleibt die Verwaltung effizient, Instand- haltungskosten sind besser kalkulierbar, und individuelle Maßnahmen zur Werterhaltung lassen sich gezielter umsetzen .</p>
						<p>1RAUM- Viele Möglichkeiten</p>
					</div>
					<div id="tab-04" class="tabbed-content-single tabbed-id-item" style="display: none;">
						<h3>Glockenhof­straße 45, 90478 Nürnberg</h3>
						<p>Zentrale Lage in der Innenstadt von Nürnberg ,fußläufig zwischen der Altstadt und dem <br> Naherholungsgebiet Wöhrder See.</p>
						<div class="gl-s36"></div>
						<!-- <style>
							#map {
							height: 400px;
							width: 100%;
							}
						</style>
						  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMr02RSFG_S1_OLWYRTSdc92oXkx_XQes"></script>
							<script>
								function initMap() {
								const styledMap = [
									{ elementType: "geometry", stylers: [{ color: "#f5f5f5" }] },
									{ elementType: "labels.icon", stylers: [{ visibility: "off" }] },
									{ elementType: "labels.text.fill", stylers: [{ color: "#616161" }] },
									{ elementType: "labels.text.stroke", stylers: [{ color: "#f5f5f5" }] },
									{ featureType: "administrative.land_parcel", elementType: "labels.text.fill", stylers: [{ color: "#bdbdbd" }] },
									{ featureType: "poi", elementType: "geometry", stylers: [{ color: "#eeeeee" }] },
									{ featureType: "poi", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] },
									{ featureType: "poi.park", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] },
									{ featureType: "poi.park", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] },
									{ featureType: "road", elementType: "geometry", stylers: [{ color: "#ffffff" }] },
									{ featureType: "road.arterial", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] },
									{ featureType: "road.highway", elementType: "geometry", stylers: [{ color: "#dadada" }] },
									{ featureType: "road.highway", elementType: "labels.text.fill", stylers: [{ color: "#616161" }] },
									{ featureType: "road.local", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] },
									{ featureType: "transit.line", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] },
									{ featureType: "transit.station", elementType: "geometry", stylers: [{ color: "#eeeeee" }] },
									{ featureType: "water", elementType: "geometry", stylers: [{ color: "#c9c9c9" }] },
									{ featureType: "water", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }
								];

								const map = new google.maps.Map(document.getElementById("map"), {
									center: { lat: 40.72327, lng: -73.88406 },
									zoom: 12,
									styles: styledMap
								});

								// Optional: Add a marker
								new google.maps.Marker({
									position: { lat: 40.72327, lng: -73.88406 },
									map: map
								});
								}

								window.onload = initMap;
							</script>
						<div id="map"></div> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193597.0165009085!2d-74.14431153175639!3d40.697024322520015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1759273618319!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
					<div class="kicker">zukunftssichere Investition</div>
					<h2 class="heading-2">Nachfrageüberhang bei 1Raum-Wohnungen</h2>
					<p>Die Nachfrage nach urbanen, kleinen 1 Personen- Neubau- Appartements in Metropolregionen wie Nürnberg übersteigt     das Angebot.
Unsere 1RAUM- Projektentwicklung ist eine der ersten entsprechenden Neubauprojekte nach der Zinswende und vereint höchste Marktattraktivität und Entwicklungsprognose.</p>

				</div>
				<div class="iat-image column">
					<img src="https://wordpress.p681800.webspaceconfig.de/wp-content/uploads/2025/10/map-block.png"
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
	<div class="gl-s48"></div>

	<!-- Testimonial Section -->
	<section>
		<div class="wrapper">
			<div class="swiper testimonial-variation">
				<div class="swiper-wrapper">

					<div class="swiper-slide testimonial-single">
						<div class="testimonial-single-image image-cover  mobile-hide">
						</div>
						<div class="testimonial-single-content">
							<p class="testimonial-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor,
								ut? Vero sequi quisquam optio suscipit nesciunt magni quo quia non deleniti ullam dolore vel,
								labore officiis pariatur iusto corrupti ex. Quia quas qui animi natus. Quibusdam rem, culpa qui modi,
								dolore ipsam labore provident cumque, consequatur accusantium sint enim minus!
							</p>
							<div class="testimonial-meta">
								<span class="testimonial-role">ARCHITECT</span>
								<h4 class="testimonial-name">Philip Larson</h4>
							</div>
						</div>
					</div>
					<div class="swiper-slide testimonial-single">
						<div class="testimonial-single-image image-cover mobile-hide">
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
								<span class="testimonial-role">Designer</span>
								<h4 class="testimonial-name">Jason Roy</h4>
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

			function initSwiper() {
			// Destroy existing swiper if it exists to avoid duplicates
			if (window.testimonialSwiper) {
				window.testimonialSwiper.destroy(true, true);
			}

			window.testimonialSwiper = new Swiper('.testimonial-variation', {
				effect: 'fade',           // Fade effect
				fadeEffect: {
				crossFade: true,       // Smooth cross-fade
				},
				direction: window.innerWidth <= 768 ? 'horizontal' : 'vertical', // 👉 Horizontal on mobile
				slidesPerView: 1,
				loop: true,
				speed: 1500,
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
				mousewheel: false,
				keyboard: {
				enabled: true,
				onlyInViewport: true,
				},
			});
			}

			// Initialize swiper on load
			initSwiper();

			// Reinitialize on resize (helpful for orientation changes)
			window.addEventListener('resize', initSwiper);
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
					<div class="media-with-text-image-text">
						UPDATES
					</div>
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
	<div class="gl-s200"></div>


	<section class="ctn-980">
		<div class="wrapper">
			<div class="section-head">
				<div class="hero-split-text">PARTNER</div>
				<h1 class="heading-2">ALLES AUS EINER HAND</h1>
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
								<h3><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h3>
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
								<h3><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h3>
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
								<h3><a href="#">Phasellus et viverra nulla metus vari quis lorem ispum</a> </h3>
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
	<div class="gl-s30"></div>

</div>
