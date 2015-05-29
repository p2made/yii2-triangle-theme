<?php
/**
 * calendar.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use p2made\models\FullCalendarEvent;
use p2made\widgets\FullCalendarWidget;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Calendar';
$tagline = 'Why our Clients love to work with us.';
$this->params['breadcrumbs'][] = $this->title;

$events = array();

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'All Day Event';
	$newEvent->start = date('2015-05-01');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Long Event';
	$newEvent->start = date('2015-05-07');
	$newEvent->end = date('2015-05-10');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-05-09T16:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-05-16T16:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Conference';
	$newEvent->start = date('2015-05-11');
	$newEvent->end = date('2015-05-13');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-05-12T10:30:00');
	$newEvent->end = date('2015-05-12T12:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Lunch';
	$newEvent->start = date('2015-05-12T12:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-05-12T14:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Happy Hour';
	$newEvent->start = date('2015-05-12T17:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Dinner';
	$newEvent->start = date('2015-05-12T20:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Birthday Party';
	$newEvent->start = date('2015-05-13T07:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Click for Google';
	$newEvent->url = 'http://google.com/';
	$newEvent->start = date('2015-05-28');
	$events[] = $newEvent;
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

	<section id="calendar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

<?= FullCalendarWidget::widget(array(
	'events' => $events,
)) ?>

				</div>
			</div>
		</div>
	</section>
