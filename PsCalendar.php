<?php

class PsCalendar extends CWidget {
	public $event;

    public function run() {
    	$assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . '/assets');
    	$cs = Yii::app()->clientScript;
    	$cs->registerCssFile($assets . '/css/responsive-calendar.css');
    	$cs->coreScriptPosition = CClientScript::POS_END;
    	$cs->registerCoreScript('jquery', CClientScript::POS_END);
    	$cs->registerScriptFile($assets . '/js/responsive-calendar.js', CClientScript::POS_END);

    	$this->event = array('2016-12-25'=>array('number'=>5,'badgeClass'=>'badge-warning','url'=>'http://www.google.co.th'));

        $js = '$("#'.$this->id.'").responsiveCalendar({translateMonths: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],startFromSunday: true,allRows: false,monthChangeAnimation: false,events: '.CJSON::encode($this->event).'});';
        $cs->registerScript(__CLASS__.'#'.$this->id, $js, CClientScript::POS_READY);

        $this->render('pscalendar');
    }
}