<?php

return [
    'class'=>'yii\db\Connection',
    'dsn'=>'mysql:host=localhost;dbname=edischol_jps',
    'username'=>'edischol_school',
    'password'=>'eonms@123',
    'charset'=> 'utf8',
	'enableSchemaCache' => true,	
	'on afterOpen' => function($event) {
		
		$event->sender->createCommand("SET time_zone='+05:30';")->execute();
		
	 },
];
