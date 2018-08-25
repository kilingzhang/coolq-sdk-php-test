<?php
/**
 * Created by PhpStorm.
 * User: kilingzhang
 * Date: 2018/8/25
 * Time: 0:31
 */

use Kilingzhang\Tests\CoolQ;

include 'vendor/autoload.php';

$CoolQ = new  CoolQ('127.0.0.1:5700', 'token', 'secret', false);
//$CoolQ = new  CoolQ('127.0.0.1:6700', 'token', 'secret', true);

//$CoolQ->setReturnFormat('array');
$CoolQ->event();