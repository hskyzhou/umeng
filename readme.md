# umeng for laravel5

##install
`composer require hskyzhou/umeng`

## config
Add the package to your application service providers in `config/app.php` file.

```php
'providers' => [
    
    /*
     * Laravel Framework Service Providers...
     */
    Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
    Illuminate\Auth\AuthServiceProvider::class,
    ...
    
    /**
     * Third Party Service Providers...
     */
    HskyZhou\Umeng\ServiceProvider::class,

],
```

Add the package to your aliases in `config/app.php` file.

```php
'aliases' => [
    
    /**
     * Third Party Service Providers...
     */
    'AppNotification' => HskyZhou\Umeng\Facades\AppNotificationFacade::class

],
```

## use
```php
    //调用ios
    $ios = AppNotification::ios();
    $android = AppNotification::android();
    
    //必要参数
    $predefined = [];
    //额外字段
    $extraField = [];
    
    //单播
    $iosUnicast = AppNotification::ios()->unicast($predefined, extraField);
    $androidUnicast = AppNotification::android()->unicast($predefined, extraField);

    //列播
    $iosUnicast = AppNotification::ios()->listcast($predefined, extraField);
    $androidUnicast = AppNotification::android()->listcast($predefined, extraField);

    //组播
    $iosUnicast = AppNotification::ios()->groupcast($predefined, extraField);
    $androidUnicast = AppNotification::android()->groupcast($predefined, extraField);

    //文件播
    $iosUnicast = AppNotification::ios()->filecast($predefined, extraField);
    $androidUnicast = AppNotification::android()->filecast($predefined, extraField);

    //广播
    $iosUnicast = AppNotification::ios()->broadcast($predefined, extraField);
    $androidUnicast = AppNotification::android()->broadcast($predefined, extraField);

    //自定义播
    $iosUnicast = AppNotification::ios()->customizedcast($predefined, extraField);
    $androidUnicast = AppNotification::android()->customizedcast($predefined, extraField);
    
    //ios可以重新设置值
    $iosUnicast = AppNotification::ios()->unicast();
    //设置值
    $iosUnicast->setPredefinedKeyValue('name', 'hsky');
    //设置额外值
    $iosUnicast->setCustomizedField('name', 'hsky');
    
    //android重新设置值
    $androidUnicast = AppNotification::android()->unicast();
    //设置值
    $iosUnicast->setPredefinedKeyValue('name', 'hsky');
    //设置额外值
    $iosUnicast->setExtraField('name', 'hsky');
    
```

## example

1. 向ios用户单独发送一条消息

```php
    $predefined = [
        "device_tokens" =>  "d14f29e47c098fd9429fdc56d4da2d3cef69914db7da179419f17188e3a7e80d",
        "alert" => "IOS 单播测试", 
        "badge" => 0,
        "sound" => "chime",
        "production_mode" => "false",
    ];

    $extraField = [
        "url" => "http://www.baidu.com",
        "isapp" => "true",
    ];

    AppNotification::ios()->unicast($predefined, $extraField)->send();
```

