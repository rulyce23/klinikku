<?php
/**
 * CLiveGridView class file based on CGridView class file by Qiang Xue
 * 
 * Changelog by Janez:
 * + interval public property
 * + add ajax events
 * + detect asset path
 */

Yii::import('zii.widgets.grid.CGridView');

/**
 * CLiveGridView continuously refreshes the visible data items in the body of the CGridView table
 *
 **/
class RefreshGridView extends CGridView
{
	/**
	 * grid update interval in milliseconds
	 * @var integer
	 */
	public $updatingTime = 6000;

	public function registerClientScript()
    {
		// attach ajax events
		$updateParameters = array();
		
		if (isset($this->ajaxUpdateError))
			$updateParameters['ajaxUpdateError'] = (strpos($this->ajaxUpdateError,'js:')!==0 ? 'js:' : ''). $this->ajaxUpdateError;
		
		if (isset($this->afterAjaxUpdate))
			$updateParameters['afterAjaxUpdate'] = (strpos($this->afterAjaxUpdate,'js:')!==0 ? 'js:' : ''). $this->afterAjaxUpdate;
		
		if (isset($this->beforeAjaxUpdate))
			$updateParameters['beforeAjaxUpdate'] = (strpos($this->beforeAjaxUpdate,'js:')!==0 ? 'js:' : '').$this->beforeAjaxUpdate;
		
		parent::registerClientScript();
		
		$id = $this->getId();
		$cs = Yii::app()->getClientScript();
		
		$cs->registerScriptFile( Yii::app()->getAssetManager()->publish( __DIR__ .'/assets' ) .'/js/jquery.yiilivegridview.js' );
		$cs->registerScript( __CLASS__.'# '.$id,"jQuery('#$id').yiiLiveGridView();" );
		$cs->registerScript( __CLASS__.'# '.$id.'-live',
		"setInterval(function(){;$.fn.yiiLiveGridView.update( '$id', ". CJavaScript::encode($updateParameters) .");}, {$this->updatingTime});"
		);
    }
}