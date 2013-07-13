<?php
$allow_app = array('frontend','my','admin','corporate');
$srv = explode('.', $_SERVER['HTTP_HOST']);
$app = $allow_app[0];
if(in_array('localhost', $srv))
{
	if(count($srv)>1)
		$app = $srv[0];
}else{
	if(in_array('deliveryclub', $srv)){
		if(count($srv)>2)
			$app = $srv[0];	
	}else{

	}
}

if(!in_array($app, $allow_app))
	$app = $allow_app[0];

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration($app, 'dev', true);
sfContext::createInstance($configuration)->dispatch();
