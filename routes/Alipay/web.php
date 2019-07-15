<?php
Route::group(['prefix' => 'alipay', 'namespace' => 'Alipay'], function () {
//   web端
    //支付请求
    Route::get('/alipay', 'AlipayController@Alipay');
    //异步通知
    Route::any('/notify', 'AlipayController@AlipayNotify');
    //同步通知
    Route::any('/return', 'AlipayController@AlipayReturn');



//   mobile端
    //支付请求
    Route::get('/alipayMobile', 'AlipayMobileController@alipayMobile');
    //异步通知
    Route::any('/notifyMobile', 'AlipayMobileController@alipayNotify');
});
