<?php
/**
 * blog-timeline.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
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
$tagline = 'Timeline';
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
	</section><!--/#page-breadcrumb-->

	<section id="blog" class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="timeline-blog overflow padding-top">
					<div class="timeline-date text-center">
						<a href="#" class="btn btn-common uppercase">November 2013</a>
					</div>
					<div class="timeline-divider overflow padding-bottom">
						<div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="single-blog timeline">
								<div class="single-blog-wrapper">
									<div class="post-thumb">
										<img src="/images/timeline/1.jpg" class="img-responsive" alt="">
										<div class="post-overlay">
										   <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									   </div>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<span class="post-date pull-left">February 11, 2014</span>
										<span class="comments-number pull-right"><a href="#">3 comments</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="single-blog timeline">
								<div class="single-blog-wrapper">
									<div class="post-thumb">
										<img src="/images/timeline/2.jpg" class="img-responsive" alt="">
										<div class="post-overlay">
										   <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									   </div>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blogdetails.html#">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<span class="post-date pull-left">February 11, 2014</span>
										<span class="comments-number pull-right"><a href="#">3 comments</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="single-blog timeline">
								<div class="single-blog-wrapper">
									<div class="post-thumb">
										<iframe src="https://player.vimeo.com/video/95995577"></iframe>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<span class="post-date pull-left">February 11, 2014</span>
										<span class="comments-number pull-right"><a href="#">3 comments</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="timeline-blog overflow">
					<div class="timeline-date text-center">
						<a href="" class="btn btn-common uppercase">Setember 2013</a>
					</div>
					<div class="timeline-divider overflow padding-bottom">
						<div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="single-blog timeline">
								<div class="single-blog-wrapper">
									<div class="post-thumb">
										<img src="/images/timeline/3.jpg" class="img-responsive" alt="">
										<div class="post-overlay">
										   <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									   </div>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<span class="post-date pull-left">February 11, 2014</span>
										<span class="comments-number pull-right"><a href="#">3 comments</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="single-blog timeline">
								<div class="single-blog-wrapper">
									<div class="post-thumb">
										<img src="/images/timeline/4.jpg" class="img-responsive" alt="">
										<div class="post-overlay">
										   <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
									   </div>
									</div>
								</div>
								<div class="post-content overflow">
									<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
									<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
									<a href="#" class="read-more">View More</a>
									<div class="post-bottom overflow">
										<span class="post-date pull-left">February 11, 2014</span>
										<span class="comments-number pull-right"><a href="#">3 comments</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="timeline-date text-center">
						<a href="#" class="btn btn-common">See More</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#blog-->
