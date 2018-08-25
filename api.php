<?php
/**
 * Created by PhpStorm.
 * User: kilingzhang
 * Date: 2018/8/25
 * Time: 0:31
 */

use Kilingzhang\Tests\CoolQ;

include 'vendor/autoload.php';

$CoolQ = new  CoolQ('127.0.0.1:5700', 'kilingzhang', 'kilingzhang', false);
//$CoolQ = new  CoolQ('127.0.0.1:6700', 'kilingzhang', 'kilingzhang', true);

//$CoolQ->setReturnFormat('array');
$CoolQ->event();