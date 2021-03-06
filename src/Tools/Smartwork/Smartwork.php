<?php
// +----------------------------------------------------------------------
// | Smartwork.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2018/3/26 下午11:29
// +----------------------------------------------------------------------
// | Author: Object,半醒的狐狸<2252390865@qq.com>
// +----------------------------------------------------------------------

namespace Chinaobject\Dingtalk\Tools\Smartwork;

use Chinaobject\Dingtalk\Tools\Smartwork\Traits\ApprovalTrait;
use Chinaobject\Dingtalk\Tools\DingConfig;

class Smartwork
{
    use ApprovalTrait;

    /**
     * @var config
     * It provide the configuration of dingtalk
     */
    public $config;

    public function __construct(DingConfig $config)
    {
        $this->config = $config;
    }
}