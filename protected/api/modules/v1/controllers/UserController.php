<?php

namespace api\modules\v1\controllers;

use yii;
use yii\rest\ActiveController;



class UserController extends ActiveController {

	

	  public $modelClass='api\modules\v1\models\User';

	
	  public function actions(){
	  	
	  	  $action=parent::actions();
	  	  
	  	    unset($action['index']);
	  	     
	  	   return $action;
	  	
	  	
	  }
	  

	  public function actionIndex(){

             return ['message'=>'User controller '];

	 }

	 public function actionDashboard(){

         
          return ['message'=>'Dashboard Action'];

	 }


	  	
}