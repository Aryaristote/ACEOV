<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		<!-- Main css -->
		<link href="assets/css/style.css" rel="stylesheet">

		<?php 
			require "navbar/header.php"
		?>
	</head>
	<body>
		<div class="page-wrapper">
			<?php 
				$nav = 'gallery';
				require "navbar/navbar.php";
			?>
			<main class="main">
				<section class="promo-primary" style="background-color: #b7472a;">
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">A.C.E.O.V</span>
										<h1 class="promo-primary__title"><span>Unforgettable </span> <span>moments</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><br>
				<!-- gallery start-->
				<!-- ======= Portfolio Section ======= -->
				<section class="portfolio">
					<div class="scnd_container">
						<div class="row">
							<div class="col-lg-12">
								<ul id="portfolio-flters">
									<li data-filter="*" class="filter-active">All pictures</li>
									<li data-filter=".filter-app">Water supply</li>
									<li data-filter=".filter-card">Entrepreneurship and financing</li>
									<li data-filter=".filter-web">Soap making</li>
								</ul>
							</div>
						</div>

						<!-- <video width="100%" height="400" controls autoplay muted>
									<source src="img/video/mov_bbb.mp4" type="video/mp4">
									<source src="img/video/mov_bbb.mp4" type="video/ogg">
									Your browser does not support the video tag.
								</video> -->

						<div class="portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
									<img src="assets/img/portfolio/img1.jpg" class="img-fluid" alt="">
									<div class="portfolio-info">
										<div>
										<a href="assets/img/portfolio/img1.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox">
											<i class="bx bx-plus"></i>
										</a>
										<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
								   <iframe width="420" height="200" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/8wlQWFQu04k"></iframe>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img2.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img2.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img3.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img3.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>

							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img4.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img4.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>

							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img5.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img5.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img6.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img6.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img7.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img7.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-web">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img8.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img8.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-web">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img9.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img9.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img10.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img10.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
								   <iframe width="420" height="200"  allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/J1BG9VvapFc"></iframe>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img11.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img11.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img12.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img12.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-web">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img13.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img13.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img14.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img14.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-web">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img15.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img15.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-app">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img16.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img16.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img17.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img17.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
							<div class="item portfolio-wrap filter-card">
								<div class="portfolio-item">
								<img src="assets/img/portfolio/img20.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<div>
									<a href="assets/img/portfolio/img20.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
									<a href="#" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<!-- footer start-->
			<footer class="footer">
				<?php 
					$footer = 'gallery';
					require "navbar/footer.php"
				?>
			</footer>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
		
		<!-- Vendor JS Files -->
		<script src="assets/vendor/aos/aos.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>
		<script src="assets/vendor/purecounter/purecounter.js"></script>
		<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>
	</body>
</html>