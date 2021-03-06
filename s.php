<?php

$protocol = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.') {
	header('Location: '.$protocol.'www.'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI']);
    exit;
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css?a=2" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/construction/construction.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />

	<link rel="stylesheet" href="demos/construction/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css?a=1" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="demos/construction/css/colors.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>H & H Farms</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo"><img src="demos/construction/images/logo.png" alt="H & H Farms"></a>
					<a href="index.html" class="retina-logo"><img src="demos/construction/images/logo@2x.png" alt="H & H Farms"></a>
				</div><!-- #logo end -->

				<ul class="header-extras">
					<li>
						<i class="i-plain icon-call nomargin"></i>
						<div class="he-text">
							Call Us
							<span>269 649 0764</span>
						</div>
					</li>
					<li>
						<i class="i-plain icon-line2-envelope nomargin"></i>
						<div class="he-text">
							Email Us
							<span>corn@handhfarms.com</span>
						</div>
					</li>
					<li>
						<i class="i-plain icon-line-clock nomargin"></i>
						<div class="he-text">
							We'are Open
							<span>Mon - Fri, 7AM to 4PM</span>
						</div>
					</li>
				</ul>

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="with-arrows style-2 center">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="current"><a href="/"><div>Home</div></a></li>
							<li class="current"><a href="/about.html"><div>About Us</div></a></li>
							<li><a href="#"><div>Employees</div></a>
								<ul>
									<li><a href="#"><div>Training Links</div></a></li>
									<li><a href="#"><div>Payroll Information</div></a></li>
									<li><a href="#"><div>Handbooks</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Careers</div></a>
								<ul>
									<li><a href="#"><div>Job Postings</div></a></li>
									<li><a href="#"><div>Turn In Apps</div></a></li>
								</ul>
							</li>
						</ul>

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 750px;" data-loop="true">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('demos/construction/images/slider/2.jpg?a=1'); background-position: center top;">
						<div class="container clearfix table-responsive" style="overflow: hidden;">
							<!-- <div class="slider-caption" style="font-size:12px; margin-top:-190px; top:0; max-width:100%; width: 800px;"> -->
								<div style="padding: 10px; background: #333;  color: #FFF; margin-top: 1rem; width: 700px">Corn</div>
								<table class="table table-md table-light table-striped table-hover" style="background: rgba(255,255,255,0.8); width: 700px;" id="cornBids">
									<!-- <table class="table table-md table-light table-striped table-hover" style="background: rgba(255,255,255,0.8);" id="cornBids"> -->

									<thead class="thead-light">
									<tr>
										<!-- <th data-col="delivery">Delivery</th>
										<th data-col="bid">Bid</th>
										<th data-col="basis">Basis</th>
										<th data-col="futures">Futures</th>
										<th data-col="change">Chg</th>
										<th data-col="month" class="_mb">Symbol</th>
										<th data-col="last" class="_mb">Last Trade</th> -->
										<th data-col="delivery" class="" style="width:20%">Month</th>
										<th data-col="bid" class=""  style="width:20%">Bid</th>
										<th data-col="basis" class=""  style="width:20%">Basis</th>
										<th data-col="last" class="_mb"  style="width:20%">Last Trade</th>
										<th data-col="delivery" class=""  style="width:20%">Contract</th>
									</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td data-col="delivery">APR 20    </td>
											<td data-col="bid">3.1175</td>
											<td data-col="basis">-0.20</td>
											<td data-col="futures">3.3175s</td>
											<td data-col="change" data-change="+1.75">+1.75</td>
											<td data-col="month">CK20</td>
											<td data-col="last">7:36 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">MAY 20    </td>
											<td data-col="bid">3.1175</td>
											<td data-col="basis">-0.20</td>
											<td data-col="futures">3.3175s</td>
											<td data-col="change" data-change="+1.75">+1.75</td>
											<td data-col="month">CK20</td>
											<td data-col="last">7:36 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">JUN 20    </td>
											<td data-col="bid">3.2175</td>
											<td data-col="basis">-0.15</td>
											<td data-col="futures">3.3675s</td>
											<td data-col="change" data-change="+1.25">+1.25</td>
											<td data-col="month">CN20</td>
											<td data-col="last">7:36 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">JUL 20    </td>
											<td data-col="bid">3.2175</td>
											<td data-col="basis">-0.15</td>
											<td data-col="futures">3.3675s</td>
											<td data-col="change" data-change="+1.25">+1.25</td>
											<td data-col="month">CN20</td>
											<td data-col="last">7:36 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">AUG 20    </td>
											<td data-col="bid">3.2675</td>
											<td data-col="basis">-0.15</td>
											<td data-col="futures">3.4175s</td>
											<td data-col="change" data-change="+1.25">+1.25</td>
											<td data-col="month">CU20</td>
											<td data-col="last">7:35 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">SEP 20    </td>
											<td data-col="bid">3.2675</td>
											<td data-col="basis">-0.15</td>
											<td data-col="futures">3.4175s</td>
											<td data-col="change" data-change="+1.25">+1.25</td>
											<td data-col="month">CU20</td>
											<td data-col="last">7:35 PM</td>
										</tr>
										<tr>
											<td data-col="delivery">ON 20     </td>
											<td data-col="bid">3.2575</td>
											<td data-col="basis">-0.25</td>
											<td data-col="futures">3.5075s</td>
											<td data-col="change" data-change="+1.50">+1.50</td>
											<td data-col="month">CZ20</td>
											<td data-col="last">7:36 PM</td>
										</tr> -->
									</tbody>
								</table>
								<strong style="color: white;">*Cash bids are subject to change without notice. </strong>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
						<h3 style="letter-spacing: 2px;">Interested in contracting corn?</h3>
						<span>Our simple, streamlined process and competitive pricing make it easier than ever.</span>
						<a href="#" class="button button-large button-border button-rounded btn-success" id="contractBtn" data-toggle="modal" data-target=".bs-example-modal-lg">Contract</a>
					</div>
				</div>

				<div class="container clearfix">

					<p>
						H&H Farms has been family owned and operated since 1978. We take great pride in raising healthy pigs from farrow to finish. Our team consists of over 85 incredibly awesome employees and 10,000 sows! In 2018, we'll send over 250,000 pigs to marker, which will provide over 900,000 servings of premium pork per week to pork lovers across America! on average, our feed mill produces over 3,500 tons of feed per week and almost 200,000 tons annually. We take great pride in providing our employees with career opportunities to grow with us!
					</p>

					<center><img src="images/smallpig.png" style="width:200px;"/></center>

				</div>

			</div>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal">
				<div class="modal-dialog modal-lg">
					<div class="modal-body">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Corn Contract Details</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body row">

								<div class="col-md-6 form-group">
									<label>Contract Month:</label>
									<select class="form-control required" id="contractMonths">
										<!-- <option value="">-- Select One --</option> -->
									</select>
								</div>

								<div class="col-md-6 form-group">
									<label>Bid:</label>
									<input type="text" class="form-control" id="bidValue" value="" placeholder="Bid" disabled>
								</div>

								<div class="col-md-12 form-group">
									<label>Bushels:</label>
									<input type="text" class="form-control" id="bushels_text" value="0" placeholder="">
								</div>

								<div class="col-12">
									<div class="row input-daterange">
										<div class="col-md-6 form-group">
											<label for="car-rental-pickup-date">Delivery Time Frame:</label>
											<input type="text" name="car-rental-pickup-date" id="car-rental-pickup-date" class="form-control input-datepicker tleft required" value="" placeholder="Choose Date">
										</div>
										<div class="col-md-6 form-group">
											<label for="car-rental-dropoff-date">-</label>
											<input type="text" name="car-rental-dropoff-date" id="car-rental-dropoff-date" class="form-control input-datepicker tleft" value="" placeholder="Choose Date">
										</div>
									</div>
								</div>

								<div class="col-md-12 form-group">
									<label>Farm Name:</label>
									<input type="text" class="form-control" value="" placeholder="">
								</div>

								<div class="col-md-12 form-group">
									<label>Contact Name:</label>
									<input type="text" class="form-control" value="" placeholder="">
								</div>

								<div class="col-md-12 form-group">
									<label>Phone:</label>
									<input type="text" class="form-control" value="" placeholder="">
								</div>

								<div class="col-md-12 form-group">
									<label>Email:</label>
									<input type="text" class="form-control" value="" placeholder="">
								</div>

								<div class="col-md-12 form-group">
									<label>Note:</label>
									<textarea class="form-control"></textarea>
								</div>

								<div class="col-12 mt-2 mb-3">
									<div class="card p-3 bg-light">
										<div class="car-body">
											<p class="mb-0">By pressing the submit button below I agree to the <a href="https://infarmsolutions.com/termsandconditions.html" target="_blank">Terms and Conditions</a> of this agreement. All contracts must also be agreed to signed by H & H Farms to be considered valid</p>
										</div>
									</div>
								</div>

								<div class="col-12">
									<button type="submit" name="car-rental-submit" class="btn btn-success btn-lg" style="margin: 0 auto;">Reserve Now</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/plugins.js"></script>
	<!-- DatePicker JS -->
	<script src="js/components/datepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
	<script src="js/handh.js?a=1"></script>
	<!-- <script src="js/handh.js"></script> -->

</script>
	<script>
		jQuery(document).ready( function(){
			$('.input-daterange').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});

		});

	</script>

</body>
</html>
