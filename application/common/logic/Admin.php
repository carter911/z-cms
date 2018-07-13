<?php
namespace app\common\logic;

use think\App;
use think\Db;
use think\Exception;
use think\Request;

class Admin extends Base
{
    public function check_login($param)
    {
        try{
            $param['password'] = $this->passwordToMd5($param['password']);
            $result = Db::table('sgb_admin')->where($param)->find();
            if(!$result){
                return self::message(3001,'账号或者密码错误');
            }
            session('admin',$result);
            return self::success();
        } catch (Exception $exception){
            return self::error($exception->getMessage());
        }
    }

    public function passwordToMd5($password)
    {
        return md5($password);
    }

    public function index(Request $request)
    {

    }

    public function add(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }

    public function store(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
