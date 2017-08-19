<?php
header("Content-type: text/html; charset=utf-8");
require_once('config/config.php');
require_once('framework/baseDriver.php');
baseDriver::run($config);
?>