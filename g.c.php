<?php
/**
 * @copyright 2014
 * @description: global.config
 * @file: g.c.php
 * @charset: UTF-8
 * @create: 2014-10-14
 * @version 1.0
**/

define('SYSTEM',            'DEMO');
define('SYSTEM_VERSION',    '1.0');
define('SYSTEM_ROOT',       preg_replace_callback('/[\/\\\\]+/', function($match){return '/';}, dirname(__FILE__)).'/');
define('SYSTEM_CORE',       dirname(SYSTEM_ROOT).'/core/');
define('SYSTEM_ASSET',      SYSTEM_ROOT.'asset/');
define('SYSTEM_DATA',       SYSTEM_ROOT.'data/');
define('SYSTEM_INC',        SYSTEM_ROOT.'inc/');
define('SYSTEM_TPL',        SYSTEM_ROOT.'tpl/');
header('Content-Type: text/html; charset=UTF-8');
include_once(SYSTEM_CORE.'g.c.php');
include_once(SYSTEM_INC.'c.p.php');
include_once(SYSTEM_INC.'c.c.php');
include_once(SYSTEM_INC.'f.g.php');
include_once(SYSTEM_INC.'c.d.php');
include_once(SYSTEM_INC.'f.a.php');
set_init(SYSTEM_INC);
?>