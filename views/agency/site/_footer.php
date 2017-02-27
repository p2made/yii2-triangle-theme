<?php
/**
 * _footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;
use p2m\helpers\FA;
?>
<footer>
	<div class="container">
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
	</div>
</footer>


