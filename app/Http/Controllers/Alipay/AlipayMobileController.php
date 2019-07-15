<?php

namespace App\Http\Controllers\Alipay;

use App\Http\Helper\aliwappay\wappay\buildermodel\AlipayTradeWapPayContentBuilder;
use App\Http\Helper\aliwappay\wappay\service\AlipayTradeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AlipayMobileController extends Controller
{
    /**mobile端手机支付
     * @return mixed}
     * User: lrving
     * DateTime: 2019/7/15 10:23
     */
    public function alipayMobile()
    {
       include  base_path('config').'\latrell-alipay-mobile.php';

        $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
        //商品描述
        $payRequestBuilder->setBody('测试手机端网页支付');
        //订单名称
        $payRequestBuilder->setSubject('小米电饭煲');
        //订单号
        $payRequestBuilder->setOutTradeNo('201907150005');
        $payRequestBuilder->setTotalAmount('0.04');
        //超时时间
//        $payRequestBuilder->setTimeExpress('');
        $payResponse = new AlipayTradeService($config);
        $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);
        return;
    }
    /**
     * 支付宝异步通知
     */
    public function alipayNotify()
    {
        dd($_REQUEST);
    }

}
