<?php 

return [
	/**
	 * 安卓 秘钥
	 */
	'android' => [
		'app_key' => '',
		'app_master_secret' => '',
		'umeng_master_secret' => '',
	],

	/**
	 * ios 秘钥
	 */
	'ios' => [
		'app_key' => '',
		'app_master_secret' => '',
		'umeng_master_secret' => '',
	],

	'api' => [
		'http' => [
			'send' => 'http://msg.umeng.com/api/send?sign=mysign',
			'status' => 'http://msg.umeng.com/api/status?sign=mysign',
			'cancel' => 'http://msg.umeng.com/api/cancel?sign=mysign',
			'upload' => 'http://msg.umeng.com/upload?sign=mysign',
		],
		'https' => [
			'send' => 'https://msgapi.umeng.com/api/send?sign=mysign',
			'status' => 'https://msgapi.umeng.com/api/status?sign=mysign',
			'cancel' => 'https://msgapi.umeng.com/api/cancel?sign=mysign',
			'upload' => 'https://msgapi.umeng.com/upload?sign=mysign',
		],

		/*api 接口的模式， http或者https*/
		'mode' => 'http',
	],
];