<?php
 $config = array(
    // APPID
    'app_id' => '2016092400586131',
    // 支付宝 支付成功后 主动通知商户服务器地址  注意 是post请求
    'notify_url' => 'http://video.cn/alipay/notifyMobile',
    //支付宝网关
    'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
    // 支付宝 支付成功后 回调页面 get
    'return_url' => 'http://video.cn/alipay/notifyMobile',
    // 公钥（注意是支付宝的公钥，不是商家应用公钥）
    'ali_public_key'   => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3sqaZsjbk6EAraHA1rbWvi6r09WaCP936GCVBuohKk0oYsTb3z3qbB60qITDhqJfonDhxJvZ8RS5YWmMMyOg6Dz/jIo2zd2ozEf57z5z1FTT1R5oOs5QTYuAwRjCzAS8IaAZO8iOdgUNqtPyMCVowWZvEuQqtlpTKNx7z1snxhRRYHqi+wWk1napTzwkYUDtWvtCxUsOdL4lfk6YwMpCo17hKmQaWFz8fHB3pN90aaMalIZ+fISqRH9VW5+HMHc387mR+v4hoxzs32iUwHoEM+BtcZ+VP54N+wggfWQNtoBCWPwZb5VeuNagHZHe3ILjgwxg1bxW820tIihw6W6joQIDAQAB',
    // 加密方式： **RSA2** 私钥 商家应用私钥
    'private_key' => 'MIIEowIBAAKCAQEA9LY5fXTY88E1XcacsXYWCGC3c6hhWUheGJwxyR7t+5HohN7DkPm/K34YbyuUoSq7PX8f03MDXTF1FhanALg9sUoZkaUbr2mgXHZ6lrKb87P08WKJ84U8yETzOfwJXsLIhq3boh6ACBVlsTMhZhsDxTycBvqK5XEe5KxG+KYJ+JYXdmW3NnF8xZzTvvHC5gUoXP+3FppogTHsmn81J390k8qWcMhuCBHF+tanoLNuzYWFm+OHIEcvidAU4FtauQo32sbEawUlOpQBcY6jL69DuNQCuVhmb6XeM7mCroDNZx7oU5JX2xZkdkyT4MHroMUlsq05yZpBIkqW4avUfGdw8QIDAQABAoIBAQCQyKvVDWg7OAoSFKuq13oLtOV1mZ8XSxjZKLjQDOuzF03iJ0bAJPO1kOJ2C+vhOz4TEX7MBVVtMxDaY8alR1zA412jbXOm4jDN5A99z+kzVDrNAocqPJ+MwjbCDNuiZE5uWLkE/1Sy8636HI1bMwqVDNonyt6ZB8fGdiN7hAmMOGElEnDdzWDhq1HCDPQ8/myBso3QYmOyLkdJN696rugpWxwvvTRq5JO63LndoVqkPwWy6DCH/382KUD8KNUffqCluYKHockVyQfrwo6BZP28s5dGdMtB6mWo3h2+0MiAV77hsCuDJjiQtRUuF9iltkHM5wSDyCVqkMlnj/6PqYDBAoGBAP+zeGePgs/xS9NBbwWTTnhsnph5kxF/7OHK9VxbKwUY2UuRLlXEx/ha2BgebStJwDUV6c1yYRoLxyiFkF/a/xY9V4XDc+1STtNJ2xsrnupGzIpwzVDKdlzPCOpdB6KQkeh/U/PGMn3j+g4+PksaoN4Rnx7V/Tar6uDuECy/ihRJAoGBAPT/dxlriZI8REARIzr2ka29WcLoy0kpumSjCIS+Q71TMF9yZirhYLjP3SYQG5/+iL1jKbGmWH3w9nZqvrfCsTcR3Pi0EdnLv3zjOg/7U21CuOkYP3BDI4Fl7rljmyWP5irEUaKQCTzqXxtFuF34X5w95DEacXOu9b05k08qPidpAoGALorjWq5TmDgKnjxl0fT7Lo5O2+AdNe08F+lSeeoaTYY1Xzzg2znDUGBwvwsiweNdugvwD7ZHGG+WY7jUC66YCdtGiBGIk2UM9gaWfD6XYXtblcNsi80eeEwzCj2+uwdnl5M9m7yyyhlqFZeczRzetS0t8nXu7jmiuih7BzoiDwkCgYBrR0XGesE1qHAWQarUkc0+b5BTeY4yTjRRBtafEZUl3LxsvvIfyqqIonRqy1jdWR5VF4vVP0q2cwHo3lr+qiDhRVAmEutSHBaQQAtXnixsxm+jmbuFk9CDQ7ghs4znCLi3d1lrvnhdFR9qGMBfXXe4OZ2nJrYQ+saeAg0P+CZZKQKBgE4xkLB/DYpgcpYI7Xli6yLYT1neu+5VXI0mwtNLWrUhO8kHmt0POzQhECmNfZ9x44f5mWYVl9Pp1IwHYN36IAsK/puPj5M53JY5IfKsTtJQMIUZDGgE8FGPWi+iWEvgGT1T4cZwEnODa/0R58sjlTy7uWyJiXs5UKFWb4A7wXfQ',
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