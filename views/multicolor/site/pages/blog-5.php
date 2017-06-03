<?php
/**
 * blog-5.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use p2m\helpers\FA;

$this->title = 'Blog Masonry';

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);

p2m\assets\AnimateAsset::register($this);
p2m\assets\Lightbox2Asset::register($this);
p2m\assets\WowAsset::register($this);
p2m\theme\Triangle\assets\AudioAsset::register($this);
p2m\assets\MasonryAsset::register($this);
?>
<div id="content-wrapper">

	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			 <div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title">Blog</h1>
							<p>Blog with left sidebar</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/#action-->

	<section id="blog" class="padding-top padding-bottom">
		<div class="container">
			<div class="row">
				<div class="masonery_area">
					<div class="col-md-3 col-sm-4">
						<div class="single-blog two-column">
							<div class="post-thumb">
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/1.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<audio src="audio/juicy.mp3" preload="auto"></audio>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
									<li><a href="#"><i class="fa fa-clock-o"></i>14 Feb</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/6.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/8.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/4.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<audio src="audio/juicy.mp3" preload="auto"></audio>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
									<li><a href="#"><i class="fa fa-clock-o"></i>14 Feb</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/2.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/10.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/7.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/5.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
								<a href="blogdetails.php"><img src="<?= $assetDir ?>/img/blog/masonary/9.jpg" class="img-responsive" alt=""></a>
								<div class="post-overlay">
									<span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
								</div>
							</div>
							<div class="post-content overflow">
								<ul class="nav nav-justified post-nav">
									<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
								</ul>
								<h2 class="post-title bold"><a href="blogdetails.php">Advanced business cards design</a></h2>
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
	<!--/#blog-->

	<?= $this->render('../_footer.php', ['assetDir' => $assetDir]) ?>

</div>
