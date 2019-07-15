# 支付宝pc扫码支付+移动端网页支付
    框架 laravel5.4
## pc扫码
##### Terminal 执行命令下载安装包
 ```   
 composer  require latrell/ailipay dev-master
 composer update
 ```
 #####  config/app.php文件中添加服务提供者
 ```
        Latrell\Alipay\AlipayServiceProvider::class
 ```
#####   执行命令 生成配置文件
```
php artisan vendor:publish   选择ali支付
```
如果执行成功会在config文件下生成如下三个文件
![配置文件目录](_v_images/_配置文件目录_1563176977_7928.png)

#####  在文件latrell-alipay-web.php 中设置安全检验码和通知页面
![配置文件填写](_v_images/_配置文件填写_1563177119_28383.png)
#####  在文件latrell-alipay.php 中设置合作者id
![合作者身份id](_v_images/_合作者身份id_1563177222_10424.png)

## pc扫码支付 效果图
![pc扫码支付](_v_images/_pc扫码支付_1563177383_566.png)

