<?php
/**
 * _footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use p2m\helpers\FA;
?>

<hr>

<footer>
	<div class="row">
		<div class="col-lg-12">
			<p class="pull-left">
				Copyright <?= FA::i('copyright') ?> Your Website <?= date("Y") ?>
			</p>
			<p class="pull-right">
				<?= Yii::powered() ?>
			</p>
		</div>
	</div>
</footer>
