<?php
namespace app\common\model;

use think\Model;

class Admin extends Model
{
    protected $pk       ='id';
    protected $table    = 'sgb_admin';


    public function add($param)
    {

    }

    public function get_one($where)
    {
        $model = new Admin();

        print_r($where);die;
        return $model->where($where)->find();
    }
}