<?php
return [	
	//'id'=>'admin',
	'route'=>'/admin/user/admin',
	'params'=>[],
	'label'=>'system manage',
	//'icon'=>['class'=>'fa fa-fw fa-dashboard'],
	'children'=>[
		/*[
			'id'=>'admin-config-site',
			'route'=>'/admin/config/site',
			'params'=>[],
			'label'=>'system config',
			'icon'=>'fas fa-cog',
			'right-container'=>'',
		],*/
		[
			'id'=>'admin-updatestatic',
			'route'=>'/admin/config/updatestatic',
			'params'=>[],
			'label'=>'system static',
			'icon'=>'fas fa-sync-alt',
			'right-container'=>'',
		],
		[
			'id'=>'admin-user',
			'route'=>'/admin/user/admin',
			'params'=>[],
			'label'=>'admin user manage',
			'icon'=>'fa fa-user',
			'right-container'=>'',
		],
		[
			'id'=>'admin-role',
			'route'=>'/admin/role/admin',
			'params'=>[],
			'label'=>'admin role manage',
			'icon'=>'fas fa-object-group',
			'right-container'=>'',
		],
		[
			'id'=>'admin-password',
			'route'=>'/admin/user/change_password',
			'params'=>[],
			'label'=>'admin change password',
			'icon'=>'fa fa-key',
			'right-container'=>'',
		],
	],
	
];