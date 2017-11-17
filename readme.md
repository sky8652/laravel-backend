## Laravel 通用后台

![预览](http://ww2.sinaimg.cn/large/62511611jw1e63vrqhg9uj20y20hy401.jpg)

## 安装

请先确认已经安装Composer. 编辑项目中的 `composer.json` 文件，然后加入 `ecdo/backend`.

```javascript
{
    "require": {
        "ecdo/backend": "dev-master"
    }
}
```

更新包 `composer update` 或者初始化包 `composer install`。

`composer update` 请清空 `app/storage/views`

需要添加以下服务到系统。

打开 `app/config/app.php` ， 然后添加新的值到 `providers` 数组：

```php
'Former\FormerServiceProvider',
'Cartalyst\Sentry\SentryServiceProvider',
'Ecdo\Backend\BackendServiceProvider',
```

同时添加类别名，

```php
'Former' => 'Former\Facades\Former',
'Sentry' => 'Cartalyst\Sentry\Facades\Laravel\Sentry',
```

注意：使用中文包请修改 `'locale' => 'zh-cn'`,

最后执行 `php artisan backend:install`

命令执行完成后会生成这些包配置文件 ： `Cartalyst/Sentry`， `Anahkiasen/Former` ， `Ecdo/Backend` ；
同时相对应的数据库创建完成。

创建一个新用户 `php artisan backend:user`

现在可以访问 [http://localhost/admin](http://localhost/admin) 来操作后台了。

## 使用帮助

1. 配置 `app/config/ecdo/backend/config.php` 设置系统参数：后台标题、菜单、模板别名等； 
2. 控制器使用 `use Ecdo\Backend\Controllers\BaseController;` 然后继承 BaseController；
3. 模板继承 @extends(Config::get('backend::views.layout')) ， 具体使用模块 可以查看包里面的layout文件。主意:模板文件命名为 `*.blade.php`
4. 路由设置 参照包里面路由规则写就行了；

## License
This is free software distributed under the terms of the MIT license
