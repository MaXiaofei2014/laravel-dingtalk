<?php
// +----------------------------------------------------------------------
// | DingtalkProvider.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2018/3/26 下午5:11
// +----------------------------------------------------------------------
// | Author: Object,半醒的狐狸<2252390865@qq.com>
// +----------------------------------------------------------------------

namespace Chinaobject\Dingtalk;

use Chinaobject\Dingtalk\Tools\DingConfig;
use Illuminate\Support\ServiceProvider;

class DingtalkProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('DingtalkService', function () {
            return new DingtalkService(new DingConfig());
        });
    }

    public function boot()
    {
        $this->publishes([realpath(__DIR__.'/config/dingtalk.php') => config_path('dingtalk.php')]);
    }
}