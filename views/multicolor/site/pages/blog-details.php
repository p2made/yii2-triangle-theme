<?php
/**
 * blog-details.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
p2made\theme\Triangle\assets\SwitchTo5xAsset::register($this);
p2made\theme\Triangle\assets\ShareThisAsset::register($this);
p2made\theme\Triangle\assets\StLightAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Blog';
$tagline = 'Blog with right sidebar';
$this->params['breadcrumbs'][] = $this->title;
?>
	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			<div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title">Blog Details</h1>
							<p>Blog with right sidebar</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#page-breadcrumb-->

	<section id="blog-details" class="padding-top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-7">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="single-blog blog-details two-column">
								<div class="post-thumb">
									<a href="#"><img src="/images/blog/7.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="#">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br> <br>

									There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
									<div class="post-bottom overflow">
										<ul class="nav navbar-nav post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
									<div class="blog-share">
										<span class='st_facebook_hcount'></span>
										<span class='st_twitter_hcount'></span>
										<span class='st_linkedin_hcount'></span>
										<span class='st_pinterest_hcount'></span>
										<span class='st_email_hcount'></span>
									</div>
									<div class="author-profile padding">
										<div class="row">
											<div class="col-sm-2">
												<img src="/images/blog/details/1.png" alt="">
											</div>
											<div class="col-sm-10">
												<h3>Rodrix Hasel</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
												<span>Website:<a href="www.jooomshaper.com"> www.jooomshaper.com</a></span>
											</div>
										</div>
									</div>
									<div class="response-area">
									<h2 class="bold">Comments</h2>
									<ul class="media-list">
										<li class="media">
											<div class="post-comment">
												<a class="pull-left" href="#">
													<img class="media-object" src="/images/blog/details/2.png" alt="">
												</a>
												<div class="media-body">
													<span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
													<ul class="nav navbar-nav post-nav">
														<li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
														<li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
													</ul>
												</div>
											</div>
											<div class="parrent">
												<ul class="media-list">
													<li class="post-comment reply">
														<a class="pull-left" href="#">
															<img class="media-object" src="/images/blog/details/3.png" alt="">
														</a>
														<div class="media-body">
															<span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
															<ul class="nav navbar-nav post-nav">
																<li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class="media">
											<div class="post-comment">
												<a class="pull-left" href="#">
													<img class="media-object" src="/images/blog/details/4.png" alt="">
												</a>
												<div class="media-body">
													<span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
													<ul class="nav navbar-nav post-nav">
														<li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
														<li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
													</ul>
												</div>
											</div>
										</li>

									</ul>
								</div><!--/Response-area-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-5">
					<div class="sidebar blog-sidebar">
						<div class="sidebar-item  recent">
							<h3>Comments</h3>
							<div class="media">
								<div class="pull-left">
									<a href="#"><img src="/images/portfolio/project/1.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
									<p>posted on  07 March 2014</p>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
									<a href="#"><img src="/images/portfolio/project/2.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
									<p>posted on  07 March 2014</p>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
									<a href="#"><img src="/images/portfolio/project/3.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
									<p>posted on  07 March 2014</p>
								</div>
							</div>
						</div>
						<div class="sidebar-item categories">
							<h3>Categories</h3>
							<ul class="nav navbar-stacked">
								<li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>
								<li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>
								<li><a href="#">Adipisicing elit<span class="pull-right">(4)</span></a></li>
								<li><a href="#">Sed do<span class="pull-right">(9)</span></a></li>
								<li><a href="#">Eiusmod<span class="pull-right">(3)</span></a></li>
								<li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>
								<li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>
								<li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>
							</ul>
						</div>
						<div class="sidebar-item tag-cloud">
							<h3>Tag Cloud</h3>
							<ul class="nav nav-pills">
								<li><a href="#">Corporate</a></li>
								<li><a href="#">Yii 2</a></li>
								<li><a href="#">Abstract</a></li>
								<li><a href="#">Creative</a></li>
								<li><a href="#">Business</a></li>
								<li><a href="#">Product</a></li>
							</ul>
						</div>
						<div class="sidebar-item popular">
							<h3>Latest Photos</h3>
							<ul class="gallery">
								<li><a href="#"><img src="/images/portfolio/popular/1.jpg" alt=""></a></li>
								<li><a href="#"><img src="/images/portfolio/popular/2.jpg" alt=""></a></li>
								<li><a href="#"><img src="/images/portfolio/popular/3.jpg" alt=""></a></li>
								<li><a href="#"><img src="/images/portfolio/popular/4.jpg" alt=""></a></li>
								<li><a href="#"><img src="/images/portfolio/popular/5.jpg" alt=""></a></li>
								<li><a href="#"><img src="/images/portfolio/popular/1.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#blog-->
