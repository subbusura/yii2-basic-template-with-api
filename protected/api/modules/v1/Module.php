<?php
namespace api\modules\v1;

use yii;

class Module extends \yii\base\Module{
	
	 public $controllerNamespace='api\modules\v1\controllers';
	 
	 public function init(){
	 	 
	   //Yii::$app->setBasePath('@app/modules/v1');
	 
	  	parent::init();
	  
	  	\Yii::$app->user->enableSession = false;
	 	 
	
	 }
	 
	 
	 
	
	
}