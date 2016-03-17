<?php
/**
 * footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center bottom-separator">
					<img src="/images/under.png" class="img-responsive inline" alt="">
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="testimonial bottom">
						<h2>Testimonial</h2>
						<div class="media">
							<div class="pull-left">
								<a href="#"><img src="/images/people/profile-1.png" alt=""></a>
							</div>
							<div class="media-body">
								<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
								<h3><a href="#">- Jhon Kalis</a></h3>
							</div>
						 </div>
						<div class="media">
							<div class="pull-left">
								<a href="#"><img src="/images/people/profile-2.png" alt=""></a>
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
