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
				$nav = 'index';
				require "navbar/navbar.php";
			?>
			<main class="main">
				<!-- promo start-->
				<section class="promo">
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="img/background-desktop.jpg" media="(min-width: 835px)"/>
								<source srcset="img/background-mobile.jpg" media="(min-width: 376px)"/>
								<img class="img--bg" src="img/background-desktop.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Our goal is to accompany, </span> <span>supervise and federate women and young people</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">By introducing them to self-care to fight against malnutrition and poverty.</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="stories.php">DISCOVER</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="img/background-desktop.jpg" media="(min-width: 835px)"/>
								<source srcset="img/background-mobile.jpg" media="(min-width: 376px)"/>
								<img class="img--bg" src="img/background-desktop.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-3">
													<a class="button promo-slider__button button--primary" href="stories.php">DISCOVER</a>
												</div><br>
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>We guide women and young people from urban areas,</span><br/><span> throughout the whole country.</span></h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<ul class="promo-socials">
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>

					<div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>+ More</span></a>
						<div class="promo-pannel__phones">
							<p class="promo-pannel__title">Phone Number</p>
							<a class="promo-pannel__link" href="tel:+243990413132"></a><a class="promo-pannel__link" href="tel:+18009756511">+243 990 413 132 - 975 652 211</a>
						</div>
						<div class="promo-pannel__email">
							<p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:contact@aceov.org">contact@aceov.org</a>
						</div>
					</div>

					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</section>

				<section class="section about-us" id="about">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="heading heading--primary"><span class="heading__pre-title">What we are!</span>
									<h2 class="heading__title"><span>ACEOV in abbreviation <br></span> <span>L’Action Chrétienne pour l’Encadrement des Veuves et Orphelins
									</span></h2>
								</div>
								<p>
									is a non-profit organization whose purpose is
									objective to initiate widows, orphans and vulnerable children
									with regard to self-care to fight against illness
									nutrition and poverty.
								</p>
								<a class="button button--primary" href="about.php">More about us</a>
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="info-box"><img class="img--layout" src="img/about_layout.png" alt="img"/><img class="img--bg" src="img/about-us-2.jpg" alt="img"/>
									<h4 class="info-box__title">We are a dedicated team of volunteers</h4>
									<p>Contribute to the integral development of the Congolese community likely to reduce the factors 
										favoring poverty and the threshold of vulnerability.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section icons-section no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--center"><span class="heading__pre-title">Our Services</span>
									<h2 class="heading__title"><span>What we do</span> <span>for the poor.</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_1-1.png" alt="img"/>
										<img class="img-prjet-list" alt="Image project one" src="img/enterpreneuship.png" />
									</div>
									<div class="icon-item__text">
										<p>Promotion to female entrepreneurship</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-2">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_1-1.png" alt="img"/>
										<img class="img-prjet-list" alt="Image project one" src="img/helping widow.jpg" />
									</div>
									<div class="icon-item__text">
										<p>Empowerment of widows and widowers</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-2">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_2-2.png" alt="img"/>
										<img class="img-prjet-list" alt="Image project one" src="img/peace and conflit.jpg" />
									</div>
									<div class="icon-item__text">
										<p>Public awareness of peaceful coexistence</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-2">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_3-3.png" alt="img"/>
										<img class="img-prjet-list" alt="Image project one" src="img/conflit.png" />
									</div>
									<div class="icon-item__text">
										<p>Contribute peaceful conflict resolution</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-2">
								<div class="icon-item">
									<div class="icon-item__img">
										<img class="img--layout" src="img/icon_4-4.png" alt="img"/>
											<img class="img-prjet-list" alt="Image project one" src="img/health.png" />
									</div>
									<div class="icon-item__text">
										<p>Contribute to the promotion of health</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section causes"><img class="causes__bg" src="img/causes_img.png" alt="img"/>
					<div class="container">
						<div class="row align-items-end">
							<div class="col-xl-5">
								<div class="heading heading--primary"><span class="heading__pre-title">What we did last years: </span>
									<h2 class="heading__title"><span></span>A.C.E.O.V <span>Donations and assistances</span></h2>
									<p>Continuation of health and nutrition care for orphans and vulnerable people.</p>
								</div>
							</div>
							<div class="col-xl-6 offset-xl-1 d-none d-xl-block">
								<div class="row offset-margin">
									<div class="col-6">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">More than 200 orphans were visited last year</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">200</span><span></span></div>
										</div>
									</div>
									<div class="col-6">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">more than 125 women trained for self-care</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter"> 125</span><span></span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row align-items-end margin-bottom">
							<div class="col-sm-6"><a class="button button--primary" href="stories.php">More achievements</a></div>
							<div class="col-sm-6 d-flex justify-content-sm-end">
								<!-- slider nav start-->
								<div class="slider__nav causes-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="causes-holder offset-margin">
						<div class="causes-holder__wrapper">
							<div class="causes-slider offset-margin">
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="stories.php">Field of health</a></h6>
												<p>Raise awareness about the different methods of family planning;</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #49C2DF">Health</div><img class="img--bg" src="img/Image3.png" alt="img"/>
											</div>
										</div>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="stories.php">Field of health</a></h6>
												<p>Sensitize widows who have children showing signs of malnutrition and other illnesses;</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #dfb749">Health</div><img class="img--bg" src="img/Image4.png" alt="img"/>
											</div>
										</div>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.php">Entrepreneurship field</a></h6>
												<p>Grant micro credits to widows who carry out small businesses;</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #F36F8F">Entrepreneurship</div><img class="img--bg" src="img/Image1.png" alt="img"/>
											</div>
										</div>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.php"> Always in entrepreneurship</a></h6>
												<p>Organize various training in the trade such as cutting and sewing, and other according to the felt need;</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #2EC774">Entrepreneurship</div><img class="img--bg" src="img/Image2.png" alt="img"/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section projects no-padding-top no-padding-bottom">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-lg-9">
								<div class="heading heading--primary">
									<!-- <span class="heading__pre-title">Ce que nous avons fait;</span> -->
									<h2 class="heading__title"><span>A.C.E.O.V</span> <span>achievements</span></h2>
									<p class="no-margin-bottom">Program of activities of the organization for the year 2020-2021 </p>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutters projects-masonry">
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--vertical">
							<div class="projects-masonry__img"><img class="img--bg" src="img/about-us-2.jpg" alt="img"/></div>
							<div class="projects-masonry__text" style="background-color: #2EC774;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #49C2DF;">Entrepreneurship</span>
									<h3 class="projects-masonry__title">With activities like:</h3>
									<p>Education <br> Health and nutrition, <br>Training,<br> support for income-generating activities for widowed women<br> Agriculture</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
							<div class="projects-masonry__img">
								<img class="img--bg" src="img/_78597443__nk_8596.jpg" alt="img"/>
							</div>
							<div class="projects-masonry__text" style="background-color: #9BC35E;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Formation</span>
									<h3 class="projects-masonry__title">The Training of Orphans</h3>
									<p>Orphans have the same rights as other children</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Année: </span><span>2020-2021</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
							<div class="projects-masonry__img">
								<img class="img--bg" src="img/formation-de-maman.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F8AC3A;">Training</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.php">The training of widowed mothers</a></h3>
									<p>Offering small activities to widowed women to meet their needs</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/gallery_5.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;">Training</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.php">Soap making training</a></h3>
									<p>Soap-making training to facilitate self-care for widows.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
							<div class="projects-masonry__img"><img class="img--bg" src="img/sdjdj3287464bfjfjsj643bf78wrh3467syelow.jpg" alt="img"/></div>
							<div class="projects-masonry__text" style="background-color: #E78F51;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;">Education</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.php">Give money to pay for their studies to their mothers</a></h3>
									<div class="projects-masonry__details-holder">
										<!-- <div class="projects-masonry__details-item"><span>Date: </span><span>Projet en cours</span></div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="img/projects_6.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Society</span>
									<h3 class="projects-masonry__title"> <a href="cause-details.php">Valuing the place of women in the society</a></h3>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section events"><img class="events__bg" src="img/events_bg.png" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
									<h2 class="heading__title"><span>A.C.E.O.V</span> <span> for you ...</span></h2>
									<p class="no-margin-bottom">With your support we hope to carry out even more projects in this year with the objective of bringing a smile to every vulnerable child in the country.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/whater-prj6.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Water supply</a></h6>
										<p>we have created a standpipe to provide access to drinking water in part of the himbi district</p>
										<p><b>Country:</b> Democratic Republic of Congo / Goma town</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/IMG_0318.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">All women are able</a></h6>
										<p><b>Country:</b> Democratic Republic of Congo</p>
										<p><b>September 30 - 17 January</b> 2023</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/taillor-widower.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Introduction to tailoring</a></h6>
										<p><b>Country:</b> Democratic Republic of Congo</p>
										<p><b>July 30 - 17 December</b> 2023</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/storie_3.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">School funding</a></h6>
										<p><b>Country:</b> Democratic Republic of Congo</p>
										<p><b>Under process</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="section donors no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12"><br>
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">SPONSORS</span>
									<h2 class="heading__title no-margin-bottom"><span>Those behind these </span> <span>great achievements</span></h2>
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
			</main>

			<footer class="footer">
				<?php 
					$footer = 'index';
					require "navbar/footer.php"
				?>
			</footer>
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
	</body>
</html>