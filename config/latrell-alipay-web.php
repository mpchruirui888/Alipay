<?php
return [

	// 安全检验码，以数字和字母组成的32位字符。
//	'key' => '5kxuo3xi0is0zg6rbwg4hcktetyeffxg',  //自己的
	'key' => 'vzsabgp8t5lteayi8ofzxfe4vdr856ef',  //君凯的

	//签名方式
	'sign_type' => 'MD5',

	// 服务器异步通知页面路径。
	'notify_url' => 'http://video.cn/alipay/notify',

	// 页面跳转同步通知页面路径。
	'return_url' => 'http://video.cn/alipay/return'
];
