<?php

return [
	'db'  => [
		"type"			=>	"mongo",
		"hostname"		=>	"172.172.172.100",// 服务器地址
		"database"		=>	"xqkeji_db",// 数据库名
		"is_replica_set"=>false,// 是否是复制集
		"username" 		=> "",// 用户名
		"password"      => "",// 密码
		"hostport"     	=>	"27017",// 端口
    ],
    
    'crypt'     =>[
		'key'=>'Hp8ROUMkGlccSRCaehlAm3jQ',//参数1，为设置密钥
	],
	'auth'=>[
		"admin"=>["loginUrl"=>"/admin/login/index","model"=>"\\XqKejiApp\\Admin\\Model\\User"],
		"student"=>["loginUrl"=>"/member/student/login","model"=>"\\XqKejiApp\\Member\\Model\\Student"],
		"teacher"=>["loginUrl"=>"/member/teacher/login","model"=>"\\XqKejiApp\\Member\\Model\\Teacher"],

	],
	'flash'=>[
		'\XqKeji\Flash\Session',
	],
	'assets' => [
		'construct'=>[
			[
				'js' => [
					'admin_js'=>[
						'plugins/jquery/jquery.js',
						'plugins/bootstrap/js/bootstrap.bundle.js',
						'plugins/overlayScrollbars/js/jquery.overlayScrollbars.js',
						'plugins/iCheck/icheck.js',
						'plugins/loadmask/jquery.loadmask.js',
						'plugins/confirm/jquery-confirm.js',
						'js/XqAdmin.min.js',
						'js/json-formdata.js',
					],
					'admin_login_js'=>[
						'plugins/jquery/jquery.js',
						'plugins/bootstrap/js/bootstrap.bundle.js',
						'js/XqAdmin.min.js',
					],
					'member_login_js'=>[
						'plugins/jquery/jquery.js',
						'plugins/confirm/jquery-confirm.js',
						'plugins/bootstrap/js/bootstrap.bundle.js',
						'plugins/iCheck/icheck.js',
						'plugins/loadmask/jquery.loadmask.js',
						'js/XqAdmin.min.js',
						'js/XqSms.js',
						
					],
				],
				'css'=>[
					
					'admin_css'=>[
						'css/XqAdmin.css',
						'plugins/fontawesome-free/css/all.css',
						'plugins/overlayScrollbars/css/OverlayScrollbars.css',
						'plugins/iCheck/square/green.css',
						'plugins/loadmask/jquery.loadmask.css',
						'plugins/confirm/jquery-confirm.css',
					],
					'admin_login_css'=>[
						'css/XqAdmin.css',
						'plugins/fontawesome-free/css/all.css',
					],
					'member_login_css'=>[
						
						'css/XqAdmin.css',
						'plugins/fontawesome-free/css/all.css',
						'plugins/confirm/jquery-confirm.css',
						'plugins/iCheck/square/green.css',
					],
				
				],
				'file'=>[
					'css'=>[
						'plugins/iCheck/square/green.png',
					],
					'images'=>[

					],
					
				],
				'directory'=>[
					'webfonts'=>[
						'plugins/fontawesome-free/webfonts'
					],
					'loadmask'=>[
						'plugins/loadmask'
					],
					
				],


			],
		],
    ],
];