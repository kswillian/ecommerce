<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$slq = new Hcode\DB\Sql();

	$result = $slq->select("SELECT * FROM tb_users");
	
	echo json_encode($result);
});

$app->run();

 ?>