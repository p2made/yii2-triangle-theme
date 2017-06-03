<?php
/**
 * _footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

use p2m\helpers\FA;
?>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center bottom-separator">
				<img src="<?= $assetDir ?>/img/home/under.png" class="img-responsive inline" alt="">
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="testimonial bottom">
					<h2>Testimonial</h2>
					<div class="media">
						<div class="pull-left">
							<a href="#"><img src="<?= $assetDir ?>/img/home/profile1.png" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
							<h3><a href="#">- Jhon Kalis</a></h3>
						</div>
					 </div>
					<div class="media">
						<div class="pull-left">
							<a href="#"><img src="<?= $assetDir ?>/img/home/profile2.png" alt=""></a>
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
						E-mail: <a href="mailto:someone@example.com">someone@email.com</a><br>
						Phone: +61 7 4567 4321<br>
						Fax: +61 7 4567 9876<br>
					</address>

					<h2>Address</h2>
					<address>
						Currie St<br>
						<a href="https://en.wikipedia.org/wiki/Nambour,_Queensland" target="_blank">Nambour <?= FA::icon('external-link') ?></a>
						<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">Qld <?= FA::icon('external-link') ?></a> 4560<br>
						<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">Australia <?= FA::icon('external-link') ?></a><br>
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
				<div class="copyright-text">
					<p class="pull-left">
						<?= FA::i('copyright') ?> Your Company <?= date("Y") ?>. All Rights Reserved.<br>
						Crafted with <?= FA::i('heart') ?> by <a href="https://github.com/p2made" target=_blank">Pedro fp <?= FA::icon('external-link') ?></a>
					</p>
					<p class="pull-right">
						<?= Yii::powered() ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

