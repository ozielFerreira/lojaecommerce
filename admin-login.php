<?php 

use \ecommerce\PageAdmin;
use \ecommerce\Model\User;

$app->get('/admin/login', function() {
    
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

});

$app->post('/admin/login', function() {
    
	User::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	exit;	
	
});

$app->get('/admin/logout', function() {
    
	User::logout();

	header("Location: /admin/login");
	exit;	
	
});

?>