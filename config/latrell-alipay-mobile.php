<?php
 $config = array(
    // APPID
    'app_id' => '',
    // 支付宝 支付成功后 主动通知商户服务器地址  注意 是post请求
    'notify_url' => 'http://video.cn/alipay/notifyMobile',
    //支付宝网关
    'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
    // 支付宝 支付成功后 回调页面 get
    'return_url' => 'http://video.cn/alipay/notifyMobile',
    // 公钥（注意是支付宝的公钥，不是商家应用公钥）
     'ali_public_key' => '',
    // 加密方式： **RSA** 私钥 商家应用私钥
    'private_key' => '',
    'log' => [ // optional
        'file' => '../storage/logs/alipay.log',
        'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
        'type' => 'single', // optional, 可选 daily.
        'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
    ],
    'http' => [
        'timeout' => 5.0,
        'connect_timeout' => 5.0,
        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
    ],
    'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
    'charset' =>'utf-8',
    'sign_type' => 'RSA'
 );
 return $config;