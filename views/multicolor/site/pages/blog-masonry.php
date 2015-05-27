<?php
/**
 * blog-masonry.php
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
p2made\assets\MasonryAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);
p2made\theme\Triangle\assets\AudioAsset::register($this);

$this->title = 'Blog';
$tagline = 'Blog with left sidebar';
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
	</section>

	<section id="blog" class="padding-top padding-bottom">
		<div class="container">
			<div class="row">
				<div class="masonery_area">
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/1.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<audio src="audio/the_flame.mp3" preload="auto"></audio>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
									<li><a href="#"><i class="fa fa-clock-o"></i>14 Feb</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/6.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/8.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/4.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<audio src="audio/the_flame.mp3" preload="auto"></audio>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
									<li><a href="#"><i class="fa fa-clock-o"></i>14 Feb</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/2.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/10.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/7.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/5.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blog-details.php"><img src="/images/masonry/9.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blog-details.php">Advanced business cards design</a></h2>
								<h3 class="post-author"><a href="#">Posted by micron News</a></h3>
								<p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
								<a href="#" class="read-more">View More</a>
								<div class="post-bottom overflow">
									<ul class="nav nav-justified post-nav">
										<li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
