<?php

/* @var $this yii\web\View */

$this->title = 'Doctor Dashboard';

$events = array();
//Testing
$Event = new \yii2fullcalendar\models\Event();
$Event->id = 1;
$Event->title = 'Testing1';
$Event->start = date('Y-m-d\TH:i:s\Z');
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 2;
$Event->dow = [1, 3, 5];
$Event->description = 'Text';
$Event->description = 'Text';
$Event->color = 'red';
$Event->start = date('Y-m-d\TH:i:s\Z', strtotime('tomorrow 6am'));
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('Y-m-d\TH:i:s\Z', strtotime('tomorrow 8am'));
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('2016.07.18');
$Event->end = date('2016.07.21');
$Event->color = 'blue';
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('2016.07.23');
$Event->end = date('2016.07.25');
$Event->color = 'black';
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('2016.07.1');
$Event->end = date('2016.07.5');
$Event->color = 'red';
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('2016.07.7');
$Event->end = date('2016.07.7');
$Event->color = 'green ';
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 3;
$Event->title = 'Testing2';
$Event->start = date('2016.07.7');
$Event->end = date('2016.07.7');
$Event->color = 'brown ';
$events[] = $Event;
?>


<div class="row">
    <div class="col-lg-10 col-lg-10 col-sm-10 col-xs-10" style="border-right: steelblue solid 1px">

        <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
            'events' => $events,
            'header' => [
                'center' => 'title',
                'left' => 'prev,next today',
                'right' => 'month,agendaWeek,agendaWeek'
            ]
        )); ?>
    </div>
    <div class="col-lg-2 col-lg-2 col-sm-2 col-xs-2">
        <div style="border-bottom: darkblue solid 1px">
            text

        </div>
        <div style="border-bottom: darkblue solid 1px">
            text
        </div>
        <div style="border-bottom: darkblue solid 1px">
            text
        </div>
        <div style="border-bottom: darkblue solid 1px">
            text
        </div>
    </div>

</div>


<script>

    $(document).ready(function () {
        $('.content-header').click(function () {
            alert(0)
        });

    })
</script>