# Lumen-Modules

本项目修改自 [nWidart/laravel-modules](https://github.com/nWidart/laravel-modules).

注：非常感谢 [nWidart/laravel-modules](https://github.com/nWidart/laravel-modules)提供的laravel模块化开发引擎，它非常清晰的分离开项目中每个业务模块的文件夹结构。
但由于lumen5.5的底层结构与laravel有很大不同，虽然nwidart本人为我们提供了对lumen的支持，但很遗憾，也许对lumen5.5版本框架来说，还是有一些bug，导致无法使用。通过我的研究，为大家提供一套基于lumen5.5版本的模块化开发引擎。

## 安装

首先，您需要安装composer，安装完成后，执行以下命令

``` bash
composer require risentang/lumen-modules
```
或者在composer.json的request中添加：
``` json
  "require": {
    "risentang/lumen-modules": "^1.0"
  }
```
运行
``` bash
composer update
```
然后在[bootstrap/app.php]下添加
``` bash
$app->configure('modules');
$app->register(\Risentang\Modules\LumenModulesServiceProvider::class);
```
在项目根目录中创建[config]文件夹，再将[vender/risentang/lumen-modules/config/config.php]复制到[config]中，改名为[module.php]
### 自动加载

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:
由于默认module类没有加载进框架，你需要在autoload中`psr-4`添加如下配置

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```
并运行
``` bash
composer dump-autoload
```
最后通过artisan指令来生成开发模块
``` bash
php artisan module:make demo
```
## 官方文档

如果想了解更多请登陆 [https://nwidart.com/laravel-modules/](https://nwidart.com/laravel-modules/)查看文档内容.