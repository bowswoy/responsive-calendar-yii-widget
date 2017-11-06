<?php
// Mod Today
class PsCalendar extends CWidget {
    public $day = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
	public $event = array();
    public $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    public function run() {
    	$assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . '/assets');
    	$cs = Yii::app()->clientScript;
    	$cs->registerCssFile($assets . '/css/responsive-calendar.css');
    	$cs->coreScriptPosition = CClientScript::POS_END;
    	$cs->registerCoreScript('jquery', CClientScript::POS_END);
    	$cs->registerScriptFile($assets . '/js/responsive-calendar.js', CClientScript::POS_END);

        $js = '$("#'.$this->id.'").responsiveCalendar({translateMonths: '.CJSON::encode($this->month).',startFromSunday: true,allRows: false,monthChangeAnimation: false,events: '.CJSON::encode($this->event).'});';
        $cs->registerScript(__CLASS__.'#'.$this->id, $js, CClientScript::POS_READY);

        $this->render('pscalendar');
    }
}
