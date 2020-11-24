<?php
return [
	'r_admin'=>[
		'rule'=>'/admin/:controller/:action',		
		'module'     => 'admin',
		'controller' => 1,
		'action'     => 2,
	],
	'r_admin_route'=>[
		'rule'=>'/admin',		
		'module'     => 'admin',
		'controller' => 'index',
		'action'     => 'index',
	],
	'r_admin_login'=>[
		'rule'=>'/admin/login/index',		
		'module'     => 'admin',
		'controller' => 'login',
		'action'     => 'index',
		
	],
];