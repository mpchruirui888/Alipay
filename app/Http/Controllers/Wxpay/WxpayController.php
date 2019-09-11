<?php

namespace App\Http\Controllers\Wxpay;

use App\Helps\WxpayService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WxpayController extends Controller
{
    /** pc端二维码支付
     *  User: lrving
     *  DateTime: 2019/8/1 15:23
     */
    public function wxpay(){
        $mchid = '1387139502';          //微信支付商户号 PartnerID 通过微信支付商户资料审核后邮件发送
        $appid = 'wxdf8c4d78141e26bf';  //公众号APPID 通过微信支付商户资料审核后邮件发送
        $apiKey = 'jkslw98521147630qscvbnjipuyhfxwa';   //https://pay.weixin.qq.com 帐户设置-安全设置-API安全-API密钥-设置API密钥

        $wxPay = new WxpayService($mchid,$appid,$apiKey);
        $outTradeNo = uniqid('20190801002');     //你自己的商品订单号
        $payAmount = 5499.00;          //付款金额，单位:元
        $orderName = 'magicBook';    //订单标题
        $notifyUrl = 'https://www.jkslw.cn';     //付款成功后的回调地址(不要有问号)
        $payTime = time();      //付款时间
        $arr = $wxPay->createJsBizPackage($payAmount,$outTradeNo,$orderName,$notifyUrl,$payTime);
        //生成二维码
        $url = 'https://www.kuaizhan.com/common/encode-png?large=true&data='.$arr['code_url'];

        $data['url'] = $url;
        $data['orderName'] = $orderName;
        $data['payAmount'] = $payAmount;
        return view('wxpay.pay',compact('data'));
//        echo "<img src='{$url}' style='width:300px;'><br>";
    }
}
