<?php
return [
    //配置事件时，直接”类名称:事件名"组成事件的下标，
	//再带一个事件回调数组，没带:的调用事件名，有带的，直接调用后面的事件名
	'XqKejiApp\Admin\Form\User:before_add'=>[//数组，这样可以带多个回调的处理方法
		'XqKejiApp\Admin\Event\User@before_add2',
		'XqKejiApp\Admin\Event\User',//默认为before_add方法
	],

	
];