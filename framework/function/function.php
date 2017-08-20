<?php
/**实例化控制器并调用其方法
 * @param $name
 * @param $method
 */
function C($name, $method)
{
    require_once(__DIR__ . '/../../app/controller/' . $name . 'Controller.php');
    eval('$obj=new ' . $name . 'Controller();$obj->' . $method . '();');
}

/**实例化模型并返回模型实例
 * @param $name
 * @return mixed
 */
function M($name)
{
    require_once(__DIR__ . '/../../app/model/' . $name . 'Model.php');
    eval('$obj=new ' . $name . 'Model();');
    return $obj;
}

/**实例化视图并返回视图实例
 * @param $name
 * @return mixed
 */
function V($name)
{
    require_once(__DIR__ . '/../../app/view/' . $name . 'View.php');
    eval('$obj=new ' . $name . 'View();');
    return $obj;
}

/**url参数过滤
 * @param $str
 */
function daddslashes($str)
{
    return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}

?>