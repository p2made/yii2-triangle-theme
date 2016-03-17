<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$subLayout = 'primary';

if (Yii::$app->controller->action->id === 'login') { $subLayout = 'modal-user'; }
if (Yii::$app->controller->action->id === 'signup') { $subLayout = 'modal-user'; }
if (Yii::$app->controller->action->id === 'error') { $subLayout = 'modal-error'; }
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('html-header.php', []) ?>

<body>
<?php $this->beginBody() ?>

<?= $this->render($subLayout, ['content' => $content]) ?>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
