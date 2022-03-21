<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>ACEOV</title>
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
				// $nav = 'don';
				require "navbar/navbar.php";
			?>
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/contacts.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/contacts.jpg" alt="img"/>
					</picture>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<span class="promo-primary__pre-title">A.C.E.O.V</span>
										<h1 class="promo-primary__title"><span>Faire un Don</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><br><br>
				<!-- contacts start-->
				<section class="section contacts no-padding-top">
					<div class="contacts-wrapper">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-xl-2"></div>
								<div class="col-xl-8">
									<form class="form message-form" action="javascript:void(0);">
										<h6 class="form__title">Faire un Don</h6>
										<div class="row">
											<div class="col-lg-6">
												<input class="form__field" type="number" name="first-name" placeholder="Montant*" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="text" name="last-name" placeholder="Nom sur la carte *" required="required"/>
											</div>
											<div class="col-12">
												<input class="form__field" type="number" name="email" placeholder="Numero de la carte *" required="required"/>
											</div>
											<div class="col-lg-4">
												<input class="form__field" type="tel" name="phone-number" placeholder="CVC"/>
											</div>
											<div class="col-lg-4">
												<input class="form__field" type="tel" name="phone-number" placeholder="Mois d'expiration"/>
											</div>
											<div class="col-lg-4">
												<input class="form__field" type="tel" name="phone-number" placeholder="Annee d'expiration"/>
											</div>
											<div class="col-12">
												<button class="form__submit" type="submit">Faire un don</button>
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
			
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
	</body>

<!-- Mirrored from demo.artureanec.com/html/helpo/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Feb 2022 21:01:27 GMT -->
</html>