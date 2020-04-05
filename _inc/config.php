<?php
function verify_HTTPS() {
	return isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
}
fdfsdfdsfdsfds fdfds
function get_localpath() {
	$http_host = $_SERVER['HTTP_HOST'];
	$uri = $_SERVER['REQUEST_URI'];
	$uri_pathinfo = pathinfo($uri, PATHINFO_DIRNAME);
	$request_uri = $uri_pathinfo=='/' ? '' : $uri_pathinfo;
	return $http_host.$request_uri;
}

define('BASE_URL',verify_HTTPS().get_localpath());
define('APP_PATH', pathinfo(__DIR__, PATHINFO_DIRNAME)."".pathinfo(__DIR__, PATHINFO_BASENAME));


//contanty a nastavení
//define( 'BASE_URL', 'http://localhost/adalweb-kopie/' );
//define( 'APP_PATH', realpath(__DIR__. '/../') );




// configurations
$config = [




];

?>