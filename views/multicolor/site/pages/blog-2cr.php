<?php
/**
 * blog-2cr.php
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
							<h1 class="title"><?= Html::encode($this->title) ?></h1>
							<p><?= Html::encode($tagline) ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section><!--/#action-->

	<section id="blog" class="padding-top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-7">
					<div class="row">
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/1.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/4.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/5.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/6.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/3.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 blog-padding-right">
							<div class="single-blog two-column">
								<div class="post-thumb">
									<a href="blog-details.php"><img src="/images/timeline/2.jpg" class="img-responsive" alt=""></a>
									<div class="post-overlay">
										<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<ul class="nav nav-justified post-nav">
											<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
											<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
											<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-pagination">
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
