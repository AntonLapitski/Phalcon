<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => 'localhost',
		'username' => 'valuex',
		'password' => 'admin_valuex',
		'name'     => 'valuex-latest.cx4fyom9eyke.ap-south-1.rds.amazonaws.com',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
	)
));
