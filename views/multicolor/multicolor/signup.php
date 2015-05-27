<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/ico/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="assets/ico/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="assets/ico/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="assets/ico/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="assets/ico/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="assets/ico/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="assets/ico/manifest.json">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<meta name="application-name" content="p2made">
	<meta name="msapplication-TileColor" content="#ffcc00">
	<meta name="msapplication-TileImage" content="assets/ico/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="assets/ico/mstile-70x70.png">
	<meta name="msapplication-square150x150logo" content="assets/ico/mstile-150x150.png">
	<meta name="msapplication-wide310x150logo" content="assets/ico/mstile-310x150.png">
	<meta name="msapplication-square310x310logo" content="assets/ico/mstile-310x310.png">
	<meta name="msapplication-config" content="assets/ico/browserconfig.xml">
	<meta name="theme-color" content="#ffcc00">

	<title>Signup | P2Triangle</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css" rel="stylesheet">
	<link href="assets/css/lightbox.css" rel="stylesheet">
	<link href="assets/css/triangle.min.css" rel="stylesheet">
	<link href="assets/css/responsive.min.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.0/bootstrap-social.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
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
	</header><!--/#header-->

	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			<div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12 text-center">
							<h1 class="title">
								<img src="assets/badge.png" alt="badge">
								P<sup>2</sup>Triangle
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section><!--/#page-breadcrumb-->

	<section id="auth">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-md-offset-4">

					<h2 class="text-center">Signup for membership</h2>

					<div class="panel panel-default">
						<div class="panel-body">

							<form id="signup-form" name="signup-form" method="post" role="form">
								<div class="form-group has-feedback field-signupform-username required" autofocus="autofocus">
									<input type="text" id="signupform-username" name="signupform-username" class="form-control" placeholder="Username">
									<i class='glyphicon glyphicon-user form-control-feedback'></i>
								</div>
								<div class="form-group has-feedback field-signupform-email required">
									<input type="text" id="signupform-email" name="signupform-email" class="form-control" placeholder="Email">
									<i class='glyphicon glyphicon-envelope form-control-feedback'></i>
								</div>
								<div class="form-group has-feedback field-signupform-password required">
									<input type="password" id="signupform-password" name="signupform-password" class="form-control" placeholder="Password">
									<i class='glyphicon glyphicon-lock form-control-feedback'></i>
								</div>
								<div class="form-group has-feedback field-signupform-password required">
									<input type="password" id="signupform-confirm" name="signupform-confirm" class="form-control" placeholder="Confirm">
									<i class='glyphicon glyphicon-lock form-control-feedback'></i>
								</div>
								<div class="row">
									<div class="col-sm-8">
										<div class="form-group field-signupform-agree">
											<div class="checkbox">
												<label for="signupform-agree">
													<input type="checkbox" id="signupform-agree" name="signupform-agree" value="0">
													I Agree
												</label>
											</div>
										</div>
									</div><!-- /.col -->
									<div class="col-sm-4">
										<button type="submit" name="signup-button" class="btn btn-primary btn-block btn-flat">Signup</button>
									</div><!-- /.col -->
								</div>
							</form>

							<div class="social-auth-links text-center">
								<p>– OR –</p>
								<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
									<i class="fa fa-facebook"></i> Signup using Facebook
								</a>
								<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat">
									<i class="fa fa-google-plus"></i> Signup using Google+
								</a>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section><!--/#auth-->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center bottom-separator">
					<img src="assets/under.png" class="img-responsive inline" alt="">
				</div>
			</div>
		</div>
	</footer><!--/#footer-->

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
	<script type="text/javascript" src="assets/js/triangle.min.js"></script>
</body>
</html>
