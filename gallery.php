<!DOCTYPE html>
<html lang="en">
	<head>
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
					<!-- <picture>
						<source srcset="img/export1 copy.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/export1 copy.jpg" alt="img"/>
					</picture> -->
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
				</section>
				<!-- gallery start-->
				<section class="section gallery">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<ul class="filter-panel">
									<li class="filter-panel__item filter-panel__item--active" data-filter="*">
										<span>All the pictures</span>
									</li>
									<li class="filter-panel__item" data-filter=".category_1"><span>Entrepreneurship</span></li>
									<li class="filter-panel__item" data-filter=".category_2"><span>Financing</span></li>
									<li class="filter-panel__item" data-filter=".category_3"><span>Education</span></li>
									<li class="filter-panel__item" data-filter=".category_4"><span>Nutrition</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row no-gutters gallery-masonry">
						<div class="col-6 col-md-4 gallery-masonry__item category_1">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/whater-prj5.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/whater-prj5.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">1 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_1">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/cretid.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/cretid.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">2 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/IMG_8786.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/IMG_8786.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">3 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/IMG_0318.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/IMG_0318.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">4 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-8 gallery-masonry__item category_3">
							<a class="gallery-masonry__img gallery-masonry__item--height-1" href="img/whater-prj1.jpg.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/whater-prj1.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">5 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_3">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/2ded88ba-f12a-430c-acce-39d2e0c7ce9e.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/2ded88ba-f12a-430c-acce-39d2e0c7ce9e.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">6 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-8 gallery-masonry__item category_4">
							<a class="gallery-masonry__img gallery-masonry__item--height-3" href="img/taillor-widower.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/taillor-widower.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">7 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_4">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/29bbcb74-d715-4102-b84f-233c840b533e.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/29bbcb74-d715-4102-b84f-233c840b533e.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">8 Nous avons besoin de votre soutien</h6>
							</a>
						</div>

						<div class="col-6 col-md-4 gallery-masonry__item category_1">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/7bd77ec6-b8a0-4394-a2b9-7b394149302d.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/7bd77ec6-b8a0-4394-a2b9-7b394149302d.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">1 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_1">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/whater-prj4.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/whater-prj4.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">2 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/84f4d4f7-2891-4afa-9d85-eef59d26d279.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/84f4d4f7-2891-4afa-9d85-eef59d26d279.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">3 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2">
							<a class="gallery-masonry__img gallery-masonry__item--height-1" href="img/sdjdj3287464bfjfjsj643bf78wrh3467sd.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/sdjdj3287464bfjfjsj643bf78wrh3467sd.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">5 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-8 gallery-masonry__item category_3">
							<a class="gallery-masonry__img gallery-masonry__item--height-1" href="img/sdjdj3287464bfjfjsj643bf78wrh3467sd.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/sdjdj3287464bfjfjsj643bf78wrh3467sd.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">5 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_3">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/Image2.png" data-fancybox="gallery">
								<img class="img--bg" src="img/Image2.png" alt="img"/>
								<h6 class="gallery-masonry__description">6 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-8 gallery-masonry__item category_4">
							<a class="gallery-masonry__img gallery-masonry__item--height-3" href="img/whater-prj3.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/whater-prj3.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">7 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
						<div class="col-6 col-md-4 gallery-masonry__item category_4">
							<a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery">
								<img class="img--bg" src="img/gallery_8.jpg" alt="img"/>
								<h6 class="gallery-masonry__description">8 Nous avons besoin de votre soutien</h6>
							</a>
						</div>
					</div>
				</section>
				<!-- gallery end-->
				<!-- donors start-->
				<!-- <section class="section donors no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12"><br>
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">SPONSORS</span>
									<h2 class="heading__title no-margin-bottom"><span>Ceux qui sont derriere</span> <span>ces grandes réalisations</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="slider-holder">
									<div class="donors-slider donors-slider--style-1">
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_1.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_2.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_3.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_4.png" alt="donor"/></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- donors end-->
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
	</body>

<!-- Mirrored from demo.artureanec.com/html/helpo/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Feb 2022 21:00:55 GMT -->
</html>