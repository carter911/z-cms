<?php
namespace app\common\controller;

use think\App;
use think\Request;

class Base
{
    public function __construct(App $app = null)
    {
        parent::__construct($app);

    }
}
