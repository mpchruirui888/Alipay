<?php

namespace App\Http\Controllers\Alipay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
class AlipayController extends Controller
{
    //web端扫码支付页面
    public function Alipay()
    {

        $alipay = app('alipay.web');
        $alipay->setOutTradeNo('201907150001');
        $alipay->setToTalFee('0.01');
        $alipay->setSubject('华为笔记本');
        $alipay->setBody('商品：支付宝测试');

        $alipay->setQrPayMode('5');
        //跳转到支付页面
        return redirect()->to($alipay->getPayLink());
    }
    /**
     * 异步通知
     */
    public function AlipayNotify()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => Request::instance()->getContent()
            ]);
            return 'fail';
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
//                 TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                break;
        }

        return 'success';
    }
    /**
     * 同步通知
     */
    public function AlipayReturn()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay return query data verification fail.', [
                'data' => Request::getQueryString()
            ]);
            return view('alipay.fail');
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify get data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                break;
        }

        return view('alipay.success');
    }

}
