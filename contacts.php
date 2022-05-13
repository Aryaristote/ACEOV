<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from demo.artureanec.com/html/helpo/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Feb 2022 21:01:23 GMT -->
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>A.C.E.O.V</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css"/>
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<?php 
				$nav = 'contact';
				require "navbar/navbar.php";
			?>
			<main class="main">
				<section class="promo-primary" style="background-color: #000;">
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<span class="promo-primary__pre-title">A.C.E.O.V</span>
										<h1 class="promo-primary__title"><span>Contacts</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section contacts">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icons8_place_marker_120px.png" alt="img"/>
										<svg class="icon icon-item__icon icon--red">
											<use xlink:href="#location-pin"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Adress: Goma on N*26, Les orchidées avenue, les volcans district, North Kivu in the Democratic Republic of Congo</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icons8_cell_phone_120px.png" alt="img"/>
										<svg class="icon icon-item__icon icon--orange">
											<use xlink:href="#phone-call"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Phone: <br><a class="icon-item__link" href="tel:+243990156400">+ 243 990 156 400</a> <a class="icon-item__link" href="tel:+243998066046">+ 243 998 066 046</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icons8_email_120px.png" alt="img"/>
										<svg class="icon icon-item__icon icon--green">
											<use xlink:href="#envelope"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Email: <a class="icon-item__link" href="mailto:support@helpo.org">aceovdrc@gmail.com</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icons8_link_120px.png" alt="img"/>
										<svg class="icon icon-item__icon icon--blue">
											<use xlink:href="#share"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<!-- socials start-->
										<ul class="socials">
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
										<!-- socials end-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- contacts start-->
				<section class="section contacts no-padding-top">
					<div class="contacts-wrapper">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-xl-2"></div>
								<div class="col-xl-8">
									<form class="form message-form" action="javascript:void(0);">
										<h6 class="form__title">Talk to us: </h6>
										<div class="row">
											<div class="col-lg-6">
												<input class="form__field" type="text" name="first-name" placeholder="Name *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="text" name="last-name" placeholder="Surname *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="tel" name="phone-number" placeholder="Phone number"/>
											</div>
											<div class="col-12">
												<textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<button class="form__submit" type="submit">Send</button>
											</div>
										</div>
									</form>
								</div>
								<div class="col-xl-2"></div>
							</div>
						</div>
					</div>
				</section>
				<!-- contacts end-->
			</main>
			<!-- footer start-->
			<footer class="footer">
				<?php 
					$footer = 'contact';
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
</html>