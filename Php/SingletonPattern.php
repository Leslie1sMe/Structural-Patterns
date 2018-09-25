<?php
/**
 * Created by PhpStorm.
 * User: leslie
 * Date: 2018/9/25
 * Time: 07:55
 */

class Singleton
{

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (isset(self::$instance)) {   //查看是否已经被实例化
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    { // 防止被克隆
        trigger_error('禁止克隆', E_USER_ERROR);
    }
}
