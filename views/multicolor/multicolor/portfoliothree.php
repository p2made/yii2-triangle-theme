<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Portfolio Three Columns | Triangle</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/lightbox.css" rel="stylesheet">
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

	<link href="assets/img/ico/favicon.ico" rel="shortcut icon">
	<link href="assets/img/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="assets/img/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="assets/img/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="assets/img/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
</head><!--/head-->

<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 overflow">
				   <div class="social-icons pull-right">
						<ul class="nav nav-pills">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-dribbble"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			 </div>
		</div>
		<div class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.html">
						<h1><img src="assets/img/logo.png" alt="logo"></h1>
					</a>

				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="aboutus.php">About</a></li>
								<li><a href="aboutus2.php">About 2</a></li>
								<li><a href="service.php">Services</a></li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="contact.php">Contact us</a></li>
								<li><a href="contact2.php">Contact us 2</a></li>
								<li><a href="404.php">404 error</a></li>
								<li><a href="coming-soon.php">Coming Soon</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="blog.php">Blog <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="blog.php">Blog Default</a></li>
								<li><a href="blogtwo.php">Timeline Blog</a></li>
								<li><a href="blogone.php">2 Columns + Right Sidebar</a></li>
								<li><a href="blogthree.php">1 Column + Left Sidebar</a></li>
								<li><a href="blogfour.php">Blog Masonary</a></li>
								<li><a href="blogdetails.php">Blog Details</a></li>
							</ul>
						</li>
						<li class="dropdown active"><a href="portfolio.php">Portfolio <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="portfolio.php">Portfolio Default</a></li>
								<li><a href="portfoliofour.php">Isotope 3 Columns + Right Sidebar</a></li>
								<li><a href="portfolioone.php">3 Columns + Right Sidebar</a></li>
								<li><a href="portfoliotwo.php">3 Columns + Left Sidebar</a></li>
								<li><a class="active" href="portfoliothree.html">2 Columns</a></li>
								<li><a href="portfolio-details.php">Portfolio Details</a></li>
							</ul>
						</li>
						<li><a href="shortcodes.html ">Shortcodes</a></li>
					</ul>
				</div>
				<div class="search">
					<form role="form">
						<i class="fa fa-search"></i>
						<div class="field-toggle">
							<input type="text" class="search-form" autocomplete="off" placeholder="Search">
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<!--/#header-->


	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			 <div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title">Portfolio</h1>
							<p>Be Creative</p>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
	<!--/#action-->

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".branded">Branded</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".design">Design</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".folio">Folio</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".logos">Logos</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".mobile">Mobile</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".mockup">Mockup</a></li>
				</ul><!--/#portfolio-filter-->

				<div class="portfolio-items">
					<div class="col-sm-6 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/17.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/17.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item mockup folio">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/18.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/18.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/19.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/19.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/20.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/20.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item branded mobile">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/21.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/21.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item branded mockup">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/22.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/22.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item branded folio">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/23.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/23.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="assets/img/portfolio/24.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/img/portfolio/24.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-pagination">
					<ul class="pagination">
					  <li><a href="#">left</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li class="active"><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">6</a></li>
					  <li><a href="#">7</a></li>
					  <li><a href="#">8</a></li>
					  <li><a href="#">9</a></li>
					  <li><a href="#">right</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/#portfolio-->


	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center bottom-separator">
					<img src="assets/img/home/under.png" class="img-responsive inline" alt="">
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="testimonial bottom">
						<h2>Testimonial</h2>
						<div class="media">
							<div class="pull-left">
								<a href="#"><img src="assets/img/home/profile1.png" alt=""></a>
							</div>
							<div class="media-body">
								<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
								<h3><a href="#">- Jhon Kalis</a></h3>
							</div>
						 </div>
						<div class="media">
							<div class="pull-left">
								<a href="#"><img src="assets/img/home/profile2.png" alt=""></a>
							</div>
							<div class="media-body">
								<blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
								<h3><a href="">- Abraham Josef</a></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="contact-info bottom">
						<h2>Contacts</h2>
						<address>
						E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
						Phone: +1 (123) 456 7890 <br>
						Fax: +1 (123) 456 7891 <br>
						</address>

						<h2>Address</h2>
						<address>
						Unit C2, St.Vincent's Trading Est., <br>
						Feeder Road, <br>
						Bristol, BS2 0UY <br>
						United Kingdom <br>
						</address>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="contact-form bottom">
						<h2>Send a message</h2>
						<form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
							<div class="form-group">
								<input type="text" name="name" class="form-control" required="required" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
							</div>
							<div class="form-group">
								<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="copyright-text text-center">
						<p>&copy; Your Company 2014. All Rights Reserved.</p>
						<p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/#footer-->


	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="assets/js/lightbox.min.js" type="text/javascript"></script>
	<script src="assets/js/wow.min.js" type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>
