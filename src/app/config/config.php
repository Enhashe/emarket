<?php

$config = [
	'db' => [
		'dsn' => 'mysql:host=localhost;dbname=myproject',
		'username' => 'vagrant',
		'password' => 'vagrant'
	],
	'router' => [
		'/' => [
			'controller' => 'IndexController',
			'action' => 'indexAction'
		],
		'/about' => [
			'controller' => 'IndexController',
			'action' => 'aboutAction'
		],
		'/contacts' => [
			'controller' => 'IndexController',
			'action' => 'contactsAction'
		],
		'/delivery' => [
			'controller' => 'IndexController',
			'action' => 'deliveryAction'
		],
		'/payment' => [
			'controller' => 'IndexController',
			'action' => 'paymentAction'
		],
		'/catalogue/([0-9]{1,})' =>[
			'controller' => 'CategoryController',
			'action' => 'categoryAction',
			'parameters' => ['id']
		]
	],
	'path_to_views' => '/src/app/marketApp/view/'
];

return $config;
