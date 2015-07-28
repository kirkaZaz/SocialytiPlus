<?php
require 'Slim/Slim.php';
$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
	echo "Hello, $name";
});
$app->contentType( 'application/json' );

require_once dirname(__FILE__).'/../core/User.class.php';
$user= new User();



/**
* Function name
*￼
* What the function does
*
* @param (type) (name) about this param
* @return (type) (name)
*/
$app->post( '/user/', function () use ( $user, $app ){
	$details = $app->request->getBody();
	var_dump( $details ); 
	if ( !empty($_POST) ){
		echo $_POST;
	}
	echo "no";
});

$app->get( '/users/', function (){
	
});

$app->p( '/users/', function (){
	
});



$app->run();