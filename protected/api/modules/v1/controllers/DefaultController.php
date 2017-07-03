<?php

namespace api\modules\v1\controllers;

use yii;
use yii\rest\ActiveController;



class DefaultController extends ActiveController {

	

	  public $modelClass='api\modules\v1\models\User';

	
	  public function actions(){
	  	
	  	  $action=parent::actions();
	  	  
	  	    unset($action['index']);
	  	     
	  	  return $action;
	  	
	  	
	  }
	  

	  public function actionIndex(){

        
             return ['message'=>'default controller '];


	}
	  
   public function actionError(){
   	
   $exception = Yii::$app->errorHandler->exception;

    if ($exception !== null) {
        $statusCode = $exception->statusCode;
        $name = $exception->getName();
        $message = $exception->getMessage();
        
        return [
       'name' => $name,
       'message' => $message
       ];
       
       
    }
    
    
   	     
   	
   }
	

}