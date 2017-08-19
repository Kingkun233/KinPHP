<?php

/**
 * Created by PhpStorm.
 * User: Kingkun
 * Date: 2017/8/12
 * Time: 22:17
 */
class indexController
{
    public function index()
    {
        $msg=M('index')->select('kinPHP');
        V('index')->display($msg);
    }
}