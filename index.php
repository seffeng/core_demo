<?php
/**
 * @copyright 2014
 * @description: global.config
 * @file: g.c.php
 * @charset: UTF-8
 * @create: 2014-10-14
 * @version 1.0
**/

define('INDEX_ROOT',            preg_replace_callback('/[\/\\\\]+/', function($match){return '/';}, dirname(__FILE__)).'/');
include_once(INDEX_ROOT.'g.c.php');
/* session use
$mod_sess = get_mod('sess');
$mod_sess -> open();
$mod_sess -> set('u_id', '231213');
var_dump($mod_sess -> get('u_id'));
*/

// class use
get_init('demo') -> set_name('test');
var_dump(get_init('demo') -> get_name());

/* mysql use
$mod_mysqli = get_mod('mysqli');
var_dump($mod_mysqli -> get_version());
*/

// smarty use
$mod_smarty = get_mod('smarty');
$mod_smarty -> show('index.html');
?>