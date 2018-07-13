<?php

namespace app\common\logic;

use think\App;
use think\Request;

class Base
{
    const CODE_SUCCESS = 200;
    const CODE_ERROR = 500;
    const MSG_SUCCESS = '成功';
    const MSG_ERROR = '服务开小差了';


    /**
     * 成功的返回
     * @param string $data
     * @return array
     */
    public static function success($data = "")
    {
        return [
            'code' => self::CODE_SUCCESS,
            'message' => self::MSG_SUCCESS,
            'data' => $data];
    }

    /**
     * 失败的返回
     * @param string $error
     * @return array
     */
    public static function error($error = "")
    {
        return [
            'code' => self::CODE_ERROR,
            'message' => self::MSG_ERROR,
            'data' => null,
            'error' => $error
        ];
    }

    /**
     * 其他返回（前端错误）
     * @param string $code
     * @param string $message
     * @param string $data
     * @return array
     */
    public static function message($code = "200", $message = "", $data = "")
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];
    }


}
