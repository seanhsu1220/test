<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->post('/user/register', function () {
	
	try {
		if (isset ($_POST['username'])) {
			if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 20)) {
				throw new Exception('400-00-01');
			}
			if (!preg_match('/^[a-z|A-Z].*$/') {
				throw new Exception('400-00-01');
			}
				
		}
		else {
			throw new Exception('400-00-01');
		}
		
		if (isset ($_POST['password'])) {
			if (!preg_match('/^(?=^.{6,20}$)((?=.*[0-9])(?=.*[a-z|A-Z]))^.*$/', $_POST['password'])) {
				throw new Exception('400-00-01');
			}
				
		}
		else {
			throw new Exception('400-00-01');
		}
		
		if (!isset ($_POST['name'])) {
			throw new Exception('400-00-01');
		}
		
		if (isset ($_POST['email'])) {
			if (email) {
				throw new Exception('400-00-01');
			}
				
		}
		else {
			throw new Exception('400-00-01');
		}
		if (isset ($_POST['mobile'])) {
			if (strlen($_POST['mobile']) != 10 && !is_numeric($_POST['mobile'])) {
				throw new Exception('400-00-01');
			}	
		}
		else {
			throw new Exception('400-00-01');
		}
		
		//insert to db
		
		$returnMessageClass = new stdClass();
		$returnMessageClass->success = 1;
		$returnMessageClass->errorCode = null;
		$returnMessageClass->errorMessage = null;
	}
	catch(Exception $e) {
		if ($e->getMessage() == '400-00-01') {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->errorCode = 400;
			$returnMessageClass->errorMessage = $e->getMessage();
		}
		else {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->errorCode = 500;
			$returnMessageClass->errorMessage = 'undefined exception';
			
		}
	}

	return json_encode($returnMessageClass);
});

$app->post('/user/login', function () {
    try { 
		//query account or mobile
		if (true) {
			
		}
		else {
			throw new Exception('400-00-01');
		}
		$token = uniqid();
		$_SESION['loginToken'] = $token;
	
		$returnMessageClass = new stdClass();
		$returnMessageClass->success = 1;
		$returnMessageClass->token = $token;
		$returnMessageClass->errorCode = 400;
		$returnMessageClass->errorMessage = $e->getMessage();
	
	}
	catch(Exception $e) {
		if ($e->getMessage() == '400-00-01') {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->token = null;
			$returnMessageClass->errorCode = 400;
			$returnMessageClass->errorMessage = $e->getMessage();
		}
		else {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->token = null;
			$returnMessageClass->errorCode = 500;
			$returnMessageClass->errorMessage = 'undefined exception';
			
		}
	}

	return json_encode($returnMessageClass);
});

$app->post('/user/message', function () {
    try { 
		//insert into message
		if (true) {
			$lastInsertId = uniqid();
		}
		else {
			throw new Exception('400-00-01');
		}
	
		$returnMessageClass = new stdClass();
		$returnMessageClass->success = 1;
		$returnMessageClass->messageId = $lastInsertId;
		$returnMessageClass->errorCode = 400;
		$returnMessageClass->errorMessage = $e->getMessage();
	
	}
	catch(Exception $e) {
		if ($e->getMessage() == '400-00-01') {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->messageId = null;
			$returnMessageClass->errorCode = 400;
			$returnMessageClass->errorMessage = $e->getMessage();
		}
		else {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->messageId = null;
			$returnMessageClass->errorCode = 500;
			$returnMessageClass->errorMessage = 'undefined exception';
			
		}
	}
});

$app->post('//user/message/reply', function () {
    try {
		//seletct message
		if (true) {
			
		}
		else {
			throw new Exception('400-00-01');
		}
	
		//insert into reply message
		if (true) {
			$lastInsertId = uniqid();
		}
		else {
			throw new Exception('400-00-01');
		}
	
		$returnMessageClass = new stdClass();
		$returnMessageClass->success = 1;
		$returnMessageClass->replyId = $lastInsertId;
		$returnMessageClass->errorCode = 400;
		$returnMessageClass->errorMessage = $e->getMessage();
	
	}
	catch(Exception $e) {
		if ($e->getMessage() == '400-00-01') {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->replyId = null;
			$returnMessageClass->errorCode = 400;
			$returnMessageClass->errorMessage = $e->getMessage();
		}
		else {
			$returnMessageClass = new stdClass();
			$returnMessageClass->success = 0;
			$returnMessageClass->replyId = null;
			$returnMessageClass->errorCode = 500;
			$returnMessageClass->errorMessage = 'undefined exception';
			
		}
	}
});

$app->run();