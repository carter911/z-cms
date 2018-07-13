<?php
namespace app\admin\controller;
use app\common\controller\Admin;
use think\Controller;
use think\Db;
use think\Request;

class Login extends Controller
{

    public function index()
    {
        $this->assign('login_url',url('admin/login/check_login'));
        return $this->fetch();
    }

    public function check_login(Request $request)
    {
        $where = $request->only(['username','password']);
        $logic = new \app\common\logic\Admin();
        $result = $logic->check_login($where);
        return $result;
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
