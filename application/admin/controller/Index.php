<?php
namespace app\admin\controller;

use think\App;
use think\Request;

class Index extends Base
{
    public function __construct(App $app = null)
    {
        parent::__construct($app);

    }

    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }

    public function add()
    {

    }

    public function edit(Request $request)
    {

    }

    public function store(Request $request)
    {

    }

    public function delete()
    {

    }
}
